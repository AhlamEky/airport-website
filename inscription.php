<?php
Session_Start();
if(isset($_POST['rg'])){
  $cn=mysqli_connect('localhost','root','','imar');
  $req="insert into user(username,email,password) values ('".$_POST['un']."','".$_POST['em']."','".$_POST['ps']."') ";
  
  if(mysqli_query($cn,$req)){
   /* $_SESSION['user']=$data['0'];*/
   
  }
  else 
    echo "not ok";
}
?>