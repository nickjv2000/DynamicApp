<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<?php
    include('includes/connect.php');
    GetDatabaseConnection();
    $id = $_GET["id"];
    $getid = GetGameId($id);
?>
<header><h1><?php echo $getid["name"]; ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $getid['avatar'] ?>">
            <div class="stats" style="background-color: <?php echo $getid['color'] ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $getid["health"]?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $getid["attack"]?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $getid["defense"]?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: 
                    <?php
                        if($getid['weapon'] == NULL){ 
                            echo "None";
                        } else {
                            echo $getid['weapon'];
                        }
                    ?>
                    </li>
                    <li><b>Armor</b>: 
                    <?php
                        if($getid['armor'] == 'none'){ 
                            echo "None";
                        } else { 
                            echo $getid['armor'];
                        }
                    ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo $getid['bio']; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Nick Verwoerd 2020</footer>
</body>
</html>