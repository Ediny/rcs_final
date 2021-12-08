<?php

$username = htmlspecialchars($_SESSION["username"]);

?>

<div class="outer-nav">
    <div class="theme-changer">
        <select name="themes" onchange="changeBg(this)" id="theme-selector">
            <option value="">Select theme</option>
            <option id="dark Ocean" value="ocean">Dark Ocean</option>
            <option id="expresso" value="expresso">Expresso</option>
            <option id="maldives" value="maldives">Maldives</option>
            <option id="sky" value="sky">Sky</option>
        </select>
    </div>
    <nav class="nav">
        <div class="navbar-left flex-center">
            <a href="./main.php" class="btn-home">Home</a>
        </div>
        <div class="navbar-right flex-center">
            <h3>Hi, <?php echo $username; ?>.</h3>
            <?php
            require_once '../PHP/config.php';
            $ress = null;
            $result = "SELECT * FROM images WHERE username = '$username'";
            if ($sql = $mysqli->query($result)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    echo "<img class='avatar' src='../PHP/upload/" . $row['file_name'] . "' style='height:45px; object-fit:scale-down;' />";
                }
            }
            ?>
            <a href="../PHP/logout.php" class="btn-signOut">Sign Out</a>
        </div>
    </nav>
</div>