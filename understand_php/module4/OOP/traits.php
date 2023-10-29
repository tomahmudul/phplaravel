<?php
/* 
ট্রেইটস
আমরা দেখেছি ক্লাস ইনহেরিট্যান্সের মাধ্যমে আমরা প্যারেন্ট ক্লাস থেকে চাইল্ড ক্লাসে মেথড ইনহেরিট করতে পারি । অর্থাৎ প্যারেন্ট ক্লাসে কোন মেথড তৈরি করা থাকলে আমরা সেটা চাইল্ড ক্লাসে ব্যবহার করতে পারি । কিন্তু অনেক সময় দেখা যায় একই ক্লাস হায়ারার্কিতে নেই এমন দুটি ক্লাসের কিছু কমন মেথড থাকতে পারে । অর্থাৎ এমন দুটি ক্লাস যারা একটি আরেকটিকে এক্সটেন্ড করে না কিন্তু দুটি ক্লাসেরই কমন মেথড থাকছে getName() নামে যেটা একই কাজ করে । এসব ক্ষেত্রে কোড রিইউজে সহায়তা করতে পিএইচপি 5.4.0 ভার্সন থেকে ট্রেইটস এর প্রচলন ।
ট্রেইটস ডিফাইন করা হয় ক্লাসের মত করেই তবে trait কিওয়ার্ডটি ব্যবহার করে । একটি ট্রেইটের ভিতরে একই ধরনের কিছু ফাংশনালিটি সম্পন্ন মেথড ডিফাইন করা থাকে । এরপরে কোন ক্লাসের ভিতরে আমরা ঐ ট্রেইটটি ইনক্লুড করলে ঐ মেথডগুলো আমরা এ্যাক্সেস করতে পারি ঠিক যেন ঐ ক্লাসেই মেথডগুলো ডিফাইন করা হয়েছিলো ।
উদাহরন:
<?php
trait CommonMethods {
    public function getName() {
        return $this->name;
    }
}
​
class TestClass {
    use CommonMethods;
    private $name = "test class";
}
​
class AnotherClass {
    use CommonMethods;
    private $name = "another class";
}
​
$tc = new TestClass();
var_dump($tc->getName());
​
$ac = new AnotherClass();
var_dump($ac->getName());
এখানে TestClass এবং AnotherClass সম্পূর্ন ইনডিপেন্ডেন্ট দুটি ক্লাস । তারা CommonMethods ট্রেইটটি ব্যবহার করে । ফলে এই ট্রেইটের মেথডটি তারা সরাসরি ব্যবহার করতে পারে ।
পিএইচপিতে যেহেতু মাল্টিপল ইনহেরিট্যান্স নেই, অর্থাৎ কোন ক্লাস শুধুমাত্র একটা ক্লাসকেই এক্সটেন্ড করতে পারে তাই এক্ষেত্রে কমন মেথডগুলো গ্রুপিং এর জন্য ট্রেইট বেশ কার্যকর ভূমিকা পালন করতে পারে ।
*/

trait CommonMethods {
    public function getName() {
        return $this->name;
    }
}

class TestClass {
    use CommonMethods;
    private $name = "test class";
}

class AnotherClass {
    use CommonMethods;
    private $name = "another class";
}

$tc = new TestClass();
var_dump($tc->getName());

$ac = new AnotherClass();
var_dump($ac->getName());