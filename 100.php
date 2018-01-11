$sql = "INSERT INTO user11(cname,password)
                                            VALUES ('$usrname', '$password')";
           if (mysqli_query($conn, $sql)) {
               $last_id = $conn->insert_id;
               //echo $last_id;
               //var_dump($_POST['check']);
               if(!empty($_POST['check'])){
                   echo '1' . '<br>';
                   $sql = "INSERT INTO user(id,email,mobile,address,secondary_add,pin)
                       VALUES('$last_id','$newemail','$mobile','$address','$second_add','$pin')";
               }
               else{
                   //echo '2'  . '<br>';
                   $sql = "INSERT INTO user(id,email,mobile,address,secondary_add,pin)
                       VALUES('$last_id','$newemail','$mobile','$address','$address','$pin')";
               }
               
               mysqli_query($conn, $sql); 
//                else {
//                    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
//                }
           }
       } /* else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         } */
       ?>