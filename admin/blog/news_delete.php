<?php
$page = 'past-principals';

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
        
        $sql_select = "SELECT photo FROM pwc_db_news WHERE id = :id";
        $stmt_select = $connect->prepare($sql_select);
        $stmt_select->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt_select->execute();

        $row = $stmt_select->fetch(PDO::FETCH_ASSOC);
        $image_name = $row['photo'];

       
        $image_path = '../../content/img/img-blog/' . $image_name;

       
        if (file_exists($image_path)) {
            unlink($image_path);
        }

   
        $sql_delete = "DELETE FROM pwc_db_news WHERE id = :id";
        $stmt_delete = $connect->prepare($sql_delete);
        $stmt_delete->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt_delete->execute()) {
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
