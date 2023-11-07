<?php

function substrCounting($substring, $str){
    return substr_count($str, $substring);
}

$string = "abababab ab";
$data = explode(" ", $string);

//fscanf(STDIN, "%s %s", $str, $substring);
echo substrCounting($data[1], $data[0]);



// Php program for
// Check whether one string is rotation of another
function isStringRotation($str1, $str2)
{
    $n = strlen($str1);
    $result = false;
    if ($n == strlen($str2))
    {
        $s = "";
        $e = "";
        for ($i = 0; $i < $n - 1 && $result == false; ++$i)
        {
            // First part 0 to i
            $s = substr($str1, 0, $i + 1) ;
            // Second Part i+1 to n
            $e = substr($str1, $i + 1, $n);
            if ((strcmp(($e.$s), $str2) == 0))
            {
                // When (e + s) is equal to str2
                $result = true;
            }
        }
    }
    
    if ($result == false)
    {
        echo(" False");
    }
    else
    {
        echo(" True");
    }
}


// $str1 = "waterbottle";
// $str2 = "erbottlewat";	
fscanf(STDIN, "%s %s", $str1, $str2);

isStringRotation($str1, $str2);