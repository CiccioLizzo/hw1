<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apple (Italia) </title>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="mhw3.css">
  <script src="mhw3.js"defer></script>
</head>
<body>

  
  <header>
    <nav class="navbar">
     
      <div class="nav-left">
        <a href="#"><img src="immagini home/logo.png" alt="Apple Logo"></a>
      </div>

      

   
      
      
      <div class="nav-menu"> 
        <a href="#">Store</a>
        <a href="mac.html" class="active">Mac</a>
        <a href="ipad.html" class="active">iPad</a>
        <a href="iphone.html" class="active">iPhone</a>
        <a href="watch.html" class="active">Watch</a>
        <a href="#">AirPods</a>
        <a href="#">TV & Casa</a>
        <a href="#">Intrattenimento</a>
        <a href="#">Accessori</a>
        <a href="#">Supporto</a>
        
        
      </div>
      
      <div class="nav-right">
        <a href="#"><img src="immagini home/lente.png" alt="Search"></a>
        <a href="#"><img src="immagini home/bag.png" alt="Cart"></a>
       <button class="hamburger-menu" aria-label="Menu">&#9776;</button>
        
      </div>

     
     
    </nav>
  </header>

 
<div id="dropdown-menu" class="fullscreen-dropdown">
  <div class="dropdown-content" id="dropdown-columns">
    
  </div>
</div>


<div id="search-menu" class="search-menu">
  <div class="search-content">
    
    <input type="text" placeholder="Cerca su Apple.com"class="search-input">
    <div class="search-columns">
    <h3>Link rapidi</h3>
    <div class="search-list">
      <a href="#">➔ Trova uno Store</a>
      <a href="#">➔ Accessori</a>
      <a href="#">➔ AirPods</a>
      <a href="#">➔ AirTag</a>
      <a href="#">➔ Apple Trade In</a>
    </div>
  </div>
  </div>
</div>


<?php


session_start();
$username = null;
if (isset($_SESSION['user_id'])) {
    require_once __DIR__ . '/api/db.php';
    $stmt = $conn->prepare("SELECT username FROM utenti WHERE id = ?");
    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        $username = $user['username'];
    }
    $stmt->close();
}
?>
<div id="cart-menu" class="cart-menu">
  <div class="cart-content">
    <h2>La shopping bag è vuota.</h2>
    <?php if ($username): ?>
      <p>Benvenuto, <b><?= htmlspecialchars($username) ?></b>!</p>
      <div class="cart-columns">
        <h3>Il mio profilo</h3>
        <div class="cart-list">
          <a href="#">Ordini</a>
          <a href="#">I tuoi articoli salvati</a>
          <a href="#">Account</a>
          <form action="api/logout.php" method="post" style="margin-top:10px;">
            <button type="submit" style="background:#0071e3;color:#fff;border:none;padding:10px 20px;border-radius:20px;cursor:pointer;">Logout</button>
          </form>
        </div>
      </div>
    <?php else: ?>
      <p><a href="login.html">Accedi</a> per vedere se hai articoli salvati</p>
      <div class="cart-columns">
        <h3>Il mio profilo</h3>
        <div class="cart-list">
          <a href="#">Ordini</a>
          <a href="#">I tuoi articoli salvati</a>
          <a href="#">Account</a>
          <a href="login.html">Accedi</a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>




 
  <section class="hero hero-iphone16pro">
    
      <div class="hero-content" >
        <h1>iPhone 16 Pro</h1>
      <h2>Progettato per Apple Intelligence</h2>
      </div>
      
      <div class="hero-buttons">
        <a href="#" class="btn-apple">Scopri di più</a>
        <a href="#" class="btn-apple">Acquista</a>
      </div>
      
      <p class="apple-intel">Apple Intelligence sarà disponibile in italiano da inizio aprile.</p>
    
  </section>

  
  <section class="hero hero-iphone16">

    <div class="hero-content">
        <h1>iPhone 16</h1>
      <h2>Progettato per Apple Intelligence</h2>
      </div>

      <div class="hero-buttons">
        <a href="#" class="btn-apple">Scopri di più</a>
        <a href="#" class="btn-apple">Acquista</a>
      </div>
      
      <p class="apple-intel">Apple Intelligence sarà disponibile in italiano da inizio aprile.</p>
    
  </section>

 
  <section class="herolarge hero-airpods4">

    <div class="hero-content-airpods">
        
      <h1>Air Pods 4</h1>
      <h2>Anche con cancellazione attiva<br> del rumore. </h2>
      </div>

      <div class="hero-buttons-airpods">
        <a href="#" class="btn-apple-airpods">Scopri di più</a>
        <a href="#" class="btn-apple-airpods">Acquista</a>
      </div>
    
  </section>

 
  <section class="two-col">
  
    <article class="col-item col-ipad">
      <div class="col-content">
        <h2>iPad</h2>
        <p>Ora con il velocissimo chip A16 e il doppio <br> dello spazio di archiviazione base.</p>
     
        <div class="hero-buttons-col">
          <a href="#" class="btn-apple">Scopri di più</a>
          <a href="#" class="btn-apple">Acquista</a>
        </div>
      </div>
      
    </article>

  
    <article class="col-item col-macbook">
      <div class="col-content">
        <h2>MacBook air</h2>
        <p>Colore celeste. <br>Prestazioni celestiali, con M4</br> </p>
      
        <div class="hero-buttons-col">
          <a href="#" class="btn-apple">Scopri di più</a>
          <a href="#" class="btn-apple">Acquista</a>
        </div>

        <div>
          <p class="apple-intel-iphone">Progettato per Apple Intelligence.<br>Apple Intelligence sarà disponibile in italiano da inizio aprile.</p>
        </div>
        
      </div>
    </article>
  </section>

  
  <section class="two-col">
    <article class="col-item col-tradein">
      <div class="col-content">
        <h2>Apple TradeIn</h2>
        <p>Puoi ricevere un credito da 160€<br> a 750€ se dai in permuta <br> il tuo iPhone 12 o successivo</p>
      
        <div class="hero-buttons-col">
          <a href="#" class="btn-apple">Guarda quanto vale</a>
        </div>
      </div>
        

      
    </article>

    <article class="col-item col-intelligence">
      <div class="col-content">
        <h2>Apple Intelligence</h2>
        <p>L'intelligenza artificiale diventa naturale. <br> Disponibile in Italia da inizio Aprile</p>
      
        <div class="hero-buttons-col">
          <a href="#" class="btn-apple">Scopri di più</a>
        </div>
      </div>
      
    </article>
  </section>
      

  <section class="two-col">
    <article class="col-item col-fitness">
      <div class="col-content">
        <h2>Apple Fitness +</h2>
        <p>Aria di primavera: risveglia <br> Il tuo corpo con i nuovi workout</p>
      
        <div class="hero-buttons-col">
          <a href="#" class="btn-apple">Scopri di più</a>
          <a href="#" class="btn-apple">Acquista</a>
        </div>
      </div>
      
    </article>

    <article class="col-item col-watch">
      <div class="col-content">
        <h2>Apple Watch Series 10</h2>
        <p>Più schermo. Più stile. Più sottile.</p>
      
        <div class="hero-buttons-col">
        <a href="#" class="btn-apple">Scopri di più</a>
          <a href="#" class="btn-apple">Acquista</a>
        </div>
      </div>
      
    </article>
  </section>


<section class="api-section">
  <h2>Ultime notizie su Apple</h2>
  <div id="news-list" class="news-list"></div>
</section>

<section class="api-section">
  <h2>Meteo a Catania</h2>
  <div id="weather-widget" class="weather-widget"></div>
</section>


  

 
  <footer>
    <section class="footer-info">
      <p>© 2025 Apple Inc. Tutti i diritti riservati.</p>
      <p><a href="#">Privacy</a> | <a href="#">Termini</a></p>
    </section>
  </footer>


  


  
</body>
</html>