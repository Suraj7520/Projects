<?php

include "conn.php";

$id = $_GET['ID'];

$deleteq = "delete from product where id=$id ";

$query = mysqli_query($conn, $deleteq);

if($query){
    ?>
    <script>
        alert("Deleted Succesfully.");
    </script>
<?php 
}else{
    ?>

    <script>
        alert("Data Not Deleted.")
    </script>

<?php 
}

header('location:insert.php');

?>