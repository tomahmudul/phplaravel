<?php
/* 
ইন্টারফেইস
ইন্টারফেইসের মাধ্যমে আমরা বলে দেই একটা ক্লাসের কোন কোন মেথড অবশ্যই থাকা লাগবে । কিন্তু আমরা এর মূল ইম্প্লিমেন্টেশনটা নির্দিষ্ট করে দেই না ।
আমরা একটা ইন্টারফেইস ডিফাইন করি interface কিওয়ার্ডটি দিয়ে । এবং যে সব ক্লাস এই ইন্টারফেইস মেনে চলে তারা এই ইন্টারফেইসকে implement করে ।
ইন্টারফেইস ডিফাইন করা হয় সাধারনভাবে ক্লাসের মত করেই । ইন্টারফেইসের মেথডগুলোর শুধু সিগনেচার (কি কি প্যারামিটার নেয়) ডিফাইন করে দেওয়া হয় কিন্তু এই মেথডগুলোর বডি ডিফাইন করা হয় না ।
পিএইচপি ম্যানুয়াল থেকে একটি উদাহরন দেখে নেই:
<?php
​
// Declare the interface 'iTemplate'
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}
​
// Implement the interface
// This will work
class Template implements iTemplate
{
    private $vars = array();
​
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
​
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
​
        return $template;
    }
}
এখানে আমরা iTemplate নামে একটি ইন্টারফেইস ডিফাইন করেছি । আমাদের Template ক্লাসটি এই ইন্টারফেইস ইম্প্লিমেন্ট করে । খেয়াল করুন আমরা দেখছি কিভাবে ইন্টারফেইসে শুধু মেথড সিগনেচার এবং আমাদের মূল ক্লাসে তার ইম্প্লিমেন্টেশন তৈরি করা হয়েছে ।
আমরা যদি ইম্প্লিমেন্টেশন ক্লাসে ইন্টারফেইসের কোন মেথড ডিফাইন করতে ভুলে যাই সেক্ষেত্রে আমরা ফ্যাটাল এরর পাবো ।
পিএইচপিতে একটি ক্লাস অনেকগুলো ইন্টারফেইস ইম্প্লিমেন্ট করতে পারে তবে যদি দুইটি ইন্টারফেইসের একই নামের মেথড থাকে তাহলে সঙ্গত কারনেই কোন ক্লাস এই দুটি ইন্টারফেইস একই সাথে ইম্প্লিমেন্ট করতে পারবে না । সেটা করলে ঐ মেথডের নাম নিয়ে কনফ্লিক্ট তৈরি হবে ।
ইন্টারফেইস হলো অনেকটা ডেভেলপারের সাথে চুক্তি করার মতো । আমাদের চুক্তি মেনে নিতে হলে তাকে অবশ্যই আমাদের বলে দেওয়া মেথড ইম্প্লিমেন্ট করতে হবে । যখন কোন ক্লাস আমাদের ডিফাইন করা ইন্টারফেইস ইম্প্লিমেন্ট করে তখন আমরা ধরে নিতে পারি আমাদের বলে দেওয়া মেথডগুলো ঐ ক্লাসে আছে । এর ফলে আমরা ক্লাসের প্রয়োজনীয় ডিজাইন সম্পর্কে নিশ্চিত হতে পারি ।
*/

interface iTemplate{
    public function setVariables($name, $var) ;
    public function getHtml($template) ;
}

class Template implements iTemplate{
    public $vars = [] ;
    public function setVariables($name, $var){
        $this->vars[$name] = $var;

    }
    public function getHtml($template){
        foreach ($this->vars as $name => $var){
            $template = str_replace('{' . $name . '}', $var, $template);
        }
        return $template ;
    }
}

