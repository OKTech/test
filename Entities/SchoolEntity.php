<?php

class SchoolEntity
{
    public $id, $username, $admin_password, $users_count, $full_name, $logo, $year_founded, $address, $city, $state, $zip, $country, $admin_mobile, $school_mobile, $phone_1, $phone_2, $agree_call, $agree_fax, $agree_email, $fax, $email, $type, $timestamp, $note;
    
    public function __construct($id, $username, $admin_password, $users_count, $full_name, $logo, $year_founded, $address, $city, $state, $zip, $country, $admin_mobile, $school_mobile, $phone_1, $phone_2, $agree_call, $agree_fax, $agree_email, $fax, $email, $type, $timestamp, $note)
    {
	$this->id = $id;
	$this->username = $username;
	$this->admin_password = $admin_password;
	$this->users_count = $users_count;
	$this->full_name = $full_name;
	$this->logo = $logo;
	$this->year_founded = $year_founded;
	$this->address = $address;
	$this->city = $city;
	$this->state = $state;
	$this->zip = $zip;
	$this->country = $country;
	$this->admin_mobile = $admin_mobile;
	$this->school_mobile = $school_mobile;
	$this->phone_1 = $phone_1;
	$this->phone_2 = $phone_2;
	$this->agree_call = $agree_call;
	$this->agree_email = $agree_email;
	$this->agree_fax = $agree_fax;
	$this->fax = $fax;
	$this->email = $email;
	$this->type = $type;
	$this->timestamp = $timestamp;
	$this->note = $note;
    }
}

?>