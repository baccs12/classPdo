<?php

function delete($id){
    $link = new PDO('mysql:host=localhost;dbname=baccs', "root", "P@ssw0rd");
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="DELETE from ToDo WHERE id= :id";
    $stmt = $link->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();


}

delete($_GET['id']);

header("location: index.php");
exit;

?>