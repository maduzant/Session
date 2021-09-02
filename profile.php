<?php
session_start();
if(empty($_SESSION['username'])){
            header("location:index.php");
}else{
            echo "Selamat Madu Zaneta telah berhasil login <a href='logout.php'>Logout</a>";
}
?>