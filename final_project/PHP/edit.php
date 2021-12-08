<?php

require_once '../PHP/config.php';

// fetches task from edit button using its id
if (isset($_REQUEST['edit'])) {
    $id = $_REQUEST['edit'];
    $result = $mysqli->query("SELECT * FROM tasks WHERE id=$id") or die($mysqli->connect_error);
    $row = $result->fetch_array();
    $task = $row['task'];
}


// updates task
if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['edit'];
    $task = $_REQUEST['editInput'];
    $result = $mysqli->query("UPDATE tasks SET task='$task' WHERE id='$id'");
    if ($result) {
        header("Location: ./main.php");
    } else {
        die($mysqli->connect_error);
    }
}
