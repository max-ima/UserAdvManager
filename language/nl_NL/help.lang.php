<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['UAM_GT_MainTitle_d'] = '- Automatisch of handmatig beheer van spook bezoekers<br/>
- E-mailing<br/>
...';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Als de beheerder of webmaster van de galerie handmatig bevestigt dat de registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker gestuurd. Typ hier het onderwerp van je aangepaste handmatige validatie-email.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dat kan je veranderen. Gebruik hiervoor de vertaal-labels [lang=?][/lang] van de plugin Extended Description. Mits je deze hebt geïnstalleerd.
<br/><br/>
De volgende extra labels voor aanpassingen zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker in de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> invoegen van je galerietitel.<br/>';
$lang['UAM_AddURL2Mail_d'] = 'Het activeren van deze optie voegt de URL van je galerie toe aan het eind van de emails die door de plugin worden gegenereerd. Te vergelijken met een handtekening.';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Pas hier je tekst aan om onbevestigde gebruikers uit te leggen dat ze geen verbinding kunnen maken met de galerie totdat ze hun registratie hebben bevestigd.
<br/><br/>
Dit veld is compatibel met de FCK Tekstbewerker. Als je meerdere talen nodig hebt, kan je de [lang] labels gebruiken van de plugin Extended Description, als je deze hebt geactiveerd.';
$lang['UAM_RedirTitle_d'] = 'Deze optie schakelt een geregistreerde gebruiker direct door naar zijn aanpassingspagina, maar alleen bij zijn eerste verbinding met de galerie.<br/><br/>
Let op: Deze functie is niet van toepassing op alle gebruikers. Degenen met de &quot;beheerder&quot;, &quot;webmaster&quot; or &quot;algemene&quot; status worden uitgesloten.';
$lang['UAM_HidePasswTitle_d'] = 'Kies dit als je het wachtwoord, gekozen door de bezoeker in het emailbericht, te zien wilt krijgen. Als je deze optie inschakelt zal het wachtwoord in normale tekst verschijnen. Bij uitschakeling verschijnt het wachtwoord helemaal niet.';
$lang['UAM_GTAutoDelTitle'] = 'Aangepast bericht bij een verwijderd account';
$lang['UAM_DumpTitle_d'] = 'Hiermee is het mogelijk de totale instellingen van de plugin te bewaren in een bestand, zodat je het kan herstellen als er iets mis gaat (bv. na een verkeerde handeling of voordat je een update verricht). Standaard wordt het backup-bestand opgeslagen in deze map ../plugins/UserAdvManager/include/backup/ en hij wordt genoemd &quot;UAM_dbbackup.sql&quot;.
<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing: Het bestand wordt bij iedere backup actie overschreven!</b>
<br/><br/>
Het kan soms handig zijn het backup-bestand op je computer over te zetten. Bv. Om het in een andere database te kunnen herstellen of om meerdere bestanden op te slaan. Om dit te doen, vink je het blokje aan om het bestand te downloaden.
<br/><br/>
Het herstel middels deze koppeling is alleen beschikbaar voor een lokaal backup-bestand (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Een gedownload backup-bestand kan niet langs deze weg worden hersteld. Om dit voor elkaar te krijgen moet je een hiertoe aangewezen gereedschap voor databasebeheer gebruiken(zoals PhpMyAdmin voor MySql database).
<br/><br/>  
<b style=&quot;color: red;&quot;>Waarschuwing: Na het herstel moet je de beheerpagina van de plugin opnieuw inladen om de herstelde instellingen te kunnen zien!</b>';
$lang['UAM_CustomPasswRetrTitle_d'] = 'Standaard ontvangt een gebruiker een email met alleen zijn gebruikersnaam en een nieuw wachtwoord wanneer hij zijn wachtwoord kwijt is en de hersteloptie heeft gekozen.
<br/><br/>
Hier kan je tekst naar keuze toevoegen om ingevoegd te worden<b><u>voorafgaand</u></b>aan de standaard informatie.
<br/><br/>
Je kunt de inhoud verder aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van je galerie URL als het tenminste is ingesteld in Piwigo\'s instellingen.
<br/><br/>
Om meerdere talen te gebruiken kan je de labels van de plugin Extended Description gebruiken. Als deze plugin tenminste geactiveerd is.';

$lang['UAM_AdminValidationMail_d'] = 'Als een beheerder of webmaster van de galerie handmatig bevestigt dat een registratie in behandeling is, wordt er automatisch een emailbericht naar de gebruiker verzonden. Voeg hier de tekst in voor de email.
<br/><br/>
Je kunt de inhoud verder aanpassen met speciaal ingevoegde labels:
- <br/><b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b> invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b> invoegen van de galerie-URL mits dit is ingesteld in Piwigo\'s instellingen.
<br/><br/>
Om meerdere talen te gebruiken kan je de labels van de plugin Extended Description gebruiken. Als deze plugin tenminste geactiveerd is.';
$lang['UAM_ConfirmMail_Subject_d'] = 'Voeg hier het onderwerp in van je aangepaste registratie emailbevestiging.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar je kan dit veranderen en de taal-labels [lang=?][/lang]gebruiken van de plugin Extended Description. Als je deze tenminste hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassings-labels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker van de email.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>';
$lang['UAM_tipsTitle_d'] = 'Tips en diverse voorbeelden';
$lang['UAM_restricTitle_d'] = '- Uitsluiting van lettertekens<br/>
- Uitsluiting van email domeinen<br/>
...';
$lang['UAM_remailtxt1Title'] = 'EmailHerinnering met een nieuw gegenereerde sleutel';
$lang['UAM_remailtxt2Title'] = 'Emailherinnering zonder een nieuw gegenereerde sleutel';
$lang['UAM_confirmstatTitle'] = 'Statuten';
$lang['UAM_confirmlevelTitle'] = 'Privacy niveau';
$lang['UAM_confirmgrpTitle'] = 'Groepen';
$lang['UAM_GTAutoGpTitle_d'] = 'De automatische wijziging van een groep, status of privacy niveau is te vergelijken met een degradatie (terugzetting) van de betrokken accounts. Het werkt volgens hetzelfde principe als de bevestiging van het groeps, status of privacy niveau (zie &quot;Instellingen van registratie bevestiging&quot;). Definieer daarom een groep, status en/of niveau voor degradatie in de toegang tot de galerie. Als dit al is gedefinieerd tijdens de registratie bevestiging, dan kan je dezelfde groep, status of niveau gebruiken.<br/><br/>
<b style=&quot;color: red;&quot;>Nota Bene:</b> Als een spook bezoeker nog steeds niets heeft vernomen vanaf de tijdslimiet, en ondanks het automatische emailbericht (als deze tenminste is geactiveerd), wordt hij automatisch verwijderd uit de database.';
$lang['UAM_Tracking registered users_d'] = 'Dit activeert een tabel in het tabblad &quot;Volgen van geregistreerde gebruikers&quot; waar een lijst is te vinden van geregistreerde galerie-gebruikers met de datum van hun laatste bezoek en de tijd die verstreken is sinds hun laatste bezoek (in dagen). De controle heeft alleen informatiewaarde voor de beheerder van de galerie.';
$lang['UAM_StuffsTitle_d'] = 'Dit activeert een extra UAM blok in de plugin PWG Stuffs (mits geïnstalleerd) om je bezoekers, die niet hebben bevestigd, te informeren over hun status.
<br/><br/>
Kijk voor details naar de <b>Tips en Voorbeelden</b> onderaan deze pagina.';
$lang['UAM_RejectConnexion_d'] = 'Als je deze optie hebt geactiveerd, kunnen nieuwe geregistreerde, maar nog niet bevestigde gebruikers geen verbinding met de galerie maken. Ze worden doorverwezen naar een speciale pagina die hen informeert over hun status.<br/><br/>
<b style=&quot;color: red;&quot;>Waarschuwing - Deze mogelijkheid werkt alleen in samenhang met bevestigingsgroepen! Zie hieronder hoe je groepen instelt.</b>';
$lang['UAM_GTReminder_Subject_d'] = 'Voeg hier je aangepaste handmatige emailonderwerp van Ghost Tracker ter herinnering in.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dit kan je veranderen en je kan gebruikmaken van de vertalingslabels [lang=?][/lang] van de plugin Extended Description, mits je deze hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassingslabels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>';
$lang['UAM_GTAutomail_Subject_d'] = 'Voeg hier je aangepaste automatische emailonderwerp van Ghost Tracker m.b.t. degradatie in.<br/>
Standaard heeft het tekstveld een algemene tekst in het Engels, maar dit kan je veranderen en je kan gebruikmaken van de vertalingslabels [lang=?][/lang] van de plugin Extended Description, mits je deze hebt geïnstalleerd.
<br/><br/>
De volgende extra aanpassingslabels zijn beschikbaar zonder de plugin Extended Description:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>';
$lang['UAM_miscTitle_d'] = '- Controle van geregistreerde gebruikers<br/>
- Verplichte bijnaam voor gasten die commentaar geven<br/>
...';
$lang['UAM_infomailTitle_d'] = 'Deze optie maakt het mogelijk dat er automatisch een email met informatie wordt verzonden naar een gebruiker als deze zijn wachtwoord of zijn email-adres verandert op zijn profielpagina.<br/><br/>
De inhoud van het verzonden bericht bestaat uit een aanpasbaar gedeelte (voor een welkomst boodschap) en een vaststaand gedeelte met de inlognaam, het wachtwoord en email-adres van de gebruiker.';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;>WAARSCHUWING: Het gebruik van statussen bij de bevestiging vereist dat je de &quot;Gast&quot; gebruiker in de standaard instelling voor nieuw geregistreerden hebt staan (als gebruikers sjabloon). NB. Je kan elke gebruiker instellen als een sjabloon voor nieuw geregistreerden. Raadpleeg de documentatie van Piwigo voor meer informatie.
</b><br/><br/>
Statussen worden gevalideerd in samenhang met de &quot;Bevestiging van Registratie&quot;';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>WAARSCHUWING: Wanneer je een privacy niveau gebruikt moet je dit bij je foto\'s hebben aangegeven. Raadpleeg de documentatie van Piwigo voor meer informatie.</b><br/><br/>
Het privacy niveau is geldig in samenhang met de &quot;Bevestiging van Registratie&quot;';
$lang['UAM_infotxtTitle_d'] = 'Voeg de introductietekst in de email ter informatie.
<br/><br/>
Vervolgens kan je de inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de URL van je galerie, mits je deze hebt ingesteld in Piwigo\'s instellingen.<br/>
<br/><br/>
Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken als deze is geactiveerd.';
$lang['UAM_gttextTitle_d'] = 'Voeg je eigen tekst in de emailherinnering om de gebruiker aan te sporen de galerie weer te bezoeken (NB. De vooraf ingevulde tekst is een voorbeeld).
<br/><br/>
Vervolgens kan je de inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de URL van je galerie, mits je deze hebt ingesteld in Piwigo\'s instellingen.<br/>
- <b style=&quot;color: red;&quot;>[dagen]</b> het invoegen van het maximaal aantal dagen tussen 2 bezoeken.
<br/><br/>
Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken als deze is geactiveerd.';
$lang['UAM_gtTitle_d'] = 'Als Ghost Tracker is ingeschakeld en geïnitialiseerd, dan vind je hier een lijst met geregistreerde bezoekers die sinds x dagen niet zijn terug geweest. &quot;x&quot; is het aantal dagen dat is ingesteld in het tabblad Algemene Instellingen. Bovendien zie je een kolom waarin staat of er een emailherinnering is verzonden naar deze bezoekers. Je ziet dus direct de bezoekers die geen aandacht hebben gegeven aan de herinnering.<br/><br/>In dit scherm kan je:
<br/><br/>
- Handmatig accounts verwijderen<b>(handmatige verwijdering)</b>
<br/>
- Een emailherinnering genereren<b>met een reset van de laatste bezoekdatum</b>. Hiermee geef je een \'joker\' aan de beoogde bezoeker. Als de bezoeker al een emailherinnering heeft gehad kan je toch een nieuwe email sturen waarin de datum van het laatste bezoek opnieuw wordt ingesteld.
<br/><br/>
<b>Tabel Sorteerfunctie</b>:Je kan de data sorteren door op de kolom-kop te klikken. Houdt de SHIFT-toets vast om tot 4 gelijktijdige kolommen te sorteren. ';
$lang['UAM_userlistTitle_d'] = 'Dit is een informatiepagina voor de beheerder. Het toont een lijst met alle geregistreerde gebruikers naar datum en het aantal dagen sinds hun laatste bezoek. De lijst is gesorteerd in een oplopend aantal dagen.
<br/><br/>
<b><u>Alleen bij een ingeschakelde Ghost Tracker</u></b> verschijnt het aantal niet bezochte dagen in de onderstaande code, afhankelijk van het maximum dat je hebt ingesteld in de Ghost Tracker instellingen:
<br/>
- <b style=&quot;color: lime;&quot;>Groen</b> : Als de bezoeker de galerie <b style=&quot;color: lime;&quot;><u>minder dan 50%</u></b> van het maximum heeft bezocht,  zoals aangegeven in de Ghost Tracker.<br/>
- <b style=&quot;color: orange;&quot;>Oranje</b> : Als de bezoeker de galerie <b style=&quot;color: lime;&quot;><u>tussen de 50% en 99%</u></b> van het maximum heeft bezocht, zoals aangegeven in de Ghost Tracker.<br/>
- <b style=&quot;color: red;&quot;>Rood</b> : Als de bezoeker de galerie <b style=&quot;color: lime;&quot;><u>meer dan 100%</u></b> van het maximum heeft bezocht,  zoals aangegeven in de Ghost Tracker.<br/>. <b><u>In dit geval moet de gebruiker ook in de Ghost Tracker tabel voorkomen.</u></b><br/>
<br/>
Voorbeeld:
<br/>
In Ghost Tracker is de maximale periode ingesteld op 100 dagen.
<br/>
Een gebruiker verschijnt in het groen als hij de galerie minder dan 50 dagen heeft bezocht, in het oranje als zijn laatste bezoek tussen 50 en 99 dagen plaatsvond en in het rood als hij hier 100 of meer dagen was.
<br/><br/>
<b>NOTA BENE</b>: In de lijst staan niet de degenen die hun registratie niet hebben bevestigd (mits de optie voor registratiebevestiging is ingeschakeld). Deze gebruikers worden beheerd op een aparte manier in het tabblad &quot;Controle van Bevestigingen&quot;
<br/><br/>
<b>Tabel Sortering</b>: Je kan de data sorteren door op de kolom-koppen te klikken. Als je de SHIFT-toets ingedrukt houdt kan je tot 4 kolommen tegelijk sorteren.';
$lang['UAM_remailtxt2Title_d'] = 'Voeg je eigen introductietekst in de emailherinnering zonder de opnieuw gegenereerde bevestigingssleutel.
<br/><br/>
Als je dit veld leeg laat zal de emailherinnering geen inhoud bevatten. Het wordt sterk aanbevolen om een kleine tekstuitleg in te voegen. (NB. De vooraf ingevulde tekst is bedoeld als voorbeeld)
<br/><br/>
Vervolgens kan je de inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de URL van je galerie, mits je deze hebt ingesteld in Piwigo\'s instellingen.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b>invoegen van het aantal dagen om de registratie te bevestigen. (&quot;Beperkte Termijn voor registratiebevestiging;&quot; moet zijn ingeschakeld).
<br/><br/>
Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken als deze is geactiveerd.';
$lang['UAM_remailtxt1Title_d'] = 'Voeg je eigen introductietekst in de emailherinnering met de opnieuw gegenereerde bevestigingssleutel.
<br/><br/>
Als je dit veld leeg laat zal de emailherinnering alleen de bevestigingslink bevatten. Het wordt sterk aanbevolen om een kleine tekstuitleg in te voegen. (NB. De vooraf ingevulde tekst is bedoeld als voorbeeld)
<br/><br/>
Vervolgens kan je de inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de naam van de bestemde gebruiker.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de URL van je galerie, mits je deze hebt ingesteld in Piwigo\'s instellingen.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b>invoegen van het aantal dagen om de registratie te bevestigen. (&quot;Beperkte Termijn voor registratiebevestiging;&quot; moet zijn ingeschakeld).
<br/><br/>
Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken als deze is geactiveerd.';
$lang['UAM_validationlimitTitle_d'] = 'Deze optie maakt het mogelijk om de geldigheid van de bevestigingssleutel in de email voor nieuw geregistreerden te beperken. Bezoekers die zich registreren hebben x dagen de tijd om hun registratie te bevestigen. Na deze periode zal de bevestigingslink verlopen.
<br/><br/>
Deze optie hangt samen met de &quot;Bevestiging van Registratie&quot;
<br/><br/>
Als deze optie en ook de optie &quot;Herinner onbevestigde gebruikers&quot; is geactiveerd, verschijnen er nieuwe opties hieronder om de automatisering in te schakelen van het beheer van onbevestigde gebruikers.';
$lang['UAM_usermanTitle_d'] = 'Als de termijnbeperking voor registratie is ingeschakeld, vind je hieronder een lijst van gebruikers van wie een registratiebevestiging wordt verwacht, of ze<b style=&quot;text-decoration: underline;&quot;> al dan niet</b> op tijd bevestigen.
<br/><br/>
De registratiedatum wordt in het groen getoond als de gebruiker binnen zijn termijn van registratiebevestiging zit. In dit geval is de bevestigingssleutel nog steeds geldig en kan je een email sturen met of zonder een nieuwe bevestigingssleutel.<br/><br/>
Als de registratiedatum in het rood verschijnt, is de bevestigingstermijn verlopen. In dit geval moet je een email sturen met een hernieuwde bevestigingssleutel als je de gebruiker in de gelegenheid wilt stellen om zijn registratie te bevestigen.<br/><br/>
Je kunt in alle gevallen handmatig de bevestiging afdwingen.<br/><br/>
Hier kan je:
<br/><br/>
- Handmatig accounts verwijderen <b>(handmatige verwijdering)</b>
<br/>
- Een emailherinnering genereren <b>zonder</b> een nieuwe sleutel. Waarschuwing: Stuur alleen een email naar de betrokken gebruikers. Deze functie herstelt niet de registratiedatum van de betrokken gebruikers en de verloopdatum geldt nog steeds.
<br/>
- Een emailherinnering genereren <b>met</b> een nieuwe sleutel. Waarschuwing: Stuur alleen een email naar de betrokken gebruikers. Deze functie herstelt tevens de registratiedatum van de betrokken gebruikers en de verloopdatum voor de bevestiging wordt verlengd.
<br/>
- Een registratie in afwachting van bevestiging handmatig versturen zelfs als de verloopdatum is gepasseerd <b>(bevestiging afdwingen)</b>.
<br/><br/>
<b>Tabel Sorteer Functie</b>: je kan de data sorteren door op de kolom-koppen te klikken. Houdt de SHIFT-toets vast om 4 kolommen gelijktijdig te sorteren. ';
$lang['UAM_confirmtxtTitle_d'] = 'Voeg de introductietekst in die je in de emailbevestiging van registratie wilt tonen.
<br/><br/>
Vervolgens kan je inhoud aanpassen met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[gebruikersnaam]</b> automatisch invoegen van de betrokken gebruikersnaam.<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van de galerie URL mits je dit hebt ingesteld in de Piwigo instellingen.<br/>
- <b style=&quot;color: red;&quot;>[Kdays]</b>invoegen van het aantal dagen waarbinnen de registratie moet worden bevestigd (&quot;Beperking van de termijn voor registratie bevestiging;&quot; moet ingeschakeld zijn).
<br/><br/>
Voor meerdere talen kan je de labels [lang=?][/lang] van de plugin Extended Description gebruiken als je deze hebt geactiveerd.';
$lang['UAM_confirmTitle_d'] = '- Genereren van email ter informatie<br/>
- Genereren van email ter bevestiging van een registratie<br/>
- Automatische samenvoeging van groepen, status of privacy niveau<br/>
- Termijn voor de bevestiging van een registratie<br/>
- Genereren van email ter herinnering<br/>
...';
$lang['UAM_GTAutoDelTitle_d'] = 'Dit geldt alleen als de gebruiker, van wie het account is verlopen, het verwijderingsmechanisme start (het is zeldzaam, maar wel mogelijk). Dan wordt zijn verbinding met de galerie verbroken en wordt hij doorgestuurd naar een pagina die de verwijdering van zijn account toont met, waarschijnlijk, ook de reden van verwijdering.
<br/><br/>
Aanpassen van de inhoud met speciaal ingevoegde labels:<br/>
- <b style=&quot;color: red;&quot;>[mygallery]</b>invoegen van je galerietitel.<br/>
- <b style=&quot;color: red;&quot;>[myurl]</b>invoegen van je galerie URL mits dit is ingesteld in de Piwigo intellingen.<br/>
<b style=&quot;color: red;&quot;>[gebruikersnaam]</b> is hier niet beschikbaar, omdat de betrokken gebruiker is verwijderd.
<br/><br/>
Aangepaste tekst voor de doorstuurpagina kan in dit tekstveld (is compatibel met de FCK Tekstverwerker) worden getypt. Voor meerdere talen kan je de labels van de plugin Extended Description gebruiken - [lang=][/lang]-, als deze geactiveerd is.';