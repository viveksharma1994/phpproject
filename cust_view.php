<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Members</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    </head>
    <?php
    $email = $_SESSION['email'];//$_SESSION['username'];
    include 'config.php';

    //$query = mysqli_query($conn, $select);
    $select = "SELECT * FROM  cust_detail WHERE email='$email'";
    $query = mysqli_query($conn, $select);
    $result = mysqli_fetch_array($query);
    if ($result['role'] == 1) {
    	//print_r('hello');exit();
        if (isset($_GET['mobile']) && is_numeric($_GET['mobile'])) {
            $select = "SELECT * FROM cust_detail WHERE mobile = '" . $_GET['mobile'] . "'";
        } else {
            $select = "SELECT * FROM cust_detail";
        }
        ?>
        <form method="get" action=""> 
            <input name="mobile" type ="text" id="text"><br><br>
            <button name="search">Search</button><br><br>
        </form>
        <?php
    }
    ?>
   
    <div class="search">
        <div class="conatiner">
            <div class="col-md-8 col-md-offset-1">
                <h2>Details</h2>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Sr no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Password</th>
                            <th>Edit</th>
                           
                            <?php
                            if ($result['role'] == 1) {
                                ?>
                                <th>Delete</th>
                                <th>Make Admin</th>
                            </tr>
                        </thead>
                        <tbody class = "resultdiv">
                            
                                <?php
                                $res = '';
                                $query = mysqli_query($conn, $select);
                                while ($result = mysqli_fetch_array($query)) {
                                  
                                   $res .= "<tr><td>".$result['id']." </td>
                                    <td>". $result['name']." </td>
                                    <td>". $result['email']. " </td>
                                    <td>". $result['mobile']." </td>
                                    <td>". $result['address']." </td>
                                    <td>". $result['gender']." </td>
                                    <td>". $result['password']." </td>
                                    <td><a class='btn btn-primary btn-sm' href='cust_edit.php?id='".$result['id']." >Edit</a></td>
                                    <td><a class='btn btn-danger btn-sm' href='cust_delete.php?id='".$result['id'].">Delete</a></td>
                                     <td><a class='btn btn-success btn-sm' href='makeadmin.php?id='".$result['id'].".>Make Admin</a></td></tr>";
                               if($_POST['keywords']){
                                echo $res;
                               }
                              echo $res;
                             
                            }
                        } else {
                            ?>
                            <?php
                            $select = "SELECT * FROM  cust_detail WHERE email='$email'";
                            $query = mysqli_query($conn, $select);
                            while ($result = mysqli_fetch_array($query)) {
                                ?> 
                                <tr>
                                    <td><?php echo $result['id']; ?></td>
                                    <td><?php echo $result['name']; ?></td>
                                    <td><?php echo $result['email']; ?></td>
                                    <td><?php echo $result['mobile']; ?></td>
                                    <td><?php echo $result['address']; ?></td>
                                    <td><?php echo $result['gender']; ?></td>
                                    <td><?php echo $result['password']; ?></td>
                                    <td><a class="btn btn-primary btn-sm"href="cust_edit.php?id=<?php echo $result['id']; ?>" >Edit</a></td>
                                    
                                   <td><a class="btn btn-danger btn-sm"href="cust_delete.php?id=<?php echo $result['id']; ?>" Onclick="return myFunction();">Delete</a></td>
                                  
                                </tr> 
                                <?php
                            }
                        }
                        ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</html>