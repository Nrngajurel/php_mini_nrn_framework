<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $userController = new \Nrngajurel\Sl\Controllers\UserController();
    $userController->delete($_GET['id']);
}
    header('Location: /dashboard');
