<?php 
include '../Includes/Header.php';
?>
<link rel="stylesheet" href="../Index.css">
<link rel="stylesheet" href="../ProjectPage.css">
<body style="background-color: #5CDB95;">


<header>

<h1 id="ProjectNameTitle">Maze Maniac</h1>
</header>
<body>

<div class="flex-container-column">
    <div class="flex-container-row">
        <div id="projectsection">
            
            <div>
                <div id="ProjectPageText">
                    
                    <div>
                        <h1 id="HeaderProject">Wat wilde ik doen?</h1>
                        <p>
                        Voor de opdracht Gamification wilde ik een spel gaan maken in de game engine Unity. Aangezien ik hier al ervaring mee had leek het me leuk om een spel te maken met elementen die ik nog nooit eerder gemaakt heb. Ik wilde al een lange tijd erg graag leren om een AI te maken dus dit was dan ook een erg belangrijk punt wat ik terug wou laten komen. Ik ben begonnen met brainstormen en kwam uiteindelijk op het idee om een spel te maken waarin je uit een doolhof moet ontsnappen. Om de AI-elementen erin te krijgen besloot ik enemy’s toe te voegen die je achtervolgen door het doolhof. Deze gooien stenen naar je en wanneer ze je tien keer raken ben je af en start je opnieuw. Ook kun je kaarsen plaatsen waarmee je kan zien waar in het doolhof je al bent geweest om het spel niet al te moeilijk te maken.
                    </p>
                        </br>
                    </div>

                    <div>
                        <h1 id="HeaderProject">Hoe heb ik het gedaan?</h1>
                        <p>
                        Ik ben begonnen met een nieuw Unity project waarin ik de code had geschreven voor first person movement waardoor je dus om je heen kan kijken en kan bewegen. Dit heb ik gedaan via een tutorial van een Youtuber die ik al jaren kijk genaamd <a href="https://www.youtube.com/watch?v=_QajrabyTJc">Brackeys</a>. Toen dit af was ben ik aan de map begonnen die ik erg simpel wou houden aangezien ik me meer wou focussen op de code. Ik heb een paar textures uit de asset store van Unity gehaald die ik vervolgens gebruikt heb voor de vloer en muren. Toen dit allemaal klaar stond ben ik begonnen aan de code van de AI, dit heb ik gedaan via <a href="https://www.youtube.com/watch?v=UjkSFoLxesw">deze</a> Youtube video. Ook heb ik een addon gebruikt die ervoor gezorgd heeft dat de pathfinding van de AI gemakkelijk verliep en minder werk kosten. Hierna ben ik begonnen aan de code voor het systeem wat zorgt dat de AI stenen gooit en dat de speler levens verliest wanneer die geraakt word.
                        Hieronder ga ik dieper in op alle code die ik geschreven heb in C#.
                        </p>
                        </br>
                    </div>

                    <div>
                        <h1 id="HeaderProject">Hoe kijk ik erop terug?</h1>
                        <p>
                        Ik kijk erg positief terug op het project en ik heb er heel erg veel van geleerd, ook ben ik blij met wat ik heb neergezet in de korte tijd die ik heb gekregen voor dit project. Wel zou ik in het vervolg me meer willen focussen op het design van het spel (de objecten en textures) aangezien dit nu allemaal placeholders zijn.
                        </p>
                        </br>
                    </div>
                        
                </div>
            </div>
        </div>
    
        <div class="flex-container-column ImageSection">
            <div id="ProjectImage1"><video width="740" height="410" controls>
                <source src="../Videos/Mazemaniac.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>
                <h1 id="HeaderProject">Links</h1>
                <div id="ProjectPageText">
                <p id="projectsectiontext">
                    <a href="https://drive.google.com/drive/folders/1jnkOOdtDgSdLO6cTNCF6Hk6KFBBZKLup?usp=sharing">Download Game</a></br>
                    <a href="https://drive.google.com/drive/folders/1mDFu5Al5cNUk-dLF6LUkIO11JHX2kKnV?usp=sharing">Download Game Files</a>
                </p>  
                <h1 id="HeaderProject">Feedback</h1>
                <p id="projectsectiontext">
                    <a style="font-weight: bold;">Martijn Boegheim:</a> </br>
                Leuk idee! Ik heb eerst de game gespeeld en dat was een beetje verwarrend sinds er niet echt een uitleg is. De launcher heet ook: first person shooter, dus ik dacht dat ik die blokken moest schieten net als de enemy. Toen ik het document had gelezen werd het duidelijk. Ik denk dat dit een interessant concept is en het een nog betere game zou kunnen worden als je bijvoorbeeld een korte tutorial zou kunnen geven. Verder een goed project! </br>
                    </br>
                    <a style="font-weight: bold;" >Maud Saris:</a></br>
                    Grappig spel & mooi gemaakt! Je hebt snel door wat je moet doen en het is fijn dat er een uitleg bij zit. Een eventuele tip; de blokken die je neer kunt zetten om te markeren waar je geweest bent zijn dezelfde kleur als de blokken die gegooid worden door de enemies, misschien kun je een van de twee een andere kleur geven? Verder een leuk spel!
                  
                </p> 
            </div>    
        </div>
    </div>
    
    <div class="flex-container-column">
        <div class="flex-container-row2">
                        <div id="projectsection">
                            <div>
                                
                                    <div id="ProjectPageText">
                                    <h1 id="HeaderProject">De code</h1>
                                    <p>
                                    Aangezien er heel erg veel code in dit project zit vond ik het een goed idee om er in een video helemaal door heen te lopen zodat je precies kan zien hoe ik alles gedaan heb en waarom. </p>
                                    Hier links zie je de video waarin ik uitleg geef over de code.
                                    </div>  
                                
                            </div>
                        </div>

                        <div class="flex-container-column ImageSection2">
                            <div id="ProjectImage2">
                            <video width="740" height="410" controls>
                            <source src="../Videos/MazeManiacUitleg.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                            </div>
                        </div>
                            
        </div>
    </div>

</body>
