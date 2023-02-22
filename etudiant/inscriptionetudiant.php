<?php     /* fichier d inscription d etudiant */


// On démarre la session AVANT d'écrire du code HTML
session_start();
 
 include "sideauth.php";
 include "entete.php";?>

<head>


<style>
input[type=image]
{
width:20px;
height:17px;
left:100px;
}
body {
 
 font-size:80%;
 }
form {
 padding:60px;
 padding-left:100px;
 width:700px;
 margin-left:auto;
 margin-right:auto;
 }
fieldset {
 padding:2 30px 30px 20px;
 margin-bottom:10px;
 border:1px solid 3fdf9a;
  }
legend {
 color:#4CAF50;
 font-weight:bold;
 margin:0px;
 padding:0px;
 }
label {
 margin-top:10px;
 display:block;
 }
label.inline {
 display:inline;
 margin-right:50px;
 }
input, textarea, select, option {
 background-color:#F5F5F5;
 
 }
input, select {
 padding:3px;
 border:1px solid ;
 border-radius:5px;
 width:370px;
 box-shadow:1px 1px 2px  inset;
 margin:8px;
 }
 textarea  {
 padding:3px;
 border:1px solid ;
 border-radius:5px;
 width:400px;
 box-shadow:1px 1px 2px #C0C0C0 inset;
 margin:10px;
 }
select {
 margin-top:10px;
 }
input[type=radio] {
 background-color:transparent;
 border:none;
 width:10px;
 }
input[type=submit], input[type=reset] {
 width:100px;
 margin-left:5px;
 box-shadow:1px 1px 1px #4CAF50;
 cursor:pointer;
 background-color:#4CAF50;
 }
 input[type=image] 
 {padding:0px;}
 i {
   cursor: pointer;
   pointer-events: all;
 }
 B{
  width:100px;
  display:inline-block;
 }
</style>
</head>
<body>

<form action="compte.php" method="post" >

<fieldset>

   <legend><h2>Créer votre profil de stage :</h2></legend>
   <B>Civilité:</B><select name="civilite"  required>
                      <option value=""></option>
                      <option value="Mlle">Mlle </option>
                      <option value="Mme">Mme </option>
                      <option value="Mr">Mr </option>
                    </select></br>
  
    <B>CIN :</B><input type="text"  name='cine' required   size="40"/></br>

    <B>Mot de passe  :</B><input type="password"  name='mdp' id="psw" required size="40"/>
  
   <i class="fa fa-fw fa-eye-slash" onclick="myFunction()" id="ff" style="display:inline" ></i>
	  <i class="fa fa-fw fa-eye" onclick="myFunction()" id="ss" style="display:none" ></i>
      </br>
    <B> Nom :</B><input type="text"  name='nom' required size="40"               /></br>
    <B>Prenom :</B><input type="text"  name='prenom' required   /></br>  
			   
   	   
    <B>Tel :</B><input type="text"   name='tel'             /></br>  
  
    <B>Email    :</B><input type="email" name="email" size="20"   maxlength="40"  /></br>
   
    <B>Pays :</B><select name="pays"  required>
                      <option value=""></option>
                      
                      <option value="AFGHANISTAN"> AFGHANISTAN</option>
                      
                      <option value="AFRIQUE DU SUD"> AFRIQUE DU SUD</option>
                      
                      <option value="ALBANIE"> ALBANIE</option>
                      
                      <option value="ALGERIE"> ALGERIE</option>
                      
                      <option value="ALLEMAGNE"> ALLEMAGNE</option>
                      
                      <option value="ANDORRE"> ANDORRE</option>
                      
                      <option value="ANGOLA"> ANGOLA</option>
                      
                      <option value="ARABIE SAOUDITE"> ARABIE SAOUDITE</option>
                      
                      <option value="ARGENTINE"> ARGENTINE</option>
                      
                      <option value="AUSTRALIE"> AUSTRALIE</option>
                      
                      <option value="AUTRICHE"> AUTRICHE</option>
                      
                      <option value="BAHAMAS"> BAHAMAS</option>
                      
                      <option value="BAHREIN"> BAHREIN</option>
                      
                      <option value="BANGLADESH"> BANGLADESH</option>
                      
                      <option value="BELGIQUE"> BELGIQUE</option>
                      
                      <option value="BOLIVIE"> BOLIVIE</option>
                      
                      <option value="BRESIL"> BRESIL</option>
                      
                      <option value="BRUNEI"> BRUNEI</option>
                      
                      <option value="BULGARIE"> BULGARIE</option>
                      
                      <option value="BURKINA FASO"> BURKINA FASO</option>
                      
                      <option value="BURUNDI"> BURUNDI</option>
                      
                      <option value="CAMEROUN"> CAMEROUN</option>
                      
                      <option value="CANADA"> CANADA</option>
                      
                      <option value="CAP-VERT"> CAP-VERT</option>
                      
                      <option value="CENTRAFRIQUE"> CENTRAFRIQUE</option>
                      
                      <option value="CHILI"> CHILI</option>
                      
                      <option value="CHINE"> CHINE</option>
                      
                      <option value="CHYPRE"> CHYPRE</option>
                      
                      <option value="COLOMBIE"> COLOMBIE</option>
                      
                      <option value="COMORES"> COMORES</option>
                      
                      <option value="CONGO"> CONGO</option>
                      
                      <option value="COREE DU NORD"> COREE DU NORD</option>
                      
                      <option value="COREE DU SUD"> COREE DU SUD</option>
                      
                      <option value="COSTA RICA"> COSTA RICA</option>
                      
                      <option value="COTE D'IVOIRE"> COTE D'IVOIRE</option>
                      
                      <option value="CUBA"> CUBA</option>
                      
                      <option value="DANEMARK"> DANEMARK</option>
                      
                      <option value="DJIBOUTI"> DJIBOUTI</option>
                      
                      <option value="DOMINICAINE"> DOMINICAINE</option>
                      
                      <option value="DOMINIQUE"> DOMINIQUE</option>
                      
                      <option value="EGYPTE"> EGYPTE</option>
                      
                      <option value="EMIRATS ARABES UNIS"> EMIRATS ARABES UNIS</option>
                      
                      <option value="EQUATEUR"> EQUATEUR</option>
                      
                      <option value="ESPAGNE"> ESPAGNE</option>
                      
                      <option value="ETATS-UNIS"> ETATS-UNIS</option>
                      
                      <option value="ETHIOPIE"> ETHIOPIE</option>
                      
                      <option value="FINLANDE"> FINLANDE</option>
                      
                      <option value="FRANCE"> FRANCE</option>
                      
                      <option value="GABON"> GABON</option>
                      
                      <option value="GAMBIE"> GAMBIE</option>
                      
                      <option value="GHANA"> GHANA</option>
                      
                      <option value="GIBRALTAR"> GIBRALTAR</option>
                      
                      <option value="GRECE"> GRECE</option>
                      
                      <option value="GRENADE"> GRENADE</option>
                      
                      <option value="GROENLAND"> GROENLAND</option>
                      
                      <option value="GUAM"> GUAM</option>
                      
                      <option value="GUATEMALA"> GUATEMALA</option>
                      
                      <option value="GUINEE"> GUINEE</option>
                      
                      <option value="GUINEE EQUATORIALE"> GUINEE EQUATORIALE</option>
                      
                      <option value="GUINEE-BISSAU"> GUINEE-BISSAU</option>
                      
                      <option value="GUYANA"> GUYANA</option>
                      
                      <option value="GUYANE FRANCAISE"> GUYANE FRANCAISE</option>
                      
                      <option value="HAITI"> HAITI</option>
                      
                      <option value="HONDURAS"> HONDURAS</option>
                      
                      <option value="HONG KONG"> HONG KONG</option>
                      
                      <option value="HONGRIE"> HONGRIE</option>
                      
                      <option value="INDE"> INDE</option>
                      
                      <option value="INDONESIE"> INDONESIE</option>
                      
                      <option value="IRAK"> IRAK</option>
                      
                      <option value="IRAN"> IRAN</option>
                      
                      <option value="IRLANDE"> IRLANDE</option>
                      
                      <option value="ISLANDE"> ISLANDE</option>
                      
                      <option value="ISRAEL"> ISRAEL</option>
                      
                      <option value="ITALIE"> ITALIE</option>
                      
                      <option value="JAMAIQUE"> JAMAIQUE</option>
                      
                      <option value="JAPON"> JAPON</option>
                      
                      <option value="JORDANIE"> JORDANIE</option>
                      
                      <option value="KENYA"> KENYA</option>
                      
                      <option value="KOWEIT"> KOWEIT</option>
                      
                      <option value="LAOS"> LAOS</option>
                      
                      <option value="LIBAN"> LIBAN</option>
                      
                      <option value="LIBERIA"> LIBERIA</option>
                      
                      <option value="LIBYE"> LIBYE</option>
                      
                      <option value="LUXEMBOURG"> LUXEMBOURG</option>
                      
                      <option value="MACAO"> MACAO</option>
                      
                      <option value="MADAGASCAR"> MADAGASCAR</option>
                      
                      <option value="MALAISIE"> MALAISIE</option>
                      
                      <option value="MALAWI"> MALAWI</option>
                      
                      <option value="MALDIVES"> MALDIVES</option>
                      
                      <option value="MALI"> MALI</option>
                      
                      <option value="MALTE"> MALTE</option>
                      
                      <option value="MAROC"> MAROC</option>
                      
                      <option value="MARTINIQUE"> MARTINIQUE</option>
                      
                      <option value="MAURICE"> MAURICE</option>
                      
                      <option value="MAURITANIE"> MAURITANIE</option>
                      
                      <option value="MAYOTTE"> MAYOTTE</option>
                      
                      <option value="MEXIQUE"> MEXIQUE</option>
                      
                      <option value="MONACO"> MONACO</option>
                      
                      <option value="MONGOLIE"> MONGOLIE</option>
                      
                      <option value="MOZAMBIQUE"> MOZAMBIQUE</option>
                      
                      <option value="NAMIBIE"> NAMIBIE</option>
                      
                      <option value="NIGER"> NIGER</option>
                      
                      <option value="NIGERIA"> NIGERIA</option>
                      
                      <option value="NORVEGE"> NORVEGE</option>
                      
                      <option value="NOUVELLE-CALEDONIE"> NOUVELLE-CALEDONIE</option>
                      
                      <option value="NOUVELLE-ZELANDE"> NOUVELLE-ZELANDE</option>
                      
                      <option value="OMAN"> OMAN</option>
                      
                      <option value="OUGANDA"> OUGANDA</option>
                      
                      <option value="PAKISTAN"> PAKISTAN</option>
                      
                      <option value="PANAMA"> PANAMA</option>
                      
                      <option value="PARAGUAY"> PARAGUAY</option>
                      
                      <option value="PAYS-BAS"> PAYS-BAS</option>
                      
                      <option value="PEROU"> PEROU</option>
                      
                      <option value="PHILIPPINES"> PHILIPPINES</option>
                      
                      <option value="PITCAIRN"> PITCAIRN</option>
                      
                      <option value="POLOGNE"> POLOGNE</option>
                      
                      <option value="POLYNESIE FRANCAISE"> POLYNESIE FRANCAISE</option>
                      
                      <option value="PORTO RICO"> PORTO RICO</option>
                      
                      <option value="PORTUGAL"> PORTUGAL</option>
                      
                      <option value="QATAR"> QATAR</option>
                      
                      <option value="REUNION"> REUNION</option>
                      
                      <option value="ROUMANIE"> ROUMANIE</option>
                      
                      <option value="ROYAUME-UNI"> ROYAUME-UNI</option>
                      
                      <option value="RWANDA"> RWANDA</option>
                      
                      <option value="SENEGAL"> SENEGAL</option>
                      
                      <option value="SIERRA LEONE"> SIERRA LEONE</option>
                      
                      <option value="SINGAPOUR"> SINGAPOUR</option>
                      
                      <option value="SOMALIE"> SOMALIE</option>
                      
                      <option value="SOUDAN"> SOUDAN</option>
                      
                      <option value="SRI LANKA"> SRI LANKA</option>
                      
                      <option value="SUEDE"> SUEDE</option>
                      
                      <option value="SUISSE"> SUISSE</option>
                      
                      <option value="SURINAME"> SURINAME</option>
                      
                      <option value="SYRIE"> SYRIE</option>
                      
                      <option value="TANZANIE"> TANZANIE</option>
                      
                      <option value="TCHAD"> TCHAD</option>
                      
                      <option value="TCHECOSLOVAQUIE"> TCHECOSLOVAQUIE</option>
                      
                      <option value="THAILANDE"> THAILANDE</option>
                      
                      <option value="TOGO"> TOGO</option>
                      
                      <option value="TUNISIE"> TUNISIE</option>
                      
                      <option value="TURKS-CAICOS"> TURKS-CAICOS</option>
                      
                      <option value="TURQUIE"> TURQUIE</option>
                      
                      <option value="RUSSIA"> RUSSIA</option>
                      
                      <option value="URUGUAY"> URUGUAY</option>
                      
                      <option value="VENEZUELA"> VENEZUELA</option>
                      
                      <option value="VIETNAM"> VIETNAM</option>
                      
                      <option value="YEMEN"> YEMEN</option>
                      
                      <option value="YOUGOSLAVIE"> YOUGOSLAVIE</option>
                      
                      <option value="ZAIRE"> ZAIRE</option>
                      
                      <option value="ZAMBIE"> ZAMBIE</option>
                      
                      <option value="ZIMBABWE"> ZIMBABWE</option>
                      
                    </select></br>
   
   <B>VILLE   :</B><input type="text"   name='ville' size="40" required               /></br>  
   
   <B>ADRESSE : </B></br> <textarea name='adresse'  cols="50" rows="4" required >   </textarea></br>
 
   <B>Nom de l'établissement  :</B><select name="ecole" required>
                      <option value=""></option>
                      
                      <option value="ACADEMIE INTERNATIONAL Med VI DE L AVIATION CIVILE"> ACADEMIE INTERNATIONAL Med VI DE L'AVIATION CIVILE</option>
                      
                      <option value="CENTRE DE PERFECTIONNEMENT TECHNIQUE KENITRA"> CENTRE DE PERFECTIONNEMENT TECHNIQUE KENITRA</option>
                      
                      <option value=" CENTRE DE QUALIFICATION DHAR LAMHALA"> CENTRE DE QUALIFICATION DHAR LAMHALA</option>
                      
                      <option value="DE QUALIFICATION ET INTEGRATION SOCIALE"> DE QUALIFICATION ET INTEGRATION SOCIALE</option>
                      
                      <option value="COLLEGE DE SHERBROOKE MAROC"> COLLEGE DE SHERBROOKE MAROC</option>
                      
                      <option value="ECOLE DES HAUTES ETUDES PROFESSIONNELLES"> ECOLE DES HAUTES ETUDES PROFESSIONNELLES</option>
                      
                      <option value="ECOLE POLYTECHNIQUE DE CASA"> ECOLE POLYTECHNIQUE DE CASA</option>
                      
                      <option value="ECOLE POLYTECHNIQUE DE SAFI"> ECOLE POLYTECHNIQUE DE SAFI</option>
                      
                      <option value=" ECOLE POLYTECHNIQUE  PRIVE D'AGADIR"> ECOLE POLYTECHNIQUE  PRIVE D'AGADIR</option>
                      
                      <option value="ECOLE SUPERIEUR D'AGRO ALIMENTAIRE"> ECOLE SUPERIEUR D'AGRO-ALIMENTAIRE</option>
                      
                      <option value="EHTP- ECOLE HASSANIA DES TRAVAUX PUBLICS"> EHTP- ECOLE HASSANIA DES TRAVAUX PUBLICS</option>
                      
                      <option value="EMI - ECOLE MOHAMMEDIA DES INGENIEURS"> EMI - ECOLE MOHAMMEDIA DES INGENIEURS</option>
                      
                      <option value="ECOLE MAROCAINE DES SCIENCES ET D INFORMATION "> ECOLE MAROCAINE DES SCIENCES ET D'INFORMATION  </option>
                      
                      <option value="ECOLE MAROCAINE DE COMMERCE ET DE GESTION AGADIR"> ECOLE MAROCAINE DE COMMERCE ET DE GESTION AGADIR</option>
                      
                      <option value="ECOLE MAROCAINE DE COMMERCE ET DE GESTION EL JADIDA"> ECOLE MAROCAINE DE COMMERCE ET DE GESTION EL JADIDA</option>
                      
                      <option value="ECOLE MAROCAINE DE COMMERCE ET DE GESTION FES"> ECOLE MAROCAINE DE COMMERCE ET DE GESTION FES</option>
                      
                      <option value="ECOLE MAROCAINE DE COMMERCE ET DE GESTION KENITRA"> ECOLE MAROCAINE DE COMMERCE ET DE GESTION KENITRA</option>
                      
                      <option value="ECOLE MAROCAINE DE COMMERCE ET DE GESTION MARRAKECH"> ECOLE MAROCAINE DE COMMERCE ET DE GESTION MARRAKECH</option>
                      
                      <option value="ECOLE MAROCAINE DE COMMERCE ET DE GESTION - OUJDA"> ECOLE MAROCAINE DE COMMERCE ET DE GESTION - OUJDA</option>
                      
                      <option value=" ENCG ECOLE MAROCAINE DE COMMERCE ET DE GESTION - SETTAT"> ENCG ECOLE MAROCAINE DE COMMERCE ET DE GESTION - SETTAT</option>
                      
                      <option value="ENCGECOLE MAROCAINE DE COMMERCE ET DE GESTION TANGER"> ENCGECOLE MAROCAINE DE COMMERCE ET DE GESTION TANGER</option>
                      
                      <option value=" ENIM - ECOLE NATIONALE DE L IDUSTRIE MINERALE"> ENIM - ECOLE NATIONALE DE L'IDUSTRIE MINERALE</option>
                      
                      <option value="ECOLE NATIONALE DES SCIENCES APPLIQUEES AGADIR"> ECOLE NATIONALE DES SCIENCES APPLIQUEES AGADIR</option>
                      
                      <option value="ECOLE NATIONALE DES SCIENCES APPLIQUEES - Marrakech"> ECOLE NATIONALE DES SCIENCES APPLIQUEES - Marrakech</option>
                      
                      <option value="ECOLE NATIONALE DES SCIENCES APPLIQUEES - SAFI"> ECOLE NATIONALE DES SCIENCES APPLIQUEES - SAFI</option>
                      
                      <option value="ECOLE NATIONALE DES SCIENCES APPLIQUEES FES"> ECOLE NATIONALE DES SCIENCES APPLIQUEES FES</option>
                      
                      <option value=" ECOLE NATIONALE DES SCIENCES APPLIQUEES Kenitra"> ECOLE NATIONALE DES SCIENCES APPLIQUEES Kenitra</option>
                      
                      <option value="ECOLE NATIONALE DES SCIENCES APPLIQUEES KHOURIBGA"> ECOLE NATIONALE DES SCIENCES APPLIQUEES KHOURIBGA</option>
                      
                      <option value="ECOLE NATIONALE DES SCIENCES APPLIQUEES OUJDA"> ECOLE NATIONALE DES SCIENCES APPLIQUEES OUJDA</option>
                      
                      <option value="ECOLE NATIONALE DES SCIENCES APPLIQUEES TANGER"> ECOLE NATIONALE DES SCIENCES APPLIQUEES TANGER</option>
                      
                      <option value=" ENSAM - ECOLE NATIONALE SUPERIEURE D ARTS ET METERS MEKNES"> ENSAM - ECOLE NATIONALE SUPERIEURE D'ARTS ET METERS MEKNES</option>
                      
                      <option value="ENSEM - ECOLE NATIONALE SUPERIEURE D ELECTRICITE ET DE MECANIQUE"> ENSEM - ECOLE NATIONALE SUPERIEURE D'ELECTRICITE ET DE MECANIQUE</option>
                      
                      <option value="ECOLE NORMALE SUPERIEURE DE L ENSEIGNEMENT TECHNIQUES  MOHAMMEDIA"> ECOLE NORMALE SUPERIEUR DE L'ENSEIGNEMENT TECHNIQUES  MOHAMMEDIA</option>
                      
                      <option value="ECOLE NORMALE SUPERIEURE DE L ENSEIGNEMENT TECHNIQUES Rabat"> ECOLE NORMALE SUPERIEUR DE L'ENSEIGNEMENT TECHNIQUES Rabat</option>
                      
                      <option value="ECOLE NATIONALE SUPERIEUR D INFORMATIQUE ET D ANALYSE DES SYSTEMES"> ECOLE NATIONAL SUPERIEUR D'INFORMATIQUE ET D'ANALYSE DES SYSTEMES</option>
                      
                      <option value="ECOLE SUPERIEURE DE TECHNOLOGIE  AGADIR"> ECOLE SUPERIEURE DE TECHNOLOGIE  AGADIR</option>
                      
                      <option value="ECOLE SUPERIEURE DE TECHNOLOGIE BERRECHID"> ECOLE SUPERIEURE DE TECHNOLOGIE BERRECHID</option>
                      
                      <option value="ECOLE SUPERIEURE DE TECHNOLOGIE CASA"> ECOLE SUPERIEURE DE TECHNOLOGIE CASA</option>
                      
                      <option value=" ECOLE SUPERIEURE DE TECHNOLOGIE ESSAOUIRA"> ECOLE SUPERIEURE DE TECHNOLOGIE ESSAOUIRA</option>
                      
                      <option value="ECOLE SUPERIEURE DE TECHNOLOGIE FES"> ECOLE SUPERIEURE DE TECHNOLOGIE FES</option>
                      
                      <option value="ECOLE SUPERIEURE DE TECHNOLOGIE MEKNES"> ECOLE SUPERIEURE DE TECHNOLOGIE MEKNES</option>
                      
                      <option value="ECOLE SUPERIEURE DE TECHNOLOGIE OUJDA"> ECOLE SUPERIEURE DE TECHNOLOGIE OUJDA</option>
                      
                      <option value="ECOLE SUPERIEURE DE TECHNOLOGIE SAFI"> ECOLE SUPERIEURE DE TECHNOLOGIE SAFI</option>
                      
                      <option value="FACULTE DE DROIT CASABLANCA"> FACULTE DE DROIT CASABLANCA</option>
                      
                      <option value=" FACULTE DE DROIT MOHAMMADIA"> FACULTE DE DROIT MOHAMMADIA</option>
                      
                      <option value=" FACULTE DES LETTRES ET DES SCIENCES HUMAINES MOHAMMEDIA "> FACULTE DES LETTRES ET DES SCIENCES HUMAINES MOHAMMEDIA </option>
                      
                      <option value="FACULTE DES SCIENCES AGADIR"> FACULTE DES SCIENCES AGADIR</option>
                      
                      <option value="FACULTE DES SCIENCES AIN CHOCK"> FACULTE DES SCIENCES AIN CHOCK</option>
                      
                      <option value="FACULTE DES SCIENCES BEN M'SIK CASABLANCA"> FACULTE DES SCIENCES BEN M'SIK CASABLANCA</option>
                      
                      <option value="FACULTE DES SCIENCES DE KENITRA"> FACULTE DES SCIENCES DE KENITRA</option>
                      
                      <option value="FACULTE DES SCIENCES DE RABAT"> FACULTE DES SCIENCES DE RABAT</option>
                      
                      <option value="FACULTE DES SCIENCES DE TETOUAN"> FACULTE DES SCIENCES DE TETOUAN </option>
                      
                      <option value=" FACULTE DES SCIENCES DHAR  EL MEHRAZ  FES"> FACULTE DES SCIENCES DHAR  EL MEHRAZ  FES</option>
                      
                      <option value="FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES  FES"> FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES  FES</option>
                      
                      <option value="FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES HASSAN II"> FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES HASSAN II</option>
                      
                      <option value="FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES OUJDA"> FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES OUJDA</option>
                      
                      <option value="FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES RABAT"> FACULTE DES SCIENCES ECONOMIQUES JURIDIQUES ET SOCIALES RABAT</option>
                      
                      <option value="FACULTE DES SCIENCES ECONOMIQUES DE FES"> FACULTE DES SCIENCES ECONOMIQUES DE FES</option>
                      
                      <option value="FACULTE DES SCIENCES ECONOMIQUES DE KENITRA"> FACULTE DES SCIENCES ECONOMIQUES DE KENITRA</option>
                      
                      <option value="FACULTE DES SCIENCES D'EL JADIDA"> FACULTE DES SCIENCES D'EL JADIDA</option>
                      
                      <option value=" FACULTE DES SCIENCES IBN TOFAIL DE KENITRA"> FACULTE DES SCIENCES IBN TOFAIL DE KENITRA</option>
                      
                      <option value="FACULTE DES SCIENCES  JURIDIQUES D'AGADIR"> FACULTE DES SCIENCES  JURIDIQUES D'AGADIR</option>
                      
                      <option value="FACULTE DES SCIENCES  JURIDIQUES DE SETTAT"> FACULTE DES SCIENCES TECHNIQUES DE SETTAT</option>
                      
                      <option value="FACULTE DES SCIENCES  JURIDIQUES De TANGER"> FACULTE DES SCIENCES TECHNIQUES DE TANGER</option>
                      
                      <option value="FACULTE HASSAN I DE SETTAT"> FACULTE HASSAN I DE SETTAT</option>
                      
                      <option value="FACULTE POLYDISCIPLINAIRE DE BENI MELLAL<"> FACULTE POLYDISCIPLINAIRE DE BENI MELLAL</option>
                      
                      <option value="FACULTE POLYDISCIPLINAIRE DE KHOURIBGA"> FACULTE POLYDISCIPLINAIRE DE KHOURIBGA</option>
                      
                      <option value="FACULTE POLYDISCIPLINAIRE DE TETOUAN"> FACULTE POLYDISCIPLINAIRE DE TETOUAN</option>
                      
                      <option value="FACULTE POLYDISCIPLINAIRE D'EL JADIDA"> FACULTE POLYDISCIPLINAIRE D'EL JADIDA</option>
                      
                      <option value="FACULTE DES SCIENCES ET TECHNIQUES  BENI MELLAL"> FACULTE DES SCIENCES ET TECHNIQUES  BENI MELLAL</option>
                      
                      <option value="FACULTE DES SCIENCES ET TECHNIQUES FES"> FACULTE DES SCIENCES ET TECHNIQUES FES</option>
                      
                      <option value="FACULTE DES SCIENCES ET TECHNIQUES MARRAKECH"> FACULTE DES SCIENCES ET TECHNIQUES MARRAKECH</option>
                      
                      <option value="FACULTE DES SCIENCES ET TECHNIQUES MOHAMMADIA"> FACULTE DES SCIENCES ET TECHNIQUES MOHAMMADIA</option>
                      
                      <option value=" INSTITUT DES HAUTES ETUDES DE MANAGEMENT - HEM"> INSTITUT DES HAUTES ETUDES DE MANAGEMENT - HEM</option>
                      
                      <option value="INSTITUT AGRONOMIQUE ET VITERINAIRE HASSAN II Rabat"> INSTITUT AGRONOMIQUE ET VITERINAIRE HASSAN II Rabat</option>
                      
                      <option value="INSTITUT DE GESTION APPLIQUEES"> INSTITUT DE GESTION APPLIQUEES</option>
                      
                      <option value="1206"> INPT - INSITUT NATIONAL DES POSTES ET DE TELECOMMUNICATION</option>
                      
                      <option value=" INPT - INSITUT NATIONAL DES POSTES ET DE TELECOMMUNICATION"> INSEA - INSTITUT NATIONAL DES STATISTIQUES ET ECONOMIE APPLIQUES</option>
                      
                      <option value="INSTITUT AGRONOMIQUE ET VETERINAIRE HASSAN II"> INSTITUT AGRONOMIQUE ET VETERINAIRE HASSAN II</option>
                      
                      <option value=" INSTITUT DE FORMATION TECHNIQUE DE MOHAMMADIA"> INSTITUT DE FORMATION TECHNIQUE DE MOHAMMADIA</option>
                      
                      <option value="INSTITUT POLYTECHNIQUE DE CASABLANCA"> INSTITUT POLYTECHNIQUE DE CASABLANCA</option>
                      
                      <option value="ISCAE - INSTITUT SUPERIEUR DE COMMERCE ET D ADMINISTRATION D ENREPRISE"> ISCAE - INSTITUT SUPERIEUR DE COMMERCE ET D'ADMINISTRATION D'ENREPRISE</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE  Al Adarissa Fès"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE  Al Adarissa Fès</option>
                      
                      <option value=" INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE - El Hank Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE - El Hank Casa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE - Fès"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE - Fès</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE  Mohammedia"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE  Mohammedia</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE - Sidi Mâarouf"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE - Sidi Mâarouf</option>
                      
                      <option value=" INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Agadir"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Agadir</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Ben M'Sik Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Ben M'Sik Casa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Ben Slimane"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Ben Slimane</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Beni Mellal"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Beni Mellal</option>
                      
                      <option value=" INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE BERKANE"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE BERKANE</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Bouarfa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Bouarfa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Bouznika"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Bouznika</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Casa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE El Jadida"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE El Jadida</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Hay Hassani Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Hay Hassani Casa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Jerada"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Jerada</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Kenitra"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Kenitra</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE khemisset"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE khemisset</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Khouribga"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Khouribga</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Lâayoune"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Lâayoune</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Lazaret Oujda"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Lazaret Oujda</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Mâamora Kenitra"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Mâamora Kenitra</option>
                      
                      <option value=" INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Marrakech"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Marrakech</option>
                      
                      <option value=" INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Meknes"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Meknes</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Mohammedia"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Mohammedia</option>
                      
                      <option value=" ISTA NTIC 2 Sidi Maarouf Casa"> ISTA NTIC 2 Sidi Maarouf Casa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Polo Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Polo Casa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Roches Noires Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Roches Noires Casa</option>
                      
                      <option value=" INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Route Immouzzer Fès"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Route Immouzzer Fès</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Safi"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Safi</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sefrou"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sefrou</option>
                      
                      <option value=" INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi Bernoussi - Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi Bernoussi - Casa</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi kacem"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi kacem</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi Mâafa Oujda"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi Mâafa Oujda</option>
                      
                      <option value="INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi Moumen Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Sidi Moumen Casa</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE - Hay Hassani Casa"> INSTITUT SUPERIEUR DE TECHNOLOGIE APPLIQUEE Taza</option>
                      
                      <option value="1248"> INSTITUT  DE TECHNOLOGIE APPLIQUEE - Hay Hassani Casa</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE  Jerada"> INSTITUT  DE TECHNOLOGIE APPLIQUEE  Jerada</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Al Hoceima"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Al Hoceima</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Azilal"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Azilal</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Bouarfa"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Bouarfa</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Hay Mohammadie Casa"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Hay Mohammadie Casa</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Inara Casa"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Inara Casa</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Kenitra"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Kenitra</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Lâayoune"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Lâayoune</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Marrakech"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Marrakech</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Moulay Rachid - Cas"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Moulay Rachid - Casa</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Oujda"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Oujda</option>
                      
                      <option value="INSTITUT  DE TECHNOLOGIE APPLIQUEE Roches Noires Casa"> INSTITUT  DE TECHNOLOGIE APPLIQUEE Roches Noires Casa</option>
                      
                      <option value="LYCEE AL KHAWARIZMY"> LYCEE AL KHAWARIZMY</option>
                      
                      <option value="LYCEE ALKHANSAA"> LYCEE ALKHANSAA</option>
                      
                      <option value="OFPPT"> OFPPT</option>
                      
                      <option value=" UNIVERSITE ABDELMALEK ESSAADI"> UNIVERSITE ABDELMALEK ESSAADI</option>
                      
                      <option value="UNIVERSITE AL AKHAWAYNE"> UNIVERSITE AL AKHAWAYNE</option>
                      
                      <option value="ENSMR-Ecole Nationale Supérieur des Mines de Rabat"> ENSMR-Ecole Nationale Supérieur des Mines de Rabat</option>
                      
                      <option value="">AUTRE </option>
                    </select></br>
  <B>Niveau:</B> <select name="niveau" required>
                      <option value=""> </option>
                      <option value="inf bac">Inferieur au bac </option>
                      <option value="bac">bac</option>
                      <option value="bac+1">bac+1 </option>
                      <option value="bac+2">bac+2 </option>
                      <option value="bac+3">bac+3 </option>
                      <option value="bac+4">bac+4 </option>
                      <option value="bac+5">bac+5 </option>
                    </select></br>
					
	<B>Domaine:</B><select name="domaineetudes" id="domaineetudes" >
                      <option value=""> </option>
                      
                      <option value="ACHAT ET STOCK">ACHAT ET STOCK 
                      </option>
                      
                      <option value="ADMINISTRATION ET LOGIQUE">ADMINISTRATION ET LOGISTIQUE 
                      </option>
                      
                      <option value="COMMERCIAL">COMMERCIAL 
                      </option>
                      
                      <option value="DISTRIBUTION">DISTRIBUTION 
                      </option>
                      
                      <option value="FINANCES">FINANCES 
                      </option>
                      
                      <option value="FORMATION">FORMATION 
                      </option>
                      
                      <option value="GENIE CIVIL">GENIE CIVIL 
                      </option>
                      
                      <option value="INFORMATIQUE">INFORMATIQUE 
                      </option>
                      
                      <option value="JURIDIQUE">JURIDIQUE 
                      </option>
                      
                      <option value="MEDICALE">MEDICALE 
                      </option>
                      
                      <option value="PLANIFICATION">PLANIFICATION 
                      </option>
                      
                      <option value="PRODUCTION">PRODUCTION 
                      </option>
                      
                      <option value="RESSOURCES HUMAINES">RESSOURCES HUMAINES 
                      </option>
                      
                      <option value="TRANSPORT">TRANSPORT 
                      </option>
                      
                      <option value="ENVIRONNEMENT">ENVIRONNEMENT 
                      </option>
                      
                      <option value="QUALITE">QUALITE 
                      </option>
                      
                      <option value="Autre" >AUTRE</option>
                    </select></br>	

					
  <B>Spécialité:</B> <select name="specialite" >
                      <option value=""> </option>
                      
                      <option value="Achat et Approvisionnement"> Achat et Approvisionnement</option>
                      
                      <option value="Magasin et Stocks"> Magasin et Stocks</option>
                      
                      <option value="Communication et Publication"> Communication et Publication</option>
                      
                      <option value="Conduite de Véhicules et Engins"> Conduite de Véhicules et Engins</option>
                      
                      <option value="Gestion Administrative"> Gestion Administrative</option>
                      
                      <option value="Secrétariat et Accueil"> Secrétariat et Accueil</option>
                      
                      <option value="Commercial"> Commercial</option>
                      
                      <option value="Comptages"> Comptages</option>
                      
                      <option value="Contrôle Commande Réseaux Distribution"> Contrôle Commande Réseaux Distribution</option>
                      
                      <option value=" Études et Travaux"> Études et Travaux</option>
                      
                      <option value=" Lignes  MTetBT"> Lignes  MTetBT</option>
                      
                      <option value="Postes MT/BT et HT/MT"> Postes MT/BT et HT/MT</option>
                      
                      <option value="Téléconduite Réseaux Distribution"> Téléconduite Réseaux Distribution</option>
                      
                      <option value="TST Lignes MT"> TST Lignes MT</option>
                      
                      <option value="Comptabilité"> Comptabilité</option>
                      
                      <option value="Formation"> Formation</option>
                      
                      <option value=" Bâtiment"> Bâtiment</option>
                      
                      <option value="Études et Contrôle des Travaux"> Études et Contrôle des Travaux</option>
                      
                      <option value="Exploitation et Support"> Exploitation et Support</option>
                      
                      <option value="Système d Information"> Système d'Information</option>
                      
                      <option value="Juridique"> Juridique</option>
                      
                      <option value=" Médico-Social"> Médico-Social</option>
                      
                      <option value="Paramédical"> Paramédical</option>
                      
                      <option value="Planification des Réseaux"> Planification des Réseaux</option>
                      
                      <option value="Chimie"> Chimie</option>
                      
                      <option value="Electromécanique"> Electromécanique</option>
                      
                      <option value=" Exploitation Production"> Exploitation Production</option>
                      
                      <option value="Isolation Thermique"> Isolation Thermique</option>
                      
                      <option value="Métallurgie"> Métallurgie</option>
                      
                      <option value=" Régulation et Automatisme"> Régulation et Automatisme</option>
                      
                      <option value="Gestion Ressources Humaines"> Gestion Ressources Humaines</option>
                      
                      <option value=" Conduite du Système Électrique"> Conduite du Système Électrique</option>
                      
                      <option value=" Contrôle Commande Réseaux Transport">  Contrôle Commande Réseaux TransportContrôle Commande Réseaux Transport</option>
                      
                      <option value=" Exploitation Réseaux Transport"> Exploitation Réseaux Transport</option>
                      
                      <option value="Lignes THT et HT"> Lignes THT et HT</option>
                      
                      <option value="Postes THT-HT"> Postes THT-HT</option>
                      
                      <option value="Télécommunication et Téléconduite"> Télécommunication et Téléconduite</option>
                      
                      <option value="TST THT et HT"> TST THT et HT</option>
                      
                      <option value="Environnement"> Environnement</option>
                      
                      <option value="Qualité"> Qualité</option>
                      
                      <option value="AUTRA">AUTRE </option>
                    </select></br>
   
         
  
    <B>Type de stage:</B><select name='stage' required  >
    <option value=""> </option>
   <option value="Ouvrier">Ouvrier</option>
   <option value="Technique">Technique</option>
   <option value="PFE">PFE</option>
  
   
   
   </select></br> 
   
</fieldset>

 <p>
 <input type="submit"  id='submit' name='submit' value="Valider" />
 <input type="reset" id='reset' value="Annuler" />
 </p>

</form>
</body>
</html>

<!-- script pour rendre le mot de passe visible -->
<!-- script pour rendre le mot de passe visible -->
<script>
function myFunction() {
    var x = document.getElementById("psw");
	var y = document.getElementById("ss");
	var z = document.getElementById("ff");
    if (x.type === "password") {
        x.type = "text";
		z.style.display = "none";
		y.style.display = "inline";
		
    } else {
        x.type = "password";
		
		y.style.display = "none";
		z.style.display = "inline";
    }
	
}

</script>

  
