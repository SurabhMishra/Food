<?php include('partials/menu.php');?>

<div class="main-containt">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <br>
        <form action="" method="POST">

        <table class="tbl">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" placeholder="Enter your Name">
          </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder=" Enter your Username">
            </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Enter your Password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
            </tr>
        </table>

        </form>
    </div>
</div>    

<?php include('partials/footer.php');?>

<!-- Peocess the value from form and save it in database -->
<!-- check whether the submit butto is clicked or not -->

<!-- ********************************** -->
<?php
// if(isset($_POST['submit']))
// {
    // Button clicked
  //  echo "Button clicked";

  // 1. Get the data from form
//   $full_name = $_POST['full_name'];
//   $username = $_POST['username'];
//   $password = $_POST['password'];
// }
// 2.  SQL Query to save  the data into database
// $sql = "INSERT INTO tbl_admin SET
// full_name = '$full_name',
// username = '$username',
// password = '$password'";

// echo $sql;
//3. Excute Query and save Data in database
//  $conn = mysqli_connect('localhost:3307','root','') or die(mysqli_error());
//  $db_select = mysqli_select_db($conn,'food_order') or die (mysqli_error());

//  $res = mysqli_query($conn, $sql) or die(mysqli_error()); 

// *************************************************
$full_name =  "localhost:3307";
$username  =  "root";
$password = "";
$dbname = "food-order";

$con = new mysqli($full_name, $username, $password, $dbname);
if($con->connect_error)
{
  die("connection fail");
}
 $full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql= "INSERT INTO `tbl_admin` (`full_name`, `username`, `password`) 
VALUES ('$full_name', '$username', '$password')";

if($con->query($sql)==true)
{
//  echo "new record add";
$_SESSION['add']= "Admin Added Successfully";
// redirect page
header()

}
else
{
//   echo "error";
}
$con->closed();

?>



