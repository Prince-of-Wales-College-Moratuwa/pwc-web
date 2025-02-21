<?php
require '../../database_connection.php'; // This should define $connect (PDO instance)

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["slug"])) {
    $slug = trim($_POST["slug"]);

    if (!empty($slug)) {
        $query = "SELECT COUNT(*) FROM pwc_db_news WHERE slug = :slug";
        $stmt = $connect->prepare($query);
        $stmt->bindParam(":slug", $slug, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        echo ($count > 0) ? "exists" : "available";
    }
}
?>
