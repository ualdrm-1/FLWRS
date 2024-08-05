<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://localhost/css/au.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<title>FLWRS COFFEE</title>
<script>
    function showErrorModal() {
        var modal = document.getElementById("errorModal");
        modal.style.display = "block";
    }
    function closeErrorModal() {
        var modal = document.getElementById("errorModal");
        modal.style.display = "none";
    }
</script>
</head>
<body>
<div class="personal">
<div class="top">
        <a href="http://localhost/demo/site.php"><image src="http://localhost/image/exit.png" width="100%" class="logo1" height="100%"></image></a>
        <button class="but"><image src="http://localhost/image/icon.png" width="100%" class="logo1" height="100%" id="elem2rightside"></image></button>
    </div>
    <img src="http://localhost/image/flwrs_icon.png" width="100%" height="100%" class="photo-logo" style="display:block; margin:0 auto;">
    <div class="info">
        <h2 style="text-align:center; font-family: 'Montserrat Black', sans-serif; font-size:30px">Привет,</h2>
        <p>Бонусы:</p>
        <p>Номер телефона:</p>
        <p>Сколько мы вместе:</p>
        <p>Ваш персональный ID:</p>
    </div>
</div>
<div class="container">
    <div class="top">
        <a href="http://localhost/demo/site.php"><image src="http://localhost/image/exit.png" width="100%" class="logo1" height="100%"></image></a>
        <button class="but"><image src="http://localhost/image/icon.png" width="100%" class="logo1" height="100%" id="elem3rightside"></image></button>
    </div>
    <div class="main">
        <img src="http://localhost/image/flwrs_icon.png" width="100%" height="100%" class="photo-logo">
        <h1 style="margin-top:3%;font-family: 'Montserrat Black', sans-serif;" >Welcome to FLWRS</h1>
        <form id="loginForm" method="post">
            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="89371922272" required>
            <button type="submit" name="submit" class="login">Login</button>
        </form>
    </div>
</div>
<div class="cont-block" id="modal">
    <div class="contacts">
        <div class="close-btn" style="color:white" onclick="closeModal()">X</div>
        <p class="h-cont">Contact us</p>
        <div class="list-mes">
            <div class="tel">
                <a href="https://t.me/ualdrm"><label style="color:white; font-size:15px;">Telegram</label></a>
                <button style="border:none; background:none;"><img src="http://localhost/image/te.png" width="35px" height="35px"></button>
            </div>
            <div class="whats">
                <a href="https://wa.me/79371922272?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%D0%9D%D0%B0%D1%88%D0%B5%D0%BB%20%D0%B1%D0%B0%D0%B3%3A"><label style="color:white; font-size:15px;">WhatsApp</label></a>
                <button style="border:none; background:none;"><img src="http://localhost/image/wh.png" width="30px" height="30px"></button>
            </div>
            <div class="e-mail">
                <a href="mailto:aldar.mandzhiev@inbox.ru"><label style="color:white; font-size:15px;">E-mail</label></a>
                <button style="border:none; background:none;"><img src="http://localhost/image/ma.png" width="35px" height="35px"></button>
            </div>
        </div>
        <div class="problem-cont">
            <p style="color:white; font-size:12px;">Some problem with site?</p>
            <div class="button-copy">
                <button class="copy-and-send"> <img src="http://localhost/image/copy.png" width="20px" height="20px"></button>
                <label style="color:white;">Copy and send</label>    
            </div>
        </div>
    </div>
</div>
<div class="error-modal" style="display:hidden;" id="errorModal">
    <div class="error-content">
        <p id="errorMessage">Authentication failed. Please try again.</p>
        <button class="try-again-btn" onclick="closeErrorModal()">Try One More</button>
    </div>
</div>
<script src="http://localhost/demo/main.js"></script>
<script>
    document.getElementById("elem2rightside").addEventListener("click", function(){
        document.getElementById("modal").classList.add("open")
    });
    function closeModal() {
        document.getElementById("modal").classList.remove("open");
    }
    document.getElementById("elem3rightside").addEventListener("click", function(){
        document.getElementById("modal").classList.add("open")
    });
    function closeModal() {
        document.getElementById("modal").classList.remove("open");
    }
</script>
<?php
$user = "root";
$pass = "";
$dbName = "custom";
$conn = new mysqli('localhost', $user, $pass, $dbName);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$firstName = $_POST['firstName'];/*FName='$firstName' AND*/ 
    $phoneNumber = $conn->real_escape_string($_POST['phoneNumber']);
    $sql = "SELECT * FROM persons WHERE Num='$phoneNumber'";
    $result = $conn->query($sql);   
    if ($result === false) {
        echo "Ошибка выполнения запроса: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $FName = $row['FName'];
        $Bonus = $row['Bonus'];
        $Num = $row['Num'];
        $createdTime = $row['createdTime'];
        $Id = $row['Id'];

        echo "<style>.container { display: none; }</style>";
        echo "<style>.personal { display: block; }</style>";
        echo "<script>document.querySelector('.personal h2').innerText = 'Привет, $FName';</script>";
        echo "<script>document.querySelectorAll('.personal p')[0].innerText = 'Бонусы: $Bonus';</script>";
        echo "<script>document.querySelectorAll('.personal p')[1].innerText = 'Номер: $Num';</script>";
        echo "<script>document.querySelectorAll('.personal p')[2].innerText = 'Наш первый день: $createdTime';</script>";
        echo "<script>document.querySelectorAll('.personal p')[3].innerText = 'Ваш персональный ID: $Id';</script>";
    } else {
        echo "<script>showErrorModal();</script>";
    }
}
$conn->close();
?>
</body>
</html>