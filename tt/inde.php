<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>affichage</title>
   <meta name="" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="affichage.css">
   <style>
    body{
    background-image:url("vv.jpg") ;
    background-size:100%;
    background-repeat: no-repeat;

    background-attachment: fixed;
    align-items: center;
}
  table{
    
    background-color: gray;
    border-collapse: collapse;
      width: 80%;
      height: 100%;
      font-size:25px

}
  h1{
         width: 8rem;
         border-bottom: 0.1rem solid BLACK;
          color: black;
          font-size: 2rem;
          font-weight: 600;
  }
th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: red;
    }
    header{
     height: 5rem;
     width: 100%;
     background-color: black /*#f0fff0 hsla(0, 0%, 100%, 0.95)*/;
     display: grid;
      position: relative;
     opacity: 0.6;
     border-bottom: 0.5rem solid white;
    }
    .head{
      display: grid;
      position: relative;
  align-content: center;
  align-items: center;
  justify-content: center;
  text-align: center;
  grid-template-columns: 1fr 1fr;
  font-family: Kanit;
 
    }
    .pages{
      font-size: 1.5rem;
  font-weight: 600;
  color: wheat /*#020202*/;
  text-decoration: none;
  align-content: center;
  align-items: center;
  justify-content: center;
  text-align: center;
 
    }
    .con{
      font-size: 1.8rem;
      font-weight: 600;
      color: white ;
    }
    .inf{
      font-size: 1.2rem;
      font-weight: 500;
      background-color: #bbbaba9c;
    }
    td{
      text-align: center;
      align-content: center;
      align-items: center;
      justify-content: center;
      margin: auto;
    }
    .button{
      width:9rem;
      height: 3rem;
      background-color: #696969;
  display: flex;
  align-items: center;
      justify-content: center;
      position: fixed;
      border-radius: 1rem;
      right:20px;
      bottom: 20px;
      
      cursor: pointer;
    }
    .button a{
      color: #ffffff;
      font-size: 1.8rem;
      text-decoration: none;
    }
   </style>
</head> 
<body>
  <header>
    <div class="head">
    <a class="pages" href="inde.php">Reservation de parking</a>
    <a class="pages" href="log.php">inscription</a>
    </div>
  </header>

<center>
<h1> parking</h1>
 
        <table border="5px">
            <tr class="con">
                <td>Code</td>
                <td>Nom</td>
                <td>Prénom</td> 
                <td>Durée</td>
                <td>Date d'entrée</td>
                <td>Date de sortie</td>             
                <td>telephone</td>
                <td>matricule</td>
            </tr>
    
    <?php 
    $con=mysqli_connect('localhost','root','','imar');
      $requete="select * from parking";
      $req=mysqli_query($con,$requete);
while($data=mysqli_fetch_array($req)){ ?>
      <tr class="inf">
          <td> <?php echo $data['0']?></td>
          <td> <?php echo $data['1']?></td>
          <td> <?php echo $data['2']?></td>         
          <td> <?php echo $data['3']?></td>
          <td> <?php echo $data['4']?></td>
          <td> <?php echo $data['5']?></td>
          <td> <?php echo $data['6']?></td>
          <td> <?php echo $data['7']?></td>
          
      </tr>
  <?php  }?>
 </table>
    </center>
    <div class="button">
    <a  href="../input.html">Retour</a>
    </div>
    </body>
</html>