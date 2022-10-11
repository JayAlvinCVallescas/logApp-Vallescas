<?php
require('vendor/autoload.php');
$faker = Faker\Factory::create();

$conn = mysqli_connect("sql6.freesqldatabase.com","sql6525444","MK9R5fp17V","sql6525444");

if(!$conn)
{   
    die(mysqli_connect_error());
}  

for ($i=0; $i <= 10; $i++){   
$sql = "INSERT INTO PERSON(firstname, lastname, address, logdt) values('".$faker->firstName."','".$faker->lastName."', '".$faker->address."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."')";     

mysqli_query($conn, $sql);}

?>