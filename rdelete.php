<?php
require_once 'rconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        try {
            $stmt = $db->prepare("DELETE FROM rent WHERE id = ?");
            $stmt->execute([$id]);
            $_SESSION['success'] = 'Message deleted successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
}

header('Location: rview.php');