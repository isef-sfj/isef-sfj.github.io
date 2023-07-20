<?php
session_start();

if (isset($_GET['lesson'])) {
    $_SESSION['lesson'] = $_GET['lesson'];
}
echo $_SESSION['lesson'];