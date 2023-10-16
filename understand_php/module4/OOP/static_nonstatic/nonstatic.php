<?php
/* 
নন স্ট্যাটিক কনটেক্সট
আমরা আগের সেকশনে প্রোপার্টি দেখার সময় দেখেছি $this এর ব্যবহার । আমরা জেনেছি কোন ক্লাসের ভিতর যদি এই ভ্যারিয়েবলটি ব্যবহার করা হয় তাহলে ঐ ক্লাসের যতগুলো ইনস্ট্যান্স তৈরি করবো আমরা প্রতে্যকটির ভিতরে $this কিওয়ার্ড ঐ অবজেক্ট এ পয়েন্ট করবে ।
আগের উদাহরনটিই আরেকবার দেখে নেই:
<?php

class Person
{
    public $age;

    public function getAge()
    {
        return $this->age;
    }
}


$person = new Person();
$person->age = 32;

$anotherPerson = new Person();
$anotherPerson->age = 45;

var_dump($person->getAge());
var_dump($anotherPerson->getAge());
এখানে দেখুন, আমরা যখন $person->getAge() কল করছি তখন আমরা $person এর age প্রোপার্টি পাচ্ছি, আবার যখন $anotherPerson->getAge() কল করছি তখন পাচ্ছি $anotherPerson এর বয়স । অর্থাৎ, একই $this ভ্যারিয়েবলটি $person অবজেক্টের ভিতর $person কে এবং $anotherPerson ভিতরে $anotherPerson কে নির্দেশ করছে ।
এর ফলে, একটি ক্লাস থেকে তৈরি করা সব ইনস্ট্যান্সই তার নিজের প্রোপার্টি বা মেথড এ্যাক্সেস করতে পারে এই $this ভ্যারিয়েবল এর মাধ্যমে । তাই আলাদা আলাদা ইনস্ট্যান্সে একই প্রোপার্টির ভিন্ন ভিন্ন ভ্যালু থাকলেও আমরা এই ভ্যারিয়েবলটির মাধ্যমে ঐ ইনস্ট্যান্সের ভ্যালুটি জেনে নিতে পারছি খুব সহজেই!
এই যে একই ক্লাস থেকে তৈরি করা অবজেক্ট ইনস্ট্যান্স গুলোর ভ্যালু আলাদা আলাদা হতে পারে এটাই হলো নন-স্ট্যাটিক কনটেক্সট । এই কনটেক্সট এ কোন প্রোপার্টি বা মেথড শুধু ঐ ইনস্ট্যান্স স্পেসিফিক হয় । */
class Person{
    public $age;

    public function getAge(){
        return $this->age;
    }
}

$person = new Person();
$person->age = 40;

echo $person->getAge();

$anotherPerson = new Person();
$anotherPerson->age = 35;
echo $anotherPerson->getAge();