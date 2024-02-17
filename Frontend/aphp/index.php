<?php

// heredoc string in php
$hi = 'Hi';
$name = 'Farhan';

$text = "$hi welcom, \"to join\" $name";
echo $text;
die();
// Arrow Function in php fn or inline Function
$name = fn($a, $b) => (
    $a +$b
);

echo $name(2,3);
die();

 //  parse_url Function
$listUrl = list('scheme' => $scheme, 'host' => $host, 'path' => $path, 'query' => $query) = parse_url('https://reintech.io/blog/understanding-implementing-php-parse-url-function?farhan=1');
//  print_r($listUrl);
 echo $scheme;
 echo $query;
 die();

// spread opreator.....
$arr = [2, "nauman", 4];
$arr1 = [2, 3, "farhan"];
$arr2 = [
    'name' =>'Farhan',
    'age' => 29,
    'items' =>[
        'mobile' => 'Infinix x new',
        'charger' => 18
        ]
];
$arr3 = [
    "name" => 1,
    "age" => 12
];
$c = "atif";
$arr4 = array('name', 'age');

// Array Method list, extract and compact.....
// compact
$compactArr = compact("arr4", "c");
print_r($compactArr);
print_r($compactArr["arr4"][0]);
die();
// extract
extract($arr2);
echo $name;
echo $items["mobile"];
echo $items["charger"];
// echo $age;
die();
// list
$arrList = list($id, $name, $age) = $arr;
echo $id;
echo $name;
echo $age;
print_r($arrList);
die();



$sarr = [4, 5, ...$arr, 30, ...$arr1];
print_r($sarr);
// die();

class Request{
    private $a, $b, $c;
    
    function sum() : int{
            
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function set($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    function get(){
        return $this->c;
    }
    
}


// type-Hinting in php: hint the datatype of any variable

function add(string $a,Request $b){
    $b->set(1,2);
    $b->sum();
    $d = $b->get();
    return $a . $d;
}
echo add("farhan", new Request());
?>






