
# Frontend kodér - Test

Jednoduchá/jednostránková webová aplikace určená pro otestování základních kodérských dovedností, konkrétně technologií/ jazyků **TWIG**, **HTML**, **Less**, **CSS**, **PHP**, **Gulp**, **npm** a **Composer**.

## Cíl

Na základě pokynů níže **nakódujte** a **naplnit daty** tuto  aplikaci tak, aby odpovídala následujícím grafickým návrhům:

- [Šířka displeje 479px](src/Resources/private/screens/frontend-test-479px.png)
- [Šířka displeje 799px](src/Resources/private/screens/frontend-test-799px.png)
- [Šířka displeje 1366px](src/Resources/private/screens/frontend-test-1366px.png)

## Požadavky aplikace

Pro běh aplikace budete potřebovat:

- lokální webserver s PHP (např. http://www.wampserver.com/),
- git (https://git-scm.com/),
- npm (https://www.npmjs.com/),
- příkazovou řádku :)

## Pokyny

### Spuštění aplikace

Pomocí *gitu* si naklonujte repozitář projektu pro své lokální potřeby:

```
git clone git@github.com:vyvrhel/frontend-test.git
```

Nainstalujte backendové závislosti aplikace pomocí *composeru*:

```
composer install
```

Nainstalujte frontendové závislosti aplikace pomocí *npm*:

```
npm install
```

Sestavte veřejnou část aplikace pomocí npm skriptu *build*:

```
npm run build
```

Nyní můžete aplikaci sestávající se z jedné stránky spustit pomocí souboru *index.php*.

### Kódování & Stylování

K dosažení požadovaného obsahu/vzhledu aplikace editujte jen soubory z následujících adresářů:

- /src/Resources/data/ - Naplnění aplikace obsahem
- /src/Resources/private/less/ - Stylování
- /src/Resources/views/ - Kódování

Aby se změny v less souborech projevily ve výsledném CSS souboru, je nutné znovu spustit buildovací npm skript nebo jen skript pro generování CSS:

```
npm run css
```

Pro pohodlné automatické generování výsledného CSS při jakékoli změně v less souborech můžete využívat npm skript *watch*:

```
npm run watch
```

Nevyužívejte žádných externích knihoven nebo frameworků. Při stylování se snažte držet CSS architektury vyplývající z adresářové struktury a komentářů v souboru *public.less*. Ta vychází z obecně známých architektur *ITCSS* a *SMACSS*. Pro pojmenování tříd využijte techniku *BEM*. Design aplikace bude responzivní, využijte přístup *mobile-first*. Design se musí korektně zobrazovat i v prohlížeči Internet Explorer 11.

Výsledný CSS i HTML kód musí být validní. Less kód musí být psán oproti pravidlům definovaným v souboru .stylelintrc.json (viz https://stylelint.io/). Správnost kódu ověříte spuštěním npm skriptu *lint*:

```
npm run lint
```

### Odevzdání

Repozitář se svou hotovou prací uložte na některé z "gitovských" úložišť (např. [gitHub.com](https://github.com/) nebo [bitbucket.org](https://bitbucket.org/)) a zašlete nám na něj odkaz.
