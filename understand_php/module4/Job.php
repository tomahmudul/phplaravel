<?php
class Job {
    public $jobName;
    public $jobDescrition;
    public static $companyName;

    public function getName() {
        return $this->jobName;
    }

    public function getDescrition() {
        return $this->jobDescrition;
    }

    public static function getCompanyName() {
        return self::$companyName;
    }
    public function getCompanyName_nonStatic() {
        return self::getCompanyName();
    }

}

$objJob = new Job();

$objJob->jobName = "Data Scientist";
$objJob->jobDescrition = "You must know data science.";
Job::$companyName = "Studytonight";

echo "Job Name: " .$objJob->getName()."\n";
echo "Job Description: " .$objJob->getDescrition()."\n";
//echo "Company Name: " .Job::getCompanyName_nonStatic();
