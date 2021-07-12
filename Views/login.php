<?php
$title = "Login";
require_once 'header.php';

if (!empty($_POST['username'])) {
    if($_POST['username'] === 'juju') {
        session_start();
        $_SESSION['connecte'] =1;
        header('Location: /chat');
    } else {
        $error = "username incorrect";
    }
}

?>

<?php if ($error): ?>
    <div class="username_error"><?= $error ?></div>
<?php endif; ?>

<div class="div-login">
    <h2>Enter your username</h2>
    <form action="" method="POST">
        <span action="login_page.php" method="POST">
            <input type="text" name="username" placeholder="Username" autocomplete="off" class="username">
        </span>
        <span>
            <a href="#" class="create-account">Créer un compte</a>
        </span>
        <span>
            <input type="submit" value="Validé" class="btn-login">
        </span>
    </form>
</div>