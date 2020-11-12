<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <title>Webtervezés 2020 - I. mérföldkő</title>
    <style>
      body {
        font-family: "Segoe UI",Arial,sans-serif;
        background-color: #fcfcfc;
        font-size:16px;
        padding-bottom:50px;
      }
      table,td,th {
        border-collapse: collapse;
      }
      th,td {
        border: 1px solid #000000;
        padding:5px;
      }
      table {
        margin:10px;
      }
      td:first-child {
        /*font-weight:bold;*/
        vertical-align: top;
      }
      .stfill {
        font-weight:bold;
        color:#DD4132;
      }
      .sum {
        border-top:2px solid #000000;
      }
      .sum td {
        font-weight:bold;
      }
      .task {
        /*font-weight:bold;*/
      }
      .subtask {
        padding-left:25px;
      }
      .note {
        font-size:12px;
        display:block;
      }
      tr.sum>td:nth-child(2),
      td:nth-child(3),
      td:nth-child(4) {
        text-align: center;
      }
      tr.header {
        border-bottom: 2px solid #000000;
      }
      .example {
        font-style: italic;
        color:grey;
      }
      .kotelezo{ 
		  color:red; 
		  font-weight: bold; 
	   }
    </style>
  </head>
  <body>
    <h1>Web tervezés - 2 fős projekt <br />
        I. mérföldkő követelmények</h1>
    <div>
      <h2>Általános elvárások</h2>
      <ul>
        <li>A mérföldkő elfogadásához 5 db html oldalt kell ekészíteni a választott témának megfelelően.
            A projekt célja a HTML, CSS ismeretek bemutatása, ezért nem tartalmazhat program által generált elemeket.</li>
        <li>Az elkészített feladatot egy zip fájlban kell feltölteni CooSpace-re a követelményekben megfogalmazott határidőig.</li>
        <li>Kicsomagolás után a HTML fájlok böngészőben történő megnyitásával a használt útvonalaknak (css,kép) helyesnek kell lenniük.</li>
        <li>A mérföldkő kötelező részét képezi a választott téma ismertetése. A továbbiakban az elkészített feladatoknak a választott témának kell megfelelniük.</li>
        <li>A fenti elvárások a pontozásban "Formai követelmények" néven szerepelnek.</li>
        <li>Csak működő, látható és értelmes formázások érnek pontot. Például nem ér pontot: fehér háttéren fehér szöveg, CSS animáció ami nem jelenik meg a weboldalon, a rossz útvonalak miatt nem működő/látható tartalom.</li>
        <li>Az <span class="kotelezo">
             1, 2, 3, 3.1, 3.2, 3.3., 4.1, 4.2, 4.3, 4.4, 5.1, 5.2 </span>
             számozású követelmények teljesítése az elégséges érdemjegy megszerzéséhez kötelező, a projekt más részeivel ki nem váltható!</li>
        <li>Az 5.3-as és 5.4-es követelményeknél fel kell sorolni a megvalósított elemeket. Az összes követelménynél (1, 2, 3, 3.1, 3.2, 3.3., 4.1, 4.2, 4.3, 4.4, 5.1, 5.2, 5.3, 5.4 felsorolt elemei) az egyes követelményeket linkké kell alakítani, melyek arra az oldalra navigálnak, ahol láthatóak.</li>
        <li>Ezen dokumentumot kitöltve mellékelni kell a beadott zip fájlban.</li>
      </ul>
    </div>
    <div>
      <h2>1. hallgató adatai</h2>
      <ul>
        <li>Név: <span class="stfill">Kiss Csanád</span></li>
        <li>Neptun-kód: <span class="stfill">PYQAKL</span></li>
        <li>Szak, évfolyam: <span class="stfill">Gazdaságinformatika, 4. félév</span></li>
        <li>E-mail cím: <span class="stfill">kisscsanadd@gmail.com</span></li>
        <li>Használt szabvány: <span class="stfill">HTML5</span> (XHTML 1.0 Strict vagy HTML5)</li>
      </ul>
    </div>
	<div>
      <h2>2. hallgató adatai</h2>
      <ul>
        <li>Név: <span class="stfill">Szirbik Péter</span></li>
        <li>Neptun-kód: <span class="stfill">QJ1L4V	</span></li>
        <li>Szak, évfolyam: <span class="stfill">Gazdaságinformatika, 4. félév</span></li>
        <li>E-mail cím: <span class="stfill">szirbikpeti@gmail.com</span></li>
        <li>Használt szabvány: <span class="stfill">HTML5</span> (XHTML 1.0 Strict vagy HTML5)</li>
      </ul>
    </div>
    <div>
      <h2>Választott téma</h2>
      <p>A választott téma rövid (5-10 mondat) összefoglalása:</p>
      <p>
         <span class="stfill">Egy webshopot készítettünk, ami az edzéssel foglalkozik. <br>
			Termékek között fehérjék, illetve vitaminok vannak. <br>
			Van lehetőség kapcsolatba lépni velünk, sima kérdés formájában, vagy edzéstervet is készítünk, ha az az igény <br>
			A "Rólunk" menüpont tülrözi a mi világlátásunkat idézetek formájában. <br>
			A téma választás nem volt nehéz, hisz mindkettőnket érdekel az edzés, az egészséges életmód.
		</span>
      </p>
      <p>
        A projektnek kötelező jelleggel tartalmaznia kell felhasználókezelést. <br>
        Kiemelt funkciók (legalább 3 darab a kötelezőkön kívül):
      </p>
      <ul>
        <li><b>Felhasználó kezelés: regisztráció, belépés stb.</b></li>
        <li><span class="stfill">
			<a href="./php/contact.php">Kapcsolattartás</a>, <a href="./php/bmi.php">BMI kalkulátor</a>, 
			<a href="./php/workout.php">Edzésterv igénylése</a>, <a href="./php/login.php">Elfelejtett jelszó</a>
			</span></li>
      </ul>
    </div>
    <div>
      <h2>Pontozás</h2>
      <p>
        Ezt a részt az oktató tölti ki.
      </p>
      <table>
        <tr class="header">
          <th>
            
          </th>
          <th>
            Részfeladat
          </th>
          <th>
            Szerezhető pontszám
          </th>
          <th>
            Szerzett pontszám
          </th>
          <th>
            Megjegyzés
          </th>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/main.php">1</a></td>
          <td>
            Formai követelmények
          </td>
          <td>2</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/main.php">2</a></td>
          <td class="task">
            Szabványos HTML oldalak
            <span class="note">A minimálisan kötelező 5 oldalnak szabványosnak kell lennie.</span>
          </td>
          <td>10</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/main.php">3</a></td>
          <td class="task" colspan="4">
            Menü megvalósítás
          </td>          
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/main.php">3.1</a></td>
          <td class="subtask">
            <a>Linkek használata</a>
          </td>
          <td>2</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/main.php">3.2</a></td>
          <td class="subtask">
            <a>Lista használata</a>
          </td>
          <td>2</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/main.php">3.3</a></td>
          <td class="subtask">
            <a>CSS formázás</a>
            <span class="note">- Az aktuális menüpont eltérő.</span>
            <span class="note">- Az egér rávitelével a kinézet módosul.</span>
          </td>
          <td>4</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td>4</td>
          <td class="task" colspan="4">
            A weboldal struktúrája
          </td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/protein.php">4.1</a></td>
          <td class="subtask">
            <a>Div illetve HTML5 elemekkel van kialakítva</a>
            <span class="note">Fejléc, lábléc, törzs, oldalsáv, menü.</span>
            <span class="note">HTML5 esetén HTML5 elemek.</span>
          </td>
          <td>10</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/about.php">4.2</a></td>
          <td class="subtask">
            <a>Táblázat elemek szabályos használata</a>
            <span class="note">Fejlécekhez való társítással (headers).</span>
          </td>
          <td>4</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/registration.php">4.3</a></td>
          <td class="subtask">
            <a>Űrlap elemek használata</a>
            <span class="note">Legalább 4 féle beviteli mező.</span>
            <span class="note">Label elemekkel.</span>
          </td>
          <td>8</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/vitamin.php">4.4</a></td>
          <td class="subtask">
            <a>Kép elem használata</a>
          </td>
          <td>2</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td>5</td>
          <td class="task" colspan="4">
            CSS
          </td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/protein.php">5.1</a></td>
          <td class="subtask">
            <a>Elemkijelölő, azonosítókijelölő, <br>osztálykijelölő, összetett kijelölők használata</a>
          </td>
          <td>8</td><td></td><td></td>
        </tr>
        <tr class="kotelezo">
          <td><a href="./php/about.php">5.2</a></td>
          <td class="subtask">
            <a>Nyomtatási stíluslap</a>
            <span class="note">Az 5 db HTML oldal egyikéhez elég elkészíteni <br>a stíluslapot az órán tanultaknak megfelelően.</span>
          </td>
          <td>4</td><td></td><td></td>
        </tr>
        <tr>
          <td>5.3</td>
          <td class="subtask">
            <i>A weboldal struktúra elemeinek testreszabása</i>
            <span class="note">Formázás, pozícionálás, méretezés, úsztatás</span>
            <span class="note">Példák:</span>
            <span class="note">- <a href="./php/main.php">fix lábléc</a>: 4 pont</span>
            <span class="note">- többoszlopos elrendezés: 4 pont</span>            			
            <span class="note">- <a href="./php/bmi.php">lebegő doboz</a>: 4 pont</span>            			
            <span class="note">- <a href="./php/bmi.php">z-index használata</a>: 4 pont</span>            			
            <span class="note">- <a href="./php/about.php">méretezés</a>: 2 pont</span>            			
            <span class="note">- stb.</span>            			
          </td>
          <td>10</td><td></td><td></td>
        </tr>
        <tr>
          <td>5.4</td>
          <td class="subtask">
            <i>Dizájn</i>
            <span class="note">A korábbi részfeladatok teljesítéséhez használt <br>szabályokon felül.</span>
            <span class="note">Szabadon használható:</span>
            <span class="note">- pozícionálás: <a href="./php/vitamin.php">absolute</a>, <a href="./php/main.php">fixed</a>, <a href="./php/protein.php">relative</a>,  <a href="./php/protein.php">static</a> típusonként 2 pont</span>
            <span class="note">- <a href="./php/bmi.php">úsztatás</a>: 2 pont</span>
            <span class="note">- <a href="./php/main.php">pseudo elemek</a>: 4 pont</span>
            <span class="note">- <a href="./php/about.php">lekerekített sarkok</a>: 4 pont</span>
            <span class="note">- <a href="./php/about.php">árnyékok</a>: 4 pont</span>
            <span class="note">- <a href="./php/main.php">áttűnés</a>: 4 pont</span>
            <span class="note">- transzformálás: <a href="./php/main.php">eltolás</a>, <a href="./php/bmi.php">forgatás</a>, skálázás, nyírás típusonként 2 pont</span>
            <span class="note">- <a href="./php/main.php">animáció</a>: 4 pont</span>
            <span class="note">- <a href="./php/about.php">media query</a></span>
            <span class="note">- stb.</span>
          </td>
          <td>24</td><td></td><td></td>
        </tr>
        <tr class="sum">
          <td colspan="2">Összpontszám:</td>
          <td>90</td>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>
    <div>
      <h2>Megjegyzés</h2>
      <p>A hallgató opcionális megjegyzése a beadott feladathoz.</p>
      <p class="stfill">
         "Rejtett" funkció: valamennyi képre ráhúzva az egeret, egy leírást látunk (az adott kép helyett), arról ami a képen látható. <br>
		 Weboldal ikonja egy saját képre lett leváltva <br> 
		 <a href="./php/workout.php">Videó</a> használata <br> <br>
		 Lehetséges, hogy a linkelés során kimaradtak funkciók, amik léteznek és működnek.
      </p>
    </div>
    <p> Közzétéve: 2020. 02. 22. </p>
    <p> Beadva: 2020. 03. 29. </p>
  </body>
</html>
