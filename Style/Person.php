<?php

class Person {
    public $id;
    public $personName;
    public $personSurname;
    public $personBirthday;
    public $personGender;
    public $personCity;
    
    
    function __construct($id, $personName, $personSurname, $personBirthday,
            $personGender, $personCity) {
        
        $this->id = $id;
        $this->personName = $personName;
        $this->personSurname = $personSurname;
        $this->personBirthday = $personBirthday;
        $this->personGender = $personGender;
        $this->personCity = $personCity;
    }

    public static function birthdayToAge() {
        date_default_timezone_set('UTC');
        static $today = getdate['year'];
        return ($today - explode("-", self::personBirthday)[0]);
        
    }

}
