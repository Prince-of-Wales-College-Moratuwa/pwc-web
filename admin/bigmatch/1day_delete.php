<?php
$page = 'bigmatch';

include '../../database_connection.php';
include './../admin-functions.php';
include '../../functions.php';

if (!is_admin_login()) {
    header('location:../../admin_login.php');
    exit();
}

include '../admin-header.php';

if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];

    try {
        
   
        $sql_delete = "DELETE FROM bigmatch_1day_results WHERE id = :id";
        $stmt_delete = $connect->prepare($sql_delete);
        $stmt_delete->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt_delete->execute()) {
            echo "<script>alert('Record deleted successfully'); window.location.href = document.referrer;</script>";
            exit();
        } else {
            echo "<script>alert('Error deleting Record'); window.location.href = document.referrer;</script>";
            exit();
        }
    } catch (PDOException $e) {
        echo "Database connection error: " . $e->getMessage();
    }
} else {
    echo "Invalid or missing ID parameter.";
}
?>
