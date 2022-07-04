<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elias Hirschl</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name ="viewport" content="width-device-width, initial-scale=1.0">
    <script src="js/script.js"></script>
  </head>
  <body>
  <div class="content">
    <span id="mobile-toggle" style="display: none;"><a href="#" onclick="menu_x()">&#9776;</a></span>
    <div class="sidebar" id="sidebar">
      <h1 class="home"><a id="home" onclick="toggle_content('home')">Elias Hirschl</a></h1>
      <ul class = "navigation_side">
        <li><a href="#" id="vita" onclick="toggle_content('vita')">Vita</a></li>
        <li><a href="#" id="gigs" onclick="toggle_content('gigs')">Termine</a></li>
        <li><a href="#" id="videos" onclick="toggle_content('videos')">Videos</a></li>
        <li><a href="#" id="books" onclick="toggle_content('books')">Bücher</a></li>
        <li><a href="#" id="contact" onclick="toggle_content('contact')">Kontakt</a></li>
      </ul>
    </div>
    <div id="vitatext" style="display:none;">
      <h2>Vita</h2>
      <p> Elias Hirschl wurde 1994 in Wien geboren, ist Romanautor, Slam Poet, Musiker und schreibt fürs Theater.
         
        Zuletzt erschienen die Romane <a href="https://www.hanser-literaturverlage.de/buch/salonfaehig/978-3-552-07248-0/">"Salonfähig"</a> (August 2021, Zsolnay) und "Hundert schwarze Nähmaschinen (2017, Jung und Jung) 
        
        2014 wurde er österreichischer Meister im Poetry Slam und ist seit mehreren Jahren erfolgreich mit Spoken Word-Texten auf Bühnen in ganz Europa unterwegs.  
        
        Er schrieb Texte für die Theaterstücke „Swing – Dance to the right“ und „Die wunderbare Zerstörung des Mannes“ vom Aktionstheater Ensemble und tourte 2017 und 2019 zusammen mit dem Wiener <a href="https://www.derstandard.at/story/2000101661054/poetry-slammer-meets-musiker-meets-china-ein-tourstart-mit-hass ">Musiker Jimmy Brainless lesend und singend durch Ostasien.</a>  
        
        Im Sommer 2018 war er Stipendiat am Literarischen Colloquium Berlin.  
        
        2020 wurde er für sein bisheriges Schaffen mit dem Reinhard-Priessnitz-Preis für Literatur ausgezeichnet. 
        
        Seit 2020 schreibt und spricht er zusammen mit Antonia Stabinger, Berni Wagner und Leopold Toriser für die Hörspielreihe <a href="https://fm4.orf.at/tags/dasmagischeauge ">„Das Magische Auge“</a> auf Radio FM4. 
        
        Zusammen mit dem Rapper Selbstlaut bildet er das Musikduo <a href="https://strizzi.co/portfolio/eingespenst/ ">„Ein Gespenst“</a> 
        
        Elias Hirschl lebt in Wien.</p>
    </div>
    <div id="terminetext" style="display:none;">
      <h2>Termine 2022</h2>
      <br>
      <p>06.07. – Lesung beim Donaufest Ulm</p>
      <p>14.7.2022 – <a href="https://www.wortlautruhr.com/alle-termine/2022/6/15/lesen-fr-bier-dortmund">Lesen für Bier – Dortmunder U</a></p>
      <p>30.07. – Auftritt bei Wege durch das Land-Festival</p>
      <br>
      <p>05.08. – Spoken Word Abend – Literaturhaus Dortmund</p>
      <p>30.08. – <a href="https://www.faq-bregenzerwald.com/">Lesung beim FAQ im Bregenzer Wald</a></p>
      <br>
      <p>17.09. – Lesung – Dortmund DEW-Museumsnacht</p>
      <p>19.09. - Digitale Literatur im Literaturhaus Dortmund</p>
    </div>
    <div id="videostext" style="display:none;">
      <h2>Videos</h2>
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/W8Y9gtVeAzE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/beAiAejXV0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/lqqkAsBlNKk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div id="buechertext" style="display:none;">
      <h2>Bücher</h2>
      <div class= "buchkachel">
        <a href="https://www.hanser-literaturverlage.de/buch/salonfaehig/978-3-552-07248-0/"><img src="img\saloncover.jpg" alt="Elias Hirschl - Salonfähig"></a>
      </div>
      <div class = "buchkachel">
        <a href="https://www.amazon.de/Hundert-schwarze-N%C3%A4hmaschinen-Elias-Hirschl/dp/3990270974" target="_blank"><img src="img\maschinencover.jpg"></a>
      </div>
      <div class = "buchkachel">
        <a href="https://www.amazon.de/Glückliche-Schweine-im-freien-Fall/dp/3954611090/ref=pd_lpo_sbs_14_t_0?_encoding=UTF8" target="_blank"><img src="img\schweinecover.jpg">
      </div>
      <div class = "buchkachel">
        <a href="https://www.amazon.de/Freunde-get%C3%B6tet-mitgebracht-lausige-T-Shirt/dp/3902950757/ref=pd_lpo_sbs_14_img_2?_encoding=UTF8" target="_blank"><img src="img\hitlercover.jpg"></a>
      </div>
      <div class = "buchkachel">
        <a href="https://www.amazon.de/einzige-Dorfbewohner-mit-Telefonanschluss-Milena-ebook/dp/B0124AGWIW/ref=sr_1_1?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=der+einzige+dorfbewohner&qid=1562885076&s=gateway&sr=8-1" target="_blank"><img src="img\dorfcover.jpg"></a>
      </div>
    </div>

    <div id="contacttext" style="display:none;">
      <h2>Kontakt</h2>
      <form id="contactform" action="form_handler.php" method="post">
        <input type="text" name="vorname" value="" placeholder="Vorname" minlength="3" maxlength="20" required>
        <input type="text" name="name" value="" placeholder="Nachname" minlength="3" maxlength="20" required>
        <input type="email" name="email" value="" placeholder="example@domain.com" minlength="3" maxlength="30" required>
        <input type="text" name="betreff" value="" placeholder="Betreff" minlength="3" maxlength="20" required>
        <textarea name="msg" placeholder="Ihre Nachricht" style="resize: none;" rows="8" required></textarea>
        <button type="submit" value="Submit "name="submit" id="button_send">Absenden</button>
      </form>
    </div>
    <footer>
      <ul class ="social_legal">
        <li><a href="https://twitter.com/hirschiboi"><img class="social_icon" src="./img/twitter.png"></a></li>
        <li><a href="https://www.facebook.com/derhirschl/"><img class="social_icon" src="./img/fb.png"></a></li>
        <li><a href="https://www.instagram.com/eliashirschl/"><img class="social_icon" src="./img/insta.png"></a></li>
        <li><a href="datenschutz.html">Datenschutz</a></li>
        <li><a href="impressum.html">Impressum</a></li>
      </ul>
    <footer>
    </div>

  </body>
</html>
