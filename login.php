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
        <section class="form login">
            <header>
                Realtime Chat App
            </header>
            <form action="#">
                <div class="error-txt">This is an error message</div>
                
                <div class="field input">
                    <lable>Email address</lable>
                    <input type="email" name="email" placeholder="Enter your eamil">
                </div>
                <div class="field input">
                    <lable>Password</lable>
                    <input type="password" name="password" placeholder="Enter new password">
                    <i class="fas fa-eye"></i>
                </div>
                
                <div class="field botton">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">signup now</a></div>
        </section>
    </div>

    <script src="java.js/pass-show-hide.js"></script>
    <script src="java.js/login.js"></script>
</body>
</html>