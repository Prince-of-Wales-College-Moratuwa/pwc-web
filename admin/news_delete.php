<?php
$page = 'blog';

include '../database_connection.php';
include './admin-functions.php';
include '../functions.php';


if (!is_admin_login()) {
    header('location:../admin_login.php');
    exit();
}

include 'admin-header.php';

if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];
    
    try {
        
        $sql = "DELETE FROM pwc_db_news WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            
            echo "<script>alert('Article deleted successfully'); window.location.href = document.referrer;</script>";
            exit();
        } else {
        
            echo "<script>alert('Error deleting Article'); window.location.href = document.referrer;</script>";
            exit();
        }
    } catch (PDOException $e) {
        echo "Database connection error: " . $e->getMessage();
    }
} else {
    echo "Invalid or missing ID parameter.";
}
?>
