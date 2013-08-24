<?php
/*
* Responsive CSS is a class to handle pages html5, jQuery, CssResponsive, CssBrowser, CssVersion, Open Graph Facebook.
* Class is designed to load the appropriate CSS styles depending on the browser like Mozilla, IE, etc.
* Class also recognize the screen resolution, thus adapting to a device such as tablet, phone, etc.
* By reading the right style for your device. Identifies the version of the style supported by your browser.
* All this results in a significant acceleration loading, because they are charged only the styles
* that are just at the time needed.
* In the classroom you will find a few other things you need to use a web page that may help facilitate the work.
* Check javascript, cookiesmedia etc.
* Class will prepare more efficiently css responsieive for devices and for our applications.
*
* Added support for the Protocol Open Graph
*
* Class for proper operation of the library needs browscap.ini
*
* # # # # # # # ###### Browser ##### # # # # # # # # # # # # #
* Example of style for opera such as "-o-linear"
* Example of style for FIREFOX example, "-moz-linear"
* Example for IE style such as "-ms-linear"
* Example of style for the W3C as "linear-gradient"
* # # # # # # ####### Responsive ##### # # # # # # # # # # # # # # #
* Example of style for example 1440px width width: 96%; max-width: 1440px; min-width: 1400px;
* Example of style for example, 240px width width: 96%; max-width: 240px; min-width: 230px;
* # # # # # # ####### Version css ####### # # # # # # # # # # # # #
* Example 3 css style for example, box-shadow: 10px 10px 5px # FFFFFF;
* Example 2 css style for example, font-size-adjust: 0.5;
* Example CSS style for one such border-left: solid red
*
* Klasa do prawidłowego działania potrzebuje biblioteki browscap.ini
* ############# Browser ##################
* Przykład stylu dla opera np. "-o-linear"
* Przykład stylu dla FIREFOX np. "-moz-linear"
* Przykład stylu dla IE np. "-ms-linear"
* Przykład stylu dla W3C np. "linear-gradient"
* ############# Responsive ####################
* Przykład stylu dla width 1440px np. width: 96%; max-width: 1440px; min-width: 1400px;
* Przykład stylu dla width 240px np. width: 96%; max-width: 240px; min-width: 230px;
* ############# version css ####################
* Przykład stylu dla css 3 np. box-shadow: 10px 10px 5px #FFFFFF;
* Przykład stylu dla css 2 np. font-size-adjust: 0.5;
* Przykład stylu dla css 1 np. border-left: solid red;
*
*
* Css_responsive & CssBrowser & CssVersion & Protocol Open Graph Facebook
*
* PHP 5.1
* @version 1.50
* @Added support for the Protocol Open Graph Facebook
* @license Apache License, Version 2.0.
* @author Adam Berger <ber34@o2.pl>
* @Site www.joomla-cms.com.pl
*/
 
class CssResponsive
{
    ######################################### Browser ##############################################################################
    const CSS_IE = '<link rel="stylesheet" href="../Responsive/css/styll.IE.css" />';// IE, Msie
    const CSS_OPERA = '<link rel="stylesheet" href="../Responsive/css/styll.Opera.css" />';// OPERA
    const CSS_FIREFOX = '<link rel="stylesheet" href="../Responsive/css/styll.FIREFOX.css" />';// FIREFOX , MOZILLA
    const CSS_SAFARI = '<link rel="stylesheet" href="../Responsive/css/styll.Safari.css" />';// /* Chrome , Safari */
    const CSS_CHROME = '<link rel="stylesheet" href="../Responsive/css/styll.Chrome.css" />';// /* Chrome , Safari */
    const CSS_MOZILLA = '<link rel="stylesheet" href="../Responsive/css/styll.MOZILLA.css" />';// FIREFOX , MOZILLA
    const CSS_NETSCAPE = '<link rel="stylesheet" href="../Responsive/css/styll.netscape.css" />';// /* Chrome , Safari */
    const CSS_GECKO = '<link rel="stylesheet" href="../Responsive/css/styll.Gecko.css" />';// /* Chrome , Safari */
    const CSS_W3C = '<link rel="stylesheet" href="../Responsive/css/styll.W3C.css" />';// /* W3C, Gecko, Netscape */
   ######################################### RESPONSIVE #########################################################################
    const CSS_1440 = '<link rel="stylesheet" href="../Responsive/css/styll.1440.css" />';// 1440
    const CSS_1360 = '<link rel="stylesheet" href="../Responsive/css/styll.1360.css" />';// 1360
    const CSS_1280 = '<link rel="stylesheet" href="../Responsive/css/styll.1280.css" />';// 1280
    const CSS_1152 = '<link rel="stylesheet" href="../Responsive/css/styll.1152.css" />';// 1152
    const CSS_1024 = '<link rel="stylesheet" href="../Responsive/css/styll.1024.css" />';// 1024x768
    const CSS_800 = '<link rel="stylesheet" href="../Responsive/css/styll.800.css" />';// 800
    const CSS_768 = '<link rel="stylesheet" href="../Responsive/css/styll.768.css" />';// //768
    const CSS_685 = '<link rel="stylesheet" href="../Responsive/css/styll.685.css" />';// //685
    const CSS_600 = '<link rel="stylesheet" href="../Responsive/css/styll.600.css" />';// //600
    const CSS_568 = '<link rel="stylesheet" href="../Responsive/css/styll.568.css" />';// // 568
    const CSS_480 = '<link rel="stylesheet" href="../Responsive/css/styll.480.css" />';// // 480
    const CSS_380 = '<link rel="stylesheet" href="../Responsive/css/styll.380.css" />';// // 380
    const CSS_320 = '<link rel="stylesheet" href="../Responsive/css/styll.320.css" />';// // 320
    const CSS_240 = '<link rel="stylesheet" href="../Responsive/css/styll.240.css" />';// // 240
    const CSS_W3C_RE = '<link rel="stylesheet" href="../Responsive/css/styll.w3c.css" />';// /* W3C */
    ######################################### Css version ###################################################
    const CSS_1 = '<link rel="stylesheet" href="../Responsive/css/css.1.css" />';// /* Css 1 */
    const CSS_2 = '<link rel="stylesheet" href="../Responsive/css/css.2.css" />';// /* Css 2 */
    const CSS_3 = '<link rel="stylesheet" href="../Responsive/css/css.3.css" />';// /* Css 3 */
    const CSS_4 = '<link rel="stylesheet" href="../Responsive/css/css.4.css" />';// /* Css 4 */
    const CSS_5 = '<link rel="stylesheet" href="../Responsive/css/css.5.css" />';// /* Css 5 */
    const CSS_W3C_VER = '<link rel="stylesheet" href="../Responsive/css/css.w3c_ver.css" />';// /* W3C */
    ########################################## jQuery & HTML5 IE 9 ##########################################
    const JQuery = '<script src="http://code.jquery.com/jquery-1.9.1.js"></script>';// jQuery 1.9
    const JQuery_UI = '<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>';
    const JQueryCss = '<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />';// jQuery
    const BootstrapCss = '<link rel="stylesheet" href="../zarabiarka/css/bootstrap.css" />';// Bootstrap 
    const BootstrapCssResponsive = '<link rel="stylesheet" href="../zarabiarka/js/bootstrap-responsive.css" />';// Bootstrap css responsive
    const BootstrapJavascript = '<link rel="stylesheet" href="../zarabiarka/js/bootstrap.js" />';// Bootstrap javascript
    const HTML_IE = '<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
  #############################################################################################################################
    
    private $css_ie;
    private $css_opera;
    private $css_firefox;
    private $css_safari;
    private $css_chrome;
    private $css_mozilla;
    private $css_netscape;
    private $css_gecko;
    public $w3c;
    public $jquery;
    public $jquerycss;
    public $jqueryui;
    public  $bootstrap_css;
    public  $BootstrapCssResponsive;
    public  $bootstrapjavascript;
    public $htmlie;
    public $css_1440;
    public $css_1360;
    public $css_1280;
    public $css_1152;
    public $css_1024;
    public $css_800;
    public $css_768;
    public $css_685;
    public $css_600;
    public $css_568;
    public $css_480;
    public $css_380;
    public $css_320;
    public $css_240;
    public $css_w3c_re;
    public $css_w3c_ver;
    public $css_1;
    public $css_2;
    public $css_3;
    public $css_4;
    public $css_5;
    public $css;
    public $html;
    public $first_name;
    public $last_name;
    public $typebrowser;
    public $responsive= [ ]; //tablica;
    private $browser = [ ]; //tablica
    private $key = [ ]; //tablica
   
    public function __construct()
     {
        $this->css_ie = self::CSS_IE;
        $this->css_opera = self::CSS_OPERA;
        $this->css_firefox = self::CSS_FIREFOX;
        $this->css_safari = self::CSS_SAFARI;
        $this->css_chrome = self::CSS_CHROME;
        $this->css_mozilla = self::CSS_MOZILLA;
        $this->css_netscape = self::CSS_NETSCAPE;
        $this->css_gecko = self::CSS_GECKO;
        $this->w3c = self::CSS_W3C;// /* W3C */
        #######################################
        $this->css_1440 = self::CSS_1440;
        $this->css_1360 = self::CSS_1360;
        $this->css_1280 = self::CSS_1280;
        $this->css_1152 = self::CSS_1152;
        $this->css_1024 = self::CSS_1024;
        $this->css_800 = self::CSS_800;
        $this->css_768 = self::CSS_768;
        $this->css_685 = self::CSS_685;
        $this->css_600 = self::CSS_600;
        $this->css_568 = self::CSS_568;
        $this->css_480 = self::CSS_480;
        $this->css_380 = self::CSS_380;
        $this->css_320 = self::CSS_320;
        $this->css_240 = self::CSS_240;
        $this->css_w3c_re = self::CSS_W3C_RE;// /* W3C */
        #######################################
        $this->css_1 = self::CSS_1;// /* Css 1 */
        $this->css_2 = self::CSS_2;// /* Css 2 */
        $this->css_3 = self::CSS_3;// /* Css 3 */
        $this->css_4 = self::CSS_4;// /* Css 4 */
        $this->css_5 = self::CSS_5;// /* Css 5 */
        $this->css_w3c_ver = self::CSS_W3C_VER;// /* W3C */
        #######################################
        $this->jquery = self::JQuery;
        $this->jqueryui = self::JQuery_UI;
        $this->jquerycss = self::JQueryCss;
        $this->bootstrap_css = self::BootstrapCss;
        $this->BootstrapCssResponsive = self::BootstrapCss;
        $this->bootstrapjavascript   = self::BootstrapJavascript;
        $this->htmlie = self::HTML_IE;
     }
    public function browser_all()
     {
           $this->browser[] = get_browser($_SERVER['HTTP_USER_AGENT']);
           foreach ($this->browser as $this->key) {
               return $this->key;
           }
     }
public function fb_meta_site($site_name, $title, $description=null, $content_type, $url=null, $image=null)
      {
         /*
* documentation https://developers.facebook.com/docs/opengraph/
* http://ogp.me/#types
FACEBOKE
*/
         $this->html ="";
         if(!empty($site_name)){
         $this->html .='<meta property="og:site_name" content="'.$site_name.'" />'; // Nazwa strony
         }
         if(!empty($title)){
         $this->html .='<meta property="og:title" content="'.$title.'" />'; // tytuł linka
         }
         if(!empty($description)){
         $this->html .='<meta property="og:description" content="'.$description.'" /> '; // Opis treści
         }
         if(!empty($content_type)){
          $this->html .='<meta property="og:type" content="'.$content_type.'" />';
         }
         if(!empty($url)){
         $this->html .='<meta property="og:url" content="'.$url.'" />';/// link url
         }
         if(!empty($image)){
         $this->html .='<meta property="og:image" content="'.$image.'" />'; // link zdiecie
         }
       return $this->html;
     }
     public function fb_meta_profile($first_name, $last_name, $username=null, $gender=null) {
         
         $this->html ="";
        if(!empty($first_name)){
         $this->first_name=$first_name;
         $this->html .='<meta property="profile:first_name" content="'.$this->first_name.'" />'; // imie autora
         }
        if(!empty($last_name)){
         $this->last_name =$last_name;
         $this->html .='<meta property="profile:last_name" content="'.$this->last_name.'" />'; // Nazwisko autora
         }
        if(!empty($username)){
         $this->html .='<meta property="profile:username" content="'.$username.'" />'; // NICK autora
         }
        if(!empty($gender)){
         $this->html .='<meta property="profile:gender" content="'.$gender.'" />'; // płeć autora male "mężczyzna" female "kobieta"
         }
         return $this->html;
     }
     public function set_fb_meta_profile($domain_name) {
      //set_fb_meta_profile Is associated with fb_meta_profile
         ///set_fb_meta_profile Jest powiązany z fb_meta_profile
      return $this->html ='<meta property="article:author" content="'.$domain_name.'/'.$this->first_name.'-'.$this->last_name.'/" />';
     }
     public function fb_meta_audio($audio_url, $audio_title, $audio_artist, $audio_album, $audio_type) {
       $this->html ="";
       if(!empty($audio_title)){
         $this->html .='<meta property="og:audio:title" content="'.$audio_title.'" />'; // Tytuł piosenki
         }
       if(!empty($audio_artist)){
         $this->html .='<meta property="og:audio:artist" content="'.$audio_artist.'" />'; // Nazwa wykonawcy lub zespołu
         }
       if(!empty($audio_album)){
         $this->html .='<meta property="og:audio:album" content="'.$audio_album.'" />'; // Tytuł płyty
         }
       if(!empty($audio_type)){
         $this->html .='<meta property="og:audio:type" content="'.$audio_type.'" />'; // application type np. mp3
         }
       if(!empty($audio_url)){
         $this->html .='<meta property="og:audio" content="'.$audio_url.'" />'; // adres utworu track address
         }
         return $this->html;
     }
   public function fb_meta_video($video_url, $video_type, $video_height=null, $video_width=null) {
      $this->html ="";
       if(!empty($video_url)){
         $this->html .='<meta property="og:video" content="'.$video_url.'" />'; // adres utworu track address
         }
          if(!empty($video_height)){
         $this->html .='<meta property="og:video:height" content="'.$video_height.'" />'; // Wymiary Dimensions height 640
          }
          if(!empty($video_width)){
         $this->html .='<meta property="og:video:width" content="'.$video_width.'" />'; // Wymiary Dimensions width 360
          }
       if(!empty($video_type)){
         $this->html .='<meta property="og:video:type" content="'.$video_type.'" />'; // application type np. mp4
         }
         return $this->html;
     }
     public function fb_meta_image($image_url, $image_secure_url=null, $image_type=null, $image_width=null, $image_height=null) {
          $this->html ="";
          if(!empty($image_url)){
         $this->html .='<meta property="og:image" content="'.$image_url.'" />'; // application type np. mp4
         }
          if(!empty($image_secure_url)){
         $this->html .='<meta property="og:image:secure_url" content="'.$image_secure_url.'" />'; // application type np. mp4
         }
         if(!empty($image_type)){
         $this->html .=' <meta property="og:image:type" content="'.$image_type.'" />'; // application type np. mp4
         }
         if(!empty($image_width)){
         $this->html .=' <meta property="og:image:width" content="'.$image_width.'" />'; // application type np. mp4
         }
         if(!empty($image_height)){
         $this->html .='<meta property="og:image:height" content="'.$image_height.'" />'; // application type np. mp4
         }
          return $this->html;
     }
    public function javascript()
     {
       if($this->browser_all()->{'javascript'} == 1){ // This browser supports javascript
          return true; // ta przeglądarka obsługuje javascript
       }else{
         return false;// nie obsługuje
       }
     }
     public function cookies()
     {
       if($this->browser_all()->{'cookies'} == 1){// This browser supports cookies
          return true; // ta przeglądarka obsługuje cookies
       }else{
         return false;// nie obsługuje
       }
     }
      public function backgroundsounds()
     {
       if($this->browser_all()->{'backgroundsounds'} == 1){ // This browser supports backgroundsounds
          return true; // ta przeglądarka obsługuje backgroundsounds
       }else{
         return false;// nie obsługuje
       }
     }
      public function iframes()
     {
       if($this->browser_all()->{'iframes'} == 1){ // This browser supports iframes
          return true; // ta przeglądarka obsługuje iframes
       }else{
         return false;// nie obsługuje
       }
     }
      public function Bootstrap_css()
     {
       if(!empty($this->bootstrap_css)){    
          return $this->bootstrap_css; // bootstrap css
       }else{
         return false;// nie obsługuje
       } 
     }
    public function Bootstrap_css_responsive()
     {
       if(!empty($this->BootstrapCssResponsive)){    
          return $this->BootstrapCssResponsive; // bootstrap css
       }else{
         return false;// nie obsługuje
       } 
     }
    public function Bootstrap_javascript()
     {
       if(!empty($this->bootstrapjavascript)){    
          return $this->bootstrapjavascript; // bootstrap javascript
       }else{
         return false;// nie obsługuje
       } 
     }
     public function HtmlIE()
     {
       if(!empty($this->htmlie)){ // This browser supports html5-IE 9
          return $this->htmlie; // ta przeglądarka obsługuje html5-IE9
       }else{
         return false;// nie obsługuje
       }
     }
     public function platform()
     {
       if(!empty($this->browser_all()->{'platform'})){ // This browser supports javascript
          return $this->browser_all()->{'platform'}; // ta przeglądarka obsługuje javascript
       }else{
         return false;// nie obsługuje
       }
     }
     public function browser()
     {
       if(!empty($this->browser_all()->{'browser'})){
           
           $browsers = array("Firefox", "Msie", "Opera", "Chrome", "Safari",
                            "Mozilla", "Netscape",
                            "Gecko", "IE");
             if(in_array($this->browser_all()->{'browser'}, $browsers))
              {
                   return $this->typebrowser = $this->browser_all()->{'browser'}; //type of browser rodzaj przeglądarki
              }else{
                   return $this->typebrowser= "Firefox";; // type of browser rodzaj przeglądarki
              }
       }else{
         return false;// nie obsługuje
       }
     }
   
   public function cssversionbrowser()
    {
     switch ($this->browser()) {
        
        case "Firefox":
          return $this->css_firefox;
          break;
        case "Msie":
          return $this->css_ie;
           break;
         case "Opera":
          return $this->css_opera;
           break;
         case "Chrome":
          return $this->css_chrome;
          break;
        case "Safari":
           return $this->css_safari;
           break;
         case "Mozilla":
          return $this->css_mozilla;
           break;
        case "Netscape":
          return $this->css_netscape;
          break;
        case "Gecko":
          return $this->css_gecko;
           break;
         case "IE":
            return $this->css_ie;
           break;
       default:
           return $this->w3c;// nie obsługuje
           break;
               }
     }
     public function jQueryCss()
     {
         if(!empty($this->jquerycss)){
          return $this->jquerycss; // jquery
       }else{
         return false;// nie obsługuje
       }
     }
     
    public function jQuery()
     {
         if(!empty($this->jquery)){
          return $this->jquery; // jquery
       }else{
         return false;// nie obsługuje
       }
     }
     public function jQuery_UI()
     {
         if(!empty($this->jqueryui)){
          return $this->jqueryui; // jquery
       }else{
         return false;// nie obsługuje
       }
     }
    public function cssversion()
     {
      if(!empty($this->browser_all()->{'cssversion'})){
           $this->css = $this->browser_all()->{'cssversion'};
          return $this->css; // version css
       }else{
         return false;// nie obsługuje
       }
     }
    public function css()
     {
       
      switch ($this->cssversion()) {
        case "1":
          return $this->css_1;// /* Css 2 */
          break;
        case "2":
          return $this->css_2;// /* Css 2 */
           break;
         case "3":
          return $this->css_3;// /* Css 3 */
           break;
         case "4":
          return $this->css_4;// /* Css 4 */
          break;
        case "5":
           return $this->css_5;// /* Css 5 */
           break;
        default:
           return $this->css_w3c_ver;// nie obsługuje
           break;
               }
     }
     /*
* assign cookies the all time
*/
  protected $cookies_width;
  protected $cookies_height;
  /*
* czas wygaśnięcia cookies i ponowne przypisanie
* cookie expiration time and re-assigning.
*/
  public $time_cookies = 15;
  
    public function save_cookies()
     {
          if($this->cookies())
           {
             if(!empty($_COOKIE['width']))
                {
                    $this->cookies_width = strip_tags(htmlspecialchars($_COOKIE['width']));
                    $this->cookies_height = strip_tags(htmlspecialchars($_COOKIE['height']));
                }else{
          ?>
<script>
var windowWidth = screen.width; ///var windowWidth = screen.width; //// var windowWidth = $(window).width(); //retrieve current window width
var windowHeight = screen.height; ///var windowHeight = screen.height; ///// var windowHeight = $(window).height(); //retrieve current window height
ustawCookie("height",windowHeight);
ustawCookie("width",windowWidth);
function ustawCookie(nazwa, wartosc) {
var data = new Date();
data.setSeconds(data.getSeconds()+ <?php echo $this->time_cookies; ?> ); // x sekund do przodu getMinutes()/// minuty /// getHours() godziny setMonth
document.cookie = nazwa + "=" + escape(wartosc) + ("; expires=" + data.toUTCString());
}
setTimeout(function()
{
window.location.reload();
}, 500);
</script>
<?php
                     }
           }else{
               $this->cookies_width ="";
           }
     }
     public function get_responsive()
     {
         if($this->javascript() && !empty($this->cookies_width)) /// sprawdzenie czy przeglądarka obsługuje javascript
             {
              /*
rezolution width
*/
                  $range_width = range(1441,1400);// 1440
                  $range_width1 = range(1361,1300);//1360
                  $range_width2 = range(1281,1200);// 1280
                  $range_width3 = range(1153,1100); //1152
                  $range_width4 = range(1025,1000); //1024
                  $range_width5 = range(801,770); //800
                  $range_width6 = range(769,750); //768
                  $range_width8 = range(690,675); //685
                  $range_width7 = range(601,590); //600
                  $range_width9 = range(569,540); // 568
                  $range_width10 = range(481,460); // 480
                  $range_width13 = range(381,360); // 380
                  $range_width11 = range(321,300); // 320
                  $range_width12 = range(241,200); // 240
              /*
rezolution height
*/
                  $range_height5 = range(1025,1000); // 1024 960 864 768
                  $range_height4 = range(961,940); // 960 864 768
                  $range_height = range(901,880); // 960
                  $range_height1 = range(865,840); //864
                  $range_height2 = range(769,750); // 768
                  $range_height6 = range(690,675); //685
                  $range_height3 = range(601,590); // 600
                  $range_height7 = range(569,540); // 568
                  $range_height8 = range(481,560); // 480
                  $range_height9 = range(321,300); // 320
                  $range_height10 = range(241,200); // 240
                  
                  
            if(in_array($this->cookies_width, $range_width))
              {
                 $this->responsive=$this->css_1440; // jest re 1440
              }elseif (in_array($this->cookies_width, $range_width1)) {
                  $this->responsive=$this->css_1360; // jest re 1360
              }elseif (in_array($this->cookies_width, $range_width2)) {
                  $this->responsive=$this->css_1280;
                //echo "jest w tabl 1200";
                if(in_array($this->cookies_height, $range_height5)){
                    $this->responsive=$this->css_1024;
                    ///echo "jest w tabl height 1024"; // window 1200 x 1024
                }elseif(in_array($this->cookies_height, $range_height4))
                    {
                     $this->responsive=$this->css_800;
                   /// echo "jest w tabl height 960"; // window 1200 x 960
                    }elseif(in_array($this->cookies_height, $range_height2))
                        {
                         $this->responsive=$this->css_600;
                       // echo "jest w tabl heigh 600"; // Kindle landscape 1200 x 768
                        }else{
                           $this->responsive=$this->css_w3c_re; // Standart W3C
                        }
              }elseif (in_array($this->cookies_width, $range_width3)) {
                 $this->responsive= $this->css_1152;
                //echo "jest w tabl 1100"; // window 1152 x 864
              }elseif (in_array($this->cookies_width, $range_width4)) {
                     $this->responsive=$this->css_1024;
                ///echo "jest w tabl 1020"; // window 1024 x 768
                if(in_array($this->cookies_height, $range_height2))
                    {
                    $this->responsive=$this->css_768;
                    //echo "jest w tabl height 768"; // iPad landscape 1024 x 768 & window 1024 x 768
                    }elseif(in_array($this->cookies_height, $range_height3))
                        {
                        $this->responsive=$this->css_600;
                        ///echo "jest w tabl heigh 600"; // Kindle landscape 1024 x 600
                        }else{
                            $this->responsive=$this->css_w3c_re; // Standart W3C
                        }
              }elseif (in_array($this->cookies_width, $range_width5)) {
                  $this->responsive=$this->css_800;
               /// echo "jest w tabl 800"; // window 800 x 600
              }elseif (in_array($this->cookies_width, $range_width6)) {
                  $this->responsive=$this->css_768;
                //echo "jest w tabl 768"; // iPad portrait 768 x 1024
              }elseif (in_array($this->cookies_width, $range_width8)) {
                  $this->responsive=$this->css_685;
                ///echo "jest w tabl 685"; // Android (Samsung Galaxy) landscape 685 by 380
                if(in_array($this->cookies_height, $range_height2))
                    {
                    $this->responsive=$this->css_380;
                    ///echo "jest w tabl height 380"; // // Android (Samsung Galaxy) landscape 685 by 380
                    }else{
                        $this->responsive=$this->css_w3c_re; // Standart W3C
                    }
              }elseif (in_array($this->cookies_width, $range_width7)) {
                  $this->responsive=$this->css_600;
                ///echo "jest w tabl 600"; // Kindle portrait 600 x 1024
              }elseif (in_array($this->cookies_width, $range_width9)) {
                  $this->responsive=$this->css_568;
                //echo "jest w tabl 568"; //iPhone 5 landscape 568 x 320
              }elseif (in_array($this->cookies_width, $range_width10)) {
                  $this->responsive=$this->css_480;
               // echo "jest w tabl 480"; // iPhone 3+4 landscape 480 x 320
              }elseif (in_array($this->cookies_width, $range_width13)) {
                  $this->responsive=$this->css_380;
               // echo "jest w tabl 380"; // Android (Samsung Galaxy) portrait 380 by 685
              }elseif (in_array($this->cookies_width, $range_width13)) {
                  $this->responsive=$this->css_320;
                //echo "jest w tabl 320"; // iPhone 5 portrait 320 x 568
                if(in_array($this->cookies_height, $range_height7))
                    {
                    $this->responsive=$this->css_568;
                    ///echo "jest w tabl height 568"; // iPhone 5 portrait 320 x 568
                    }elseif(in_array($this->cookies_height, $range_height8))
                        {
                        $this->responsive=$this->css_480;
                        //echo "jest w tabl heigh 480"; // iPhone 3+4 portrait 320 x 480
                        }elseif(in_array($this->cookies_height, $range_height10))
                        {
                            $this->responsive=$this->css_240;
                       // echo "jest w tabl heigh 240"; // Crappy Android landscape 320 x 240
                        }else{
                             $this->responsive=$this->css_w3c_re; // Standart W3C
                        }
              }elseif (in_array($this->cookies_width, $range_width12)) {
                  $this->responsive=$this->css_240;
                //echo "jest w tabl 240"; // Crappy Android portrait 240 x 320
              }else{
                  $this->responsive=$this->css_w3c_re; // Standart W3C
              }
            return $this->responsive;
             }else{
                 /* W3C */ ///Zrobić css do obsługi bez javascript standardowy dla wszystkich
           return $this->responsive=$this->css_w3c_re;
         }
     }
}

    Status
    API
    Training
    Shop
    Blog
    About

    © 2013 GitHub, Inc.
    Terms
    Privacy
    Security
    Contact

