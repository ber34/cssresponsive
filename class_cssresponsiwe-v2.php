<?php

/*
* Responsive CSS is a class to handle pages html5, jQuery, CssResponsive, CssBrowser, CssVersion, Open Graph Facebook
* google font, meta tag.
* Class is designed to load the appropriate CSS styles depending on the browser like Mozilla, IE, etc.
* Class also recognize the screen resolution, thus adapting to a device such as tablet, phone, etc.
* By reading the right style for your device. Identifies the version of the style supported by your browser.
* All this results in a significant acceleration loading, because they are charged only the styles
* that are just at the time needed.
* In the classroom you will find a few other things you need to use a web page that may help facilitate the work.
* Check javascript, cookiesmedia etc.
* Class will prepare more efficiently css responsieive for devices and for our applications.
*
* Added support for the Protocol Open Graph Facebook
* Added support for the framework Bootstrap
*
* The class made every google font support.
* Now in an easy way that you can make the font on the page.
* You get to choose from 10 pieces
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
* Do klasy dołożono obsługę czcionek firmy google.
* Teraz w łatwy sposób możesz dołożyć
* interesujące cię czcionki do strony.
* Do wyboru dostajemy 10 szt.
*
* Css_responsive & CssBrowser & CssVersion & Facebook & google font & meta tag
*
* PHP 5.1
* @version v2.0
* Added support for the Protocol Open Graph Facebook
* Added support for the framework Bootstrap
* The class made every google font support.
* Now in an easy way that you can make the font on the page.
* You get to choose from 10 piece
* Meta tag
* ########
* V 2. 0 -> Zmieniono działanie klasy zastąpiono ciasteczka na rzecz jquery
* co znacznie przyśpieszyło całą klasę a także spowodowało bardziej płynną pracę.
* V 2 0 -> Changed the class action was replaced with cookies for jquery
* Which greatly sped up the entire class, and resulted in a smoother operation. 
* ####### 
* @license Apache License, Version 2.0.
* @author Adam Berger <ber34@o2.pl>
* @Site www.joomla-cms.com.pl
*/
 
class CssResponsive{
    ######################################### Browser ##############################################################################
    const CSS_IE = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.IE.css" />';/* IE, Msie*/
    const CSS_OPERA = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.Opera.css" />';/* OPERA*/
    const CSS_FIREFOX = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.FIREFOX.css" />';/* FIREFOX , MOZILLA*/
    const CSS_SAFARI = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.Safari.css" />';/* Chrome , Safari */
    const CSS_CHROME = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.Chrome.css" />';/* Chrome , Safari */
    const CSS_MOZILLA = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.MOZILLA.css" />';/* FIREFOX , MOZILLA*/
    const CSS_NETSCAPE = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.netscape.css" />'; /* Chrome , Safari */
    const CSS_GECKO = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.Gecko.css" />'; /* Chrome , Safari */
    const CSS_W3C = '<link type="text/css" rel="stylesheet" href="../Responsive/css/styll.W3C.css" />';/* W3C, Gecko, Netscape */
   ######################################### RESPONSIVE #########################################################################
    const CSS_1440 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1440.css'; /*1440*/
    const CSS_1360 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1360.css';/* 1360*/
    const CSS_1280 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1280.css'; /*1280*/
    const CSS_1280x1024 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1280x800.css'; /* 1280 x800*/
	const CSS_1280x800 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1280x800.css'; /* 1280 x800*/
	const CSS_1280x600 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1280x600.css'; /* 1280 x800*/
    const CSS_1152 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1152.css'; /*1152*/
    const CSS_1024 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.1024.css';/* 1024x768*/
    const CSS_800 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.800.css'; /*800*/
    const CSS_768 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.768.css';/*768*/
    const CSS_685 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.685.css';/*685*/
    const CSS_600 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.600.css';/*600*/
    const CSS_568 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.568.css';/*568*/
    const CSS_480 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.480.css';/*480*/
    const CSS_380 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.380.css';/*380*/
    const CSS_320 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.320.css';/* 320*/
    const CSS_240 = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.240.css';/*240*/
    const CSS_W3C_RE = 'http://www.prezenty-zyczenia.pl/class_responsive/css/styll.w3c.css'; /* W3C */
    ######################################### Css version ###################################################
    const CSS_1 = '<link type="text/css" rel="stylesheet" href="../Responsive/css/css.1.css" />'; /* Css 1 */
    const CSS_2 = '<link type="text/css" rel="stylesheet" href="../Responsive/css/css.2.css" />';/* Css 2 */
    const CSS_3 = '<link type="text/css" rel="stylesheet" href="../Responsive/css/css.3.css" />';/* Css 3 */
    const CSS_4 = '<link type="text/css" rel="stylesheet" href="../Responsive/css/css.4.css" />'; /* Css 4 */
    const CSS_5 = '<link type="text/css" rel="stylesheet" href="../Responsive/css/css.5.css" />'; /* Css 5 */
    const CSS_W3C_VER = '<link type="text/css" rel="stylesheet" href="../Responsive/css/css.w3c_ver.css" />'; /* W3C */
    ########################################## jQuery & HTML5 IE 9 ##########################################
    const JQuery = '<script src="http://code.jquery.com/jquery-1.11.1.js"></script>';/* jQuery 1.9*/
    const JQuery_UI = '<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>';
    const JQueryCss = '<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />';/* jQuery*/
    const BootstrapCss = '<link rel="stylesheet" href="../zarabiarka/css/bootstrap.css" />';/* Bootstrap */
    const BootstrapCssResponsive = '<link rel="stylesheet" type="text/css" href="../zarabiarka/js/bootstrap-responsive.css" />';/* Bootstrap css responsive*/
    const BootstrapJavascript = '<script src="../zarabiarka/js/bootstrap.js"></script>';/*Bootstrap javascript*/
    const HTML_IE = '<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
     ####################################### Font Google ###########################################
        /*
* http://www.google.com/fonts
* Font Kavoon
* time 0.17
* css font-family: 'Kavoon', cursive;
*/
   const Font_Kavoon = "<link href='http://fonts.googleapis.com/css?family=Kavoon' rel='stylesheet' type='text/css'>";
         /*
* http://www.google.com/fonts
* Font Hanalei
* time 0.18
* css font-family: 'Hanalei Fill', cursive;
*/
  const Font_Hanalei ="<link href='http://fonts.googleapis.com/css?family=Hanalei+Fill' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font Mouse
* time 0.15
* css font-family: 'Mouse Memoirs', sans-serif;
*/
  const Font_Mouse ="<link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font Roboto
* time 0.10
* css font-family: 'Roboto', sans-serif;
*/
  const Font_Roboto ="<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font Flavors
* time 0.97
* css font-family: 'Flavors', cursive;
*/
  const Font_Flavors ="<link href='http://fonts.googleapis.com/css?family=Flavors' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font Glass
* time 0.13
* css font-family: 'Glass Antiqua', cursive;
*/
  const Font_Glass ="<link href='http://fonts.googleapis.com/css?family=Glass+Antiqua' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font Maiden
* time 0.32
* css font-family: 'Maiden Orange', cursive;
*/
  const Font_Maiden ="<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font Rosario
* time 0.18
* css font-family: 'Rosario', sans-serif;
*/
  const Font_Rosario="<link href='http://fonts.googleapis.com/css?family=Rosario' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font UnifrakturMaguntia
* time 0.44
* css font-family: 'UnifrakturMaguntia', cursive;
*/
  const Font_UnifrakturMaguntia ="<link href='http://fonts.googleapis.com/css?family=UnifrakturMaguntia' rel='stylesheet' type='text/css'>";
        /*
* http://www.google.com/fonts
* Font Rancho
* time 0.26
* css font-family: 'Rancho', cursive;
*/
  const Font_Rancho ="<link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>";
  
  ###########################################################################################
    public  $htmlie;
    public  $htmlie_7;
    public  $css_w3c_ver;
    public  $html;
    public  $html_s;
    public  $meta;
    public  $first_name;
    public  $last_name;        
    public  $typebrowser;
    public  $responsive= array(); //tablica;
    private $browser   = array(); //tablica
    private $key       = array(); //tablica
   
    public function __construct(){
        #######################################
     }
	 
public function fb_meta_site($site_name, $title, $description=null, $content_type, $url=null, $image=null){
 
         /*
* documentation https://developers.facebook.com/docs/opengraph/
* http://ogp.me/#types
* FACEBOKE
*/
         $this->html ="";
         if(!empty($site_name)){
         $this->html .='<meta property="og:site_name" content="'.$site_name.'" />'; /* Nazwa strony*/
         }
         if(!empty($title)){
         $this->html .='<meta property="og:title" content="'.$title.'" />'; /* tytuł linka*/
         }
         if(!empty($description)){
         $this->html .='<meta property="og:description" content="'.$description.'" /> '; /* Opis treści*/
         }
         if(!empty($content_type)){
          $this->html .='<meta property="og:type" content="'.$content_type.'" />';
         }
         if(!empty($url)){
         $this->html .='<meta property="og:url" content="'.$url.'" />';/* link url*/
         }
         if(!empty($image)){
         $this->html .='<meta property="og:image" content="'.$image.'" />'; /* link zdiecie*/
         }
       return $this->html;
     }
     public function fb_meta_profile($first_name, $last_name, $username=null, $gender=null){
         
         $this->html ="";
        if(!empty($first_name)){
         $this->first_name=$first_name;
         $this->html .='<meta property="profile:first_name" content="'.$this->first_name.'" />'; /* imie autora*/
         }
        if(!empty($last_name)){
         $this->last_name =$last_name;
         $this->html .='<meta property="profile:last_name" content="'.$this->last_name.'" />'; /* Nazwisko autora*/
         }
        if(!empty($username)){
         $this->html .='<meta property="profile:username" content="'.$username.'" />'; /* NICK autora*/
         }
        if(!empty($gender)){
         $this->html .='<meta property="profile:gender" content="'.$gender.'" />'; /* płeć autora male "mężczyzna" female "kobieta"*/
         }
         return $this->html;
     }
     public function set_fb_meta_profile($domain_name){
      /*set_fb_meta_profile Is associated with fb_meta_profile*/
         /*set_fb_meta_profile Jest powiązany z fb_meta_profile*/
      return $this->html ='<meta property="article:author" content="'.$domain_name.'/'.$this->first_name.'-'.$this->last_name.'/" />';
     }
     public function fb_meta_audio($audio_url, $audio_title, $audio_artist, $audio_album, $audio_type) {
       $this->html ="";
       if(!empty($audio_title)){
         $this->html .='<meta property="og:audio:title" content="'.$audio_title.'" />'; /* Tytuł piosenki*/
         }
       if(!empty($audio_artist)){
         $this->html .='<meta property="og:audio:artist" content="'.$audio_artist.'" />'; /* Nazwa wykonawcy lub zespołu*/
         }
       if(!empty($audio_album)){
         $this->html .='<meta property="og:audio:album" content="'.$audio_album.'" />'; /* Tytuł płyty*/
         }
       if(!empty($audio_type)){
         $this->html .='<meta property="og:audio:type" content="'.$audio_type.'" />'; /* application type np. mp3*/
         }
       if(!empty($audio_url)){
         $this->html .='<meta property="og:audio" content="'.$audio_url.'" />'; /* adres utworu track address*/
         }
         return $this->html;
     }
   public function fb_meta_video($video_url, $video_type, $video_height=null, $video_width=null){
      $this->html ="";
       if(!empty($video_url)){
         $this->html .='<meta property="og:video" content="'.$video_url.'" />'; /* adres utworu track address*/
         }
          if(!empty($video_height)){
         $this->html .='<meta property="og:video:height" content="'.$video_height.'" />'; /* Wymiary Dimensions height 640*/
          }
          if(!empty($video_width)){
         $this->html .='<meta property="og:video:width" content="'.$video_width.'" />'; /* Wymiary Dimensions width 360*/
          }
       if(!empty($video_type)){
         $this->html .='<meta property="og:video:type" content="'.$video_type.'" />'; /* application type np. mp4*/
         }
         return $this->html;
     }
     public function fb_meta_image($image_url, $image_secure_url=null, $image_type=null, $image_width=null, $image_height=null) {
          $this->html ="";
          if(!empty($image_url)){
         $this->html .='<meta property="og:image" content="'.$image_url.'" />'; /* application type np. mp4*/
         }
          if(!empty($image_secure_url)){
         $this->html .='<meta property="og:image:secure_url" content="'.$image_secure_url.'" />'; /* application type np. mp4*/
         }
         if(!empty($image_type)){
         $this->html .=' <meta property="og:image:type" content="'.$image_type.'" />'; /* application type np. mp4*/
         }
         if(!empty($image_width)){
         $this->html .=' <meta property="og:image:width" content="'.$image_width.'" />'; /* application type np. mp4*/
         }
         if(!empty($image_height)){
         $this->html .='<meta property="og:image:height" content="'.$image_height.'" />'; /* application type np. mp4*/
         }
          return $this->html;
     }
  public function get_meta($author=null, $description=null, $keywords=null, $scale=null, $robots=null, $verification=null, $telephone=null )
    {
       $this->meta  ="";
      if(!empty($author)){ /*author*/ 
           $this->meta .='<meta name="author" content="'.$author.'"/>'; 
       }
      if(!empty($description)){ /*description*/ 
           $this->meta .='<meta name="description" content="'.$description.'"/>'; /* opis */ 
       }
      if(!empty($keywords)){ /*keywords*/ 
          $this->meta .='<meta name="keywords" content="'.$keywords.'"/>'; /* slowa kluczowe */ 
       }
      if(!empty($robots)){ /* robots */ 
       $this->meta .='<meta name="robots" content="'.$robots.'">'; /* noindex,nofollow */ 
       }
      if(!empty($verification)){ /* verification */ 
       $this->meta .='<meta name="google-site-verification" content="'.$verification.'"/>'; /* google site verification key */ 
       }
      if(!empty($telephone)){ /* telephone */
        /* Po uruchomieniu w przeglądarce na telefonie komórkowym określa, czy numery telefonów w treści HTML będzie wyświetlan */
        /*When running in a browser on a mobile phone, determines whether or not telephone numbers in the HTML content will appear*/
       $this->meta .='<meta name="format-detection" content="telephone='.$telephone.'"/>';  /* yes or no*/
       }
       $this->meta .='<meta name="copyright" content="&copy;'.date("Y").'" />';/* copyright rok */
      if(!empty($scale) && $scale == 1){ /*Scala responsive*/ 
       $this->meta .='<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">'; 
       $this->meta .='<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=yes" />'; /* uzywamy z responsywnym css3 */ 
       }
       $this->meta;
    }
  public function set_meta(){
         return $this->meta;
     }
    public function javascript(){
       if($this->browser_all()->{'javascript'} == 1){ /* This browser supports javascript*/
          return true; /* ta przeglądarka obsługuje javascript*/
       }else{
         return false;/* nie obsługuje*/
       }
     }
     public function cookies(){
       if($this->browser_all()->{'cookies'} == 1){ /* This browser supports cookies*/
          return true; /* ta przeglądarka obsługuje cookies*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
      public function backgroundsounds(){
       if($this->browser_all()->{'backgroundsounds'} == 1){ /* This browser supports backgroundsounds*/
          return true; /* ta przeglądarka obsługuje backgroundsounds*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
      public function iframes(){
       if($this->browser_all()->{'iframes'} == 1){ /* This browser supports iframes*/
          return true; /* ta przeglądarka obsługuje iframes*/
       }else{
         return false; /* nie obsługuje*/
       }
     }

      public function Bootstrap_css(){
       if(self::BootstrapCss){
          return self::BootstrapCss; /* bootstrap css*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
    public function Bootstrap_css_responsive(){
       if(self::BootstrapCss){
          return self::BootstrapCss; /* bootstrap css*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
    public function Bootstrap_javascript(){
       if(self::BootstrapJavascript){
          return self::BootstrapJavascript; /* bootstrap javascript*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
     public function HtmlIE(){
       if(self::HTML_IE){ /* This browser supports html5-IE 9*/
          return self::HTML_IE; /* ta przeglądarka obsługuje html5-IE9*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
     public function platform(){
       if(!empty($this->browser_all()->{'platform'})){ /* This browser supports javascript*/
          return $this->browser_all()->{'platform'}; /* ta przeglądarka obsługuje javascript*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
   public function fontgoogle($font_info){
      if(!empty($font_info)){
     switch($font_info) {
        case "Rancho":
          return self::Font_Rancho;
          break;
        case "UnifrakturMaguntia":
          return self::Font_UnifrakturMaguntia;
           break;
         case "Rosario":
          return self::Font_Rosario;
           break;
         case "Maiden":
          return self::Font_Maiden;
          break;
        case "Glass":
           return self::Font_Glass;
           break;
         case "Flavors":
          return self::Font_Flavors;
           break;
        case "Roboto":
          return self::Font_Roboto;
          break;
        case "Mouse":
          return self::Font_Mouse;
           break;
         case "Hanalei":
            return self::Font_Hanalei;
           break;
         case "Kavoon":
            return self::Font_Kavoon;
           break;
       default:
           return self::Font_Roboto;
           break;
               }
			   }
     }
	 
        
	 
     public function jQueryCss(){
       if(self::JQueryCss){
          return self::JQueryCss; /* jquery*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
     
    public function jQuery(){
       if(self::JQuery){
          return self::JQuery; /* jquery*/
       }else{
         return false; /* nie obsługuje*/
       }
     }
     public function jQuery_UI(){
       if(self::JQuery_UI){
          return self::JQuery_UI; /* jquery*/
       }else{
         return false; /* nie obsługuje*/
       }
     }

    public function get_responsive(){
      return '<link id="link" type="text/css" rel="stylesheet" href="" />';
     }
	 public function get_test(){
      return '<aside id="bb" style="width:99%;height:99%;"></aside>';
     }
	 
  public function set_responsive(){
  ?>
      <script>
 $(document).ready(function(){
    $(window).on('resize', function(){ // window
	
	var widt = $(window).width();
	var heig = $(window).height();

	if(widt>='1360'){
	  $( "#link" ).attr( "href", "<?php echo self::CSS_1440; ?>" );
	 $('#bb').text( ' width: ' + widt + ', height: ' + heig ).show();
	 $('#bb').prepend( 'Css <b>1440</b>').show();
	}
	if(widt<='1359' && widt>='1280'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_1360; ?>" );
	$('#bb').text( ' width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>1360</b>');
	 //$('#bb').hide();
	}
	if( widt<='1279' && widt>='1152'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_1280;?>" );
	$('#bb').text( ' width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>1280</b>');
	 //$('#bb').hide();
	}
	if(widt<='1151' && widt>='1024' ){
	$( "#link" ).attr( "href", "<?php echo self::CSS_1152;?>" );
	$('#bb').text( ' width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>1152</b>');
	 //$('#bb').hide();
	}
	if(widt<='1023' && widt>='800'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_1024;?>" );
	$('#bb').text( ' width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>1024</b>');
	 //$('#bb').hide();
	}
	if(widt<='799' && widt>='768'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_800;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>800</b>');
	 //$('#bb').hide();
	}
	if(widt<='767' && widt>='685'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_768;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>768</b>');
	 //$('#bb').hide();
	}
	if(widt<='684' && widt>='600'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_685;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( '<b>685</b>');
	 //$('#bb').hide();
	}
	if(widt<='599' && widt>='568'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_600;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>600</b>');
	 //$('#bb').hide();
	}
	if(widt<='567' && widt>='480'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_568;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>568</b>');
	 //$('#bb').hide();
	}
	if(widt<='479' && widt>='380'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_480;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>480</b>');
	 //$('#bb').hide();
	}
	if(widt<='379' && widt>='320'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_380;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>380</b>');
	 //$('#bb').hide();
	}
	if(widt<='319' && widt>='240'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_320;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>320</b>');
	 //$('#bb').hide();
	}
	if(widt<='239'){
	$( "#link" ).attr( "href", "<?php echo self::CSS_240;?>" );
	$('#bb').text( 'window width: ' + widt + ', height: ' + heig ).show();
	$('#bb').prepend( 'Css <b>240</b>');
	 //$('#bb').hide();
	}
      });
	  // Wywołuje się jako pierwsze a dopiero to u góry
      $(window).trigger('resize');
  });
  </script>
  <?php  
     }
}
