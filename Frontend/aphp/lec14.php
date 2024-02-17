<?php
$filename = 'file/myfile.php';
// $fileexists = file_exists($filename);
if(!file_exists($filename)){
    echo "File name is not Exists";
}else{
    $f = fopen($filename, 'a');
    if($f){
        fwrite($f, "\nFarhan form Khanewal");
        fwrite($f, "\nusman form Khanewal");
        fclose($f);
        echo "file". $filename . "Open";
    }
}
?>

