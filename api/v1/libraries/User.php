<?php

class UserException extends Exception
{
}


class User
{
    private $db;

    private $id;
    private $username;
    private $password;
    private $email;
    private $firstName;
    private $lastName;
    private $class;
    private $description;
    private $followers;
    private $userCreatedDate;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setId($id)
    {
        // if(($id == null) || !is_numeric($id) || $id < 1 || $id >  9223372036854775807)
        // {

        // }
        if ($id == null)
            throw new UserException('User Id cannot be null');

        if (!is_numeric($id))
            throw new UserException('Invalid User ID');

        elseif ($id < 1)
            throw new UserException('User id can\'t be zero or smaller');

        elseif ($id >  9223372036854775807)
            throw new UserException('User id too long');

        else
            $this->id = $id;
    }

    public function setUsername($username)
    {
        if ($username == null)
            throw new UserException('Username can\'t be null ');

        elseif ($username == '')
            throw new UserException('Invalid Username');

        elseif (strlen($username) < 1)
            throw new UserException('Invalid Username');

        elseif (strlen($username) > 255)
            throw new UserException('Invalid Username');

        else
            $this->username = $username;
    }

    public function setPassword($password)
    {
        if ($password == null)
            throw new UserException('Password can\'t be null');

        elseif (strlen($password) < 8)
            throw new UserException('Password must be at least 8 characters long');

        elseif (strlen($password) > 255)
            throw new UserException('Password cannot be more than 255 characters long');

        else
            $this->$password = $password;
    }

    public function setEmail($email)
    {
        if (strlen($email) > 255)
            throw new UserException('Email too long');
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            throw new UserException('Invalid Email');
        else
            $this->email = $email;
    }

    public function setFirstName($firstname)
    {
        if ($firstname == '')
            throw new UserException('Invalid First name');
        elseif (strlen($firstname) < 2)
            throw new UserException('First Name too short');
        elseif (strlen($firstname) > 255)
            throw new UserException('First name too long');
        else
            $this->firstName = $firstname;
    }

    public function setLastName($lastname)
    {
        if ($lastname == '')
            throw new UserException('Invalid First name');
        elseif (strlen($lastname) < 2)
            throw new UserException('First Name too short');
        elseif (strlen($lastname) > 255)
            throw new UserException('First name too long');
        else
            $this->lastName = $lastname;
    }









}
