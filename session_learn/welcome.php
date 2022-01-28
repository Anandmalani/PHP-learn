<?php
session_start();
if(isset($_SESSION['username'])){
    echo "hello " .$_SESSION['username'] . "<br> how are you";
}
else{
    echo "login to continue";
}
?>