<?php
session_start();
$prices = json_decode($_SESSION['prices'], true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/flwrs_icon_site.png" type="image/png">
    <link rel="stylesheet" href="http://localhost/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>FLWRS COFFEE</title>
</head>
<body>
    <header>
        <div class="head">
            <div class="leftside-head">
                <image src="http://localhost/image/black.png" width="100%" height="100%" id="elem1leftside"></image>
                <div class="texttop">
                    <a href="https://yandex.ru/maps/?um=constructor%3A3c23ae4c1545c0ea5d5b057061b37085ec4e09689e0b3171c22a874e8bb80c4f&source=constructorLink" id="elem2leftside1" style="text-decoration:none"><b>FLWRS COFFEE</b></a>
                    <label id="elem2leftside">Open at 8:00</label>
                </div>
<script>
    var now = new Date();
    var hours = now.getUTCHours() + 3;
    var elem = document.getElementById("elem2leftside");
    if ((hours >= 8 && hours <= 21) || hours === 22) {
        elem.innerHTML = "Closed 22:00";
    } else {
        elem.innerHTML = "Open at 8:00";
    }
</script>
            </div>
            <div class="rightside-head">
                <div class="border-oval">
                    <a href="http://localhost/demo/auth.php" id="elem2rightside" style="padding:0">sign in</a>
                    <image src="http://localhost/image/avatar.png" width="100%" class="logo1" height="100%" id="elem1rightside"></image>
                    <!--<button href="#" id="elem2rightside" style="padding:0">contact us</button>
                    <image src="http://localhost/image/mes.png" width="100%" class="logo1" height="100%" id="elem1rightside"></image>-->
                </div>
            </div>
        </div>
        <nav class="menu-container">
            <div class="menu">
                <a href="http://localhost/demo/site.php" class="active">
                    my flwrs</a>
                <a href="http://localhost/demo/ice.php">
                    ice drinks</a>
                <a href="http://localhost/demo/cream.php">
                    with cream</a>
                <a href="http://localhost/demo/milk.php">
                    with milk</a>
                <a href="http://localhost/demo/matcha.php">
                    matcha</a>
                <a href="http://localhost/demo/tea.php">
                    warming tea</a>
                <a href="http://localhost/demo/lemonade.php">
                    lemonade</a>
                <a href="http://localhost/demo/cocoa.php">
                    cocoa and chocolate</a>
                <a href="http://localhost/demo/milkshake.php">
                    milkshake</a>
                <a href="http://localhost/demo/smoothie.php">
                    smoothie</a>
                <a href="http://localhost/demo/extras.php">
                    extras</a>
            </div>
        </nav>
    </header>
    <main>
        <!--<div class="cont-block" id="modal">
            <div class="contacts">
            <div class="close-btn" style="color:white" onclick="closeModal()">X</div>
                <p class="h-cont">Contact us</p>
                <div class="list-mes">
                    <div class="tel">
                        <label style="color:white; font-size:15px;">Telegram</label>
                        <button style="border:none; background:none;"><img src="http://localhost/image/te.png" width="35px" height="35px"></button>
                    </div>
                    <div class="whats">
                        <label style="color:white; font-size:15px;">WhatsApp</label>
                        <button style="border:none; background:none;"><img src="http://localhost/image/wh.png" width="30px" height="30px"></button>
                    </div>
                    <div class="e-mail">
                        <label style="color:white; font-size:15px;">E-mail</label>
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
        </div>-->
        <div class="coffee-block" id="coffee-modal">
            <div class="coffee-details">
                <div class="close-det-block">
                    <button id="close-det"><img src="http://localhost/image/close.png" style="float:right"></button>
                </div>
                <p style="margin-top:110%; margin-left:4%; color:white; font-size: 20px;">Cappuccino</p>
                <div class="price-size">
                    <p class="price-det-coffee"><?php echo $prices[30130]; ?> RUB</p>
                    <div class="size-coffee">
                        <p class="size-button active" id="size-s">S<br><span style="font-size: 9px;">200 ml</span></p>
                        <p class="size-button" id="size-m">M<br><span style="font-size: 9px;">300 ml</span></p>
                        <p class="size-button" id="size-l">L<br><span style="font-size: 9px;">400 ml</span></p>
                    </div>
                </div>
                <div class="background-coffee">
                <p style="margin-left:4%; color:white; font-size:18px; font-weight:bold; margin-top:0; padding-top:3%">customize as you like it</p>
                <div class="menu-container">
                <div class="menu-items">
                    <div class="menu-item">
                        <img src="http://localhost/image/plus.png" alt="Photo 1">
                        <p style="font-size=12px">Item 1</p>
                    </div>
                    <div class="menu-item">
                        <img src="http://localhost/image/plus.png" alt="Photo 2">
                        <p style="font-size=12px">Item 2</p>
                    </div>
                    <div class="menu-item">
                        <img src="http://localhost/image/plus.png" alt="Photo 2">
                        <p style="font-size=12px">Item 3</p>
                    </div>
                    <div class="menu-item">
                        <img src="http://localhost/image/plus.png" alt="Photo 2">
                        <p style="font-size=12px">Item 4</p>
                    </div>
                    <div class="menu-item">
                        <img src="http://localhost/image/plus.png" alt="Photo 2">
                        <p style="font-size=12px">Item 5</p>
                    </div>
                    <div class="menu-item">
                        <img src="http://localhost/image/plus.png" alt="Photo 2">
                        <p style="font-size=12px">Item 6</p>
                    </div>
                    <div class="menu-item">
                        <img src="http://localhost/image/plus.png" alt="Photo 2">
                        <p style="font-size=12px">Item 7</p>
                    </div>
                </div>
                </div>
                <p style="margin-left:4%; color:white; font-size:18px; margin-top:3%;">Classic coffee with steamed milk microfoam</p>
                    <div class="background-about">
                    <div class="first-line">
                    <div class="nutr">
                        <p style="font-size: 18px; color:black; margin:0;">nutritions</p>
                        <p style="font-size: 25px; color:white;margin:0;">91kcal</p>
                    </div>
                    <div class="weight">
                        <p style="font-size: 18px; color:black;margin:0;">weight</p>
                        <p style="font-size: 20px; color:white;margin:0;">169g</p>
                    </div>
                    </div>
                    <div class="under-line">
                    <div class="protein">
                        <p style="font-size: 18px; color:black;margin:0;">protein</p>
                        <p style="font-size: 20px; color:white;margin:0;">4,6g</p>
                    </div>
                    <div class="fats">
                        <p style="font-size: 18px; color:black;margin:0;">fats</p>
                        <p style="font-size: 20px; color:white;margin:0;">7,1g</p>
                    </div>
                    <div class="carbs">
                        <p style="font-size: 18px; color:black;margin:0;">carbs</p>
                        <p style="font-size: 20px; color:white;margin:0;">4,9g</p>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="name-price">
            <p class="name">Cappuccino</p>
            <p class="price"><?php echo $prices[6018]; ?> RUB</p>
        </div>
        <p class="menu-drinks">taste it</p>
        <div class="allmenu">
        <div class="card-coffee">
            <div class="coffee">
                    <img src="http://localhost/image/latte.jpg" width="130px" height="160px" class="card-photo">
                    <p class="name-card">Cappuccino</p>
                    <div class="price-click">
                        <div class="left-side-but">
                        <button class="button-coffee" id="coffee-click">
                            <p class="price-card"><?php echo $prices[30130]; ?> RUB</p></div>
                            <img src="http://localhost/image/arrow.png" width="14px" height="14px">
                        </button>
                </div>
            </div>
            <div class="coffee">
                <img src="http://localhost/image/latte.jpg" width="130px" height="160px" class="card-photo">
                <p class="name-card">Latte</p>
                <div class="price-click">
                            <p class="price-card"><?php echo $prices[6015]; ?> RUB</p>
                            <img src="http://localhost/image/arrow.png" width="14px" height="14px">
                </div>
            </div>
            <div class="coffee">
                    <img src="http://localhost/image/latte.jpg" width="130px" height="160px" class="card-photo">
                    <p class="name-card">Flat White</p>
                    <div class="price-click">
                        <p class="price-card"><?php echo $prices[6008]; ?> RUB</p>
                        <img src="http://localhost/image/arrow.png" width="14px" height="14px">
                </div>
            </div>
            <div class="coffee">
                    <img src="http://localhost/image/latte.jpg" width="130px" height="160px" class="card-photo">
                    <p class="name-card">Raf</p>
                    <div class="price-click">
                        <p class="price-card"><?php echo $prices[6001]; ?> RUB</p>
                        <img src="http://localhost/image/arrow.png" width="14px" height="14px">
                </div>
            </div>
            <div class="coffee">
                    <img src="http://localhost/image/latte.jpg" width="130px" height="160px" class="card-photo">
                    <p class="name-card">Espresso</p>
                    <div class="price-click">
                        <p class="price-card"><?php echo $prices[10949]; ?> RUB</p>
                        <img src="http://localhost/image/arrow.png" width="14px" height="14px">
                </div>
            </div>
            <div class="coffee">
                    <img src="http://localhost/image/latte.jpg" width="130px" height="160px" class="card-photo">
                    <p class="name-card">Americano</p>
                    <div class="price-click">
                        <p class="price-card"><?php echo $prices[5559]; ?> RUB</p>
                        <img src="http://localhost/image/arrow.png" width="14px" height="14px">
                </div>
            </div>
            <div class="coffee">
                    <img src="http://localhost/image/latte.jpg" width="130px" height="160px" class="card-photo">
                    <p class="name-card">Moccachino</p>
                    <div class="price-click">
                        <p class="price-card"><?php echo $prices[27986]; ?> RUB</p>
                        <img src="http://localhost/image/arrow.png" width="14px" height="14px">
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="http://localhost/demo/main.js"></script>
</body>
</html>