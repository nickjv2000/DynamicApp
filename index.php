<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<?php
    include('includes/connect.php');
    GetDatabaseConnection();   
?>
<header>
    <?php 
    GetChars(); 
    ?> 
    </h1>
</header>
<div id="container">
<?php 
$conn = GetDatabaseConnection();
$query = $conn->prepare("SELECT * FROM characters");
$query->execute();
$char = $query->fetchall();
foreach($char as $count){
?> 
    <a class="item" href="character.php?id=<?= $count["id"] ?>">
        <div class="left">
            <img class="avatar" src="resources/images/<?= $count["avatar"] ?>">
        </div>
    <div class="right">
        <h2><?php echo $count["name"]; ?></h2>
        <div class="stats">
            <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $count["health"]; ?></li>
                <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $count["attack"]; ?></li>
                <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $count["defense"]; ?></li>
           </ul>
        </div>
    </div>
    <?php } ?>       
</div>
    <?php
        include('includes/footer.php');
    ?>
</body>
</html>