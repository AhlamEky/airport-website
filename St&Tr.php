<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="css/style,header,footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styleStas.css" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
    <title>Aéroport-Stationnements&transport</title>
    <!-- Favicons -->
    <link href="img/IMAR (3).png" rel="icon" />
    <link href="img/IMAR (3).png" rel="apple-touch-icon" />

  </head>
  <body>
     <!----------------------------------------------->
    <!----------------------------------------------->
    <header class="header sticky nav-open">
      <nav class="nav-logo">
        <img class="logo" src="css/img/IMAR (4).png" alt="logo" />
        <h22>Aéroport Hassan I Laâyoune</h22>
      </nav>
      <div class="nav-container">
        <nav class="nav">
          <a class="nav-link" href="accueil.html">
            <ion-icon name="home" class="icon"></ion-icon>Accueil</a
          >

          <a class="nav-link" href="vols.php">Vols</a>
          <a class="nav-link" href="St&Tr.php">Parking & Transport</a>
          <a class="nav-link" href="commerce.html">Commerce</a>
          <a class="nav-link" href="guide.html">Guide</a>
        </nav>
      </div>
      <div class="icon-header">
        <div class="icon-search">
          <i class="fas fa-search" onclick="showbar()" id="search-btn"></i>
        <!--  <i class="fas fa-user" onclick="showform()" id="user-btn"></i>-->  
        </dav>
    
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
  <div class="img"></div>
  <div class="center">
    <div class="title">
      <h1>Parking et transport</h1>
    </div>
    <div class="sub_title">
      <h3>Transport au départ et en direction de hassan 1</h3>
    </div>
  </div>
<section>
 
    
      <section class="book" id="book">
        <div class="heading">
          <span>L</span>
          <span>E</span>
          <span>S</span>
          &nbsp;
          &nbsp;
          <span>S</span>
          <span>E</span>
          <span>R</span>
          <span>V</span>
          <span>I</span>
          <span>C</span>
          <span>E</span>
          <span>S</span>
          &nbsp;
      &nbsp;
          <span>D</span>
          <span>E</span>
          &nbsp;
      &nbsp;
          <span>T</span>
          <span>R</span>
          <span>A</span>
          <span>N</span>
          <span>S</span>
          <span>P</span>
          <span>O</span>
          <span>R</span>
          <span>T</span>
         
      </div>
      </section>
      <div class="row"></div>
      <p class="para">l'aeroport hassan 1 offre plusieurs moyens de transport  </p>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="bi bi-taxi-front"></i>
          </div>
          <h44>taxi</h44>
          <p>
            Les taxis sont identifiables par leurs enseignes et numéros. La station Taxis est située au niveau de l’esplanade «Arrivée»..
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="bi bi-bus-front"></i>
          </div>
          <h44>bus</h44>
          <p>
            Le service de la ligne 747 est offert 24 heures par jour, 7 jours sur 7
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="bi bi-ev-front-fill"></i>
          </div>
          <h44>location de voiture</h44>
          <p>
            pour reserver une voiture :https://locationvoitureslaayoune.com/</p>
          </p>
        </div>
      </div>
      </div>
      </section>
      <?php 
      if (isset($_POST['reserver'])){
        $con=mysqli_connect('localhost','root','','imar');
        $nom=$_POST['Name'];
        $prenom=$_POST['prenom'];
        $date=$_POST['date']; 
        $date_entre=$_POST['datee']; 
        $date_sortie=$_POST['dates']; 
        $numero=$_POST['Number']; 
        $matricule=$_POST['matricule'];
        $s=("insert into parking(`nom`, `prenom`, `durée`,`date_entrée`,`date_sortie`, `numero`, `matricule`) VALUES ('$nom','$prenom','$date','$date_entre','$date_sortie','$numero','$matricule')");
        $r=mysqli_query($con,$s);
      }
      else echo'nnnnn'
        ?>
        <form action="" method="post">
    <section class="reserver">
      <div class="reservation">
              <h1 class="form-title">Reserver votre parking en ligne</h1>
              <form action="#">
                <div class="main-user-info">
                  <div class="user-input-box">
                    <label for="fullName">votre nom</label>
                    <input type="text" id="fullName"  name="Name" placeholder="Enter Full Name"/>
                  </div>
                  <div class="user-input-box">
                    <label for="username">prenom</label>
                    <input type="text" id="username" name="prenom" placeholder="Enter Username"/>
                  </div>
                  <div class="user-input-box">
                    <label for="email">dure de reservation</label>
                    <input type="text" id="date" name="date" placeholder="Enter la duree"/>
                  </div>
                  <div class="user-input-box">
                    <label for="phoneNumber">numero de telephone</label>
                    <input type="text" id="phoneNumber" name="Number" placeholder="Enter Phone Number"/>
                  </div>
                  <div class="user-input-box">
                    <label for="password">date d'entre</label>
                    <input type="date" id="date" name="datee" placeholder="Enter votre date"/>
                  </div>
                  <div class="user-input-box">
                    <label for="confirmPassword">date de sortie</label>
                    <input type="date" id="date" name="dates" placeholder="entrer la date"/>
                  </div>
                </div>
                <div class="user-input-box">
                  <label for="phoneNumber">matricule </label>
                  <input type="text" id="matricule" name="matricule" placeholder="Enter matricule"/>
                </div>
                <div class="form-submit-btn">
                  <input type="submit" value="reserver" name="reserver">
                </div>
              </form>
            </div>
          </div>
      </section>
  <section class="menu">
          <div class="menu-container">
            <div class="menu-head">
              <div class="headingg">
                <span>B</span>
                <span>I</span>
                <span>E</span>
                <span>N</span>
                &nbsp;
      &nbsp;
                <span>C</span>
                <span>H</span>
                <span>O</span>
                <span>I</span>
                <span>S</span>
                <span>I</span>
                <span>R</span> 
                &nbsp;
      &nbsp;
                <span>S</span>
                <span>O</span>
                <span>N</span>
                &nbsp;
      &nbsp;
                <span>P</span>
                <span>A</span>
                <span>R</span>
                <span>K</span>
                <span>I</span>
                <span>N</span>
                <span>G</span></div>
              <p class="paraa">
                Et si bien se garer permettait de mieux voyager ? Retrouvez toutes
                les indications pour chacun de nos parkings et prenez un bon départ
                (ou une belle arrivée).
              </p>
           </div>
            <div class="food-items">
                    <div class="food-item featured">
                      <div class="food-img">
                        <img src="css/img/p.png"alt="food image"/> </div>
                      <div class="food-content">
                        <h2 class="food-name">5min a 1h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>5dh TTC</span></p>
                      </div>
                    </div>
                    <div class="food-item today-special">
                      <div class="food-img">
                        <img src="css/img/p.png" alt="food image" />
                      </div>
                      <div class="food-content">
                        <h2 class="food-name">1h a 2h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>8dh TTC</span></p>
                      </div>
                    </div>
          
                    <div class="food-item new-arrival">
                      <div class="food-img">
                        <img
                          src="css/img/p.png"
                          alt="food image"
                        />
                      </div>
                      <div class="food-content">
                        <h2 class="food-name">2h a 3h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>10dh TTC</span></p>
                      </div>
                    </div>
                    <div class="food-item featured">
                      <div class="food-img">
                        <img
                          src="css/img/p.png"
                          alt="food image"
                        />
                      </div>
                      <div class="food-content">
                        <h2 class="food-name">3h a 4h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>12dh TTC</span></p>
                      </div>
                    </div>
          
                    <div class="food-item today-special">
                      <div class="food-img">
                        <img
                          src="css/img/p.png"
                          alt="food image"
                        />
                      </div>
                      <div class="food-content">
                        <h2 class="food-name">4h a 5h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>15dh TTC</span></p>
                      </div>
                    </div>
          
                    <div class="food-item new-arrival">
                      <div class="food-img">
                        <img
                          src="css/img/p.png"
                          alt="food image"
                        />
                      </div>
                      <div class="food-content">
                        <h2 class="food-name">5h a 12h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>20dh TTC</span></p>
                      </div>
                    </div>
          
                    <div class="food-item featured">
                      <div class="food-img">
                        <img
                          src="css/img/p.png"
                          alt="food image"
                        />
                      </div>
                      <div class="food-content">
                        <h2 class="food-name">12h a 24h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>30dh TTC</span></p>
                      </div></div></div>
                    </div>
                  
                </div>
              </section>
              <!----------------------------------------------->
<!----------------------------------------------->

<footer class="footer">
  
  <div class="logo-footer">
    <div class="cent-foo">
      <img src="css/img/OIP2.jfif" class="logo-fo">
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
  <div  class="list-footer">
    
    <a href="vols.php" class="vol-foot">
     <img src="css/img/vol.jfif" class="icon-foot" >
      <h8>Vols</h8>
     <p class="col-foot"></p>
    
    </a>
    <a href="St&Tr.php"  class="vol-foot">
      <img src="css/img/station.png" class="icon-foot">
      <h8>Stationnements et Transports</h8>
      <p class="col-foot"></p>
    </a>
    <a href="commerce.html"  class="vol-foot">
      <img src="css/img/e-commerce.png" class="icon-foot">
      <h8>Commerce</h8>
      <p class="col-foot"></p>
    </a>
  
  
    <a href="guide.html"  class="vol-foot">
      <img src="css/img/guide.png" class="icon-foot">
      <h8>Guide</h8>
      <p class="col-foot"></p>
    </a>
    <a href="contacte.html"  class="vol-foot">
      <ion-icon name="mail-outline"></ion-icon>
      <h8>Contactez-nous</h8>
      <p class="col-foot"></p>
    </a>
  
  </div>
<!----------------------------------------------->
<!----------------------------------------------->
<p class="footer-copyright">
  Copyright &copy; <span class="year"> 2021 </span> by IMAR, Aéroport Hassan  I Laâyoune.
</p>
</footer>
           <!----------------------------------------------->
<!----------------------------------------------->
    <script defor src="script/JavaScript.js"></script>
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
