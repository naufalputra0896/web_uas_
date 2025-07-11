<?php
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private $userModel;
    public function __construct($pdo)
    {
        $this->userModel = new User($pdo);
    }

    public function login($username, $password)
    {
        $user = $this->userModel->findByUsername($username);
        if ($user && $user['password'] === md5($password)) {
            $_SESSION['user'] = $user;
            return true;
        }
        return false;
    }

    public function logout()
    {
        session_destroy();
    }
}
?>