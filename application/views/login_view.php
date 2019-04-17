<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login </title>
</head>
<body>
    <h1>Connexion</h1>

    <?php

    echo form_open('Main/login_action');

    echo validation_errors();

    echo "<p>Username: ";
    echo form_input('username', $this->input->post('username'));
    echo "</p>";

    echo "<p>Password: ";
    echo form_password('password');
    echo "</p>";

    echo "</p>";
    echo form_submit('login_submit', 'Login');
    echo "</p>";

    echo form_close();

    ?>

    <a href='<?php echo base_url()."index.php/Welcome/inscription"; ?>'>Sign In</a>
</body>
</html>
