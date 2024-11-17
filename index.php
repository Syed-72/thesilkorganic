<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ristorante Indiano</title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/siteID.png" />

  <!╌ CSS files links ╌>

    <link rel="stylesheet" href="./css/styles.css">

    <!╌ Google Fonts links ╌>

      <!-- Bangers -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

      <!-- Roboto -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Roboto:wght@100;300;400;500&display=swap"
        rel="stylesheet">

      <!-- Java Script for Font Awesome -->
      <script src="https://kit.fontawesome.com/b08530ee0a.js" crossorigin="anonymous"></script>

</head>

<body id="page-recipe">

  <!-- Page Header -->

  <header>

    <!-- <div class="page-header-top container text-center text-md-start">

      <a href="index.php?p=home"><img src="./images/logo.jpg" alt="Curry Twist" /></a>

    </div> -->
    <div class="container back-w">
      <nav class="navbar navbar-expand-lg md-4">



        <div class="text-md-start" style="width: 12rem; padding-left: 2%;">

          <a href="index.php?p=home"><img src="./images/ct-logo.png" alt="CurryTwist" /></a>

        </div>

        <!--<a class="navbar-brand" href="index.php?p=home">Curry Twist</a>-->

        <button class="navbar-toggler padding-left-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
          aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"
          style="margin-left:auto; margin-right: 2%">
          <i class="fas fa-bars"></i>
          <!--<span class="navbar-toggler-icon"></span>-->
        </button>
        <div class="container">
          <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav ms-auto mb-lg-0" style="padding-right: 2%;">
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=reservations"><i class="fa-solid fa-clipboard"></i>Reservations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=menu"><i class="fa-solid fa-bowl-rice"></i>Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=onlineOrder"><i class="fa-solid fa-earth-europe"></i>Online Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=ourRestaurant"><i class="fa-solid fa-shop"></i>Our Restaurant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=catering"><i class="fa-solid fa-utensils"></i></i>Catering</a>
              </li>


              <!-- GTranslate: https://gtranslate.io/ -->

              <p style="position:relative;" class="menu-item menu-item-gtranslate">

                <a href="#" onclick="doGTranslate('it|en');return false;" title="English"
                  class="glink nturl notranslate"><img
                    src="./images/flag-eng.png" height="24" width="24"
                    alt="English" style="

                margin-top: 5px; "></a>

                <a href="#" onclick="doGTranslate('en|it');return false;" title="Italian"
                  class="glink nturl notranslate"><img
                    src="./images/flag-it.png" height="24" width="24"
                    alt="Italian" style="
                margin-left: 5px;
                margin-top: 5px; "></a>
              </p>

              <style>
                #goog-gt-tt {
                  display: none !important;
                }

                .goog-te-banner-frame {
                  display: none !important;
                }

                .goog-te-menu-value:hover {
                  text-decoration: none !important;
                }

                .goog-text-highlight {
                  background-color: transparent !important;
                  box-shadow: none !important;
                }

                body {
                  top: 0 !important;
                }

                #google_translate_element2 {
                  display: none !important;
                }
              </style>

              <div id="google_translate_element2"></div>

              <script>function googleTranslateElementInit2() { new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element2'); } if (!window.gt_translate_script) { window.gt_translate_script = document.createElement('script'); gt_translate_script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2'; document.body.appendChild(gt_translate_script); }</script>

              <script>
                function GTranslateGetCurrentLang() { var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)'); return keyValue ? keyValue[2].split('/')[2] : null; }
                function GTranslateFireEvent(element, event) { try { if (document.createEventObject) { var evt = document.createEventObject(); element.fireEvent('on' + event, evt) } else { var evt = document.createEvent('HTMLEvents'); evt.initEvent(event, true, true); element.dispatchEvent(evt) } } catch (e) { } }
                function doGTranslate(lang_pair) { if (lang_pair.value) lang_pair = lang_pair.value; if (lang_pair == '') return; var lang = lang_pair.split('|')[1]; if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return; if (typeof ga == 'function') { ga('send', 'event', 'GTranslate', lang, location.hostname + location.pathname + location.search); } var teCombo; var sel = document.getElementsByTagName('select'); for (var i = 0; i < sel.length; i++)if (sel[i].className.indexOf('goog-te-combo') != -1) { teCombo = sel[i]; break; } if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) { setTimeout(function () { doGTranslate(lang_pair) }, 500) } else { teCombo.value = lang; GTranslateFireEvent(teCombo, 'change'); GTranslateFireEvent(teCombo, 'change') } }
              </script>

            </ul>

          </div>
        </div>



      </nav>
    </div>
  </header>

  <div class="container back-b">

    <div class="row">
      <div class="col-md-12">
        <div class="recipe-card">
          <div class="recipe-card-image" style="background-image: url('./images/home-main.jpg');">

            <div class="d-grid gap-2 col-md-12"
              style="display:flex; height: 30rem; align-content: center; justify-content: center; padding-left: 1%; padding-right: 1%;">


              <h1 class="mb-2 " style="text-shadow: #000 0px 0px 5px;"><b>The Best Ethnic Cuisine</b></h1>

              <h2 class="mb-2 " style="text-shadow: #000 0px 0px 5px;"><b>Join us and enjoy your dinner in a friendly environment with delicious
                ethnic dishes</b></h2>

              <div class="row">

                <div class="d-grid gap-2 col-md-3 mx-auto">

                </div>

                <div class="d-grid gap-2 col-md-3 mx-auto pb-2">

                  <a href="index.php?p=reservations" class="btn btn-studenteat" style="color: white;">Reservations</a>

                </div>


                <div class="d-grid gap-2 col-md-3 mx-auto pb-2">

                  <a href="./contents/Currt-Twist-Menu-06-05-22.pdf" class="btn btn-studenteat" style="color: white;">Our Menu</a>

                </div>

                <div class="d-grid gap-2 col-md-3 mx-auto">

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container back-b">
    <div class="container back-dg">
      <div class="row">
        <div class="col-md-6 text-center">
          <p><br></p>

          <h1><b>Come visit us!</b></h1>

          <p class="text-center"><i class="fa-solid fa-map-location-dot"></i><b> Via Carlo Farini 37, Milano</b></p>
          <p class="text-center"><i class="fa-solid fa-square-phone"></i><a style="color: #fff; text-decoration: none" href="tel: +39 026887336"> <b> +39 026887336</b></a></p>
          <p class="text-center"><i class="fa-solid fa-mobile-button"></i><a style="color: #fff; text-decoration: none" href="tel: +39 3293524999"> <b> +39 3293524999</b></a></p>
          <p class="text-center"><i class="fa-solid fa-envelope"></i><a style="color: #fff; text-decoration: none" href="mailto: info@currytwist.it"> <b> info@currytwist.it</b></a></p>
        </div>

        <div class="col-md-6">
          <figure class="text-center pt-3"><a
              href="https://www.google.com/maps/place/Curry+Twist+Ristorante+Indiano/@45.4897676,9.1829665,15z/data=!4m5!3m4!1s0x0:0xed33364d3f1dfd77!8m2!3d45.4897676!4d9.1829665"
              target="_blank" rel="noopener"><img decoding="async" width="600" height="300" src="./images/map.png"
                alt="Click for directions" srcset="./images/map.png 977w, ./images/map.png 300w, ./images/map.png 768w"
                sizes="(max-width: 977px) 100vw, 977px"></a></figure>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">

        <h1 class="mb-4 pt-4 text-center"><b>Our Photo Gallery</b></h1>

        <h2 class="mb-4 pb-2 text-center">Get inspired and get ready!</h2>

      </div>
    </div>

    <div class="container back-dg">
      <div class="row pt-3">
        <div class="col-md-12">
          <div class="row">

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/home-tandoor.jpeg');">
                <a href="./images/home-tandoor.jpeg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/menu-tandoorimixplatter.jpeg');">
                <a href="./images/menu-tandoorimixplatter.jpeg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/home-kebab.jpeg');">
                <a href="./images/home-kebab.jpeg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/home-ChickenTikka.jpg');">
                <a href="./images/home-ChickenTikka.jpg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/home-tandoorchick.jpeg');">
                <a href="./images/home-tandoorchick.jpeg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/home-curries.jpeg');">
                <a href="./images/home-curries.jpeg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/home-papdom.jpeg');">
                <a href="./images/home-papdom.jpeg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="recipe-image mb-4" style="background-image: url('./images/home-naan.jpg');">
                <a href="./images/home-naan.jpg" data-lightbox="recipe-imgs"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<! --
// <?php
//echo '<script type="text/javascript">
//       window.onload = function () { alert("Alert!, \n \nWe are fully booked for 7th, 8th, 9th, and 10th October. \nSiamo al completo per il 7, 8, 9 e 10 ottobre."); } 
//</script>'; 
//?>
-->


  <div class="container back-b">
    <div class="row pt-2 back-b">
      <div class="col-md-12">
        <div class="row">

          <div class="col-md-3">

            <h2 class="pb-1" style="border-bottom: solid 2px #66d891;"><b>About Us</b></h2>

            <p> Curry Twist, where people dine, relax, laugh, chat, celebrate and entertain in our contemporary
              surroundings! </p>

          </div>

          <div class="col-md-6 pb-3">

            <h2 class="pb-1" style="border-bottom: solid 2px #66d891;"><b>Follow Us</b></h2>

            <p class="text-center">Follow us on social media</p>
            <p class="text-center">Get exclusive deals, offers and rewards!</p>

            <div class="text-center">

              <a href="https://www.facebook.com/CurryTwistRistorante/">
                <img style="height: 40px; padding-right: 1%;" src="./images/facebook.png" alt="Facebook"></a>

              <a href="https://www.instagram.com/currytwist_ristorante_indiano/">
                <img style="height: 40px; padding-left: 1%;" src="./images/instagram.png" alt="instagram"></a>

            </div>

          </div>

          <div class="col-md-3 pb-3">

            <h2 class="pb-1" style="border-bottom: solid 2px #66d891;"><b>Halal Food</b></h2>

            <center><img style="height: 120px; padding-right: 1%;" src="./images/halal.png" alt="We serve halal food">
            </center>

          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container back-w">
    <div class="row">
      <footer class="container mt-4">

        <p> Copyright &copy; CURRY TWIST <script>document.write(new Date().getFullYear())</script></p>

      </footer>

    </div>
  </div>

  <!╌ scripts to load jquery and bootstrap javascript ╌>
    <script type="text/javascript" src=".\node_modules\jquery\dist\jquery.min.js"></script>
    <script type="text/javascript" src=".\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="./node_modules/lightbox2/dist/js/lightbox.min.js"></script>

</body>

</html>
