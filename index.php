<?php
    if ( extension_loaded( 'zlib' ) && ini_get( 'zlib.output_compression' ) == 0 ) {
        if ( ob_get_level() > 0 ) {
            ob_end_clean();
        }
        ob_start( 'ob_gzhandler' );
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pawel Osmolski / Star Paw / Portfolio</title>
<meta name="description" content="Official online portfolio for Pawel Osmolski. The musical space captain." />
<meta name="keywords" content="Pawel Osmolski,Pawel Osmolski Portfolio,Pawel,Osmolski,Filip Oscar,Filip,Oscar,Radiohead Remixes,CrunchAlias,Crunch Alias,Goff Tiddums,Jeebus Orion,Star Paw,Captain Star Paw,deVilhoOD,deVilhoOD Remixes,Music Portfolio,Producer,Music Producer,Freelance Composer,Music Composer,Composer,Sound Designer,Sound Design,Compositions,Singer-Songwriter,Singer,Songwriter,Covers,Sound,Design,Music,Portfolio,Video Game Composer,Game Composer,Film Composer,Graphics,Graphics Designer,Web Designer,Web Developer,Developer,Web Design,Graphics Design,Web Portfolio,Photographer,Poet,Lyricist" />
<meta name="author" content="Pawel Osmolski" />
<meta name="copyright" content="Copyright <?php echo date('Y'); ?> Pawel Osmolski" />
<meta name="language" content="EN" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5" />
<meta property="og:image" content="http://www.pawel-osmolski.com/images/pawel_logo.jpg" />
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />
<meta property="og:image:type" content="image/jpeg" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Pawel Osmolski / Star Paw / Portfolio" />
<meta name="twitter:description" content="Official online portfolio for Pawel Osmolski. The musical space captain." />
<meta name="twitter:image" content="http://www.pawel-osmolski.com/images/pawel_logo.jpg" />
<meta name="twitter:site" content="@gofftiddums" />
<link rel="image_src" href="http://www.pawel-osmolski.com/images/pawel_logo.jpg" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png" />
<!-- <link href="css/highdpi.min.css" rel="stylesheet" type="text/css" /> -->
<!--[if (gte IE 8)|!(IE)]><!-->
<!--<link href="css/screen.min.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
<!-- <![endif]-->
<link rel="preload" href="fonts/leaguegothic-regular-webfont.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/carroisgothic-regular-webfont.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/fontawesome-webfont.woff2?v=4.0.3" as="font" type="font/woff2" crossorigin>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="css/compiled.min.css?v=<?= filemtime( 'css/compiled.min.css' ); ?>" rel="stylesheet" type="text/css" />
<!--<link href="highslide/highslide.min.css" rel="stylesheet" type="text/css" />
<link href="css/responsiveslides.css" rel="stylesheet" type="text/css" />-->
<!--[if lte IE 8]><link href="css/ie8.min.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if lte IE 7]><link href="css/ie7.min.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 7]><link href="css/font-awesome-3.2.1.min.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 7]><link href="css/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body id="home" class="bg-normal-right bg-cover smooth-fonts">
<div id="header_container">
  <div id="header"><a class="title" href="#home" title="Back to the top of the page"><!--[if (gte IE 8)|!(IE)]><!--><i class="fa fa-chevron-up"></i><!-- <![endif]--><!--[if IE 7]><i class="icon-chevron-up"></i><![endif]--></a></div>
</div>

<div id="container"><!--DIV CONTAINER: START-->

  <div id="title-menu">
    <div class="title-1"><h1>PAWEL OSMOLSKI</h1></div>
    <div class="title-2"></div>
    <div class="title-3"><a class="title" href="#intro">INTRO</a> - <a class="title" href="#music">MUSIC</a> - <a class="title" href="#web-design">WEB DESIGN</a> - <a class="title" href="#sound-design">SOUND DESIGN</a> - <a class="title" href="#remix">REMIX</a></div>
  </div>
<!--INTRO: START-->
  <div id="intro" class="section">
    <div id="intro-photo">
      <ul class="rslides">
        <li><a href="http://instagram.com/p/HKUxs0hWik/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/piano.jpg" alt="Baby Grand" /></a></li>
        <li><a href="http://instagram.com/p/jHgJR8BWgp/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/walls.jpg" alt="St Botolph's Priory" /></a></li>
        <li><a href="http://instagram.com/p/l2ubssBWmG/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/winter-tree.jpg" alt="English Winter Tree" /></a></li>
        <li><a href="http://instagram.com/p/jHilVmhWj6/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/gated.jpg" alt="St Botolph's Priory Door" /></a></li>
        <li><a href="http://instagram.com/p/eW3yG/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/express-lift.jpg" alt="The Express Lift" /></a></li>
        <li><a href="http://instagram.com/p/eTI-O4hWgn/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/contemporary.jpg" alt="Art Piece" /></a></li>
        <li><a href="http://instagram.com/p/fLdyf/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/museum-exhibit.jpg" alt="Swedish Museum Exhibit" /></a></li>
        <li><a href="http://instagram.com/p/juzWZFhWlI/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/photography/mill.jpg" alt="Old Bourne Mill" /></a></li>
      </ul>
    </div>
    <div class="clear-mobile"></div>
    <div id="intro-text">
      <h2><a class="title" href="#intro">Intro</a></h2>
      <p>Pawel's work speaks for itself. Listen and view the examples below for an expression of his creative palette.</p>
      <ul>
        <li>Classically trained multi-instrumentalist</li>
        <li>Award winning web developer with a passion for fluid design</li>
        <li>Sound designer with an avid and unique approach to audio</li>
        <li>Trendy digital designer with a focus on building brand awareness</li>
        <li>Evocative music composer and singer songwriter</li>
        <li>Exceptional versatility in musical style, engineering and production</li>
        <li>Animated voice actor with a well spoken English accent</li>
        <li>Hobbyist photographer and creative photo editor</li>
        <li>Fan of vintage video gaming, Battlestar Galactica and Doctor Who</li>
      </ul>
    </div>
  </div>
<!--INTRO: END-->
<!--MUSIC: START-->
  <div id="music" class="section">
    <div id="music-soundcloud"> 
      <!--[if lte IE 8]><div class="soundcloud-flash"><object height="425" width="850"><param name="movie" value="https://player.soundcloud.com/player.swf?url=https%3A//api.soundcloud.com/playlists/2779898&amp;color=1b3651&amp;auto_play=false&amp;player_type=artwork"></param><param name="allowscriptaccess" value="always"></param><param name="wmode" value="transparent"></param><embed wmode="transparent" allowscriptaccess="always" width="100%" height="425" src="https://player.soundcloud.com/player.swf?url=https%3A//api.soundcloud.com/playlists/2779898&amp;color=1b3651&amp;auto_play=false&amp;player_type=artwork" type="application/x-shockwave-flash"></embed></object></div><![endif]--> 
      <!--[if (gte IE 9)|!(IE)]><!-->
      <iframe loading="lazy" title="SoundCloud audio player showcasing Pawel's music portfolio" height="438" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/2779898&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
      <!-- <![endif]--> 
    </div>
    <div class="clear-mobile"></div>
    <div id="music-text">
      <h2><a class="title" href="#music">Music</a></h2>
      <p>Pawel Filip Osmolski (born May 12, 1983) is an English composer and child prodigy. He started composing on the piano at the age of 7, and was also writing music on the Commodore Amiga computer using <a class="link" href="https://en.wikipedia.org/wiki/Music_tracker" target="_blank" rel="noreferrer">MOD Tracker software</a>.</p>
      <p>He currently writes and performs his own songs under the stage name <a class="link" href="https://www.filiposcar.com" target="_blank" rel="noopener">Filip Oscar</a>, which he used to launch his first studio album <a class="link" href="https://filiposcar.bandcamp.com/album/raven-white" target="_blank" rel="noopener">Raven White</a>.</p>
      <p>During his teens, he became fascinated with learning the Acoustic/Electric guitar, Bass guitar and Drums, which led him to progress onto MIDI and Audio workstations such as Avid Pro Tools and Steinberg Cubase.</p>
      <p>His musical family meant that he grew up listening to, and playing all kinds of music, developing strong song-writing <a class="link" href="https://youtu.be/kOYAuhZAy1c" target="_blank" rel="noopener">individualism</a> and instrumental flexibility. He is an <a class="link" href="https://youtu.be/1qtKBfqFyww" target="_blank" rel="noopener">improviser</a> at heart, being able to create melodies and sounds without the need of any significant influence or stimulus.</p>
    </div>
  </div>
<!--MUSIC: END-->
<!--WEB DESIGN: START-->
  <div id="web-design" class="section">
    <div id="web-design-mockups">
      <div class="image-border">
        <ul class="rslides">
          <!--<li><a href="images/hires/web-design/academyformarketing_courses.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/academyformarketing_courses.jpg" alt="Academy for Marketing website built by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Website: <strong><a href="http://www.academyformarketing.com" target="_blank">Academy for Marketing</a></strong>. Front-End Development: Pawel Osmolski - Website Design Ltd. CMS: WordPress. Fully Responsive.</span></div>
          </li>-->
          <li><a href="images/hires/web-design/crumpetcashmere_shopping.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/crumpetcashmere_shopping.jpg" alt="Crumpet Cashmere website built by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Website: <strong><a href="https://www.crumpetcashmere.com" target="_blank" rel="noreferrer">Crumpet Cashmere</a></strong>. Front-End Development: Pawel Osmolski - Website Design Ltd. CMS: CS-Cart. Fully Responsive.</span></div>
          </li>
          <li><a href="images/hires/web-design/superiorschoolnc_postlicensing.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/superiorschoolnc_postlicensing.jpg" alt="Superior School of Real Estate website built by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Website: <strong><a href="http://www.superiorschoolnc.com" target="_blank" rel="noreferrer">Superior School of Real Estate</a></strong>. Front-End Development: Pawel Osmolski - Colibri Group. CMS: WordPress. Fully Responsive.</span></div>
          </li>
          <li><a href="images/hires/web-design/rivieradrinks_homepage.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/rivieradrinks_homepage.jpg" alt="Riviera Drinks website built by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Website: <strong><a href="https://www.rivieradrinks.co.uk" target="_blank" rel="noreferrer">Riviera Drinks Co</a></strong>. <strong><a href="http://www.essexdigitalawards.co.uk/" target="_blank" rel="noreferrer">Silver winner at the Essex Digital Awards 2018</a></strong>. Front-End Development: Pawel Osmolski - Focus Integrated. CMS: WordPress. Fully Responsive with WebGL.</span></div>
          </li>
          <!--<li><a href="images/hires/web-design/quarterbridge_marketassetmanagement.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/quarterbridge_marketassetmanagement.jpg" alt="Quarterbridge website built by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Website: <strong><a href="http://www.quarterbridge.co.uk" target="_blank" rel="noreferrer">Quarterbridge</a></strong>. Front-End Development: Pawel Osmolski - Website Design Ltd. CMS: WordPress.</span></div>
          </li>-->
          <li><a href="images/hires/web-design/saffrontax_homepage.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/saffrontax_homepage.jpg" alt="Saffron Tax website built by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Website: <strong><a href="http://www.saffrontax.com" target="_blank" rel="noreferrer">Saffron Tax Partners LLP</a></strong>. Front-End Development: Pawel Osmolski - Website Design Ltd. CMS: WordPress.</span></div>
          </li>
          <li><a href="images/hires/web-design/hrelite_homepage.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/hrelite_homepage.jpg" alt="HR Elite website built by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Website: <strong><a href="http://www.hrelite.co.uk" target="_blank" rel="noreferrer">HR Elite</a></strong>. Front-End Development: Pawel Osmolski - Website Design Ltd. CMS: WordPress.</span></div>
          </li>
          <!--<li><a href="images/hires/web-design/sideshow_landing.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/sideshow_landing.jpg" alt="The Sideshow Café mockup design by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Mockup: The Sideshow Café - Landing Page. Design: Pawel Osmolski - Freelance.</span></div>
          </li>-->
          <li><a href="images/hires/web-design/cafecrepe_landing.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/cafecrepe_landing.jpg" alt="Café Crêpe mockup design by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Mockup: Café Crêpe - Landing Page. Design: Pawel Osmolski - Freelance.</span></div>
          </li>
          <!--<li><a href="images/hires/web-design/cafecrepe_shop.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/cafecrepe_shop.jpg" alt="Café Crêpe mockup design by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Mockup: Café Crêpe - Shop Page. Design: Pawel Osmolski - Freelance.</span></div>
          </li>-->
          <li><a href="images/hires/web-design/cafecrepe_branding.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/web-design/cafecrepe_branding.jpg" alt="Café Crêpe advertising campaign by Pawel Osmolski" /></a>
            <div class="highslide-caption"><span class="caption">Mockup: Café Crêpe - Advertising Campaign. Design: Pawel Osmolski - Freelance.</span></div>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear-mobile"></div>
    <div id="web-design-text">
      <h2><a class="title" href="#web-design">Web Design</a></h2>
      <p>Pawel is highly skilled with WordPress, Laravel, PHP, HTML5, CSS3 and JavaScript. He has spent over a decade working with strong design and development teams, managing over 100 websites covering finance, law, energy, real estate and transport sectors across the UK, US and Asia.</p>
      <p>He shows careful attention to detail, often adding considerable value to the final product in order to positively enhance user experience.</p>
      <p>His background with music, video and corporate design gives him a unique edge, allowing him to fit into almost any creative environment.</p>
      <p>Visit Pawel's <a class="link" href="https://www.linkedin.com/in/pawel-osmolski/" target="_blank" rel="noreferrer">LinkedIn profile</a> to see a more comprehensive list of projects. These include eCommerce, brochure and fully responsive website builds.</p>
      <p>Pawel is available in a freelance capacity, so if you're looking for someone passionate to work on your next project, please get in touch!</p>
    </div>
  </div>
<!--WEB DESIGN: END-->
<!--SOUND DESIGN: START-->
  <div id="sound-design" class="section">
    <div id="sound-design-youtube">
      <div class="responsive-video"><iframe loading="lazy" title="YouTube video player showcasing Pawel's music portfolio" height="338" src="https://www.youtube.com/embed/videoseries?list=PLAYHD6mbuOHHeca_SnyFLd5eQm__Dwm35&amp;showinfo=0&amp;autohide=1" allowfullscreen></iframe></div>
    </div>
    <div class="clear-mobile"></div>
    <div id="sound-design-text">
      <h2><a class="title" href="#sound-design">Sound Design</a></h2>
      <p>Pawel was taught privately by a professor of music whilst he attended secondary school, but eventually took his skills further by studying for an Advanced Diploma at The Guitar Institute &amp; Basstech, then for a Bachelor of Arts and Master's degree in Music Technology.</p>
      <p>He&rsquo;s the kind of guy that will say  &quot;Bass-boost is only for parties&quot; and &quot;Can I get that in 24-bit please?&quot;</p>
      <p>His preferred guitars used for playing live and recording are the <a href="images/equipment/Fender-Vista-Venus.jpg" class="highslide link" onclick="return hs.expand(this)">Fender Vista Venus</a>, <a href="images/equipment/Squier-Classic-Vibe-Telecaster.jpg" class="highslide link" onclick="return hs.expand(this)">Squier Classic Vibe Telecaster '50s</a>, <a href="images/equipment/Squier-Classic-Vibe-Stratocaster.jpg" class="highslide link" onclick="return hs.expand(this)">Squier Classic Vibe Stratocaster '50s</a> and a <a href="images/equipment/Tanglewood-TW-115AS.jpg" class="highslide link" onclick="return hs.expand(this)">Tanglewood TW-115AS acoustic</a>.</p>
    </div>
  </div>
<!--SOUND DESIGN: END-->
<!--REMIX: START-->
  <div id="remix" class="section">
    <div id="remix-soundcloud"> 
      <!--[if lte IE 8]><div class="soundcloud-flash"><object height="425" width="850"><param name="movie" value="https://player.soundcloud.com/player.swf?url=https%3A//api.soundcloud.com/playlists/2756743&amp;color=1b3651&amp;auto_play=false&amp;player_type=artwork"></param><param name="allowscriptaccess" value="always"></param><param name="wmode" value="transparent"></param><embed wmode="transparent" allowscriptaccess="always" width="100%" height="425" src="https://player.soundcloud.com/player.swf?url=https%3A//api.soundcloud.com/playlists/2756743&amp;color=1b3651&amp;auto_play=false&amp;player_type=artwork" type="application/x-shockwave-flash"></embed></object></div><![endif]--> 
      <!--[if (gte IE 9)|!(IE)]><!-->
      <iframe loading="lazy" title="SoundCloud audio player showcasing Pawel's Radiohead Remixes" height="438" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/2756743&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>
      <!-- <![endif]--> 
    </div>
    <div class="clear-mobile"></div>
    <div id="remix-text">
      <h2><a class="title" href="#remix">Remix</a></h2>
      <div id="nme-clipping"><a href="images/magazine/pawel_nme.jpg" class="highslide" onclick="return hs.expand(this)"><img loading="lazy" class="replace-2x" src="images/magazine/pawel_nme_thumb.jpg" alt="Pawel Osmolski in the NME Magazine" width="262" height="130" /></a>
        <div class="highslide-caption"><span class="caption">Source: NME Magazine, New Musical Express.</span></div>
      </div>
      <p>Pawel gained recognition in the media from his well-received <a class="link" href="http://www.pawel-osmolski.com/radiohead-remixes/" target="_blank">remixes</a> of Radiohead&rsquo;s unreleased material, and was listed in the <a class="link" href="http://www.greenplastic.com/2004/01/17/fan-mix-of-follow-me-around-makes-q-mag-list" target="_blank" rel="noreferrer">Q Magazine</a>, <a class="link" href="http://www.mtv.com/news/1484465/for-the-record-quick-news-on-outkast-britney-spears-jadakiss-wes-borland-cheap-trick-the-cure-more/" target="_blank" rel="noreferrer">MTV News</a>, and had an exclusive article printed in the <a class="link" href="https://www.nme.com/news/music/radiohead-702-1354278" target="_blank" rel="noreferrer">NME</a>.</p>
      <p>He is also known for his contributions to the <a class="link" href="http://www.remix64.com/act/devilhood/" target="_blank" rel="noreferrer">Remix64</a> community and <a class="link" href="http://pawel-osmolski.bandcamp.com/album/space-explorer-polaris" target="_blank" rel="noopener">Chiptune</a> scene, which were done out of his love for 8-bit music and the Commodore 64 home computer.</p>
      <p>Pawel goes by the names, <a class="link" href="https://www.filiposcar.com" target="_blank" rel="noopener">FILIP OSCAR</a>, <a class="link" href="http://www.devilhood.com/media.htm" target="_blank" rel="noopener">DeViLhoOD</a> and <a class="link" href="https://www.facebook.com/FilipOscarOfficial/" target="_blank" rel="noopener">Star Paw</a>, as pseudonyms for releasing his own solo material.</p>
      <p>Prior to going solo, he was the lead singer-songwriter and producer for the London based indie band <a class="link" href="http://www.crunchalias.com/" target="_blank" rel="noopener">CrunchAlias</a>. He also works on film and video game projects through his creative agency <a class="link" href="https://www.crownandcraft.com" target="_blank" rel="noopener">Crown &amp; Craft</a>.</p>
    </div>
  </div>
  <div class="bottom-section">
    <div id="author">
        <p>Website design and code by <a class="title" href="&#109;ailto:pawel&#64;pawel-osmolski&#46;com" target="_blank">Pawel Osmolski</a><br />
      Optimised for Retina display</p>
    </div>
    <br />
  </div>
<!--REMIX: END-->
</div><!--DIV CONTAINER: END-->
<!--FOOTER: START-->
<div id="footer">
  <div id="footer-text">Need something awesome? Contact me via <a class="title" href="&#109;ailto:pawel&#64;pawel-osmolski&#46;com">e-mail</a> or call on &#43;&#52;&#52; 7&#56;&#55;7 &#54;&#57;&#55;783<!---&#43;1 &#40;6&#51;&#54;) &#50;5&#57;-&#57;&#48;06--></div>
  <div class="clear-mobile"></div>
  <div id="social-media-icons">
    <div class="cssfade" id="contact"><a href="&#109;ailto:pawel&#64;pawel-osmolski&#46;com" target="_blank"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/contact.png" alt="Contact" /></a></div>
    <div class="cssfade" id="soundcloud"><a href="https://soundcloud.com/pawel-osmolski" target="_blank" rel="noopener"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/soundcloud.png" alt="SoundCloud" /></a></div>
    <div class="cssfade" id="twitter"><a href="https://twitter.com/gofftiddums" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/twitter.png" alt="Twitter" /></a></div>
    <div class="cssfade" id="facebook"><a href="https://www.facebook.com/FilipOscarOfficial/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/facebook.png" alt="Facebook" /></a></div>
    <div class="cssfade" id="youtube"><a href="https://www.youtube.com/c/FILIPOSCAR" target="_blank" rel="noopener"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/youtube.png" alt="YouTube" /></a></div>
    <div class="cssfade" id="instagram"><a href="https://instagram.com/captainstarpaw" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/instagram.png" alt="Instagram" /></a></div>
    <div class="cssfade" id="bandcamp"><a href="https://filiposcar.bandcamp.com/" target="_blank" rel="noopener"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/bandcamp.png" alt="Bandcamp" /></a></div>
    <div class="cssfade" id="linkedin"><a href="https://www.linkedin.com/in/pawel-osmolski/" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/linkedin.png" alt="LinkedIn" /></a></div>
    <div class="cssfade" id="github"><a href="https://github.com/Pav-Osmolski" target="_blank" rel="noreferrer"><img loading="lazy" class="replace-2x" src="images/greenleaf/inverted/github.png" alt="GitHub" /></a></div>
  </div>
</div>
<!--FOOTER: END-->
<!-- <script src="js/jquery/jquery.min.js?v=20181221"></script> -->
<script defer src="js/compiled.min.js?v=<?= filemtime( 'js/compiled.min.js' ); ?>"></script>
<!--<script src="highslide/highslide.min.js"></script>
<script src="js/responsiveslides.min.js"></script>-->
<!--[if (gte IE 8)|!(IE)]><!--><!--<script src="js/script.min.js"></script>-->
<!-- <![endif]-->
<!--[if lte IE 7]><script type="text/javascript" src="js/ie7script.min.js"></script><![endif]-->
<!--[if lte IE 8]><script type="text/javascript" src="js/jqueryfade.js"></script><![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/css3-mediaqueries.min.js"></script><![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42949806-1', 'pawel-osmolski.com');
  ga('send', 'pageview');

</script>
</body>
</html>
