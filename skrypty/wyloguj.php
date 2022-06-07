<?php
    setcookie("login","",time() - 31536000, "/");
    header("location:../")	;
?>