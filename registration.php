<?php  include('data_base.php') ?>
<?php 

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $password_1 = md5($_POST['pass_1']);
    $password_2 = md5($_POST['pass_2']);


    if ($password_1 == $password_2) {
        $user_check = "SELECT * FROM user_data WHERE user_name = '$user_name'";
        $result = mysqli_query($data_base, $user_check);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user_data (user_name, user_email, user_password) VALUES ('$user_name', '$user_email', '$password_1')";
            $result = mysqli_query($data_base, $sql); 
    
            if (!$result) {
                echo "<script>window.alert('woops! something went wrong')</script>";
            }else {
                header('location: well.php');
            }
        }else {
            echo "<script>window.alert('woops! email or user name ')</script>";
        }

    }else {
        echo "<script>window.alert('Passwords do not match')</script>";
    }
}
 ?>