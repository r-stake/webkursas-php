<?php
    require __DIR__. '/src/app.php';
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="./js/final-project.js" defer></script>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Gamtos Glėbyje</title>
</head>
<body>
    <div class="background">
        <div class="background-overlay"></div>
        <div class="container">
            <header class="site-header">
                <div class="container flex-container">
                    <div class="logo">
                        <a href="./index.php"><img src="./images/logo.png" alt="Gamtos glėbyje logotipas"></a>
                    </div>
                    <div class="flex-container">
                        <nav class="main-nav" id="Menu">
                            <ul class="flex-container">
                                <li><a href="#journey">Kelionės</a></li>
                                <li><a href="#about-us">Apie mus</a></li>
                                <li><a href="#testimonials">Atsiliepimai</a></li>
                                <li><a href="#footer">Kontaktai</a></li>
                            </ul>
                        </nav>
                        <button class="main-nav-button button" onclick="mainNavigation()">Menu</button>
                        <nav class="mobile-nav flex-container">
                            <ul class="flex-container" id="mMenu">
                                <li><a href="#journey">Kelionės</a></li>
                                <li><a href="#about-us">Apie mus</a></li>
                                <li><a href="#testimonials">Atsiliepimai</a></li>
                                <li><a href="#footer">Kontaktai</a></li>
                            </ul>
                            <a href="javascript:void(0);" class="icon" onclick="mobileNavigation()">
                                <i class="bi bi-list"></i>
                            </a>
                        </nav>
                    </div>
                </div>
            </header>
        </div>     
        <div class="hero">
            <div class="container">
                <h1>Gamtos Glėbyje</h1>
                <h2>Geriausios kokybiško ir aktyvaus poilsio vietos Lietuvoje</h2>
                <p>Jaučiatės pavargę, įsitempę, negalėte atplėšti akių nuo savo išmaniųjų įrenginių ir juose tūnančių socialinių tinklų ar darbinio pašto paskyros? Sveikiname - jums reikalingas poilsis. Mūsų kruopščiai atrinkti nuotykiai gamtoje leis pamiršti gyvenimo nuoskaudas ir sunkumus. Šioje svetainėje rasite įvairių pasiūlymų tiek ramesnį poilsį mėgstantiems, tiek užkietėjusiems gamtos entuziastams.</p>
            </div>
        </div>
        <div class="hero-social">
            <div class="container flex-container">
                <div class="scroll-line">
                    <div class="scroll" onclick="scrollToJourney()">
                        SCROLL
                    </div>
                    <div class="line" onclick="scrollToJourney()"></div>
                </div>    
                <div class="social">
                    <ul>
                        <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>
    <main>
        <section class="journey" id="journey">
            <div class="section-heading">  <!-- Journey Menu -->
                <div class="container">
                    <div>
                        <h2>Išsirinkite kelionę</h2> 
                    </div>
                    <div class="journey-menu flex-container">
                        <div class="journey-menu-item">
                            <button class="active" onclick="switchContent(0)">Meteorų lietus</button>
                        </div>
                        <div class="journey-menu-item">
                            <button onclick="switchContent(1)">Senoji giria</button>
                        </div>
                        <div class="journey-menu-item">
                            <button onclick="switchContent(2)">Pamirštoji dykuma</button>
                        </div>
                        <div class="journey-menu-item">
                            <button onclick="switchContent(3)">Rūščioji upė</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">  <!-- Journeys -->
                <div id="content1" class="content">  <!-- Journey 1 -->
                    <div id="stars">
                        <div class="container">
                            <div class="flex-container">
                                <div class="journey-image">
                                    <img src="./images/dots-corner.png" alt="dots">
                                    <img src="./images/vietove_1.jpg" alt="Žvaigždėtas dangus">
                                </div>
                                <div class="journey-description">
                                    <h2>Sugalvok norą</h2>
                                    <p>Mėgstate gamtą, bet nenorite ilgo žygio? Pažvelkite aukštyn - meteorų lietus teiks džiaugsmo ir nuotykių!</p>
                                    <p>Paslaptingas meteorų lietaus stebėjimo renginys tikriems gamtos mylėtojams, ieškantiems ramybės. Pamatysite apie 60-100 meteorų per valandą, po vieną meteorą kas minutę. Prisijunkite prie mūsų gaivioje miško aplinkoje su laužais, kepiniais, muzika ir džiugiomis dainomis. Nedeslk, prisijunk prie mūsų! </p>
                                    <button class="button" onclick="scrollToForm()">Noriu!</button>
                                </div>
                            </div>
                        </div>
                        <div class="social">
                            <ul class="flex-container">
                                <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="content2" class="content">  <!-- Journey 2 -->
                    <div id="forest">
                        <div class="container">
                            <div class="flex-container">
                                <div class="journey-image">
                                    <img src="./images/dots-corner.png" alt="dots">
                                    <img src="./images/vietove_2.jpg" alt="Labanoro giria">
                                </div>
                                <div class="journey-description">
                                    <h2>Pasiklysk girioje</h2>
                                    <p><strong>Didžiausia Lietuvoje senoji Labanoro giria - kryptis norintiems giliai nerti į gamtos pasaulį.</strong></p>
                                    <p>Per kelis Aukštaitijos rajonus besidriekiantys, rodos, nesibaigiantys miškai, medžių tankmėje besislepiantys ežerai ir juos jungiančios upės, augalijos ir gyvūnijos įvairovė - Labanoras yra labai turtingas. Jo didybę pabandykite aprėpti iš vieno aukščiausių Lietuvoje - net 36 metrus siekiančio - Mindūnų apžvalgos bokšto.</p>
                                    <button class="button" onclick="scrollToForm()">Noriu!</button>
                                </div>
                            </div>
                        </div>
                        <div class="social">
                            <ul class="flex-container">
                                <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="content3" class="content">  <!-- Journey 3 -->
                    <div id="dunes">
                        <div class="container">
                            <div class="flex-container">
                                <div class="journey-image">
                                    <img src="./images/dots-corner.png" alt="dots">
                                    <img src="./images/vietove_3.png" alt="Dykuma">
                                </div>
                                <div class="journey-description">
                                    <h2>Nugalėk dykumą</h2>
                                    <p><strong>Naglių gamtiniame rezervate pamatysite unikalų Kuršių nerijos gamtos grožį.</strong></p>
                                    <p>Tai vienas įspūdingiausių Kuršių nerijos pėsčiųjų takų, vedantis į mėnulio paviršiaus vaizdus primenantį kopų kraštovaizdį. Dėl stiprių vėjų šiose kopose susidaro įspūdingos daubos ir išgraužos, kai kur iš po smėlio išlenda senųjų dirvožemių fragmentai. Tako pabaigoje atsiveria nepaprasto grožio vaizdas į Kuršių marias.</p>
                                    <button class="button" onclick="scrollToForm()">Noriu!</button>                                    
                                </div>
                            </div>
                        </div>
                        <div class="social">
                            <ul class="flex-container">
                                <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="content4" class="content">  <!-- Journey 4 -->
                    <div id="river">
                        <div class="container">
                            <div class="flex-container">
                                <div class="journey-image">
                                    <img src="./images/dots-corner.png" alt="dots">
                                    <img src="./images/vietove_4.jpg" alt="Sušlapk kojas">
                                </div>
                                <div class="journey-description">
                                    <h2>Sušlapk kojas</h2>
                                    <p><strong>Dūkštos pažintinis takas kviečia išdrįsti ir išbandyti savo fizinę ištvermę ir pasinerti į įdomiausią Neries regioninio parko maršrutą.</strong></p>
                                    <p>Dūkštos pažintinis takas leidžia jums išvysti Dūkštos upelio slėnio šlaitus, sugriuvusios  užtvankos likučius, Šventąjį Daubų ąžuolą bei regyklą ant Ąžuolų kalno. Tai įdomus maršrutas, kuriame aplankysite du piliakalnius ir alkakalnį bei daug išmoksite perskaitę įdomius informacinius pažintinio tako stendus.</p>
                                    <button class="button" onclick="scrollToForm()">Noriu!</button>                                   
                                </div>
                            </div>
                        </div>
                        <div class="social">
                            <ul class="flex-container">
                                <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us" id="about-us">
            <div class="container flex-container">
                <div class="about-us-info">
                    <h2>Apie mus</h2>
                    <h3>Keliaukite su mumis ir atraskite paslaptingas vietoves visame krašte!</h3>
                    <p>Rūpinamės Jūsų gerove kruopščiai ir atsakingai atrinkdami tinkamiausius maršrutus.</p>
                    <p>Praturtinkite savo laisvalaikį kvapniais prisiminimais ir pailsėkite nuo kasdienybės rutinos.</p>
                    <h3>Linkime nepamirštamų įspūdžių</h3>
                    <button>Daugiau apie mus</button>
                </div>
                <div class="gallery flex-container">
                    <div class="gallery-item">
                        <img src="./images/about_us_1.png" alt="man">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Tobias Reaper, <span>CEO</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="./images/about_us_1.png" alt="woman">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Claire Redfield, <span>CTO</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="./images/about_us_1.png" alt="woman">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Sam Fisher, <span>COO</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="./images/about_us_1.png" alt="woman">
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Ada Wong, <span>CFO</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <section class="testimonials" id="testimonials">
            <div class="container">
                <div class="testimonials-header">
                    <h2>Žmonių atsiliepimai</h2>
                    <h3>Negalite apsispręsti? Pasiklausykite kitų</h3>
                </div>
                <div class="testimonials-gallery">
                    <div class="flex-container">
                        <div class="testimonials-item">
                            <div class="flex-container">
                                <i class="bi bi-quote"></i>
                                <div class="testimonials-feedback">
                                    <p>"Nuostabi ir įsimintina žvaigždžių stebėjimo patirtis.</p>
                                    <p>Niekada nepamiršiu tos magiškos nakties, kai stebėjau tūkstančius žvaigždžių Lietuvos danguje. Nepakartojama patirtis, kurią rekomenduoju visiems astronomijos entuziastams!</p>
                                    <div class="flex-container">
                                        <img src="./images/atsiliepimai_foto.png" alt="face">
                                        <div>
                                            <p>Karolina</p>
                                            <p>Vilnius</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="testimonials-item">
                            <div class="flex-container">
                                <i class="bi bi-quote"></i>
                                <div class="testimonials-feedback">
                                    <p>Nugrimzdžkite į Labanoro girios paslaptingą grožį: laukia nepakartojami nuotykiai.</p>
                                    <p>Labanoro giria - vieta, kur prarandu save ir atrandu grožį. Nuo apžvalgos bokšto atsiveria nepakartojamas gamtos vaizdas, kvapą gniaužiantis įspūdis.</p>
                                    <div class="flex-container">
                                        <img src="./images/atsiliepimai_foto.png" alt="face">
                                        <div>
                                            <p>Laura</p>
                                            <p>Vilnius</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="testimonials-item">
                            <div class="flex-container">
                                <i class="bi bi-quote"></i>
                                <div class="testimonials-feedback">
                                    <p>Atraskite Naglių gamtinio rezervato stebuklus</p>
                                    <p>Naglių gamtinio rezervato tyrinėjimas mane apstulbino ir sužavėjo, jaučiausi kaip kitame pasaulyje. Nuostabios kopos ir unikalus kraštovaizdis tiesiog visiškai atėmė iš manęs žadą. Labai rekomenduoju.</p>
                                    <div class="flex-container">
                                        <img src="./images/atsiliepimai_foto.png" alt="face">
                                        <div>
                                            <p>Paulius</p>
                                            <p>Kaunas</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="testimonials-item">
                            <div class="flex-container">
                                <i class="bi bi-quote"></i>
                                <div class="testimonials-feedback">
                                    <p>Įsiklausykite į gamtos šnabždesį: Dūkštos pažintinio tako žavesys!</p>
                                    <p>Dūkštos pažintinis takas mane apakino natūraliu grožiu ir tyliu ramumu. Prispraginome daug nuostabių nuotraukų. Rekomenduoju visiems fotografijos entuziastams. Ačiū už įkvėpimą!</p>
                                    <div class="flex-container">
                                        <img src="./images/atsiliepimai_foto.png" alt="face">
                                        <div>
                                            <p>Gabija</p>
                                            <p>Molėtai</p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-form" id="contanct-form">
            <div class="container">
                <div class="section-heading">
                    <h2>Registracija</h2>
                    <h3>Apsisprendėte? Tuomet nedelskite ir užsiregistruokite</h3>
                </div>
                <div class="section-content">
                    <form action="index.php" method="post" class="input-row" id="registration-form">
                        <div>
                            <input type="text" name="vardas" placeholder="Jūsų vardas" required>
                            <input type="text" name="pavarde" placeholder="Jūsų pavardė" required>
                        </div>
                        <div>
                            <input type="tel" name="telefonas" placeholder="Telefono numeris:" required>
                            <input type="email" name="email" placeholder="Jūsų el. pašto adresas" required>
                        </div>
                        <div>
                            <div class="flex-container">
                                <textarea name="message" cols="30" rows="10" placeholder="Jūsų žinutė mums..."></textarea>
                                <div class="select-button flex-container">
                                    <select name="journey" form="registration-form" required>
                                        <option value="" disabled selected hidden>Pasirink savo nuotykį</option>
                                        <option value="stars">Meteorų lietus</option>
                                        <option value="forest">Senoji giria</option>
                                        <option value="dunes">Pamirštoji dykuma</option>
                                        <option value="river">Rūščioji upė</option>
                                    </select>
                                    <button name="submit" type="submit">Registruotis</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer-header">
                <h2>Iki pasimatymo!</h2>
                <h3>Labai nekantraujame su jumis susipažinti.</h3>
            </div>
            <div class="footer-items flex-container" id="footer">
                <div class="about">
                    <ul>
                        <li><h3>Apie mus</h3></li>
                        <li class="divider">----------------------</li>
                        <li>Mūsų misija</li>
                        <li>Privatumo politika</li>
                        <li>Autorių teisės</li>
                    </ul>
                </div>
                <div class="faq">
                    <ul>
                        <li><h3>Duk</h3></li>
                        <li class="divider">----------------------</li>
                        <li>Taisyklės</li>
                        <li>Bilietai</li>
                        <li>Leidiniai</li>
                        <li>Karjera</li>
                    </ul>
                </div>
                <div class="events">
                    <ul>
                        <li><h3>Renginiai</h3></li>
                        <li class="divider">----------------------</li>
                        <li>Suskaičiuok žvaigždes</li>
                        <li>Pasiklysk miške</li>
                        <li>Nugalėk dykumą</li>
                        <li>Sušlapk kojas</li>
                    </ul>
                </div>
                <div class="contacts">
                    <ul>
                        <li><h3>Susisiekite</h3></li>
                        <li class="divider">----------------------</li>
                        <li>info@gamtosglebyje.lt</li>
                        <li>+37012233444</li>
                        <li>+37056677888</li>
                    </ul>
                </div>
                <div class="social-footer">
                    <ul>
                        <li><h3>Bendraukime</h3></li>
                        <li class="divider">----------------------</li>
                        <li>
                            <ul class="social flex-container">
                                <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="footer-copyright">
                <div><p>&copy; Gamtos Glėbyje 2023. Visos teisės saugomos.</p></div>
                <div class="logo"><a href="./index.php"><img src="./images/logo.png" alt="Gamtos glėbyje logotipas"></a></div>
            </div>
        </div>
    </footer>
</body>
</html>