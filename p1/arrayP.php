<?php
session_start();

$code1 = "apple01";
$code2 = "apple02";
$name = "apple";

$cartCre = array(
    $code1 => array(
        'name' => $name,
        'qty' => 1,
        'code' => $code1

    ),
    $code2 => array(
        'name' => $name,
        'qty' => 1,
        'code' => $code2

    )
);
$name = array(
    'farhan',
    'usman',
    'kamrna',
);

$user = array(
    'name'=> 'fahrna',
    'address'=> 'Khanewal',
);
echo'<pre>';
print_r($name);
echo '<hr>';
print_r($user);
echo '<hr>';
print_r($cartCre);
echo '<pre>';

foreach ($cartCre as $key => $value) {
    foreach ($value as $key2 => $value2) {
    echo 'key2: '. $key2 .' value2: '. $value2;
    }
    echo 'key:'. $key .'value'. $value;
}
foreach( $cartCre as $value3) {
    print_r ($value3);
}









// $_SESSION["carts"] = $cartCre;
// if (empty($_SESSION["carts"])) {
//     $_SESSION["carts"] = $cartCre;
//     echo "yes";
// }else
//     $arrayKey = array_keys($_SESSION["carts"]);
//     if(in_array($code1,$arrayKey)){
//         echo "true";
//     }
//     print_r($arrayKey);
// $_SESSION["cartss"] =
//     $_SERVER["carts"]["code"] = [
//     'name' => $name,
//     'qty' => 1,
//     'code' => $code
//     ];
// var_dump(isset($_SESSION["carts"]));
// print_r($_SESSION["carts"]);
// echo "<br>";
// print_r($_SESSION["cartss"]);
