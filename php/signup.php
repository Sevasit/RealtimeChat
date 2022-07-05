<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        // check user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        
            // check that email already exists in the database or not
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");

            if(mysqli_num_rows($sql) > 0) { //if eamil already exists
                echo "$email - This email already exists!";
            }else{
                // check user upload file or not
                if(isset($_FILES['image'])){
                    //if file is uploaded
                    $img_name = $_FILES['image']['name']; // getting user uploaded img name
                    $tmp_name = $_FILES['image']['tmp_name']; // this temporary name is used to save/move file in our folder

                    //explor img and get the last extention like jpg png

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); // here we get the extention of a user uploded img file

                    $extentions = ['png', 'jpeg', 'jpg']; // check img in array
                    if(in_array($img_ext, $extentions) === true){
                        //if user uploaded img ext is matched with any array extentions
                        $time = time();
                        $new_img_name = $time.$img_name;
                        
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ // if user uploaded successfully
                            $status = "Active now";
                            $random_id = rand(time(), 10000000); // random ID for user

                            //let't insert to database
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) 
                            VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}','{$new_img_name}', '{$status}')");

                            if($sql2){ // data insert
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; // using this session we used user unique_id in other php file
                                    echo "success";
                                }
                            }else{
                                echo "Something want wrong";
                            }
                        }
                        
                    }else{
                        echo "Plese select an image  file - png, jpg, jpeg!";
                    }

                }else{
                    echo "Plese select an image file!";
                }
            }

        }else{
            echo "$email - This is not a valid email !";
        }
    }else{
        echo "All input field are required!";
    }
?>