# Simply Guiding – projektnoter til Claude

Simply Guiding er en konsulentvirksomhed inden for IPS/Supported Employment. Dette repo er WordPress-temaet til simplyguiding.dk, under opbygning hos kunden Frederik Baastrup (Mondae).

Designet er bygget og itereres som et Claude-artefakt (ren HTML/CSS/JS), og konverteres herfra til WordPress-tema-filer i `wp-content/themes/simply-guiding/`.

## Opbygning

- `wp-content/themes/simply-guiding/style.css` – alt CSS (inkl. indlejrede base64-skrifttyper)
- `wp-content/themes/simply-guiding/front-page.php` – forsidens markup (konverteret 1:1 fra artefaktet)
- `wp-content/themes/simply-guiding/header.php` / `footer.php` – fælles skelet
- `wp-content/themes/simply-guiding/script.js` – al interaktivitet (scroll-reveal, menu, kort-animation osv.)
- `wp-content/themes/simply-guiding/assets/` – billeder og video
- `wp-content/themes/simply-guiding/index.php` / `page.php` – minimale fallback-skabeloner for undersider, der endnu ikke har deres eget design

Når en side skal have sit eget layout (fx "Sådan arbejder vi", "Projekter"), laves en `page-<slug>.php` efter samme mønster som `front-page.php`.

## Udrulning

Hvert push til `main` udrulles via GitHub Actions (FTPS) til `public_html/wp-content/themes/simply-guiding/` på FTP-kontoen (se `SITE_DIR` i `.github/workflows/deploy.yml`). Udrulningen stopper, hvis mappen ikke indeholder `wp-config.php`.

GitHub-secrets der skal være sat på repoet (Settings → Secrets and variables → Actions):
- `FTP_SERVER`
- `FTP_USERNAME`
- `FTP_PASSWORD`

Midlertidigt domæne: frederikb9.sg-host.com. Flyttes til rigtigt domæne senere – ret `SITE_DIR` i deploy.yml hvis SiteGround omdøber mappen (ligesom på fitbase/kitzhen/outdoorland).

## Cache

SiteGround cacher den udrullede HTML på serverniveau (`x-proxy-cache` header), uafhængigt af WordPress – et FTP-filskift trigger ikke selv en tømning. Derfor har `mu-plugins/sg-purge-on-deploy.php` en hemmelig URL (`?sg_deploy_purge=<token>`), som kalder SiteGrounds `sg_cachepress_purge_cache()`; `deploy.yml` udruller mu-plugin'et og kalder URL'en efter hvert push, så ændringer er synlige med det samme. Tokenet står i begge filer og skal være ens, hvis det nogensinde ændres.
