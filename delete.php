<?php
include_once("conn.php");
$id = $_GET['id'];
$sql = "DELETE FROM users where id=$id";
$res = mysqli_query($conn, $sql);
if ($res) {
    header("location:show.php");
}
