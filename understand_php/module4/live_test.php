<?php
//Question1
class Person{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(){
        printf("My name is %s and I am %d years old.\n", $this->name, $this->age);
    }
}


//Question2
class Student extends Person{
    public string $mark;
    public $outof = 100;

    public function __construct(string $name, int $age, string $mark){
        $this->name = $name;
        $this->age = $age;
        $this->mark = $mark;
    }

    public function introduce(){
        printf("My name is %s, I am %d years old.\n", $this->name, $this->age);
    }

    public function calculate_grade_percentage(){
        $percent = intval($this->mark) / $this->outof; 
        return number_format( $percent * 100, 0 ) . '%';
    }

}

$person = new Person("John", 30);
$person->introduce();

$student = new Student("Alice", 18, "85");
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();
echo "My grade percentage is {$gradePercentage}\n";