<?php
use User\User;
use Form\Form;

$login = new User();

$formFiller = [
    "name" => "user-add",
    "items"=>[
        ["username", "text", "User name", ""],
        ["password", "password", "Password", ""],
        ["login", "submit", "Login", "Login"]
    ]
];
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Login</h1>
            <?php
            Form::formGen($formFiller);
            ?>
        </div>
    </div>
</div>