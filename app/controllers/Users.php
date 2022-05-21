<?php
class Users extends Controller
{
  
    public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type']=='signin') {

            require_once Util\pathBuilder('models', "LoginModel");
            $loginModel = new LoginModel();
            //process form
            $loginModel->setEmail(trim($_POST['email']));
            $loginModel->setPassword(trim($_POST['password']));

            //validate login form
            if (empty($loginModel->getEmail())) {
                $loginModel->setEmailErr('Please enter an email');
            } elseif (!($loginModel->emailExist($_POST['email']))) {
                $loginModel->setEmailErr('No user found');
            }

            if (empty($loginModel->getPassword())) {
                $loginModel->setPasswordErr('Please enter a password');
            } elseif (strlen($loginModel->getPassword()) < 4) {
                $loginModel->setPasswordErr('Password must contain at least 4 characters');
            }

            // If no errors
            if (
                empty($loginModel->getEmailErr()) &&
                empty($loginModel->getPasswordErr())
            ) {
                //Check login is correct
                $loggedUser = $loginModel->login();
                if ($loggedUser) {
                    //create related session variables
                    $this->createUserSession($loggedUser);
                    die('Success log in User');
                } else {
                    $loginModel->setPasswordErr('Password is not correct');
                }
            }
        }elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type']=='signup') {
            require_once Util\pathBuilder('models', "RegisterModel");
            $registerModel = new RegisterModel();
            // Process form
            $registerModel->setName(trim($_POST['name']));
            $registerModel->setEmail(trim($_POST['email']));
            $registerModel->setPassword(trim($_POST['password']));
            $registerModel->setConfirmPassword(trim($_POST['confirm_password']));

            //validation
            if (empty($registerModel->getName())) {
                $registerModel->setNameErr('Please enter a name');
            }
            if (empty($registerModel->getEmail())) {
                $registerModel->setEmailErr('Please enter an email');
            } elseif ($registerModel->emailExist($_POST['email'])) {
                $registerModel->setEmailErr('Email is already registered');
            }elseif (!filter_var($registerModel->getEmail(), FILTER_VALIDATE_EMAIL)) {
                $registerModel->setEmailErr("Invalid email format");
              }
            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } elseif (strlen($registerModel->getPassword()) < 6) {
                $registerModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
                $registerModel->setConfirmPasswordErr('Passwords do not match');
            }

            if (
                empty($registerModel->getNameErr()) &&
                empty($registerModel->getEmailErr()) &&
                empty($registerModel->getPasswordErr()) &&
                empty($registerModel->getConfirmPasswordErr())
            ) {
                //Hash Password
                $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));

                if ($registerModel->signup()) {
                    //header('location: ' . URLROOT . 'users/login');
                    flash('register_success', 'You have registered successfully');
                    redirect('users/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Login.php';
        require_once $viewPath;
    }

    public function forgotPassword(){
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $msg = "First line of text\nSecond line of text";
            $msg = wordwrap($msg,70);
            mail("hassan1900801@miuegypt.edu.eg","My subject",$msg);

        }
        $viewPath = VIEWS_PATH . 'users/forgotPassword.php';
        require_once $viewPath;
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;
        //header('location: ' . URLROOT . 'pages');
        redirect('pages');
    }

    public function logout()
    {
        echo 'logout called';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }
}
