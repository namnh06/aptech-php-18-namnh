<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  .text-danger {
    color: red;
  }
  </style>
</head>



<body>


  <?php

  $data = array(
    array("name" => "Mason Drake", "email" => "Nullam.vitae.diam@lorem.org", "phone" => "(01254) 375712", "dob" => "20/05/2020", "country" => "Guyana", "city" => "Beauport"),
    array("name" => "Chancellor Mcclure", "email" => "tellus@Donecconsectetuermauris.org", "phone" => "070 3535 2825", "dob" => "06/10/2018", "country" => "Philippines", "city" => "San Rafael"),
    array("name" => "Trevor Travis", "email" => "nec.ante.Maecenas@SednequeSed.net", "phone" => "(024) 0312 2731", "dob" => "07/06/2019", "country" => "Japan", "city" => "Macclesfield"),
    array("name" => "Jonah Benton", "email" => "mauris.rhoncus.id@nuncestmollis.edu", "phone" => "0845 46 46", "dob" => "16/04/2020", "country" => "Romania", "city" => "Casalbuono"),
    array("name" => "Denton Watkins", "email" => "Quisque.libero@Proin.net", "phone" => "(0141) 010 1417", "dob" => "21/04/2019", "country" => "Dominica", "city" => "Zierikzee"),
    array("name" => "Zeus Kirk", "email" => "et.risus@metus.co.uk", "phone" => "0800 625853", "dob" => "03/09/2019", "country" => "Guinea-Bissau", "city" => "Eugene"),
    array("name" => "Curran Robinson", "email" => "nec@Loremipsumdolor.net", "phone" => "(01851) 268409", "dob" => "25/12/2018", "country" => "Comoros", "city" => "Belcarra"),
    array("name" => "Judah Carrillo", "email" => "cursus.et.eros@nisisem.edu", "phone" => "076 2726 2025", "dob" => "25/03/2019", "country" => "Cuba", "city" => "Milmort"),
    array("name" => "Wesley Goodwin", "email" => "massa.lobortis@loremeumetus.ca", "phone" => "(01541) 59513", "dob" => "23/11/2018", "country" => "Saint Vincent and The Grenadines", "city" => "Saint Andr�"),
    array("name" => "Brody Bennett", "email" => "magnis@semper.com", "phone" => "0951 349 8213", "dob" => "14/05/2019", "country" => "Uruguay", "city" => "Diyarbakır"),
    array("name" => "Preston Andrews", "email" => "magnis.dis@sapiencursusin.net", "phone" => "0885 783 3786", "dob" => "01/07/2019", "country" => "Antarctica", "city" => "Corral"),
    array("name" => "Amos Shaffer", "email" => "cursus.purus.Nullam@Donecfelis.edu", "phone" => "0800 1111", "dob" => "05/05/2019", "country" => "Northern Mariana Islands", "city" => "Breton"),
    array("name" => "Garrison Alvarez", "email" => "enim@sollicitudinadipiscing.com", "phone" => "0359 081 1173", "dob" => "20/02/2020", "country" => "Christmas Island", "city" => "Pukekohe"),
    array("name" => "Reece Clemons", "email" => "eget.magna.Suspendisse@diam.co.uk", "phone" => "0800 1111", "dob" => "21/11/2018", "country" => "Guyana", "city" => "Kukatpalle"),
    array("name" => "Trevor Perkins", "email" => "placerat.Cras@Integer.com", "phone" => "(01934) 000225", "dob" => "28/02/2020", "country" => "Burkina Faso", "city" => "Wabamun"),
    array("name" => "Lance Crawford", "email" => "nunc@Aliquamultrices.edu", "phone" => "055 8482 7060", "dob" => "07/09/2019", "country" => "Iran", "city" => "Alphen aan den Rijn"),
    array("name" => "Xenos Craig", "email" => "Morbi@aarcu.ca", "phone" => "056 2682 8747", "dob" => "10/01/2019", "country" => "Serbia", "city" => "Shepparton"),
    array("name" => "Reuben Dotson", "email" => "aliquet.lobortis@ut.com", "phone" => "0800 771664", "dob" => "30/07/2018", "country" => "Saint Lucia", "city" => "Guben"),
    array("name" => "Joseph Robertson", "email" => "elit.pede.malesuada@nonjustoProin.ca", "phone" => "(029) 3467 8428", "dob" => "24/04/2019", "country" => "Norway", "city" => "Bonavista"),
    array("name" => "Paul Garner", "email" => "fermentum.risus@tempusmauris.co.uk", "phone" => "0800 732 0522", "dob" => "20/09/2019", "country" => "Gibraltar", "city" => "Sunshine Coast Regional District"),
    array("name" => "Travis Garza", "email" => "at@esttemporbibendum.org", "phone" => "(018969) 32888", "dob" => "06/11/2019", "country" => "Bahrain", "city" => "Boussu-lez-Walcourt"),
    array("name" => "Elmo Snyder", "email" => "vel.sapien@cursusdiamat.ca", "phone" => "(0114) 667 7770", "dob" => "21/11/2018", "country" => "American Samoa", "city" => "Braies/Prags"),
    array("name" => "James Carver", "email" => "neque.tellus.imperdiet@atauctorullamcorper.edu", "phone" => "0901 074 9701", "dob" => "12/09/2018", "country" => "Nepal", "city" => "Montgomery"),
    array("name" => "Drake Nielsen", "email" => "felis.Nulla@enim.org", "phone" => "056 1172 5219", "dob" => "12/05/2019", "country" => "Cambodia", "city" => "Craco"),
    array("name" => "Clinton Landry", "email" => "id.sapien@facilisis.org", "phone" => "070 1650 9661", "dob" => "23/03/2019", "country" => "United States Minor Outlying Islands", "city" => "Ham-sur-Sambre"),
    array("name" => "Hamish Bonner", "email" => "dui@eratvolutpat.net", "phone" => "0500 412307", "dob" => "22/06/2019", "country" => "Eritrea", "city" => "Borsbeek"),
    array("name" => "Guy Blake", "email" => "amet@risus.edu", "phone" => "(01313) 30564", "dob" => "01/02/2020", "country" => "Sint Maarten", "city" => "Bressoux"),
    array("name" => "Lars Martin", "email" => "elit.dictum.eu@magna.net", "phone" => "0800 906 1086", "dob" => "24/08/2018", "country" => "Mozambique", "city" => "Cagliari"),
    array("name" => "Finn Chase", "email" => "Donec.porttitor.tellus@Donec.ca", "phone" => "056 3768 7217", "dob" => "03/11/2019", "country" => "Samoa", "city" => "Malahide"),
    array("name" => "Flynn Mcgowan", "email" => "interdum.feugiat.Sed@feugiatmetus.edu", "phone" => "07159 945766", "dob" => "21/09/2018", "country" => "Albania", "city" => "Saint-L�onard"),
    array("name" => "Honorato Abbott", "email" => "vitae.nibh.Donec@tortornibhsit.edu", "phone" => "0880 215 0999", "dob" => "30/04/2020", "country" => "Guam", "city" => "Whitby"),
    array("name" => "Wing Snyder", "email" => "parturient.montes@pede.org", "phone" => "076 3310 9379", "dob" => "27/05/2019", "country" => "French Guiana", "city" => "Atlanta"),
    array("name" => "Porter Larsen", "email" => "semper.tellus.id@vitaeorci.ca", "phone" => "055 6286 2125", "dob" => "30/12/2019", "country" => "Bulgaria", "city" => "Parkland County"),
    array("name" => "Aidan Holder", "email" => "sed.pede.Cum@massa.edu", "phone" => "(0161) 626 9499", "dob" => "07/08/2018", "country" => "Samoa", "city" => "Concepción"),
    array("name" => "Uriel Cross", "email" => "pede@aliquet.org", "phone" => "(016977) 7448", "dob" => "28/12/2018", "country" => "Bermuda", "city" => "Ponti"),
    array("name" => "Levi Hamilton", "email" => "vulputate.dui@Nullamvitae.ca", "phone" => "07624 220378", "dob" => "21/09/2018", "country" => "Indonesia", "city" => "Saint-Lô"),
    array("name" => "Devin Navarro", "email" => "diam.vel@dolor.org", "phone" => "(018850) 27642", "dob" => "02/07/2019", "country" => "United Kingdom (Great Britain)", "city" => "Lamont"),
    array("name" => "Luke Parks", "email" => "ac@arcu.co.uk", "phone" => "076 4278 5607", "dob" => "15/12/2018", "country" => "Gibraltar", "city" => "Wetaskiwin"),
    array("name" => "Plato Harrington", "email" => "pharetra.nibh.Aliquam@Sed.co.uk", "phone" => "055 6922 3536", "dob" => "19/11/2019", "country" => "Burundi", "city" => "Worcester"),
    array("name" => "Magee Fleming", "email" => "lorem.luctus.ut@penatibus.ca", "phone" => "(0161) 755 4256", "dob" => "14/11/2018", "country" => "Mayotte", "city" => "Hohen Neuendorf"),
    array("name" => "Sean Rollins", "email" => "aliquet.vel.vulputate@dictumplacerataugue.net", "phone" => "(016977) 2167", "dob" => "22/08/2019", "country" => "Spain", "city" => "Bordeaux"),
    array("name" => "Oscar Curry", "email" => "nulla@ultriciesadipiscing.co.uk", "phone" => "0500 355269", "dob" => "11/10/2019", "country" => "Haiti", "city" => "Oamaru"),
    array("name" => "Dolan William", "email" => "vel@semut.co.uk", "phone" => "(016977) 8665", "dob" => "05/01/2020", "country" => "Mauritania", "city" => "Nadrin"),
    array("name" => "Elliott Stanton", "email" => "id@arcu.ca", "phone" => "0835 197 2375", "dob" => "10/03/2019", "country" => "Germany", "city" => "Mandya"),
    array("name" => "Basil Leblanc", "email" => "libero.et@lectusconvallis.ca", "phone" => "076 4196 1616", "dob" => "23/07/2019", "country" => "Russian Federation", "city" => "Redwater"),
    array("name" => "Lance Hartman", "email" => "rhoncus.Donec.est@natoque.edu", "phone" => "(016385) 32359", "dob" => "16/01/2019", "country" => "France", "city" => "Lobbes"),
    array("name" => "Cameron Wilder", "email" => "ornare.placerat.orci@seddui.org", "phone" => "(0191) 837 2905", "dob" => "29/10/2018", "country" => "Rwanda", "city" => "Orsogna"),
    array("name" => "Moses Hess", "email" => "ac@tinciduntnibhPhasellus.net", "phone" => "(01580) 694093", "dob" => "05/06/2019", "country" => "Barbados", "city" => "Requínoa"),
    array("name" => "Ahmed Jarvis", "email" => "a.facilisis.non@consectetuermaurisid.edu", "phone" => "(0161) 824 8111", "dob" => "06/09/2019", "country" => "Isle of Man", "city" => "Meldert"),
    array("name" => "Brian Irwin", "email" => "sit.amet@in.co.uk", "phone" => "070 6601 2491", "dob" => "23/10/2019", "country" => "Sweden", "city" => "Viggiano"),
    array("name" => "Aladdin Doyle", "email" => "at@purusDuiselementum.co.uk", "phone" => "(01320) 462208", "dob" => "28/05/2019", "country" => "Saint Martin", "city" => "Massimino"),
    array("name" => "Dale Sexton", "email" => "ac.feugiat.non@Maurisblanditenim.org", "phone" => "07148 638996", "dob" => "25/05/2019", "country" => "Ghana", "city" => "Fort Wayne"),
    array("name" => "Octavius Price", "email" => "eget.massa@pedeetrisus.org", "phone" => "(016977) 9835", "dob" => "20/10/2019", "country" => "Chile", "city" => "Fremantle"),
    array("name" => "Colt Vasquez", "email" => "fames@dis.net", "phone" => "0854 946 7525", "dob" => "18/09/2019", "country" => "Montenegro", "city" => "Borsbeek"),
    array("name" => "Colt Sykes", "email" => "nec.cursus.a@turpisnonenim.net", "phone" => "070 8783 4947", "dob" => "25/05/2020", "country" => "Angola", "city" => "Armstrong"),
    array("name" => "Benedict Johnson", "email" => "velit.Quisque@Nunc.ca", "phone" => "0809 045 8457", "dob" => "09/02/2020", "country" => "Uruguay", "city" => "Villa Faraldi"),
    array("name" => "Theodore Mendez", "email" => "et@nectempus.edu", "phone" => "07305 982883", "dob" => "30/12/2018", "country" => "Virgin Islands, United States", "city" => "Hoyerswerda"),
    array("name" => "Ivan Porter", "email" => "Duis@Vestibulum.com", "phone" => "(01699) 55211", "dob" => "05/08/2019", "country" => "Puerto Rico", "city" => "Fort Saskatchewan"),
    array("name" => "Alan Sawyer", "email" => "eu.arcu@sapiencursusin.ca", "phone" => "076 9595 7306", "dob" => "19/06/2018", "country" => "Tokelau", "city" => "Mildura"),
    array("name" => "Uriel Black", "email" => "eget.odio@tinciduntnuncac.edu", "phone" => "0319 947 5368", "dob" => "17/11/2018", "country" => "Togo", "city" => "Vieux-Genappe"),
    array("name" => "Quentin Oneill", "email" => "in.dolor.Fusce@vehiculaPellentesque.edu", "phone" => "(0115) 922 3781", "dob" => "18/09/2019", "country" => "Timor-Leste", "city" => "Guben"),
    array("name" => "Elvis Solomon", "email" => "eget.venenatis@et.com", "phone" => "07624 567649", "dob" => "15/11/2018", "country" => "Central African Republic", "city" => "Castelló"),
    array("name" => "Michael Houston", "email" => "Aliquam@adipiscingelit.org", "phone" => "0800 1111", "dob" => "29/11/2019", "country" => "Gibraltar", "city" => "Sant'Eusanio Forconese"),
    array("name" => "Callum Moss", "email" => "eget.ipsum@risusMorbimetus.edu", "phone" => "(016977) 9160", "dob" => "17/08/2018", "country" => "United States", "city" => "Valleyview"),
    array("name" => "Gil Manning", "email" => "lacinia@fermentumarcuVestibulum.org", "phone" => "(0115) 515 4536", "dob" => "10/03/2019", "country" => "China", "city" => "Frascati"),
    array("name" => "Hakeem Schultz", "email" => "Nunc.pulvinar.arcu@lectussit.ca", "phone" => "0500 062211", "dob" => "09/02/2019", "country" => "Argentina", "city" => "Ceppaloni"),
    array("name" => "Ezra Mcdaniel", "email" => "nunc@nullaanteiaculis.ca", "phone" => "(0141) 358 1732", "dob" => "23/08/2019", "country" => "Korea, North", "city" => "Montignies-sur-Sambre"),
    array("name" => "David Moran", "email" => "non.hendrerit.id@tortorNunc.edu", "phone" => "076 8960 0216", "dob" => "13/06/2018", "country" => "Nauru", "city" => "Portland"),
    array("name" => "Colorado Alvarado", "email" => "Curabitur.vel@atiaculis.com", "phone" => "0845 46 43", "dob" => "23/12/2019", "country" => "Faroe Islands", "city" => "Montpellier"),
    array("name" => "Lamar Foreman", "email" => "purus@lobortisquispede.org", "phone" => "(01236) 57681", "dob" => "04/01/2020", "country" => "Brunei", "city" => "Courcelles"),
    array("name" => "Keefe Hill", "email" => "ultrices@ridiculus.ca", "phone" => "(016977) 8132", "dob" => "15/04/2019", "country" => "Vanuatu", "city" => "Sherborne"),
    array("name" => "Hashim Schultz", "email" => "eu@ac.edu", "phone" => "0845 46 44", "dob" => "04/04/2019", "country" => "Botswana", "city" => "Rodengo/Rodeneck"),
    array("name" => "Michael Figueroa", "email" => "metus.vitae.velit@facilisismagna.ca", "phone" => "(0117) 070 5745", "dob" => "07/06/2020", "country" => "Congo, the Democratic Republic of the", "city" => "Firenze"),
    array("name" => "Xavier Woods", "email" => "Nullam.velit@velvenenatisvel.net", "phone" => "0968 021 5456", "dob" => "24/04/2020", "country" => "Pakistan", "city" => "Monceau-sur-Sambre"),
    array("name" => "Jin Cannon", "email" => "magna.Ut@Nunc.com", "phone" => "(022) 1503 1272", "dob" => "06/04/2019", "country" => "Cyprus", "city" => "Tamworth"),
    array("name" => "Ezekiel Barker", "email" => "metus@egetlacus.org", "phone" => "0800 832609", "dob" => "14/04/2020", "country" => "Åland Islands", "city" => "Carterton"),
    array("name" => "Kasimir Pacheco", "email" => "faucibus.lectus.a@eu.com", "phone" => "(0112) 223 1588", "dob" => "01/03/2020", "country" => "Timor-Leste", "city" => "Landeck"),
    array("name" => "Chase Dotson", "email" => "dictum.augue.malesuada@sollicitudin.com", "phone" => "0390 209 0660", "dob" => "16/06/2019", "country" => "Mauritius", "city" => "Bevagna"),
    array("name" => "Baxter Trujillo", "email" => "nunc@faucibus.org", "phone" => "(01804) 24735", "dob" => "30/08/2019", "country" => "Comoros", "city" => "Épernay"),
    array("name" => "Xavier Buckner", "email" => "conubia.nostra@consequatauctor.ca", "phone" => "0823 177 1758", "dob" => "27/11/2018", "country" => "Hungary", "city" => "College"),
    array("name" => "Ulysses Meyers", "email" => "eleifend.non.dapibus@vel.org", "phone" => "07624 063216", "dob" => "26/07/2019", "country" => "Philippines", "city" => "Warwick"),
    array("name" => "Cole Mcguire", "email" => "semper.et.lacinia@sagittisNullamvitae.ca", "phone" => "0800 233022", "dob" => "21/08/2019", "country" => "Jordan", "city" => "Milano"),
    array("name" => "Silas Pollard", "email" => "magna.Sed@acorciUt.ca", "phone" => "0800 328430", "dob" => "14/10/2018", "country" => "Switzerland", "city" => "Burhaniye"),
    array("name" => "Luke Perry", "email" => "eu.eros.Nam@quamCurabitur.ca", "phone" => "0500 356826", "dob" => "04/12/2018", "country" => "Germany", "city" => "Bitterfeld-Wolfen"),
    array("name" => "Hayden Coleman", "email" => "Cum.sociis.natoque@consequat.edu", "phone" => "(01571) 558244", "dob" => "21/07/2019", "country" => "Guinea", "city" => "New Westminster"),
    array("name" => "Wylie Ayala", "email" => "sem.Pellentesque@Donecelementumlorem.org", "phone" => "0895 598 6989", "dob" => "16/05/2019", "country" => "Laos", "city" => "Forges"),
    array("name" => "Kadeem Lambert", "email" => "vel@metusAeneansed.ca", "phone" => "055 6211 6747", "dob" => "22/02/2020", "country" => "Syria", "city" => "Bursa"),
    array("name" => "Armando Oneil", "email" => "Donec@felisadipiscingfringilla.org", "phone" => "0800 689538", "dob" => "11/09/2019", "country" => "Belgium", "city" => "Loksbergen"),
    array("name" => "Silas Wagner", "email" => "nibh.Phasellus@consectetuer.net", "phone" => "07624 746208", "dob" => "09/05/2020", "country" => "Ireland", "city" => "Spaniard's Bay"),
    array("name" => "Lucas Nicholson", "email" => "justo.nec.ante@neque.net", "phone" => "(016977) 4484", "dob" => "11/04/2020", "country" => "Chile", "city" => "Dion-Valmont"),
    array("name" => "Caesar Marks", "email" => "conubia@risusodioauctor.com", "phone" => "0800 1111", "dob" => "23/09/2018", "country" => "Tokelau", "city" => "Papasidero"),
    array("name" => "Blaze Gibson", "email" => "Nam.tempor@pedePraesenteu.edu", "phone" => "0843 167 7199", "dob" => "01/01/2019", "country" => "Svalbard and Jan Mayen Islands", "city" => "Cranbrook"),
    array("name" => "Aidan Ray", "email" => "enim.Etiam.gravida@Integerin.com", "phone" => "0994 649 3419", "dob" => "28/12/2019", "country" => "Kuwait", "city" => "Kettering"),
    array("name" => "Jack Gray", "email" => "magnis.dis@vitaealiquam.net", "phone" => "0334 610 0925", "dob" => "25/03/2020", "country" => "Estonia", "city" => "Lions Bay"),
    array("name" => "Price Rivera", "email" => "vitae.sodales@semper.edu", "phone" => "(016977) 6532", "dob" => "24/11/2018", "country" => "Moldova", "city" => "Curon Venosta/Graun im Vinschgau"),
    array("name" => "Dane Schultz", "email" => "ante.Maecenas@conubianostra.co.uk", "phone" => "(0171) 587 0071", "dob" => "02/08/2019", "country" => "Wallis and Futuna", "city" => "Gouda"),
    array("name" => "Coby Salazar", "email" => "commodo.at@nasceturridiculus.net", "phone" => "055 3319 0941", "dob" => "11/02/2020", "country" => "Mongolia", "city" => "Dover"),
    array("name" => "Amal Ramsey", "email" => "nec.mauris.blandit@sedestNunc.co.uk", "phone" => "056 0238 7385", "dob" => "10/12/2019", "country" => "San Marino", "city" => "Sargodha"),
    array("name" => "Alec Hines", "email" => "sed.sem@sitamet.edu", "phone" => "0500 815592", "dob" => "20/12/2018", "country" => "Turkmenistan", "city" => "Tavistock"),
    array("name" => "Armando Ramirez", "email" => "urna@nuncQuisqueornare.org", "phone" => "(01653) 85046", "dob" => "24/04/2020", "country" => "Libya", "city" => "Altamura")
  );



  for ($i = 0; $i < count($data); $i++) {
    // echo  $data[$i]; impossible because of array can not conversion to string
    var_dump($data[$i]);
    echo " <hr>";
    echo "<h1 class='text-danger'>Hello World</h1>";
  }
  ?>
</body>

</html>