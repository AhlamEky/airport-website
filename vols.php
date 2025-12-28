<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/style,header,footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/stylevol.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <title>Aéroport-Vols</title>
    <link href="img/IMAR (4).png" rel="icon" />
    <link href="img/IMAR (4).png" rel="apple-touch-icon" />
  </head>
  <body>
    <!----------------------------------------------->
    <!----------------------------------------------->
    <header class="header sticky nav-open">
      <nav class="navv-logo">
        <img class="logo" src="css/img/IMAR (4).png" alt="logo" />
        <h22>Aéroport Hassan I Laâyoune</h22>
      </nav>
      <div class="nav-container">
        <nav class="navv">
          <a class="navv-linkk" href="accueil.html">
            <ion-icon name="home" class="icon"></ion-icon>Accueil</a
          >

          <a class="navv-linkk" href="vols.php">Vols</a>
          <a class="navv-linkk" href="St&Tr.php">Parking & Transport</a>
          <a class="navv-linkk" href="commerce.html">Commerce</a>
          <a class="navv-linkk" href="guide.html">Guide</a>
        </nav>
      </div>
      <div class="icon-header">
        <div class="icon-search">
          <i class="fas fa-search" onclick="showbar()" id="search-btn"></i>
        </div>

        <button class="mobile-nav-btn">
          <ion-icon name="menu"></ion-icon>
          <ion-icon name="close"></ion-icon>
        </button>
      </div>

      <form action="" class="search-form">
        <input
          type="search"
          id="search-bar"
          placeholder="Ce que vous recherchez..."
        />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>
    <!----------------------------------------------->
    <!----------------------------------------------->

    <!----------------------------------------------->
    <!----------------------------------------------->
    <main>
      <div class="img"></div>
      <div class="center">
        <div class="title">
          <h1>Départ et Arrivée</h1>
        </div>
        <div class="sub_title">
          <p>
            Suivez les vols au départ et à l'arrivée de l'aéroport Hassan I
            laâyoune
          </p>
        </div>
      </div>
 <!----------------------------------------------->
    <!----------------------------------------------->
    <section class="cc">
    <div class="part1">
    <form method="POST" action="">
        <div class="tabs">
          <h2 class="active" name="depart" >

            <i class="fa fa-plane-departure"></i>
            Départ
          </h2>
         
        </div>
        <div class="tab-content">
          <div class="active">
            <nav class="input">
            
            <select name="n" class="arrive">
                <option>CASABLANCA</option>
                <option>LAS PALMAS</option>
                <option>AGADIR</option>
                <option>DAKHLA</option>
                
              </select>

             
              <select name="j" class="arrive">
                <option>Lundi</option>
                <option>Mardi</option>
                <option>Mercredi</option>
                <option>Jeudi</option>
                <option>Vendredi</option>
                <option>Samedi</option>
                <option>Dimanche</option>
              </select>
              <button type="submit" name="k" class="arrive">Rechercher <i class="fa-solid fa-magnifying-glass"></i></button>
  

            </nav>
            <?php
            try{
$bdd=new PDO('mysql:host=localhost;dbname=imar','root',''); 
}catch (Exception $e){
    echo'Erreur de connexion' . $e->getMessage();
}
If(isset ($_POST['k'])){
        
            if(!empty($_POST['n'])&&!empty($_POST['j'])){
        $nom=htmlspecialchars($_POST['n']);
        
        $jour=htmlspecialchars($_POST['j']);
        $contenu=$bdd->prepare('SELECT * FROM depart WHERE destination=?   AND jour=?' );
        $contenu->execute(array($nom,$jour));
        
        echo'<table>';
        while($ligne =$contenu->fetch()){
       
            echo'<tr>';
               echo'<td>';
                 echo $ligne['cie'];
               echo'</td>';
               echo'<td>';
               echo $ligne['num_vol'];
             echo'</td>';
             echo'<td>';
             echo $ligne['heure'];
           echo'</td>';
           echo'<td>';
           echo $ligne['destination'];
         echo'</td>';
         echo'<td>';
         echo $ligne['jour'];
       echo'</td>';
       echo'</tr>';
             
        }
        echo'</table>';
      }else{
        echo'<span class="erreur">veuillez remplir les champs svp:</span>';
     }
   }?>
            </div>

</div>
</form>
</div>

    <div class="part2">
            <form method="POST" action="">
        <div class="tabs">
          <h2 class="active" name="depart" >

            <i class="fa fa-plane-arrival"></i>
            Arrivée
          </h2>
         
        </div>
        <div class="tab-content">
          <div class="active">
            <nav class="input">
            
            <select name="p" class="arrive">
                <option>CASABLANCA</option>
                <option>LAS PALMAS</option>
                <option>AGADIR</option>
                <option>DAKHLA</option>
                
              </select>
              
              <select name="d" class="arrive">
                <option>Lundi</option>
                <option>Mardi</option>
                <option>Mercredi</option>
                <option>Jeudi</option>
                <option>Vendredi</option>
                <option>Samedi</option>
                <option>Dimanche</option>
              </select>
              <button type="submit" name="s" class="arrive">Rechercher <i class="fa-solid fa-magnifying-glass"></i></button>
  

            </nav>
            <?php
            try{
$bdd=new PDO('mysql:host=localhost;dbname=imar','root',''); 
}catch (Exception $e){
    echo'Erreur de connexion' . $e->getMessage();
}
If(isset ($_POST['s'])){
        
            if(!empty($_POST['p'])&&!empty($_POST['d'])){
        $prevenant=htmlspecialchars($_POST['p']);
        
        $jours=htmlspecialchars($_POST['d']);
        $contenu=$bdd->prepare('SELECT * FROM arrive WHERE prevenant=?   AND jour=?' );
        $contenu->execute(array($prevenant,$jours));
        
        echo'<table>';
        while($ligne =$contenu->fetch()){
       
            echo'<tr>';
               echo'<td>';
                 echo $ligne['cie'];
               echo'</td>';
               echo'<td>';
               echo $ligne['num_vol'];
             echo'</td>';
             echo'<td>';
             echo $ligne['heure'];
           echo'</td>';
           echo'<td>';
           echo $ligne['prevenant'];
         echo'</td>';
         echo'<td>';
         echo $ligne['jour'];
       echo'</td>';
       echo'</tr>';
             
        }
        echo'</table>';
      } else
        echo" veuillez remplir les champs svp";
      
   }?>
            </div>
    </div>
</form>
</div>
</section>

 <!----------------------------------------------->
    <!----------------------------------------------->

      <section class="taab">
        <nav class="table-vol">
          <div class="title-head">
            <div class="titre">CIE</div>
            <div class="titre">N° Vol</div>
            <div class="titre">Provenance</div>
            <div class="titre">Arrivée</div>
            <div class="titre">Départ</div>
            <div class="titre">Destination</div>
          </div>
          <div class="accordion">
            <div class="jour">Lundi</div>
            <div class="t-infor">
              <div class="infor">
                <div>RAM</div>
                <div>AT1410/1411</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>10:15</div>
                <div><i class="fa fa-plane-departure"></i>11:15</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1414/1418</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>18:15</div>
                <div><i class="fa fa-plane-departure"></i>19:05</div>
                <div>LAS PALMAS</div>
              </div>
              <div class="infor">
                <div>CMN</div>
                <div>AT1419/1415</div>
                <div>LAS PALMAS</div>
                <div><i class="fa fa-plane-arrival"></i>21:30</div>
                <div><i class="fa fa-plane-departure"></i>22:20</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1493</div>
                <div>DAKHLA</div>
                <div><i class="fa fa-plane-arrival"></i>21:35</div>
                <div><i class="fa fa-plane-departure"></i>22:25</div>
                <div>AGADIR</div>
              </div>
            </div>
          </div>

          <div class="accordion">
            <div class="jour">Mardi</div>
            <div class="t-infor">
              <div class="infor">
                <div>RAM</div>
                <div>AT1410/1411</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>10:15</div>
                <div><i class="fa fa-plane-departure"></i>11:15</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>IBB</div>
                <div>AT6102/6103</div>
                <div>LAS PALMAS</div>
                <div><i class="fa fa-plane-arrival"></i>12:15</div>
                <div><i class="fa fa-plane-departure"></i>12:45</div>
                <div>LAS PALMAS</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1412/1413</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>20:00</div>
                <div><i class="fa fa-plane-departure"></i>20:50</div>
                <div>CASA BLANCA</div>
              </div>
            </div>
          </div>

          <div class="accordion">
            <div class="jour">Mercredi</div>
            <div class="t-infor">
              <div class="infor">
                <div>RAM</div>
                <div>AT1410/1411</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>10:15</div>
                <div><i class="fa fa-plane-departure"></i>11:15</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1414/1418</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>18:15</div>
                <div><i class="fa fa-plane-departure"></i>19:05</div>
                <div>LAS PALMAS</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1491</div>
                <div>AGADIR</div>
                <div><i class="fa fa-plane-arrival"></i>19:10</div>
                <div><i class="fa fa-plane-departure"></i>20:00</div>
                <div>DAKHLA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1419/1415</div>
                <div>LAS PALMAS</div>
                <div><i class="fa fa-plane-arrival"></i>21:30</div>
                <div><i class="fa fa-plane-departure"></i>22:20</div>
                <div>CASA BLANCA</div>
              </div>
            </div>
          </div>

          <div class="accordion">
            <div class="jour">Jeudi</div>
            <div class="t-infor">
              <div class="infor">
                <div>RAM</div>
                <div>AT1410/1411</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>10:15</div>
                <div><i class="fa fa-plane-departure"></i>11:15</div>
                <div>CASA BLANCA</div>
              </div>

              <div class="infor">
                <div>RAM</div>
                <div>AT999/998</div>
                <div>LAS PALMAS</div>
                <div><i class="fa fa-plane-arrival"></i>16:20</div>
                <div><i class="fa fa-plane-departure"></i>17:00</div>
                <div>LAS PALMAS</div>
              </div>

              <div class="infor">
                <div>RAM</div>
                <div>AT1412/1413</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>20:00</div>
                <div><i class="fa fa-plane-departure"></i>20:50</div>
                <div>CASA BLANCA</div>
              </div>
            </div>
          </div>

          <div class="accordion">
            <div class="jour">Vendredi</div>
            <div class="t-infor">
              <div class="infor">
                <div>RAM</div>
                <div>AT1410/1411</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>10:15</div>
                <div><i class="fa fa-plane-departure"></i>11:15</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1414/14118</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>18:00</div>
                <div><i class="fa fa-plane-departure"></i>19:05</div>
                <div>LAS PALMAS</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1419/1415</div>
                <div>LAS PALMAS</div>
                <div><i class="fa fa-plane-arrival"></i>21:30</div>
                <div><i class="fa fa-plane-departure"></i>22:20</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1493</div>
                <div>DAKHLA</div>
                <div><i class="fa fa-plane-arrival"></i>21:35</div>
                <div><i class="fa fa-plane-departure"></i>22:25</div>
                <div>AGADIR</div>
              </div>
            </div>
          </div>

          <div class="accordion">
            <div class="jour">Samedi</div>
            <div class="t-infor">
              <div class="infor">
                <div>RAM</div>
                <div>AT1410/1411</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>10:15</div>
                <div><i class="fa fa-plane-departure"></i>11:15</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>IBB</div>
                <div>NT6102/6103</div>
                <div>LAS PALMAS</div>
                <div><i class="fa fa-plane-arrival"></i>12:15</div>
                <div><i class="fa fa-plane-departure"></i>12:45</div>
                <div>LAS PALMAS</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1412/1413</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>20:00</div>
                <div><i class="fa fa-plane-departure"></i>20:50</div>
                <div>CASA BLANCA</div>
              </div>
            </div>
          </div>

          <div class="accordion">
            <div class="jour">Dimanche</div>
            <div class="t-infor">
              <div class="infor">
                <div>RAM</div>
                <div>AT1410/1411</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>10:15</div>
                <div><i class="fa fa-plane-departure"></i>11:15</div>
                <div>CASA BLANCA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1491</div>
                <div>AGADIR</div>
                <div><i class="fa fa-plane-arrival"></i>19:15</div>
                <div><i class="fa fa-plane-departure"></i>20:00</div>
                <div>DAKHLA</div>
              </div>
              <div class="infor">
                <div>RAM</div>
                <div>AT1412/1413</div>
                <div>CASA BLANCA</div>
                <div><i class="fa fa-plane-arrival"></i>20:00</div>
                <div><i class="fa fa-plane-departure"></i>20:50</div>
                <div>CASA BLANCA</div>
              </div>
            </div>
          </div>
        </nav>
      </section>

      <!----------------------------------------------->
      <!----------------------------------------------->
    </main>
    <footer class="footer">
      <div class="logo-footer">
        <div class="cent-foo">
          <img src="css/img/OIP2.jfif" class="logo-fo" />
          <h7>Aéroport Hassan I Laâyoune</h7>
        </div>
        <div class="reseau-s">
          <ion-icon name="logo-tiktok" class="logo-tiktok"></ion-icon>
          <ion-icon name="logo-facebook" class="logo-facebook"></ion-icon>
          <ion-icon name="logo-twitter" class="logo-twitter"></ion-icon>
          <ion-icon name="logo-instagram" class="logo-instagram"></ion-icon>
        </div>
      </div>
      <!----------------------------------------------->
      <!----------------------------------------------->
      <div class="list-footer">
        <a href="vols.php" class="vol-foot">
          <img src="css/img/vol.jfif" class="icon-foot" />
          <h8>Vols</h8>
          <p class="col-foot"></p>
        </a>
        <a href="St&Tr.php" class="vol-foot">
          <img src="css/img/station.png" class="icon-foot" />
          <h8>Parking & Transports</h8>
          <p class="col-foot"></p>
        </a>
        <a href="commerce.html" class="vol-foot">
          <img src="css/img/e-commerce.png" class="icon-foot" />
          <h8>Commerce</h8>
          <p class="col-foot"></p>
        </a>

        <a href="guide.html" class="vol-foot">
          <img src="css/img/guide.png" class="icon-foot" />
          <h8>Guide</h8>
          <p class="col-foot"></p>
        </a>
        <a href="contacte.html" class="vol-foot">
          <ion-icon name="mail-outline"></ion-icon>
          <h8>Contactez-nous</h8>
          <p class="col-foot"></p>
        </a>
      </div>
      <!----------------------------------------------->
      <!----------------------------------------------->
      <p class="footer-copyright">
        Copyright &copy; <span class="year"> 2021 </span> by IMAR, Aéroport
        Hassan I Laâyoune.
      </p>
    </footer>
    <!----------------------------------------------->
    <!----------------------------------------------->
    <script defor src="script/Script.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
