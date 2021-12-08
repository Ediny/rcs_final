<?php

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ./TODO/main.php");
    exit;
}

$title = 'Login';
require_once "../components/header.php";
require_once "../PHP/login.php";

?>
<div class="theme-changer">
    <select name="themes" onchange="changeBg(this)" id="theme-selector">
        <option value="">Select theme</option>
        <option id="dark Ocean" value="ocean">Dark Ocean</option>
        <option id="expresso" value="expresso">Expresso</option>
        <option id="maldives" value="maldives">Maldives</option>
        <option id="sky" value="sky">Sky</option>
    </select>
</div>
<div class="login-wrapper flex-center">
    <div class="top-layer flex-center">
        <h1>Login</h1>

        <!-- Error display if person inputs invalid data -->
        <?php
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <form class="flex-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <!-- Username input -->
            <input type="text" name="username" class="<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" placeholder="Username" onfocus="this.placeholder = ''" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>

            <!-- Password input -->
            <input type="password" name="password" class="<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Password" onfocus="this.placeholder = ''">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>

            <!-- Submit button -->
            <button class="loginSubmit" type="submit" name="submit">Sign in</button>
        </form>

        <!-- Redirects to registration form if prompted-->
        <div class="notRegistered flex-center">
            <p>Not registered?</p>
            <a href="./registerForm.php">Click here</a>
        </div>
    </div>
</div>

<?php require_once '../components/footer.php'; ?>