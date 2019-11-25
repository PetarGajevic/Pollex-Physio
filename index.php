<!DOCTYPE html>
<html lang="en" id="htmls">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pollex</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.css">

    <script src="./js/Jquery.js"></script>
    <script src="./js/main.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="./assets/hnet.com-image.ico" />
    <meta property="og:image" content="http://pollex.qqriq.me/assets/LogoPolex.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://pollex.qqriq.me/" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        
        <div class="top-page">
        <nav class="nav navbar-fixed-top" id="myHeader">
            <div class="nav-menu flex-row ">
                <div class="nav-brand">
                <a href="#" class="text-gray"></a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                        <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="myItem">
                <ul class="nav-items">
                    <li class="nav-link" id="biographyNav"><a href="#">Biografija</a></li>
                    <li class="nav-link" id="therapyNav"><a href="#">Terapije</a></li>
                    <li class="nav-link" id="packetsNav"><a href="#">Paketi</a></li>
                    <li class="nav-link" id="contactNav"><a href="#">Kontakt</a></li>
                </ul>
            </div>
            </div>
          </nav>
        <div class="title">
                <p>Dragi posjetioci, dobrodosli u</p>
                <h1>POLLEX PHYSIO</h1>
        </div>
    
        
    </div>
    <section class="bio-sec">
    <div class="biography">
        <div class="bio-title">
          <div id="sub-title">
            <h1>Biografija</h1>
        </div>
        </div>
        <div id="line">
        <hr>
</div>
        <div>
        <div class="bio-flex">
        
        <div class="bio-content">
            <p>Postdiplomske specijalističke studije iz neurološke fizioterapije završio
                2016.godine u Igalu (Herceg Novi), na Medicinskom fakultetu (odsjek primijenjena
                fizioterapija) na temu: ,,Fizioterapija kod paralize nervus facijalisa’’.Diplomirao na
                Fakultetu primijenjene fizioterapije u Igalu 2015.godine na temi: ,,Fizioterapija
                skolioza kod odraslih’’. U period u od 2014 do 2016.godine obavljao mandatnu
                funkciju povjerenika studenata fizioterapije pri Studentskom Parlamentu na
                Univerzitetu Crne GoreSrednju medicinsku školu završio 2012.godine u Podgorici
                (Crna Gora), smjer: laboratorijski tehničar.
                </p>
                   <br>
                   <p>Od 2016. Do 2018. radio u OFK TITOGRAD iz Podgorice kao fizioterepeut
                    seniorskog tima, kao I nižih selekcija. Osvajač zlatne medalje u finalu Kupa
                    2018.godine. Učestvovao u UEFA kvalifikacijama za Ligu Evrope
                    2017/2018.godine.
                    Od 2018 do 2019. radio u FK LOVĆEN sa Cetinja kao fizioterapeut seniorskog tima.
                    Osvajač srebrne medalje u finalu Kupa 2019.godine.
                    Od 2019.godine angažovan u mladoj rukometnoj reprezentaciji Crne Gore na
                    poziciji fizioterapeuta, kao I Fudbalskog kluba FK RUDAR iz Pljevalja, u sklopu Prve Telekom lige Crne Gore. </p>
                   
                           <div class="more">
                        <p id="moreIcon"></p>
                        <p id="moreText">Pročitaj</p>
                    </div>   
                </div>
                <div class="bio-image">
                    <div id="img"></div>   
                    <!-- <img src="./assets/IMG_0716.jpg"> -->
                        <br>
                        <p id="spec">Specijalista fizioterapije</p><p id="name">Aleksandar Brajković</p>
                    </div>    
                   
        </div>
       <!-- Modal -->
       <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content" id="bio-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Biografija</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              <!-- <span class="close">&times;</span> -->
              <p>BIOGRAFIJA
                    Postdiplomske specijalističke studije iz neurološke fizioterapije završio
                    2016.godine u Igalu (Herceg Novi), na Medicinskom fakultetu (odsjek primijenjena
                    fizioterapija) na temu: ,,Fizioterapija kod paralize nervus facijalisa’’.Diplomirao na
                    Fakultetu primijenjene fizioterapije u Igalu 2015.godine na temi: ,,Fizioterapija
                    skolioza kod odraslih’’. U period u od 2014 do 2016.godine obavljao mandatnu
                    funkciju povjerenika studenata fizioterapije pri Studentskom Parlamentu na
                    Univerzitetu Crne GoreSrednju medicinsku školu završio 2012.godine u Podgorici
                    (Crna Gora), smjer: laboratorijski tehničar.
                    Od 2016. Do 2018. radio u OFK TITOGRAD iz Podgorice kao fizioterepeut
                    seniorskog tima, kao I nižih selekcija. Osvajač zlatne medalje u finalu Kupa
                    2018.godine. Učestvovao u UEFA kvalifikacijama za Ligu Evrope
                    2017/2018.godine.
                    Od 2018 do 2019. radio u FK LOVĆEN sa Cetinja kao fizioterapeut seniorskog tima.
                    Osvajač srebrne medalje u finalu Kupa 2019.godine.
                    Od 2019.godine angažovan u mladoj rukometnoj reprezentaciji Crne Gore na
                    poziciji fizioterapeuta, kao I Fudbalskog kluba FK RUDAR iz Pljevalja, u sklopu Prve
                    Telekom lige Crne Gore.
                    Dobitnik priznanja Udruženja ljekara sportske medicine Crne Gore za doprinos I
                    razvoj sportske medicine CG, u Kolašinu 2016.godine.
                    2019.godine razvio fizioterpijski brend POLLEX PHYSIO, sa željom da svoju
                    polivalentnost prenese informativno I edukativno na mlade ljude u Crnoj Gori,
                    kako bi kvalitetan spektar fizioterapijskih terapijskih procedura učinio lakše
                    dostupnim njenim korisnicima u zemlji.
                    Redovan je I licenciran član Komore fizioterapeuta Crne Gore, posjeduje
                    sertifikate prve klase koju su međunarodno priznati kao što su:
                    - Proprioceptivna neuromišićna facilitacija (PNF 1&2)
                    - OMT London Basic Spinal manipulation
                    - OMT London Advanced Spinal manipulations
                    - OMT London Medicine acupunkture
                    - YUMEIHO KOTSUBAN
                    - Ergon IASTM technique
                    - EME Polyter Evo (Italian manufature for medical and physiotherapy
                    devices)
                    Oblasti u struci u kojima postiže najbolje rezultate sa dijagnozama odnose se
                    primarno na neurološku rehabilitaciju, a sekundarno na fizioterapiju u sportu.
                    </p>
            </div>
          
          </div>
    </div>
</section>

    <section class="therapy-sec">
        <div class="pollex-therapy">
            <div class="card-wraper">
            <div class="myCard">
                <h2>Kineziterapija</h2>
                <br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    <br><br>
                    <button type="button" class="button raise" id="btn1">Detaljnije</button>
            </div>
             <!-- Modal1 -->
       <div id="myModal1" class="modal">
          
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close1">&times;</span>
              <h1>Kineziterapija</h1>
              
              <!--Accordion wrapper-->

            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

            
                <!-- Accordion card -->
                <div class="card">
            
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo2">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                    aria-expanded="false" aria-controls="collapseTwo2">
                    <h5 class="mb-0">
                        SPORTSKA FIZIOTERAPIJA <i class="fas fa-plus"></i>
                    </h5>
                    </a>
                </div>
            
                <!-- Card body -->
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                    <div class="card-body">
                        <p> Rehabilitacija povreda mišića (kontuzije,istegnuća,rupture)</p>
                        <p>Rehabilitacija povreda ligamenata (istegnuća,rupture)</p>
                            <p>Rehabilitacija povreda tetiva (upale,istegnuća,rupture)</p>
                                <p>Preoperativna priprema I postoperativna rehabilitacija sportskih povreda</p>
                                    <p>Rehabilitacija usled instabiliteta zglobova,poremećaja balansa I koordinacije</p>
                    </div>
                </div>
            
                </div>
                <!-- Accordion card -->
            
                <!-- Accordion card -->
                <div class="card">
                 
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree3">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                    aria-expanded="false" aria-controls="collapseThree3">
                    <h5 class="mb-0">
                        NEUROLOŠKA FIZIOTERAPIJA <i class="fas fa-plus"></i>
                    </h5>
                    </a>
                </div>
            
                <!-- Card body -->
                <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                    <div class="card-body">
                        <p> Rehabilitacija Moždanog udara (Ishemijski I hemoragijski)</p>
                        <p>Rehabilitacija Multipleskleroze I Parkinsonove bolesti</p>
                        <p> Rehabilitacija Kvadripareze,Kvadriplegije,Parapareze I Paraplegije</p>
                        <p> Rehabilitacija povreda Plexus brachialis-a (ulnaris,redialis,medianus)</p>
                        <p>Rehabilitacija povreda Plexus lumbosacralis-a ( peroneus, tibialis)</p>
                        <p>Rehabilitacija Discus herniae (cervikalna lokalizacija, lumbalna lokalizacija</p>
                        <p>Rehabilitacija mišićnih distrofija (Duchennova, Becherova)</p>
                    </div>
                </div>
            
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">
            
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingFour4">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4"
                            aria-expanded="false" aria-controls="collapseThree3">
                            <h5 class="mb-0">
                                ORTOPEDSKA FIZIOTERAPIJA <i class="fas fa-plus"></i>
                            </h5>
                        </a>
                        </div>
                    
                        <!-- Card body -->
                        <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4" data-parent="#accordionEx">
                        <div class="card-body">
                            <p>Postoperativna rehabilitacija preloma I naprsnuća kostiju</p>
                            <p>Postopertivna rehabilitacija Endoproteza kuka, koljena,ramena I lakta</p>
                            <p>Postoperativna rehabilitacija nakon amputacije ekstremiteta</p>
                            <p>Postoperativna rehabilitacija nakon diskus hernije (cervikalna I lumbalna)</p>
                        </div>
                        </div>
                    
                    </div>
                    <!-- Accordion card -->
                    
                    <!-- Accordion card -->
                <div class="card">
            
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingFive5">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5"
                            aria-expanded="false" aria-controls="collapseFive5">
                            <h5 class="mb-0">
                                MUSKULOSKELETNA FIZIOTERAPIJA <i class="fas fa-plus"></i>
                            </h5>
                        </a>
                        </div>
                    
                        <!-- Card body -->
                        <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordionEx">
                        <div class="card-body">
                            <p> Cervikalnog (vratnog) bolnog sindroma</p>
                            <p> Rehabilitacija Lumbalnog (donja ledja) nespecifičnog bolnog sindroma</p>
                            <p>Rehabilitacija deformiteta kičmenog stuba (lordoza,kifoza,skolioza)</p>
                            <p> Rehabilitacija reumatoloških bolesti (zapaljenske I degenerativne):</p>
                            <p> - Reumatoidni artritis (RA)</p>
                            <p> - Ankilozirajući spondylitis (Morbus Behterew)</p>
                            <p> - Fibromijalgija</p>
                            <p> - Koksartroza I Gonartroza</p>
                            <p> - Epycondilitis (teniski I golferski lakat)</p>
                            <p> Rehabilitacija bolnog ramena (Periarthritis humeroscapularis)</p>
                            <p> Rehabilitacija Osteoporoze</p>
                            <p> Rehabilitacija KRBS (kompleksni regionalni bolni sindrom)</p>
                            <p> Specijalni program vježbi:</p>
                            <p> - Škola leđa (Institut Igalo)</p>
                            <p> - Williamsove I McKenzijeve vježbe za lumbalnu kičmu</p>
                        </div>
                        </div>
                    
                    </div>
                    <!-- Accordion card -->
                    
            
            </div>
            <!-- Accordion wrapper -->
            </div>
          
          </div>
            <div class="myCard">
                <h2>Elektroterapija</h2>
                <br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    <br><br>
                    <button type="button" class="button raise" id="btn2">Detaljnije</button>
            </div>
    <!-- Modal -->

       <div id="myModal2" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close2">&times;</span>

              <h1>Elektroterapija</h1>
                              <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

   
   
   
 
  
    <!-- Accordion card -->
    <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingSix6">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix6"
          aria-expanded="false" aria-controls="collapseSix6">
          <h5 class="mb-0">
            POLYTER EVO UREĐAJ  <i class="fas fa-plus"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6" data-parent="#accordionEx">
        <div class="card-body">
                <p> TECARE terapija</p>
                <p> HIL Laser visokog inteziteta</p>
                <p> Terapijski UZ (utrazvuk)</p>
        </div>
      </div>
  
    </div>
    <!-- Accordion card -->
  
    <!-- Accordion card -->
    <div class="card">
  
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingSeven7">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven7"
          aria-expanded="false" aria-controls="collapseSeven7">
          <h5 class="mb-0">
            ELECTRODESIGN MEDICAL COMBI UREĐAJ<i class="fas fa-plus"></i>
          </h5>
        </a>
      </div>
  
      <!-- Card body -->
      <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7" data-parent="#accordionEx">
        <div class="card-body">
                <p> TENS (transkutana elektromišićna nervna stimulacija)</p>
                <p> GALVANSKA STRUJA</p>
                <p> ELEKTROSTIMULACIJA</p>
        </div>
      </div>
  
    </div>
    <!-- Accordion card -->

     <!-- Accordion card -->
     <div class="card">
  
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingEight8">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseEight8"
                aria-expanded="false" aria-controls="collapseEight8">
                <h5 class="mb-0">
                    ELECTRODESIGN MEDICAL MAGNETHOTHERAPY UREĐAJ<i class="fas fa-plus"></i>
                </h5>
              </a>
            </div>
        
            <!-- Card body -->
            <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8" data-parent="#accordionEx">
              <div class="card-body">
                    <p> MAGNETNA TERAPIJA (niskofrekfentno magnetno polje)</p>
              </div>
            </div>
        
          </div>
          <!-- Accordion card -->
        
           <!-- Accordion card -->
    <div class="card">
  
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingNine9">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseNine9"
                aria-expanded="false" aria-controls="collapseNine9">
                <h5 class="mb-0">
                    THERAGUN G3 PRO UREĐAJ  <i class="fas fa-plus"></i>
                </h5>
              </a>
            </div>
        
            <!-- Card body -->
            <div id="collapseNine9" class="collapse" role="tabpanel" aria-labelledby="headingNine9" data-parent="#accordionEx">
              <div class="card-body">
                    <p> Perkusiona terapija masažnim pištoljem (2400 udara/min)</p>
              </div>
            </div>
        
          </div>
          <!-- Accordion card -->
        
  
  </div>

           
            </div>
          
          </div>
            <div class="myCard">
                <h2>Manuelna terapija</h2>
                <br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    <br><br>
                    <button type="button" class="button raise" id="btn3">Detaljnije</button>
            </div>
                       <!-- Modal -->
       <div id="myModal3" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close3">&times;</span>
              <h1>Manuelnaterapija</h1>
                                        <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

   
   
   
 
  
        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="headingTen10">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTen10"
              aria-expanded="false" aria-controls="collapseTen10">
              <h5 class="mb-0">
                    MANUELNA MASAŽA:  <i class="fas fa-plus"></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10" data-parent="#accordionEx">
            <div class="card-body">
                    <p>Terapeutska Švedska masaža</p>
                    <p> Sportska masaža</p>
                    <p>Limfna drenaža</p>
            </div>
          </div>
      
        </div>
        <!-- Accordion card -->
      
        <!-- Accordion card -->
        <div class="card">
      
          <!-- Card header -->
          <div class="card-header" role="tab" id="headingEleven11">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseEleven11"
              aria-expanded="false" aria-controls="collapseEleven11">
              <h5 class="mb-0">
                    AKUPRESURA<i class="fas fa-plus"></i>
              </h5>
            </a>
          </div>
      
          <!-- Card body -->
          <div id="collapseEleven11" class="collapse" role="tabpanel" aria-labelledby="headingEleven11" data-parent="#accordionEx">
            <div class="card-body">
                    <p> YUMEIHO KOSTUBAN TERAPIJA</p>
                    
            </div>
          </div>
      
        </div>
        <!-- Accordion card -->
    
         <!-- Accordion card -->
         <div class="card">
      
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwelve12">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwelve12"
                    aria-expanded="false" aria-controls="collapseTwelve12">
                    <h5 class="mb-0">
                            AKUPUNKTURA<i class="fas fa-plus"></i>
                    </h5>
                  </a>
                </div>
            
                <!-- Card body -->
                <div id="collapseTwelve12" class="collapse" role="tabpanel" aria-labelledby="headingTwelve12" data-parent="#accordionEx">
                  <div class="card-body">
                        <p> DRY NEEDLING ( terapija iglama)</p>
                  </div>
                </div>
            
              </div>
              <!-- Accordion card -->
            
               <!-- Accordion card -->
        <div class="card">
      
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThirteen13">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThirteen13"
                    aria-expanded="false" aria-controls="collapseThirteen13">
                    <h5 class="mb-0">
                            MANIPULACIJA ZGLOBOVA <i class="fas fa-plus"></i>
                    </h5>
                  </a>
                </div>
            
                <!-- Card body -->
                <div id="collapseThirteen13" class="collapse" role="tabpanel" aria-labelledby="headingThirteen13" data-parent="#accordionEx">
                  <div class="card-body">
                        <p> Mobilizacijom asistirana kiropraktika kičme I perifernih zglobova</p>
                  </div>
                </div>
            
              </div>
              <!-- Accordion card -->

              <div class="card">
      
                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingFourteen14">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFourteen14"
                        aria-expanded="false" aria-controls="collapseFourteen14">
                        <h5 class="mb-0">
                                MIOFASCIJANO OPUŠTANJE <i class="fas fa-plus"></i>
                        </h5>
                      </a>
                    </div>
                
                    <!-- Card body -->
                    <div id="collapseFourteen14" class="collapse" role="tabpanel" aria-labelledby="headingFourteen14" data-parent="#accordionEx">
                      <div class="card-body">
                            <p>Mobilizacija vezivnog tkiva I fascije mišića ERGON tehnikom
                                    </p>
                                    <p> Mobilizacija vezivnog tkiva I fascija mišića pasivnim pokretima</p>
                      </div>
                    </div>
                
                  </div>
                  <!-- Accordion card -->
            </div>
            </div>
          </div>
            <div class="myCard">
                <h2>Patronazna terapija</h2>
                <br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    <br><br>
                    <button type="button" class="button raise" id="btn4">Detaljnije</button>
            </div>
                          <!-- Modal -->
       <div id="myModal4" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close4">&times;</span>
              <h1>Patronazna terapija</h1>
              <p> MOGUĆNOST DOLASKA NA KUĆNU ADRESU</p>
               <p>  MOGUĆNOST PRIMJENE FIZIKALNIH INTERVENCIJA SLABO POKRETNIM I
                    NEPOKRETNIM PACIJENTIMA</p>
                 <p>MOGUĆNOST PRIMJENE FIZIKALNIH INTERVENCIJA U AKUTNIM STANJIMA BOLESTI
                    I POVREDA</p>
                <p>MOGUĆNOST PRIMJENE FIZIKALNIH INTERVENCIJA PREOPERATIVNO I
                    POSTOPERATIVNO 
                    </p>
            </div>
          
          </div>
        </div>
        </div>
    </section>
    <section>
        <div class="certificate">
             <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper" id="sw">
      <div class="swiper-slide"><img src="./assets/Sertifikat1.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img src="./assets/Sertifikat2.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img src="./assets/Sertifikat3.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img src="./assets/Sertifikat4.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img src="./assets/Sertifikat5.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img src="./assets/Sertifikat6.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img id="img-last" src="./assets/Sertifikat7.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img id="img-last" src="./assets/Sertifikat8.png" onContextMenu="return false;"></div>
      <div class="swiper-slide"><img id="img-last" src="./assets/Sertifikat9.png" onContextMenu="return false;"></div>
    </div>
   
  </div>
        </div>
    </section>

    <section class="sec-packets">
      <div class="pollex-packets">
        <div class="title-packets"><h1>POLLEX PHYSIO PAKETI</h1></div>
        <div class="packet-wraper">


        <div class="myPacket" >
          <div class="img-packet"></div>
          <h2>Family Box</h2>
          <p>4 tretmana terapeutske masaže od 30 min</p>
          <p>4 tretmana spinalne manipulacije kičmenog stuba</p>
          <p>4 tretmana akupunkture iglama</p>
          <div class="packets-list">
            <div>
              <img  src="./assets/check_.svg" alt="">
                <p> Otklanja bolove u ledjima</p>
            </div>
            <div>
                <img  src="./assets/check_.svg" alt="">
              <p> Smanjuje stres</p>
            </div>
            <div>
                <img  src="./assets/check_.svg" alt="">
             <p> Pojačava cirkulaciju u organizmu</p>
             </div>
          </div>
        </div>

        <div class="myPacket">
            <div class="img-packet1"></div>
            <h2>Sport Recovery Box</h2>
            <p>1 tretmana sportske masaže od 30 min</p>
            <p>1 tretman dijatermije Tcare terapije</p>
            <p>1 tretman akupunkture iglama</p>
            <p>1 tretman dry cupping(vacuum therapy)</p>
            <div class="packets-list1">
                <div>
                    <img  src="./assets/check_.svg" alt="">
                <p> Brz oporavak mišića </p>
                </div>
                <div>
                    <img  src="./assets/check_.svg" alt="">
                <p> Spremnost mišića na visoke napore</p>
                </div>
                <div>
                    <img  src="./assets/check_.svg" alt="">
                <p> Veći napredak mišića</p>
                </div>
            </div>
          </div>

          <div class="myPacket">
              <div class="img-packet2"></div>
              <h2>Relax Business Box</h2>
              <p>2 tretmana terapeutske masaže od 30 min</p>
               <p>1 tretman YUMEIHO akupresure</p>
               <p>1 tretman akupunkture iglama</p>
              <div class="packets-list">
                  <div>
                      <img  src="./assets/check_.svg" alt="">
                  <p> Imate više snage</p>
                  </div>
                  <div>
                      <img  src="./assets/check_.svg" alt="">
                  <p> pušta mišiće </p>
                  </div>
                  <div>
                      <img  src="./assets/check_.svg" alt="">
                  <p> Osjećate se odmornije</p>
                  </div>
              </div>
            </div>

        
        </div>

         <div  style="text-align: center;" id="phone-div">

             <button type="button"id="btn5"  onclick="showPhone()">Zakaži</button> 
             <div id="phone" class="animated slideInDown">Pozovi +382 67 270 793</div>
           
        </div> 

        
      </div>
    </section>

    <section class="contact">
      <div class="bottom-footer">
        <div class="company-footer">
          <h2>Pollex Physio</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>
        <div class="links-footer">
          
         <!-- Kontakt forma -->
         <div class="myForm">
          <h2>Kontakt</h2>
          <form id="cont">
            <input type="text" placeholder="Ime i Prezime" name="name1" id="name1">
            <span class="error"></span>
            <input type="email" placeholder="Email" name="email" id="email1"  >
            <span class="error"></span>
            <textarea name=""  cols="22" rows="4" placeholder="Poruka" id="message1" name="message" ></textarea>
            <span id="error1"></span>
            <button type="submit" name="submit" id="submit"> Posalji</button>
          </form>
        </div>


          <!-- X  Kontakt forma  X  -->
        </div>
        <div class="contact-footer">
            <div class="">
                <h2 class=" mb-4 font-weight-bold" >Info</h2>
                <p>
                  <i class="fas fa-home mr-3"></i> Vinogradska, Podgorica</p>
                <p>
                  <i class="fas fa-envelope mr-3"></i> brajkovic93@gmail.com</p>
                <p>
                  <i class="fas fa-phone mr-3"></i> +382 67 270 793
                </p>
            
              </div>
        </div>
      </div>
     
      <div class="copy-right">

 
          <div>
            <p>© 2019 QQRIQ&trade;</p>
          </div>
          <div id="network">
              <ul class="list-unstyled list-inline">
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/Pollex-physio-by-Aleksandar-Brajkovi%C4%87-108739153865065/" target="_blank">
                      <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1"  href="https://www.instagram.com/pollexphysio/?igshid=rreu5zj1z67e" target="_blank">
                      <i class="fab fa-instagram fa-2x"></i>
                    </a>
                  </li>
                  
                  <li class="list-inline-item">
                    <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.linkedin.com/in/aleksandar-brajković-9a8691118/?..." target="_blank">
                      <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                  </li>
                </ul>
          </div>
     
        
      </div>
    </section>
        
    </main>

    <script>
    function showPhone(){
      if(document.getElementById("phone").style.display == "block"){
        document.getElementById("phone").style.display = "none"
      }else{
        document.getElementById("phone").style.display = "block";
      }
      
      }


      $(document).ready(function(){
        $('#submit').click(function(){
          event.preventDefault();
          $name = $('#name1').val();
          $email = $('#email1').val();
          $message = $('#message1').val();
          $.ajax({
            dataType: "JSON",
            url: "sendmail.php",
            type: "POST",
            data: {name : $name, email: $email, message: $message},
            beforeSend: function(xhr){
              $('#submit').html("Slanje...");
            },
            success: function(response){
              if(response){
               if(response['signal'] == 'ok'){
                $('#error1').html('<div class="alert alert-success">'+ response['msg'] + '</div>');
                
               }else{
                $('#error1').html('<div class="alert alert-success">'+ response['msg'] + '</div>');
               }
              }else{
                $('#error1').html('<div class="alert alert-success"> There is error pls try again later</div>');
               }
              
            },
            error: function(){
              $('#error1').html('<div class="alert alert-success"> There is error pls try again later</div>');
            },
            complete: function(){
              $('#submit').html("Posalji");
            }
          });
        });
      });

      </script>
    <!-- col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 -->
</body>
</html>