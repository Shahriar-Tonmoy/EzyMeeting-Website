<!DOCTYPE html>
<html>
    <head>
     <meta charset="UTF-8" />
     <meta http-equiv="refresh" content="0; URL=http://localhost/EZYMEETING/admin/nav-bar.php" />
   </head>
</html>

<?php
include 'dbConfig.php';


if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $new_status = $_POST['status'];

    if ($new_status == '1') {
        $new_status = '0';
    } else if ($new_status == '0') {
        $new_status = '1';
    }

    $update = "UPDATE logo SET status = '$new_status' WHERE id = $id ";
    $result1 = mysqli_query($db, $update);
    $query = $db->query("SELECT * FROM logo");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            if ($row['status'] == '1' && $row['id'] != $id) {
                $this_id = $row['id'];
                $update = "UPDATE logo SET status = '0' WHERE id = $this_id";
                $result1 = mysqli_query($db, $update);
            }
            // echo $row['status']; 
        }
    }

    if ($result1) {
        // echo 'Success';
    } else {
        // echo 'Failed';
    }
} else {
    // echo "N0, mail is not set";
}

// $new_status = $_POST['status'];
// $id = $_GET['logo_id'];


// echo $id;
// $sql = "SELECT * FROM logo ";
// $result = mysqli_query($db,$sql);
// $data = mysqli_fetch_assoc($result);
// $status = $data['status'];





// $update = "UPDATE logo SET status = '$new_status' WHERE id = $id ";
// $result1= mysqli_query($db,$update);

// $db->close();
?>