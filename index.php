<html>
<head>
    <title>OOP</title>
    <?php
    spl_autoload_register(function($class_name){
        include $class_name . '.php';
    });
    ?>

</head>
<body>

</body>

<?php
class People{
    public $person1 = 'Jacob';
    public $person2 = 'Gavin';
    public $person3 = 'Jose';
    public $person4 = 'Dave';

//    function iterateObject(){
//        foreach($this as $key => $value){
//            print "$key => $value \n";
//        }
//    }
}


$people = new People;

foreach($people as $key => $value){
    print "$key => $value \n";
    echo '<br>';
}

//Creates New User Instance
$user1 = new moderator($people->person1);
$user2 = new user('Gavin');
$user3 = new user('Jose');
$user4 = new user('Dave');

$user1descript = new moderatorDescription;

//Sets User Instance Variables
$user1->setInfo($person1,'01','0001');
$user2->setInfo('Gavin','02','0002');
$user3->setInfo('Jose','03','0003');
$user4->setInfo('Brendan','04','0004');

echo $user1->getInfo();
$user1descript->name = $user1->name;
$user1descript->descriptor = 'M';
$user1descript->elevationLevel();

echo $user1descript->describe();
echo '<br>';
echo $user4->getInfo();

?>

