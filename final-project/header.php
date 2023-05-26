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
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Gamtos Glėbyje</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <header class="site-header">
                <div class="container flex-container">
                    <div class="logo">
                        <a href="./index.html"><img src="./images/logo.png" alt="#"></a>
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
                        <nav class="mobile-nav flex-container">
                            <ul class="flex-container" id="mMenu">
                                <li><a href="#journey">Kelionės</a></li>
                                <li><a href="#about-us">Apie mus</a></li>
                                <li><a href="#testimonials">Atsiliepimai</a></li>
                                <li><a href="#footer">Kontaktai</a></li>
                            </ul>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="bi bi-list"></i>
                            </a>
                        </nav>
                        <button class="main-nav-button button" onclick="toggleMainNav()">Menu</button>
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
        <div class="social-header">
            <div class="container flex-container">
                <div class="scroll">
                    SCROLL
                </div>
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>
    <script src="./js/final-project.js"></script>
</body>