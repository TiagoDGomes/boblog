<?php


class Curriculum{
    public $description;
    public $fullName;
    public $name;
    public $picture;
    public $address;
    public $telephone;
    public $email;
    public $nationality;
    public $age;
    
    /** @var EducationTraining */
    public $educationTraining;
    
    /** @var WorkExperience */
    public $workExperience;
    
    /** @var Action */
    public $languages;
    
    /** @var Action */
    public $competences;
    
}
class EducationTraining{
    public $name;
    public $local;
    public $city;
    public $year;
}

class WorkExperience{
    public $year;
    public $company;
    public $city;
    public $details;
    public $occupation;
}
class Action{
    public $name;
    public $details;
         
}

?>
