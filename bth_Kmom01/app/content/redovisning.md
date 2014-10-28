Redovisning
====================================


Kmom02: Kontroller och modeller
-------------------------------

Den här övningen var betydligt knepigare än första uppgiften. Jag har tidigare använt composer i mitt jobb och inte stött på några större problem men i den här uppgiften körde jag fast totalt i början.
Mitt problem började när jag från Packagist hämtat hem paketet phpmvc/comment. Fick Fatal Error då klasserna inte kunde hittas och efter flera timmars felsökning utan större resultat testade jag istället att utföra samma moment på studentservern vilket fungerade galant. Pga tidsbrist beslöt jag mig då för att ta ner projektet lokalt på nytt från git och börja om från början. Den här gången med lyckat resultat.
Composer känns annars väldigt tidssparande och effektivt. Jag gillar det snabba sättet att få tillgång till olika paket utan att behöva göra manuella installationer osv.

Jag tycker att man kan hitta mycket roligt i Packagist. Jag har tidigare använt phpunit för tester samt symfonys routing. Men det finns mycket kul man skulle vilja testa runt och leka med här. Exempelvis hittade jag paketet “mouf/javascript.jquery.jquery-validate” vilket man kanske skulle testa i det här fallet för att få in validering i formuläret utan att behöva bygga från grunden. Det får bli en senare utveckling då jag ligger efter i tidsplanen.

Jag kan säga att när det gäller hur allt hänger ihop i ramverket är jag inte riktigt på det klara än. Jag fick ägna flera timmar med att testa kod fram och tillbaka, köra detektivarbete i klasserna och även kika på mina klasskamraters lösningar fram och tillbaka innan det började gå upp ett ljus för hur det hänger ihop. Men fortfarande behöver jag sätta mig in det ännu mer innan jag känner att jag har full koll. Phalcons manualer tycker jag är bra, dom har hjälpt mig att förstå lite mer när jag har fastnat.

När det gäller svagheter så tycker jag inte det finns några om man fokuserar på att detta är en grund man själv bygger vidare på för att få in den funktionalitet man önskar. Att spara kommentarer i sessionen är ju inte speciellt användbart men jag antar att paketet är till för att lära sig ramverket.

Jag har använt mig av Gravatar för att få in en bild på användaren som kommenterar. Har man ingen uppladdad bild registrerad på sin email-adress få man bli ett litet monster. Jag har även dolt formuläret innan man klickar i första kommentarsrutan.

****
Kmom01: PHP-baserade och MVC-inspirerade ramverk
------------------------------------------------

Anax var helt nytt för mig men jag har lite erfarenhet av MVC-biten  då jag har testat Symphonys MVC-ramverk. Jag har satt upp det tillsammans med composer och har då använt mig av Symphonys url router för snygga länkar ( då jag lagt upp projekt på nginx-server utan fulla rättigheter).
Jag tycker det var mycket intressant att testa Anax-MVC, man skulle kunna sitta och fördjupa sig mycket mer än vad jag hunnit med än. Jag har lekt och testat lite att lägga till en ny css-fil samt Google Fonts osv mestadels för att modifiera i header-taggen. ( Även om nu Google Fonts slöar ned sidan en aning så har jag inte sett det som ett problem för den här uppgiften ).
Jag gillar att Anax använder autoloader och framförallt namespaces vilka jag har lite erfarenhet av i tidigare projekt. Man slipper hålla koll på sökvägar m.m. som ofta kan ta onödig tid i kodandet då man har större strukturer.

När det gäller Markdown så kan jag säga att jag hittills inte är så förtjust i det. Jag känner att jag vill ha full koll på html-taggarna och indenteringen vilket jag inte får när jag använder Markdown.
Jag har tidigare använt mig av Smarty för att generera templates. På så sätt separerar jag php från html-taggarna och en utvecklare som enbart har koll på HTML men inte PHP kan enkelt redigera dessa sidor.
Skulle jag ta för vana att använda Markdown kanske jag efter ett tag som du säger inte skulle vilja vara utan det.

För den här uppgiften har jag suttit med Mac OS Maverick och PhpStorm som IDE. Tidigare har jag mestadels använt mig av Eclipse som IDE vilket jag tycker är helt ok och dessutom gratis men skaffade PhpStorm i vintras och jag älskar gränssnittet samt flertalet små detaljer ( tex föreslås filnamn för namespaces ) som gör att kodningen går snabbare. Man har ganska stort utrymme att anpassa PhpStorm så som man själv önskar.

När det gäller de avancerade begreppen vi läste om i kapitel4 så var det både mycket nytt samt sådant jag känner till sedan tidigare. Abstrakta klasser, Interfaces, destructor samt felhantering med Exceptions har jag jobbat med tidigare.
Av sådana skäl som att det är kul och lärorikt att testa olika tekniker så har jag tidigare byggt en webbsida utan ramverk som kräver inlogg mot ett API, där jag byggde en klass i vilken konstruktorn sköter hanteringen av inlogg mot API, en publik metod innehåller html-headern och destruktorn innehåller ( eller anropar en klassmetod) med footern och slut-taggen för html.
Klassen inkluderas sedan på de olika sidorna. Kanske helt fel sätt egentligen att använda detta på men roligt att få utforska lite.
Trait är nytt för mig och även om jag nosat väldigt lite på Interceptors så var fick jag större inblick i det nu.

I det stora hela tycker jag att uppgiften var givande. Inget som jag direkt fastnade på men mycket som jag tidigare enbart nosat på men som jag fått mer insikt i nu.
Uppgiften ligger uppe på mitt konto på Github. Nu är jag väldigt taggad för att påbörja nästa uppgift!




