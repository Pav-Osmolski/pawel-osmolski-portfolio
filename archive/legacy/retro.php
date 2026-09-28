<?php
    if ( extension_loaded( 'zlib' ) ) {
        ob_end_clean();
        ob_start('ob_gzhandler');
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pawel Osmolski / Captain Star Paw / Music Portfolio</title>
<meta name="description" content="Official music portfolio for the musician and producer Pawel Osmolski. Composer for game, film and television." /> 
<meta name="keywords" content="Pawel Osmolski,Pawel,Osmolski,deVilhoOD,Radiohead Remixes,deVilhoOD Remixes,CrunchAlias,Crunch Alias,Goff Tiddums,Jeebus Orion,Star Paw,Captain Star Paw,Music Portfolio,Producer,Music Producer,Freelance Composer,Music Composer,Composer,Sound Designer,Sound Design,Compositions,Singer-Songwriter,Singer,Songwriter,Covers,Sound,Design,Music,Portfolio,Video Game Composer,Game Composer,Film Composer" />
<meta name="author" content="Pawel Osmolski" />
<meta name="copyright" content="June 2013" />
<meta name="language" content="EN" />
<meta property="og:image" content="http://www.pawel-osmolski.com/images/pawel_portfolio.jpg" />
<link rel="image_src" href="http://www.pawel-osmolski.com/images/pawel_portfolio.jpg" />
<link rel="shortcut icon" href="http://www.pawel-osmolski.com/retro.ico" />
<link href="css/retro.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/scroll.js"></script>
<script type="text/javascript" src="/highslide/highslide-with-html.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<link rel="stylesheet" type="text/css" href="/highslide/highslide-original.css" />
<script type="text/javascript">
    // override Highslide settings here
    // instead of editing the highslide.js file
    hs.graphicsDir = '/highslide/graphics/';
    hs.outlineWhileAnimating = true;
</script>
</head>
<body bgcolor="#336666">
<div class="wrapper" id="wrapper1">
  <div class="wrapper" id="wrapper2">
    <div class="wrapper" id="wrapper3">
      <div class="wrapper" id="wrapper4">
        <a href="http://www.pawel-osmolski.com" class="homelink">
      <h1 class="hidden">Pawel Osmolski Music Portfolio</h1></a>
        <div id="menu">
          <ul>
            <li id="btn_biography"><a href="http://www.pawel-osmolski.com/retro.php?page=biography"><span class="hidden">Pawel Osmolski Biography</span></a></li>
            <li id="btn_compositions"><a href="http://www.pawel-osmolski.com/retro.php?page=compositions"><span class="hidden">Pawel Osmolski Compositions</span></a></li>
            <li id="btn_remixescovers"><a href="http://www.pawel-osmolski.com/retro.php?page=remixescovers"><span class="hidden">Pawel Osmolski Remixes &amp; Covers</span></a></li>
            <li id="btn_videoproduction"><a href="http://www.pawel-osmolski.com/retro.php?page=videoproduction"><span class="hidden">Pawel Osmolski Video Production</span></a></li>
            <li id="btn_socialmedia"><a href="http://www.pawel-osmolski.com/retro.php?page=socialmedia"><span class="hidden">Pawel Osmolski Social Media</span></a></li>
            <li id="btn_contact"><a href="&#109;ailto:pawel&#64;pawel-osmolski&#46;com"><span class="hidden">Pawel Osmolski Contact</span></a></li>
          </ul>
        </div>
        <div id="content">
          <div id="scrollholder" class="scrollholder">
            <div id="scroll" class="scroll">
				<?php
					if($_REQUEST['page'])
						{
							if (file_exists('pages/'.$_REQUEST['page'].'.php')) {
							include('pages/'.$_REQUEST['page'].'.php');
							} 						else
						{
							echo('<h2>Page could not be found</h2>');
						}
					}
					else
					{
						include('pages/home.php');
					} 
				?>
            </div>
          </div>
          <script type="text/javascript">

<!--

ScrollLoad ("scrollholder", "scroll", true);

//-->

</script>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer"></div>
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
