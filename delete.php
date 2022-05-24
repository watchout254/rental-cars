<?php
require_once 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        try {
            $stmt = $db->prepare("DELETE FROM piga WHERE id = ?");
            $stmt->execute([$id]);
            $_SESSION['success'] = 'Message deleted successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
}

header('Location: view.php');