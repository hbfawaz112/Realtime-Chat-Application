<?php
    include_once "header.php"; 
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">
                    
                </div>
                    <div class="feild input">
                        <label> Email Adresse</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="feild input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye" ></i>
                    </div>
                    <div class="feild button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        
                </form>
        </section>
        
        
    </div>
<script src="javascript/pass-show-hide.js"></script>
<script src="javascript/login.js"></script>

</body>   
</html>