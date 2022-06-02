<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    public  $title = 'User Registration Page';
    protected $name;
    protected $nameErr;


    protected $confirmPassword;
    protected $confirmPasswordErr;


    public function __construct()
    {
        parent::__construct();
        $this->name     = "";
        $this->nameErr = "";

        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    //Name Error
    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function setNameErr($nameErr)
    {
        $this->nameErr = $nameErr;
    }

    //Password
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    //Password error
    public function getPasswordErr()
    {
        return $this->passwordErr;
    }

    public function setPasswordErr($passwordErr)
    {
        $this->passwordErr = $passwordErr;
    }

    //Confirm Password
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }

    //Confirm Password Error
    public function getConfirmPasswordErr()
    {
        return $this->confirmPasswordErr;
    }
    public function setConfirmPasswordErr($confirmPasswordErr)
    {
        $this->confirmPasswordErr = $confirmPasswordErr;
    }

    public function signup()
    {
        

        $this->dbh->query("INSERT INTO `cart`(`productID`, `qauntity`, `shippingPrice`, `totalPrice`,`userEmail`) VALUES ('','','50','50',:email)");
        $this->dbh->bind(':email', $this->email);
        $this->dbh->execute();

        $this->dbh->query("INSERT INTO users (`name`, `email`, `password`,`Image`) VALUES(:uname, :email, :pass,'https://upload.wikimedia.org/wikipedia/commons/2/2f/No-photo-m.png')");
        $this->dbh->bind(':uname', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);




        return $this->dbh->execute();
    }
}
