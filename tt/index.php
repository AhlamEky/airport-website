<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="css/style,header,footer.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styleStas.css" />
    
  <div class="img"></div>
  <div class="center">
    <div class="title"><h1>Stationnements et transport</h1></div>
    <div class="sub_title">
      <h3>Transport au départ et en direction de hassan 1</h3>
    </div>
  </div>
<section>
    <div class="row">
      <h1 class="section-heading">les Services de transport</h1></div>
      <p class="para">l'aeroport hassan 1 offre plusieurs moyens de transport  </p>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="bi bi-taxi-front"></i>
          </div>
          <h4>taxi</h4>
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
          <h4>bus</h4>
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
          <h4>location de voiture</h4>
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
      $numero=$_POST['Number']; 
      $matricule=$_POST['matricule'];
      $s=("INSERT INTO `parking`(`nom`, `prenom`, `date`, `numero`, `matricule`) VALUES ('$nom','$prenom','$numero','$matricule')");
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
              <h3>Bien choisir son parking</h3>
              <p>
                Et si bien se garer permettait de mieux voyager ? Retrouvez toutes
                les indications pour chacun de nos parkings et prenez un bon départ
                (ou une belle arrivée).
              </p>
            </div>
            <div class="food-items">
                    <div class="food-item featured">
                      <div class="food-img">
                        <img src="p.png"alt="food image"/> </div>
                      <div class="food-content">
                        <h2 class="food-name">5min a 1h</h2>
                        <div class="line"></div>
                        <h3 class="food-price"></h3>
                        <p class="category">prix: <span>5dh TTC</span></p>
                      </div>
                    </div>
                    <div class="food-item today-special">
                      <div class="food-img">
                        <img src="p.png" alt="food image" />
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
                          src="p.png"
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
                          src="p.png"
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
                          src="p.png"
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
                          src="p.png"
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
                          src="p.png"
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
                </div>
              </section>
</html>
