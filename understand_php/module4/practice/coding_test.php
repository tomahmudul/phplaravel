<?php
//remove duplicate char
$str = "1AAABBCCCDDDDDDD";
echo $result = count_chars( $str, 3);

$str = 'foo,bar,foo,baz';
$uniqueStr = implode(',', array_keys(array_flip(explode(',', $str))));
echo $uniqueStr;

//check anagram
function is_anagram($string_1, $string_2)
{
    if (count_chars($string_1, 1) == count_chars($string_2, 1))
        return 'yes';
    else
        return 'no';	
}

// Driver code
print_r(is_anagram('stop', 'post')."");
print_r(is_anagram('card', 'cart')."");