<?php
 
 session_start();
 if(isset($_SESSION['unique_id']))
 {
     header("location: users.php");
 }
 
?>

<?php
    include_once "header.php"; 
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data" >
                <div class="error-txt">
                    This is error message
                </div>
                <div class="name-details">
                    <div class="feild input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="feild input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                   
                    <div class="feild input">
                        <label> Email Adresse</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    
                    </div>
                    <div class="feild input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new password" required>
                        <i class="fas fa-eye" ></i>
                    
                    </div>
                    <div class="feild image">
                        <label>Select Image</label>
                        <input name="image" type="file" required >
                    </div>
                    <div class="feild button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    <div class="link">Alredy signed up? <a href="login.php">Login</a></div>
        
                </form>
            </section>
        
        </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
    
</body>   
</html>