# Pawel Osmolski — portfolio refresh

A small, server-rendered PHP portfolio. One main page and the separate `/radiohead-remixes/` landing page. No framework, package installation or build step is required.

## Structure

- `public/` — the web server document root, containing the main, remix and retro entry points and browser assets.
- `src/` — shared PHP helpers, page templates and project data; keep outside the document root.
- `tests/` — rendering and asset checks.
- `archive/legacy/` — the previous repository snapshot, retained for reference in GitHub; retro.php is restored in public/. Never serve or deploy it.

## Run locally

Use a supported PHP release (PHP 8.3 or later):

```sh
php -S 127.0.0.1:8123 -t public
php tests/smoke.php
php tests/retro.php
```

No database or Composer dependencies. The PHP development server is for local preview only.

## Deployment on IONOS / Apache

1. Back up the existing live directory and hosting configuration.
2. Upload `public/` and `src/` as sibling directories, and set the domain document root to `public/`. Do not upload `archive/` or `tests/` to a public directory. Alternatively, place the contents of `public/` into the document root with `src/` in its parent directory, preserving the relative layout.
3. Provision and verify a valid TLS certificate for both the bare domain and `www`. The current live HTTPS endpoint failed during review on 28 September 2026. Canonical metadata and the sitemap target HTTPS; enable the host-level HTTP-to-HTTPS and bare-to-www redirects only after TLS works. No forced HTTPS redirect is shipped because it would currently break the live site.
4. Check both pages, media playback, image previews, e-mail links and server error logs in staging before switching traffic.
5. Preserve old publicly linked image/media URLs if needed: the complete originals are in `archive/legacy/`. Copy only required static files into corresponding public paths. The restored public/retro.php is the sole intentional legacy exception; its allowlisted templates live in src/retro/. Do not expose other legacy PHP endpoints. The two page URLs and main section anchors are preserved.
6. Roll back by restoring the old document root and backed-up files.

Apache rules include a few legacy-page redirects, compression and caching. They require mod_rewrite, mod_headers, mod_deflate and mod_expires where relevant; optional directives are guarded. Configure equivalent rules for other servers. The built-in PHP server does not exercise Apache rules.

## Editing

Homepage copy: `public/index.php`. Remix copy: `public/radiohead-remixes/index.php`. Web project captions: `src/projects.php`. Software projects: `src/software-projects.php`, sourced from the four selected projects in the GitHub profile README. Shared layout: `src/header.php` and `src/footer.php`. Styles and progressive enhancements: `public/assets/site.css` and `site.js`.

The site retains League Gothic, existing photography, portrait and artwork. Project images missing from the original repository were recovered from the user's live site. The older project examples are explicitly identified as an archive. Original source facts are retained; no new clients, qualifications or recent experience have been invented. Please review current artist branding, contact address, agency affiliation and educational wording before publication.

On the modern portfolio, media embeds load only after a visitor clicks. The retro music pages preserve the original SoundCloud player slots using HTTPS iframes. Direct SoundCloud/YouTube links remain available without JavaScript and after loading. Project links work without JavaScript; native dialogs enhance them with Escape-to-close and focus restoration. There are no autoplay carousels, jQuery, Highslide, Flash fallbacks, remote fonts or Universal Analytics scripts in the active site.

## Review limitations

Third-party playback and external links can change independently of this code. The six-track Radiohead credits are preserved as historical credits rather than asserted against the current playlist order. Hosting redirects, Apache configuration and production TLS need staging verification. The complete old snapshot is retained in the GitHub draft; the local download contains the new deployable app only.

## Original portfolio easter egg

The small egg in the contact section links to /retro.php and cracks on hover or keyboard focus, respecting reduced-motion preferences. The original bitmap artwork, fixed-width layout and historical biography are preserved. The retro page has a small return link and is excluded from search indexing. PHP routes use a fixed allowlist; invalid or array inputs return 404. Native scrolling and accessible media dialogs replace Highslide, the custom scrollbar and Flash. Closing a video removes the player. Images and menu assets live in public/assets/retro/; no files are served from archive/. Historical third-party content may no longer be available; direct media links remain provided.


## Preserved one-page legacy site

`public/legacy.php` serves the pre-refresh one-page portfolio from fixed templates in `src/legacy/`. It is deliberately absent from the main navigation, footer and sitemap, and sends a noindex meta directive. It is an unlisted public URL, not a private page.

`archive/legacy/` remains the historical source snapshot. The working copy preserves the original copy, portrait, fonts, section layout and galleries. Its self-contained assets live in `public/assets/legacy/`. Native gallery controls, pause/reduced-motion support, scrolling and image dialogs replace jQuery, ResponsiveSlides and Highslide; Flash, old browser shims and Universal Analytics are removed. The legacy media players retain lazy HTTPS embeds. Historical external links and third-party playback may have changed.

Run `php tests/legacy.php` alongside the main and retro checks. No rewrite is required: visit `/legacy.php` directly.
