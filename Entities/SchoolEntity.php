<?php

class SchoolEntity
{
    public $username, $password, $schoolname, $country, $grade, $facebook, $twitter, $google, $phone, $fax, $address;
    
    public function __construct($id, $username, $schoolname, $country, $grade, $facebook, $twitter, $google, $phone, $fax, $address)
    {
	$this->username = $username;
	$this->password = $password;
	$this->schoolname = $schoolname;
	$this->country = $country;
	$this->grade = $grade;
	$this->facebook = $facebook;
	$this->twitter = $twitter;
	$this->google = $google;
	$this->phone = $phone;
	$this->fax = $fax;
	$this->address = $address;
    }
}

?>