<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spidfire.com</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../CSS/normalize.css">
  <link rel="stylesheet" href="../../CSS/fonts.css">
  <link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>
 
<div class="background">
    <header class="header">
      <div class="container header_cont">
        <div class="header__content">
          <div class="header__content__title">
            <img src="../../Media/apex-legends.png " class="header__content__title__img"">
            <div class="header__content__title__text">
                 <span >Apex Legends</span>
            </div>
          </div>
  
          <div class="main_buttons">
            <div class="main_buttons_suction">
              <span class="main__btn__title Legends__btn_title">Legends</span>
              <div class="main__btn Legends__btn" onclick="Legends_Function()">
                <span class="main__btn_line Legends__btn__line"></span>
              </div>
            </div>
            <div class="main_buttons_suction">
              <span class="main__btn__title Weapons__btn_title">Weapons</span>
              <div class="main__btn Weapons__btn" onclick="Weapons_Function()">
                <span class="main__btn_line Weapons__btn__line"></span>
              </div>
            </div>
            <div class="main_buttons_suction">
              <span class="main__btn__title Maps__btn_title">Maps</span>
              <div class="main__btn Maps__btn" onclick="Maps_Function()">
                <span class="main__btn_line  Maps__btn__line"></span>
              </div>
            </div>
          </div>
         
          <div class="header__links">
            <ul class="header__links__list">
              <li class="header__links__list__item"><a class="header__links__list__item__link">Apex official</a></li>
              <li class="header__links__list__item"><a class="header__links__list__item__link steam">My Steam</a></li>
              <li class="header__links__list__item"><a class="header__links__list__item__link telegram">My telegram</a></li>
            </ul>
          </div>
         
        </div>
      </div>
     
      <div class="main">
        <div class="main__menu characters__menu_none_active">
          <div class="main__menu__content characters">
            <ul class="main__menu__items">
              <li onclick="characters_function(this)" class="main__menu__items__one  <?if ($f_name=="bang"){echo " main__menu__items__one__active";} ?>,"><a href="bangalore.php">Bangalore</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="caustic.php">Caustic</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="bloodhound.php">Bloodhound</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="crypto.php">Crypto</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="fuse.php">Fuse</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="giblartar.php">Giblartar</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="horizon.php">Horizon</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="lifeline.php">Lifeline</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="loba.php">Loba</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="mirage.php">Mirage</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="seer.php">Seer</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="octane.php">Octane</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="pathfinder.php">Pathfinder</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="valkyrie.php">Valkyrie</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="rampart.php">Rampart</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="revenant.php">Revenant</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="wattson.php">Wattson</a></li>
              <li onclick="characters_function(this)" class="main__menu__items__one"><a href="wraith.php">Wraith</a></li>
      
            </ul>
          </div>
        </div>
    
        <div class="main__menu weapon__menu_none_active">
          <div class="main__menu__content weapons">
            <ul class="main__menu__items">
              <li class="main__menu__items__one"><a href="#">HAVOC</a></li>
              <li class="main__menu__items__one"><a href="#">Flatline</a></li>
              <li class="main__menu__items__one"><a href="#">Hemlock</a></li>
              <li class="main__menu__items__one"><a href="#">R-301</a></li>
              <li class="main__menu__items__one"><a href="#">Alternator</a></li>
              <li class="main__menu__items__one"><a href="">Prowler</a></li>
              <li class="main__menu__items__one"><a href="">R-99</a></li>
              <li class="main__menu__items__one"><a href="">Volt</a></li>
              <li class="main__menu__items__one"><a href="">Devotion</a></li>
              <li class="main__menu__items__one"><a href="">L-STAR</a></li>
              <li class="main__menu__items__one"><a href="">Spitfire</a></li>
              <li class="main__menu__items__one"><a href="">Rampage</a></li>
              <li class="main__menu__items__one"><a href="">G7</a></li>
              <li class="main__menu__items__one"><a href="">Triple Take</a></li>
              <li class="main__menu__items__one"><a href="">30-30 Repeater</a></li>
              <li class="main__menu__items__one"><a href="">Bocek</a></li>
              <li class="main__menu__items__one"><a href="">Charge Rifle</a></li>
              <li class="main__menu__items__one"><a href="">Longbow DMR</a></li>
              <li class="main__menu__items__one"><a href="">Kraber</a></li>
              <li class="main__menu__items__one"><a href="">Sentinel</a></li>
              <li class="main__menu__items__one"><a href="">EVA-8</a></li>
              <li class="main__menu__items__one"><a href="">Mastiff</a></li>
              <li class="main__menu__items__one"><a href="">Mozambique</a></li>
              <li class="main__menu__items__one"><a href="">Peacekeeper</a></li>
              <li class="main__menu__items__one"><a href="">RE-45</a></li>
              <li class="main__menu__items__one"><a href="">P2020</a></li>
              <li class="main__menu__items__one"><a href="">Wingman</a></li>
    
            </ul>
          </div>
        </div>
    
        <div class="main__menu maps__menu_none_active">
          <div class="main__menu__content maps">
            <ul class="main__menu__items">
              <li class="main__menu__items__one"><a href="#">Kings Canyon</a></li>
              <li class="main__menu__items__one"><a href="#">World's Edge</a></li>
              <li class="main__menu__items__one"><a href="#">Olympus</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      
    </header>
    <section class="page">
      <div class="page__container">