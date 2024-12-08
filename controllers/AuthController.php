<?php
require_once 'models/UserModel.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->login($email, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: /dashboard');
                exit;
            } else {
                echo "Invalid login credentials!";
            }
        }
        require_once 'views/login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $this->userModel->register($username, $email, $password);
            header('Location: /login');
            exit;
        }
        require_once 'views/register.php';
    }

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        require_once 'views/dashboard.php';
    }

    public function home() {

        require_once 'views/home.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /login');
        exit;
    }
}
?>
