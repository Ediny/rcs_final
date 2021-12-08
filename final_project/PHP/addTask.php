<?php

require_once '../PHP/controler.php';

class Insert extends Controler
{
    public $errors = "";
    public function insert()
    {

        // initialize errors variable

        // if checks 
        if (isset($_POST['submit'])) {
            if (empty($_POST['taskInput'])) {
                $errors = "You must fill in the task";
            } else {
                $username = htmlspecialchars($_SESSION["username"]);
                $task = $_POST['taskInput'];
                $sql = "INSERT INTO tasks (username, task) VALUES (?,?)";
                if ($stmt = $this->conn->prepare($sql)) {

                    // Set parameters
                    $param_username = $username;
                    $param_task = $task;
                    // Bind variables to the prepared statement as parameters
                    $stmt->bind_param("ss", $param_username, $param_task);


                    if ($stmt->execute()) {
                        // Redirect to main

                        header("location: ./main.php");
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    $stmt->close();
                }

                // Close connection
                $this->conn->close();
            }
        }
    }
}

$errors = '';
$controler = new Insert();
$controler->insert();
