<?php
//remove duplicate char
$str = "apples";
// fscanf(STDIN, "%s", $str);     
$chars = str_split( $str );
echo $result = implode("",array_unique($chars , SORT_STRING)); 

//check anagram

# Write your PHP code from here
// $str1 = fgets(STDIN);
// $str2 = fgets(STDIN);

$str1 = "abcd";  
$str2 = "aabc";  
    
// $str1 = fgets(STDIN);
// $str2 = fgets(STDIN);


if(strlen($str1) != strlen($str2)){  
echo "NO";  
}else{     
$str1 = strtolower($str1);  
$str2 = strtolower($str2);    

$str1array = str_split($str1);  
$str2array = str_split($str2);  

sort($str1array);  
sort($str2array);      

$str1 = implode("",$str1array);  
$str2 = implode("",$str2array);

if(strcmp($str1,$str2) == 0){  
    echo "YES";  
}  
else{  
    echo "NO";  
}  
}  


function findDiscount($originalPrice, $discountPercent){
    return number_format($originalPrice - ($originalPrice * $discountPercent)/100, 2);
}
//fscanf(STDIN, "%d %d", $originalPrice, $discountPercent);
$originalPrice = 50;
$discountPercent = 10;
echo findDiscount($originalPrice, $discountPercent);

echo PHP_EOL;

function buildToyCars($wheels, $bodies, $figures){
    static $toyCar = 0;
    if($wheels >= 4 && $bodies >=1 && $figures >= 2){
        $toyCar ++;
        $wheels -= 4;
        $bodies -= 1;
        $figures -=2; 

        buildToyCars($wheels, $bodies, $figures) ;
    }else{
        return 0;
    }

    return $toyCar;
}

$wheels = 43;
$bodies = 1;
$figures =87;
//fscanf(STDIN, "%d %d %d", $wheels, $bodies, $figures);  
echo buildToyCars($wheels, $bodies, $figures);   