<?php
require_once (dirname(__FILE__) . '/lib/'.basename('class_cssresponsiwe_fb.php'));
$browser = new CssResponsive();
/*
* zapisz cookies
* you must be here for the proper operation,
* musi tu by&#347; do prawid&#322;owego dzia&#322;ania
*/
$browser->save_cookies();
/*
* FACEBOKE site
*/
$site_name = "Sterownia"; // nazwa strony www
$title = "Responsive"; // tytul artykulu
$description = "Modul‚ do wyswietlania naszych aukcji allegro"; // Opis artykulu
$content_type ="article"; // Typ Dokumentu artikle
$url="http://www.joomla-cms.com.pl/pl/komponenty/slider-aukcji-allegro.html"; // adres do artykułu
$image="http://www.joomla-cms.com.pl/images_ber34/slider aukcji_front_2.jpg"; // fotka odnoszaca sie do artykulu
/*
* FACEBOKE profile
* male "mężczyzna" female "kobieta"
*/
$domain_name="http://www.joomla-cms.com.pl"; // Is associated with adres strony autora:
$first_name="Adam";
$last_name="Berger";
$username="Ber";
$gender="male";
/*
* FACEBOKE audio
*/
$audio_url ="http://domena.pl/nazwa.mp3";
$audio_title="Tytuł piosenki";
$audio_artist="Nazwa wykonawcy";
$audio_album="Tytuł płyty";
$audio_type ="application/mp3";
/*
* FACEBOKE video swf
*/
//$video_url = "http://domena.pl/film.swf";
//$video_type = "application/x-shockwave-flash";

 // or

/*
* FACEBOKE video mp4
*/
$video_url ="http://domena.pl/film.mp4";
$video_type ="video/mp4"; // type
$video_height="320"; // width
$video_width="240"; // height
/*
* FACEBOKE image
*/
$image_url = "http://domena.com/obraz.jpg";
$image_secure_url = "https://secure.domena.com/obraz.jpg"; // secure url
$image_type = "image/jpeg"; // type
$image_width = "320"; // width
$image_height = "240"; // height

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title><?php echo $title; ?></title>
<?php
echo $browser->jQuery(); // jQuery
echo $browser->jQuery_UI();// jQuery UI you must be here for the proper operation, musi tu by&#347; do prawid&#322;owego dzia&#322;ania
echo $browser->jQueryCss(); // jQuery Css
echo $browser->Bootstrap_css(); // Bootstrap css
echo $browser->Bootstrap_css_responsive(); // Bootstrap css responsive
echo $browser->Bootstrap_javascript();  // Bootstrap javascript
/*
* Style depends on version css example, CSS1, CSS2, CSS3, etc. ..
* Styl uzale&#380;niony od versji css np. css1, css2, css3 itd....
*/
echo $browser->css();
/*
* you must be here for the proper operation,
* musi tu by&#347; do prawid&#322;owego dzia&#322;ania
*/
echo $browser->get_responsive();
/*
* Assign a CSS style for the visitor's browser such as IE 9
* Przypisz styl css dla odwiedzaj&#261;cej przegl&#261;darki np. IE 9
*/
echo $browser->cssversionbrowser();
/*
* FACEBOKE SITE
* Protokol Open Graph
* meta_site
* https://developers.facebook.com/docs/opengraph/
*/
echo $browser->fb_meta_site($site_name, $title, $description, $content_type, $url, $image);
/*
* FACEBOKE profile
* Protokol Open Graph
* meta_site
* https://developers.facebook.com/docs/opengraph/
*/
echo $browser->fb_meta_profile($first_name, $last_name, $username, $gender);
/*
* FACEBOKE profile autor
* adres strony autora:
* Is associated with
* Protokol Open Graph
* https://developers.facebook.com/docs/opengraph/
*/
echo $browser->set_fb_meta_profile($domain_name);
/*
* FACEBOKE audio
* Protokol Open Graph
* https://developers.facebook.com/docs/opengraph/
*/
echo $browser->fb_meta_audio($audio_url, $audio_title, $audio_artist, $audio_album, $audio_type);
/*
* FACEBOKE video swf or mp4
* Protokol Open Graph
* https://developers.facebook.com/docs/opengraph/
*/
echo $browser->fb_meta_video($video_url, $video_type, $video_height, $video_width);
/*
* FACEBOKE image
* Protokol Open Graph
* https://developers.facebook.com/docs/opengraph/
*/
echo $browser->fb_meta_image($image_url, $image_secure_url, $image_type, $image_width, $image_height);
/*
* HTML5 IE 9
*/
echo $browser->HtmlIE();
?>
</head>
<body>
<section class="gard">
<article style="color:#000000;">
<?php
              /*
* If the browser supports javascript
* czy przegl&#261;darka obs&#322;uguje javascript
*/
             echo "JavaScript ".$browser->javascript()."<br>";
             /*
* If the browser supports cookies
* czy przegl&#261;darka obs&#322;uguje cookies
*/
             echo "Cookies ".$browser->cookies()."<br>";
             /*
* nazwa przegl&#261;darki
* Name of the browser
*/
             echo "Browser ".$browser->browser()."<br>";
             /*
* css wersja
* Css version
*/
             echo "Version Css".$browser->cssversion()."<br>";
             /*
* czy przegl&#261;darka obs&#322;uguje backgroundsounds IE
* if the browser supports backgroundsounds IE
*/
             echo "Backgroundsounds IE".$browser->backgroundsounds()."<br>";
             /*
* //czy przegl&#261;darka obs&#322;uguje iframes
* if the browser supports iframes
*/
             echo "Iframes ".$browser->iframes()."<br>";
             /*
* Jaki System obs&#322;uguje u&#380;ytkownik
* What system supports the use
*/
             echo "Platform ".$browser->platform()."<br>"; // Jaki System obs&#322;uguje u&#380;ytkownik
           ?>
</article>
</section>
</body>
</html>
