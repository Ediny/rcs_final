<?php


$title = 'Register';
require_once '../components/header.php';
require_once '../PHP/register.php';

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
        <h1>Sign Up</h1>
        <form class="flex-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">

            <!-- Username input with error handler -->
            <input type="text" name="username" class="<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" placeholder="Username" onfocus="this.placeholder = ''" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>

            <!-- Password input with error handler -->
            <input type="text" name="password" class="<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Password" onfocus="this.placeholder = ''" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>

            <!-- Confirm password input with error handler -->
            <input type="text" name="confirm_password" class="<?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" placeholder="Confirm password" onfocus="this.placeholder = ''" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>

            <label for="avatar" class="img-box">Choose a picture</label>
            <input type="file" name="image" id="avatar" class="hidden" />

            <!-- Submit button-->
            <button class="loginSubmit" type="submit" name="submit">Submit</button>



        </form>
        <!-- Redirects person to login screen if prompted -->
        <div class="notRegistered flex-center">
            <p>Already have an account?</p>
            <a href="./loginForm.php">Login here</a>
        </div>
    </div>
</div>


<?php require_once '../components/footer.php'; ?>