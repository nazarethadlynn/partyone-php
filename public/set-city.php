<?php
session_start();

if (isset($_POST['city'])) {
    $_SESSION['city'] = $_POST['city'];
    echo json_encode([
        'success' => true,
        'city' => $_POST['city']
    ]);
}
