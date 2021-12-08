<?php

require_once '../PHP/controler.php';


class Fetch extends Controler
{
    // Fetch all tasks
    public function fetch()
    {
        $username = htmlspecialchars($_SESSION["username"]);
        $res = null;
        $select = "SELECT * FROM tasks WHERE username='$username'";

        if ($sql = $this->conn->query($select)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $res[] = $row;
            }
        }
        return $res;
    }
}
