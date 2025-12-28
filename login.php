<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <style>
    .popup {
  background: white;
  width: 420px;
  padding: 30px 40px;
  position: absolute;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  border-radius: 8px;
  font-family: sans-serif;
  text-align: center;
  display: none;
}

.popup img {
  width: 100px;
  margin-top: -70px;
  border-radius: 50px;
  box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
  mix-blend-mode: multiply;
  /* background-colors: transparent; */
  /* background: none; */
}

.popup h2 {
  font-size: 25px;
  color: #000;
}
.popup p {
  line-height: 22px;
  font-size: 16px;
  color: #000;
}

button {
  width: 100%;
  margin-top: 50px;
  padding: 10px 0;
  background: #3866a7;
  color: #fff;
  border: 0;
  outline: none;
  font-size: 18px;
  border-radius: 4px;
  cursor: pointer;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  display: block;
}
  </style>
</head>

<body>
<?php
Session_Start();
if(isset($_POST['s'])){
  $cn=mysqli_connect('localhost','root','','imar');
  $req="select * from user where email= '".$_POST['em']."' and password= '".$_POST['ps']."' ";
  $r=mysqli_query($cn,$req);
  $nb_lignes=mysqli_num_rows($r);

  if($nb_lignes>=1){
    $data=mysqli_fetch_row($r);
    $_SESSION['user']=$data['0'];
    header("location: accueil.html");
  }
  else ?>
   
    <div class="popup">
    <img src="img/vvv.png" />
    <br />
    <br />
    <h2>Annonce</h2>
    <p>
    <?php echo "Email and/or Password incorrect";?>
    </p>
    <button type="button" onclick="closePopup()" class="close">OK</button>
  </div>
  <script src="js/popup.js"></script>
  <?php
}
?>
</body>
</html>