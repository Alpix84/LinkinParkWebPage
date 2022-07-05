<?php
    require APPROOT . '\views\includes\head.php';
?>

<div class="navbar">
    <?php
        require APPROOT . '\views\includes\navigation.php';
    ?>
</div>

<div class="container-login">
    <div class="wrapper-login">
        <h2>Regisztráció</h2>

        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
            
            <input type="text" placeholder="Felhasználónév *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="email" placeholder="E-Mail *" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Jelszó *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Jelszó megerősítése *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Regisztrálok</button>
            <p class="options">Még nem regisztrált? <a href="<?php echo URLROOT; ?>/users/register">Regisztráció</a></p>
        </form>
    </div>
</div>