<?php 
$number = preg_split('/([,])/',"23, 44, 56, 78,98, 43,100");
print_r($number,);

$data = "1970-01-01 00:00:00";
$pattern = "/([-\s:])/";
$output  = preg_split($pattern,$data,-1,PREG_SPLIT_DELIM_CAPTURE);
print_r($output);


$string = "PHP & Laravel Course From Ostad";
$needle = "PHP";
$position = strpos($string,$needle); 

if($position !== false){ //particularly important for strpos
    echo "Found";
}else{
    echo "Not Found";
}

$string = "PHP & Laravel Course From Ostad";
$needle = ["PHP", "laravel"];
$replaceWith = ["Mahmudul","Hassan"];

$replacedStr = str_ireplace($needle,$replaceWith,$string);

print_r($replacedStr);

$newStr = [
    "PHP" => "Muntakim",
    "rom"=> "Hassan"
];

$result = strtr($string,$newStr);
print_r($result);

for($i= 10;$i>0;$i--){
    echo str_repeat("*",$i);
    echo "\n";
}

class User{
    public $message;
    public $welcomeMsg = "Welcome Guest";

}

$obj1 = new User();
$obj2 = new User();

echo $obj1->welcomeMsg;
$obj2->welcomeMsg = "Bye Guest";
echo $obj2->welcomeMsg;


$hereDoc= <<<END
asdas
a
sda
sd
as
da
s
END;

echo $hereDoc;

$string = "Hello world!";

echo substr($string,1,4);
echo "\n";
echo substr($string,-7,4);

echo strrev($string);