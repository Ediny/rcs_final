<?php

include_once './controler.php';

// Class that deletes a task
class Delete extends Controler
{
    public function delete($id)
    {
        $delete = "DELETE FROM tasks WHERE id = '$id'";

        if ($sql = $this->conn->query($delete)) {
            return true;
        } else {
            return false;
        }
    }
}

// initialize delete class
$controler = new Delete();

$id = $_REQUEST['id'];

$delete = $controler->delete($id);

if ($delete) {
    header('Location: ../TODO/main.php');
}
