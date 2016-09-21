<html>
<head>
    <title>OOP</title>
    <?php include ("classLibrary.php"); ?>
</head>
<body>

</body>

<?php
//Creates New User Instance
$user1 = new user('Jacob');
$user2 = new user('Gavin');
$user3 = new user('Jose');
$user4 = new moderator('Dave');

//Sets User Instance Variables
$user1->setInfo('Jacob','Jacob01','0001');
$user2->setInfo('Gavin','Gavin02','0002');
$user3->setInfo('Jose','Jose03','0003');
$user4->setInfo('Brendan','Brendan04','0004');

echo $user1->getInfo();
echo '<br>';
echo $user4->getInfo();

?>

