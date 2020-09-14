@extends('layouts.app')

@section('content')
<div class="container">
    
  <section id="fonctionnement">
            
    <h2>Fonctionnement</h2>
    <div class="conteneur">
        <div class="photo">
            <img src="../images/Darkone.jpg" alt="the_ordinateur1">
            <div class="overlay">
                <div class="text">
                    <h3>Chriffrement par décalage</h3>
                    <p>Pour le réaliser, il faut un texte à crypter ainsi qu'un décalage, un nombre entier, positif ou négatif.<br>Ce cryptage consiste à prendre la position dans l'alphabet de chaque lettre et d'y ajouter la valeur du décalage. On obtient alors un nombre qui correspond au rang dans l'alphabet de la lettre de substitution. Il va de soit que si le nombre est supérieur à 26, on lui retire 26. Même raisonnement avec les décalages négatifs. <br> Ainsi, tous les "b" avec un décalage de -2 deviendront des "z".<br> On remarque de cette façon que la clef de décryptage est l'opposé de la clef de cryptage.</p>
                    <a href="cryptdeca.html" class="crypter" target="_blank">Commencer à crypter !</a>
                </div>
            </div>
        </div>
        
        <div class="photo">
            <img src="../images/numbers.jpg" alt="nombres">
            <div class="overlay littleoverlay">
                <div class="text">
                    <h3>Autres cryptages</h3>
                    <p>D'autres méthodes sont disponibles dans Cryptea-Lab mais sont difficiles à expliquer clairement ici.<br> C'est pour cette raison que si vous voulez savoir comment fonctionnent ces méthodes, je vous invite à cliquer ci-après qui vont vous rediriger vers des pages expliquant clairement ces chiffrements : <br>- <a href="https://fr.wikipedia.org/wiki/Chiffre_affine#Chiffrement" target="_blank">Chiffrement affine</a> <br> - <a href="https://fr.wikipedia.org/wiki/Chiffre_de_Hill#Principe" target="_blank">L'extension du chiffrement affine, le nombre de Hill</a>.</p>
                     <a href="cryptaffine.html" class="crypter" target="_blank">Commencer à crypter !</a>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>
        
    </div>
        
    <div class="conteneur">
        <div class="photo">
            <img src="../images/chriffrementclef.jpg" alt="chiffres_clef">
            <div class="overlay littleoverlay">
                <div class="text">
                    <h3>Chriffrement par clef</h3>
                    <p id="smallfontpresentattion">Afin de réaliser ce cryptage, il faut un texte à crypter et une clef qui peut être composée de lettre, de chiffre ou d'espace. Ce cryptage se réalise en remplaçant les lettres par les nombres correspondants à leurs positions dans l'alphabet, les espaces étants considérés comme des 0, puis en superposant la clef avec le texte. Cette superposition doit se faire par une adaptation de la clef. C'est-à-dire qu'il faut réécrire la clef à la suite tant que le tout est inférieur à la longueur du texte. Sinon, il faut enlever le dernier caractère du complexe qui forme la clef tant que le complexe est plus grand que la longueur du texte. Pour finir, il suffit d'ajouter les nombres et les remplacer par les lettres correspondantes en suivant la règle citée dans le chiffrement par décalage.</p>
                    <a href="cryptclef.html" class="crypter" target="_blank">Commencer à crypter !</a>
                </div>
            </div>
        </div>
        
        <div class="photo">
            <img src="../images/Brownone.jpg" alt="the_ordinateur2">
            <div class="overlay">
                <div class="text">
                    <h3>Chiffrement RSA</h3>
                    <p id="middlefontpresentattion">Ce cryptage nécessite 2 clefs. L'une connue de tous, la clef publique, et une autre connue du destinataire seulement, la clef privée. <br> Pour comprendre son fonctionnement, je vous propose l'analogie du cadenas et de la clef. Avec le cadena (clef publique) on peut crypter un message, mais pas le décrypter. Seulement la clef du cadenas (clef privée) peut le faire. <br> C'est aujourd'hui le cryptage de données le plus utilisé dans le monde car très compliqué à casser. Cette méthode repose sur la factorisation de nombres premiers très grands, d'où la difficulté à la craquer. Cependant, de nos jours, les ordinateurs quantiques font leur apparition, des ordinateurs dont la principale tâche est la factorisation de nombres entiers... Est-ce bientôt la fin du réputé presque incassable cryptage RSA ? <br> Ce chiffrement suit un processus mathématique complexe qu'il vous est possible de consulter en cliquant sur le bouton ci-dessous.</p>
                    <a href="crypthill.html" class="crypter" target="_blank">Commencer à crypter !</a>
                </div>
            </div>
        </div>
    
        <div class="clear"></div>
        
    </div>
    
    <div class="clear"></div>

  </section>

  

  <section id="securite">
    
    <h2>Sécurité</h2>
    
        <div class="module" data-aos="fade-left">
            <div class="module_bulle white">
                <p>
                    You're a genius !  And you know how I guess that ? Because you're on this website :3
                </p>
            </div>
            <div class="module_bulle">
                <svg viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#005844"/>
                  <path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff" stroke-dasharray="50,250.2"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80"/>
                  <text x="50" y="50" text-anchor="middle" dy="7" font-size="20">20%</text>
                </svg>
                <h3>Cryptage par décalage</h3>
            </div>
            <div class="module_bulle justify">
                <p>
                    The Mortal Instruments is a series of six young adult fantasy novels written by Cassandra Clare, the last of which was published on May 27, 2014. The Mortal Instruments is chronologically the third series of a proposed five in The Shadowhunter Chronicles but it was the first one published. It follows Clary Fray (who interacts with a group of Nephilim known as Shadowhunters) while also discovering her own heritage. The Shadowhunters protect the world of mundane people, who are also called mundanes or "mundies", from dark forces beyond their world.
                </p>
            </div>
            <div class="clear"></div>
        </div>
    
        <div class="module" data-aos="fade-right">
            <div class="module_bulle justify">
                <p>
                    The Mortal Instruments is a series of six young adult fantasy novels written by Cassandra Clare, the last of which was published on May 27, 2014. The Mortal Instruments is chronologically the third series of a proposed five in The Shadowhunter Chronicles but it was the first one published. It follows Clary Fray (who interacts with a group of Nephilim known as Shadowhunters) while also discovering her own heritage. The Shadowhunters protect the world of mundane people, who are also called mundanes or "mundies", from dark forces beyond their world.
                </p>
            </div>
            <div class="module_bulle">
                <svg viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#005844"/>
                  <path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"
                        stroke-dasharray="80,250.2"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80"/>
                  <text x="50" y="50" text-anchor="middle" dy="7" font-size="20">30%</text>
                </svg>
                <h3>Cryptage affine</h3>
            </div>
            <div class="module_bulle white">
                <p>
                    You're a genius !  And you know how I guess that ? Because you're on this website :3
                </p>
            </div>
            <div class="clear"></div>
        </div>
        
        
        <div class="module" data-aos="fade-left">
            <div class="module_bulle white">
                <p>
                    You're a genius !  And you know how I guess that ? Because you're on this website :3
                </p>
            </div>
            <div class="module_bulle">
                <svg viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#005844"/>
                  <path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"
                        stroke-dasharray="160,190"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80"/>
                  <text x="50" y="50" text-anchor="middle" dy="7" font-size="20">65%</text>
                </svg>
                <h3>Cryptage avec clef</h3>
            </div>
            <div class="module_bulle justify">
                <p>
                    The Mortal Instruments is a series of six young adult fantasy novels written by Cassandra Clare, the last of which was published on May 27, 2014. The Mortal Instruments is chronologically the third series of a proposed five in The Shadowhunter Chronicles but it was the first one published. It follows Clary Fray (who interacts with a group of Nephilim known as Shadowhunters) while also discovering her own heritage. The Shadowhunters protect the world of mundane people, who are also called mundanes or "mundies", from dark forces beyond their world.
                </p>
            </div>
            <div class="clear"></div>
        </div>
            
        <div class="module" data-aos="fade-right">
            <div class="module_bulle justify">
                <p>
                    The Mortal Instruments is a series of six young adult fantasy novels written by Cassandra Clare, the last of which was published on May 27, 2014. The Mortal Instruments is chronologically the third series of a proposed five in The Shadowhunter Chronicles but it was the first one published. It follows Clary Fray (who interacts with a group of Nephilim known as Shadowhunters) while also discovering her own heritage. The Shadowhunters protect the world of mundane people, who are also called mundanes or "mundies", from dark forces beyond their world.
                </p>
            </div>
            <div class="module_bulle">
                <svg viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#005844"/>
                  <path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"
                        stroke-dasharray="170,190"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80"/>
                  <text x="50" y="50" text-anchor="middle" dy="7" font-size="20">70%</text>
                </svg>
                <h3>Cryptage de Hill</h3>
            </div>
            <div class="module_bulle white">
                <p>
                    You're a genius !  And you know how I guess that ? Because you're on this website :3
                </p>
            </div>
            <div class="clear"></div>
        </div>
            
        <div class="module" data-aos="fade-left">
            <div class="module_bulle white">
                <p>
                    You're a genius !  And you know how I guess that ? Because you're on this website :3
                </p>
            </div>
            <div class="module_bulle">
                <svg viewbox="0 0 100 100">
                  <circle cx="50" cy="50" r="45" fill="#005844"/>
                  <path fill="none" stroke-linecap="round" stroke-width="5" stroke="#fff"
                        stroke-dasharray="235,50"
                        d="M50 10
                           a 40 40 0 0 1 0 80
                           a 40 40 0 0 1 0 -80"/>
                  <text x="50" y="50" text-anchor="middle" dy="7" font-size="20">95%</text>
                </svg>
                <h3>Cryptage RSA</h3>
            </div>
            <div class="module_bulle justify">
                <p>
                    The Mortal Instruments is a series of six young adult fantasy novels written by Cassandra Clare, the last of which was published on May 27, 2014. The Mortal Instruments is chronologically the third series of a proposed five in The Shadowhunter Chronicles but it was the first one published. It follows Clary Fray (who interacts with a group of Nephilim known as Shadowhunters) while also discovering her own heritage. The Shadowhunters protect the world of mundane people, who are also called mundanes or "mundies", from dark forces beyond their world.
                </p>
            </div>
            <div class="clear"></div>
        </div>

    
    <div class="clear"></div>
    
    <script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>
    <script>
        AOS.init({
          duration: 1200,
        })
    </script>
    
  </section>

</div>
@endsection
