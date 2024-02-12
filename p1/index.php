<?php

$data = array(
    "farhan"=> "ali",
    "Atif"=> "Bashir",
    "Zesshan"=> "Riaz",
    "age" => array(
        "farhan"=> "25",
        "usman"=> "20",
        "LastName"=> array(
            "farhan"=> "ali",
            "kamran"=> "Riaz",
            "fatherName"=>[
                "Muhammad"=> "Razzaq",
                "Riaz"=> "Ahmad",
            ]
        )
    )
);
echo "<pre>";
print_r($data);
echo "</pre>";
$jas = json_encode($data);
echo "<pre>";
echo "$jas";
echo "</pre>";

$jasd = json_decode($jas);
echo "<pre>";
print_r($jasd);
echo "</pre>";