<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleL.css">
    <style>
        body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(b.jpg);
    background-size: cover;
    background-position: center;
    background-image:url("ppp.jpg")

}

    
.wrapper{
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0 , .5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.wrapper.form-box{
    width: 100%;
    padding: 40px;
}

.form-box h2{
    font-size: 2em;
    color: #162938;
    text-align:center;
}

.input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid #162938;
}

.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY (-50%);
    font-size: 1em;
    color: #162938;
    font-weight: 500;
    pointer-events: none;
    transition: .5s;

}
.input-box input:focus~label,
.input-box input:valid~label{
    top: 4px
}

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
   /color: #162938;
    font-weight: 600;
    padding: 0 35px 0 5px;

}

.input-box .icon {
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #162938;
    line-height: 57px;
}

.btn{

    width: 100%;
    height: 45px;
    background: rgb(23, 91, 120);
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    

}
</style>
</head>
<body>
    <?php
   if (isset($_POST['login'])){
    $con=mysqli_connect('localhost','root','','imar');
    $req="select * from login";
    $r=mysqli_query($con,$req);
    while($data=mysqli_fetch_array($r)){
        if($_POST['email']=='imar@gmail.com' || $_POST['password']=='123' ) {
           
           header("location:inde.php");}
         else{ echo'ggggg';
    
    }
}}
    ?>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action ="inde.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input name="email" type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input name="password" type="password" required>
                    <label>Password</label>
                </div>
                <!-- <div class="remember-forgot">
                    <label><input type = "checkbox">
                    Remember me </label>
                    <a href="#"> Forgot Password?</a>
                </div> -->
                <br><br>
                <button type= "submit" class= "btn" name="login">Login</button>
                <!-- <div class="login-register">
                    <p>Don't have an account?<a href="#" class= "register-link">Register</a></p>
                </div> -->
            </form>
        </div>
    </div>



    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>