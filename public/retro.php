<?php
declare(strict_types=1);
$routes = ['home', 'biography', 'compositions', 'remixescovers', 'videoproduction', 'socialmedia', 'furtherlinks', 'twitter'];
$page = $_GET['page'] ?? 'home';
$valid = is_string($page) && in_array($page, $routes, true);
if (!$valid) http_response_code(404);
$template = $valid ? ($page === 'biography' ? 'home' : $page) : null;
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
<link rel="shortcut icon" href="/assets/retro/retro.ico" />
<link href="/assets/retro/retro.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=1024">
<meta name="robots" content="noindex, nofollow">
<script src="/assets/retro/retro.js" defer></script>
</head>
<body>
<a class="skip-link" href="#scrollholder">Skip to content</a>
<div class="wrapper" id="wrapper1">
  <div class="wrapper" id="wrapper2">
    <div class="wrapper" id="wrapper3">
      <div class="wrapper" id="wrapper4">
        <a href="/retro.php" class="homelink">
      <h1 class="hidden">Pawel Osmolski Music Portfolio</h1></a>
        <nav id="menu" aria-label="Original portfolio">
          <ul>
            <li id="btn_biography"><a href="/retro.php?page=biography"><span class="hidden">Pawel Osmolski Biography</span></a></li>
            <li id="btn_compositions"><a href="/retro.php?page=compositions"><span class="hidden">Pawel Osmolski Compositions</span></a></li>
            <li id="btn_remixescovers"><a href="/retro.php?page=remixescovers"><span class="hidden">Pawel Osmolski Remixes &amp; Covers</span></a></li>
            <li id="btn_videoproduction"><a href="/retro.php?page=videoproduction"><span class="hidden">Pawel Osmolski Video Production</span></a></li>
            <li id="btn_socialmedia"><a href="/retro.php?page=socialmedia"><span class="hidden">Pawel Osmolski Social Media</span></a></li>
            <li id="btn_contact"><a href="&#109;ailto:pawel&#64;pawel-osmolski&#46;com"><span class="hidden">Pawel Osmolski Contact</span></a></li>
          </ul>
        </nav>
        <main id="content">
          <div id="scrollholder" class="scrollholder" tabindex="0" role="region" aria-label="Portfolio content">
            <div id="scroll" class="scroll">
				<?php
                if ($template !== null) require __DIR__ . '/../src/retro/' . $template . '.php';
                else echo '<h2>Page could not be found</h2><p><a href="/retro.php">Return to the original portfolio</a></p>';
                ?>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</div>
<div class="footer">Original portfolio · preserved as a time capsule. <a href="/#contact">Back to the present ↗</a></div>
<dialog class="retro-dialog" aria-label="Media preview">
  <form method="dialog"><button aria-label="Close preview">Close ×</button></form>
  <div class="retro-media"></div>
  <p><a class="retro-fallback">Open original media</a></p>
</dialog>
</body>
</html>
