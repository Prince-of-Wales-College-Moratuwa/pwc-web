<?php
function deleteById($id)
{

    global $connect;
    
    $query = "DELETE FROM pwc_db_events WHERE id=".$id;
    $statement = $connect->prepare($query);
    $statement->execute();
}
?>