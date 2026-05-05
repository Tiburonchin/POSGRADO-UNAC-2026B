<?php
session_start();

function requireRole($allowedRoles) {
    if (!isset($_SESSION['user_role']) || !in_array($_SESSION['user_role'], $allowedRoles)) {
        header("Location: ../auth/login.php");
        exit();
    }
}

function isLoggedIn() {
    return isset($_SESSION['username']);
}
