<?php
/*
* Css_responsive & CssBrowser & CssVersion & Protocol Open Graph Facebook &  framework Bootstrap 
*
* PHP 5.1
* @version 1.0
* @Added support for the Protocol Open Graph Facebook
* @Added support for the framework Bootstrap 
* @license Apache License, Version 2.0.
* @author Adam Berger <ber34@o2.pl>
* @Site www.joomla-cms.com.pl
*/

require_once (dirname(__FILE__) . '/lib/'.basename('class_cssresponsiwe.php'));
$browser = new CssResponsive();
/*
 *  zapisz cookies 
 *  you must be here for the proper operation, 
 *  musi tu byś do prawidłowego działania
 */
$browser->save_cookies();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>Responsiwe</title>
<?php
echo $browser->jQuery(); // jQuery
echo $browser->jQuery_UI();// jQuery UI you must be here for the proper operation, musi tu byś do prawidłowego działania
echo $browser->jQueryCss(); // jQuery Css
/*
 *  Style depends on version css example, CSS1, CSS2, CSS3, etc. ..
 *  Styl uzależniony od versji css np. css1, css2, css3 itd....
 */
echo $browser->css();
/*
 *  you must be here for the proper operation,
 *  musi tu byś do prawidłowego działania
 */
echo $browser->get_responsive(); 
/*
 * Assign a CSS style for the visitor's browser such as IE 9
 * Przypisz styl css dla odwiedzającej przeglądarki np. IE 9
 */
echo $browser->cssversionbrowser();
/*
 * // HTML5 IE 9
 */
echo $browser->HtmlIE(); 
?>
</head>
<body>
      <section class="gard">
          <article style="color:#FFFFFF;">
           <?php 
              /*
               *  If the browser supports javascript
               * czy przeglądarka obsługuje javascript 
               */
             echo "JavaScript ".$browser->javascript()."<br>"; 
             /*
              * If the browser supports cookies
              * czy przeglądarka obsługuje cookies
              */
             echo "Cookies ".$browser->cookies()."<br>"; 
             /*
              *  nazwa przeglądarki
              * Name of the browser
              */
             echo "Browser ".$browser->browser()."<br>"; 
             /*
              *  css wersja
              *  Css version
              */
             echo "Version Css".$browser->cssversion()."<br>"; 
             /*
              * czy przeglądarka obsługuje backgroundsounds IE
              * if the browser supports backgroundsounds IE
              */
             echo "Backgroundsounds IE".$browser->backgroundsounds()."<br>";
             /*
              * //czy przeglądarka obsługuje iframes
              *  if the browser supports iframes
              */
             echo "Iframes ".$browser->iframes()."<br>";
             /*
              * Jaki System obsługuje użytkownik
              * What system supports the use
              */
             echo "Platform ".$browser->platform()."<br>"; // Jaki System obsługuje użytkownik
           ?>
         </article>
      </section>
</body>
</html>
