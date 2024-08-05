<?php
session_start();
$url = 'API_URL';
$username = 'API_LOGIN';
$password = 'API_PASS';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'Connection: keep-alive',
    'Content-Type: application/json',
    'Authorization: Basic ' . base64_encode($username . ':' . $password)
));
$response = curl_exec($ch);
curl_close($ch);
$responseData = json_decode($response, true, 512, JSON_UNESCAPED_UNICODE);
$filteredData = [];

foreach ($responseData as $customer) {
    $ledgerBalance = null;
    if (isset($customer['accounts'][0]['accountBalance'])) {
        $ledgerBalance = $customer['accounts'][0]['accountBalance']['available'];
    }
    
    $customerGroupName = isset($customer['customerGroup']['name']) ? $customer['customerGroup']['name'] : null;
    
    $filteredCustomer = [
        'firstName' => $customer['firstName'],
        'phone' => $customer['contactMethods'][0]['value'] ?? null,
        'createdTime' => $customer['createTime'],
        'id' => $customer['id'],
        'customerGroupName' => $customerGroupName,
        'ledgerBalance' => $ledgerBalance
    ];
    
    $filteredData[] = $filteredCustomer;
}

$user = "root";
$pass = "";
$dbName = "custom";
$db = new mysqli('localhost', $user, $pass, $dbName) or die("Ошибка подключения к базе данных");

foreach ($filteredData as $person) {
    $firstName = $db->real_escape_string($person['firstName']);
    $phone = $db->real_escape_string($person['phone']);
    $createdTime = $db->real_escape_string($person['createdTime']);
    $id = $db->real_escape_string($person['id']);
    $customerGroupName = $db->real_escape_string($person['customerGroupName']);
    $ledgerBalance = $db->real_escape_string($person['ledgerBalance']);
    
    $sql = "INSERT INTO persons (FName, Num, createdTime, Id, GroupB, Bonus) 
            VALUES ('$firstName', '$phone', '$createdTime', '$id', '$customerGroupName', '$ledgerBalance')";
    
    if ($db->query($sql) === TRUE) {
        echo "Данные успешно добавлены в базу данных";
    } else {
        echo "Ошибка при добавлении данных: " . $db->error;
    }
}

$db->close();
?>
