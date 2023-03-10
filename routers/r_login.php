<?php 
session_start();


include_once '../controllers/c_login.php';

$login = new c_login();

try {
    if ($_GET['aksi'] == 'login') {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $login->login_role($username, $password);

        $_SESSION["login"] = true;

    } elseif ($_GET['aksi'] == 'logout') {

        $login->logout();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>