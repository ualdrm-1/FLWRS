<?php
session_start();

$url = 'https://flwrscafeelista.quickresto.ru/platform/online/api/read?moduleName=warehouse.nomenclature.dish&className=ru.edgex.quickresto.modules.warehouse.nomenclature.dish.Dish';
$objectIds = [30130, 5559, 30153, 5557, 30154, 6015, 6018, 27986, 6001, 6008, 10949, 6000, 6005, 6016, 27987, 30141, 30176, 30177, 30175, 29848, 29557, 30023, 30184, 30286, 30185, 29849, 30186, 30187, 29558, 30209, 30210, 30211, 30212, 30213, 30220, 30222, 30224, 30226, 30228, 29350, 29351, 29692, 29693, 30192, 30195, 29355, 30256, 29697, 29698, 30194, 30233, 30235, 30236, 30234, 30237, 30239, 30240, 30241, 30242, 30243, 6022, 30259, 30261, 28756, 30257, 30264, 30266, 30268, 30270, 30272, 30288, 30289, 30290, 30291, 28522, 14327, 14328, 14324, 22514, 14325, 14326, 22516, 22513, 29933, 29934, 29935, 29936, 29937, 30114, 29938, 29939, 29940, 29941, 29942, 30115, 29910, 29927, 29928, 29929, 29930, 30063, 30064, 29511, 29513, 29515, 30250, 29852, 28589, 30162, 30274, 30164, 29403, 28553, 29823, 30197, 30201, 30200, 30199, 30198, 28759, 28760, 28761, 29095]; 
$username = 'flwrscafeelista';
$password = 'iPpnTKkU';
$prices = [];

foreach ($objectIds as $objectId) {
    $ch = curl_init($url . '&objectId=' . $objectId);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Accept: application/json',
        'Connection: keep-alive',
        'Content-Type: application/json',
        'Authorization: Basic ' . base64_encode($username . ':' . $password)
    ));
    $response = curl_exec($ch);

    if($response === false) {
        echo 'Error: ' . curl_error($ch);
    } else {
        $data = json_decode($response, true);
        if (isset($data)) {
            $prices[$objectId] = $data['dishSales'][0]['price'];
        } else {
            $prices[$objectId] = 'No data found';
        }
    }

    curl_close($ch);
}

$pricesJson = json_encode($prices);
$_SESSION['prices'] = $pricesJson;
?>