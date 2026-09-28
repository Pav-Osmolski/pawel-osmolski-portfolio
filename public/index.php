<?php
require dirname(__DIR__) . '/src/bootstrap.php';
page_start('Pawel Osmolski — Music, web & sound', 'Composer, musician and web developer. Explore music, websites, sound design and remixes by Pawel Osmolski.');
$projects = require dirname(__DIR__) . '/src/projects.php';
$softwareProjects = require dirname(__DIR__) . '/src/software-projects.php';
?>
<main id="main">
<section class="hero wrap" id="intro" aria-labelledby="intro-title">
<div class="hero__copy"><p class="eyebrow">Music / Web development / Sound design</p>
<h1 id="intro-title">PAWEL<br>OSMOLSKI<span>.</span></h1>
<p class="hero__lead">A musical ear.<br>An eye for detail.</p>
<p class="hero__description">I’m a composer, musician and web developer. From a first piano sketch to a finished website, I enjoy turning ideas into something people can connect with.</p>
<div class="actions"><a class="button" href="#music">Explore my work <span aria-hidden="true">↓</span></a><a class="text-link" href="#contact">Let’s talk ↗</a></div>
</div>
<div class="hero__note"><span class="status-dot"></span> Working across music, design & technology</div>
</section>
<div class="section-rule wrap"><span>Selected work & a little background</span><span>01 — 05</span></div>
<section id="music" class="work-section wrap" aria-labelledby="music-title">
<div class="section-heading"><span class="section-number">01 / MUSIC</span><h2 id="music-title">Songs, scores<br>& experiments.</h2></div>
<div class="work-grid">
<?php player('Music composition showcase', 'https://w.soundcloud.com/player/?url=https%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F2779898&auto_play=false&visual=true', 'https://soundcloud.com/pawel-osmolski', 'piano.jpg'); ?>
<div class="prose"><p class="lead">Music has been part of my life for as long as I can remember.</p><p>I started composing at the piano aged seven and experimenting with tracker software on the Commodore Amiga. Guitar, bass and drums followed, along with a lasting interest in recording and production.</p><p>I write and perform as <a href="https://www.filiposcar.com">Filip Oscar</a>. My releases include <a href="https://filiposcar.bandcamp.com/album/raven-white">Raven White</a> and <a href="https://filiposcar.bandcamp.com/album/brokenness-trio">Brokenness Trio</a>. Improvisation is still at the heart of how I work: finding an idea, following it, and giving it room to develop.</p><a class="text-link" href="https://filiposcar.bandcamp.com/">Explore the releases ↗</a><div class="tags"><span>Composition</span><span>Songwriting</span><span>Production</span></div></div>
</div></section>
<section id="web-design" class="work-section wrap" aria-labelledby="web-title">
<div class="section-heading"><span class="section-number">02 / WEB DEVELOPMENT</span><h2 id="web-title">Thoughtful design.<br>Careful development.</h2></div>
<div class="work-grid web-intro"><p class="lead">I build websites with the same care I bring to music: a clear structure, attention to detail, and a feel for how everything fits together.</p><div class="prose"><p>My experience spans WordPress, Laravel, PHP and JavaScript, working alongside design and development teams on e-commerce, company and education websites.</p><p>I’ve worked on more than 100 websites across sectors including finance, law, energy, property and transport, with teams in the UK, US and Asia.</p><a class="text-link" href="https://www.linkedin.com/in/pawel-osmolski/">Experience & project history ↗</a></div></div>
<p class="eyebrow archive-label">From the project archive</p>
<div class="projects">
<?php foreach ($projects as $project): ?>
<article class="project"><a class="project__image" data-lightbox href="<?= e(asset('images/' . $project['image'])) ?>" aria-label="View <?= e($project['name']) ?> image"><img src="<?= e(asset('images/' . $project['image'])) ?>" alt="<?= e($project['name']) ?> — <?= e($project['detail']) ?>" loading="lazy" width="600" height="360"><span aria-hidden="true">↗</span></a><div class="project__caption"><h3><?= e($project['name']) ?></h3><p><?= e($project['role']) ?></p><p><?= e($project['detail']) ?></p></div></article>
<?php endforeach; ?>
</div></section>
<section id="software" class="work-section wrap" aria-labelledby="software-title">
<div class="section-heading"><span class="section-number">03 / SOFTWARE</span><h2 id="software-title">Useful tools.<br>Open possibilities.</h2></div>
<div class="work-grid web-intro"><p class="lead">Outside web development, I build and maintain open-source software for developers, music listeners and game modders.</p><div class="prose"><p>I enjoy taking complicated systems apart, understanding how they work, and making them cleaner, faster and easier to use. These projects bring together developer tooling, audio interfaces, graphics and data processing.</p><a class="text-link" href="https://github.com/Pav-Osmolski">More on GitHub ↗</a></div></div>
<div class="projects">
<?php foreach ($softwareProjects as $project): ?>
<article class="project">
    <a class="project__image project__image--software" data-lightbox href="<?= e(asset('images/' . $project['image'])) ?>" aria-label="View <?= e($project['name']) ?> image">
        <img src="<?= e(asset('images/' . $project['image'])) ?>" alt="<?= e($project['name']) ?> project preview" loading="lazy" width="1774" height="887">
        <span aria-hidden="true">↗</span>
    </a>
    <div class="project__caption">
        <h3><a href="<?= e($project['url']) ?>"><?= e($project['name']) ?></a></h3>
        <p><?= e($project['role']) ?></p>
        <p><?= e($project['detail']) ?></p>
        <a class="text-link" href="<?= e($project['url']) ?>">View project on GitHub ↗</a>
    </div>
</article>
<?php endforeach; ?>
</div></section>
<section id="sound-design" class="work-section wrap" aria-labelledby="sound-title">
<div class="section-heading"><span class="section-number">04 / SOUND DESIGN</span><h2 id="sound-title">Sound that serves<br>the story.</h2></div>
<div class="work-grid">
<?php player('Film music & sound design', 'https://www.youtube-nocookie.com/embed/videoseries?list=PLAYHD6mbuOHHeca_SnyFLd5eQm__Dwm35', 'https://www.youtube.com/playlist?list=PLAYHD6mbuOHHeca_SnyFLd5eQm__Dwm35', 'museum.jpg', true); ?>
<div class="prose"><p class="lead">Composition and sound design meet in the details: texture, timing, space and atmosphere.</p><p>My background combines classical training with hands-on recording and production. I studied at The Guitar Institute & Basstech before completing a BA and a master’s degree in Music Technology.</p><p>My work includes music and sound for film and video game projects through Crown & Craft. The showcase brings together examples of that work.</p><a class="text-link" href="https://www.crownandcraft.com">Visit Crown & Craft ↗</a><div class="tags"><span>Film</span><span>Games</span><span>Audio production</span></div></div>
</div></section>
<section id="remix" class="work-section wrap" aria-labelledby="remix-title">
<div class="section-heading"><span class="section-number">05 / REMIX</span><h2 id="remix-title">Familiar songs.<br>Another perspective.</h2></div>
<div class="work-grid">
<?php player('Radiohead remixes & covers', 'https://w.soundcloud.com/player/?url=https%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F2756743&auto_play=false&visual=true', 'https://soundcloud.com/pawel-osmolski', 'present-tense.jpg'); ?>
<div class="prose"><p class="lead">Some of my favourite projects started with a simple question: where else could this song go?</p><p>My Radiohead remixes build new arrangements around live performances and early versions of songs. They attracted coverage in Q, MTV News and NME, and became a lasting connection with other fans.</p><p>I’ve also contributed to the <a href="https://www.remix64.com/act/devilhood/">Remix64 community as deVilhoOD</a> and explored my love of 8-bit music on <a href="https://pawel-osmolski.bandcamp.com/album/space-explorer-polaris">Space Explorer Polaris</a>.</p><a class="button button--outline" href="/radiohead-remixes/">Explore the Radiohead remixes ↗</a><a class="press-link" data-lightbox href="<?= e(asset('images/nme.jpg')) ?>">View the original NME clipping ↗</a></div>
</div></section>
<section id="contact" class="contact wrap" aria-labelledby="contact-title"><p class="eyebrow">Have something in mind?</p><h2 id="contact-title">Let’s make<br>something good.</h2><p>For a website, a piece of music, or a conversation about a project, get in touch.</p><a class="contact__email" href="mailto:pawel@pawel-osmolski.com">pawel@pawel-osmolski.com <span aria-hidden="true">↗</span></a><div class="social-links"><a href="https://soundcloud.com/pawel-osmolski">SoundCloud</a><a href="https://filiposcar.bandcamp.com/">Bandcamp</a><a href="https://www.youtube.com/c/FILIPOSCAR">YouTube</a><a href="https://instagram.com/captainstarpaw">Instagram</a></div></section>
</main>
<?php page_end(); ?>
