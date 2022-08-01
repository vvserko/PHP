<?php

class User {

    public $userLogin;
    public $userPassword;
    public $userConfirmPassword;
    public $userEmail;
    public $userName;

    function __construct($userLogin, $userPassword, $userConfirmPassword, $userEmail, $userName) {
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
        $this->userConfirmPassword = $userConfirmPassword;
        $this->userEmail = $userEmail;
        $this->userName = $userName;
    }

}
