<?php  include('data_base.php') ?>
<?php 

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password_1 = md5($_POST['pass_1']);

    $sql = "SELECT * FROM user_data WHERE user_name = '$user_name' AND user_password = '$password_1'";
    $result = mysqli_query($data_base, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_password'] = $row['user_password'];
        $_SESSION['user_email'] = $row['user_email'];
        header('location: well.php');
    }else {
        echo "<script>window.alert('wrong user name or password')</script>";
    }
}

?>