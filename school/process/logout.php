<?php
session_start();
session_destroy();

die(header("Location: ../login.php"))
?>