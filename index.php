<?php
    session_start();
    if(isset($_SESSION['unique_id'])){ // if user is logged in
        header("location: users.php");
    }
?>

<?php
    include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form sigup">
            <header>
                Realtime Chat App
            </header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-detail">
                    <div class="field input">
                        <lable>First Name</lable>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <lable>Last Name</lable>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <lable>Email address</lable>
                    <input type="email" name="email" placeholder="Enter your eamil" required>
                </div>
                <div class="field input">
                    <lable>Password</lable>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <lable>Select image</lable>
                    <input type="file" name="image" required>
                </div>
                <div class="field botton">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

    <script src="java.js/pass-show-hide.js"></script>
    <script src="java.js/signup.js"></script>
</body>
</html>