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