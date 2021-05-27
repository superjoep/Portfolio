<?php 
include '../Includes/Header.php';
?>
<link rel="stylesheet" href="../Index.css">
<link rel="stylesheet" href="../ProjectPage.css">
<body style="background-color: #5CDB95;">


<header>

<h1 id="ProjectNameTitle">Portfolio Website</h1>
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
                        Voor mijn portfolio website wilde ik graag een simpele website maken die vooral focuste op de items die in mijn portfolio staan. Ik heb dus in mijn design simpele kleuren gebruikt en niet te veel content toegevoegd. Ook wilde ik erg graag meer leren over flexboxes en css animaties, dit is dus ook iets wat ik zeker wou toevoegen. Hiernaast wilde ik ook met bootstrap werken zodat ik de menu balk responsive kreeg en wilde ik alles in PHP-bestanden maken zodat ik de header over gemakkelijk kan include.</p>
                        </br>
                    </div>

                    <div>
                        <h1 id="HeaderProject">Hoe heb ik het gedaan?</h1>
                        <p>
                        Ik ben begonnen met het maken van mijn bestanden structuur en een git repository zodat ik alles altijd overzichtelijk had en goed aan de slag kon gaan. Vervolgens heb ik de menubalk gemaakt en ben ik begonnen aan de structuur met flexboxes te maken. Toen ik de structuur van de homepagina en de about me pagina af had begon ik met het opvullen van de juiste teksten en foto’s. Vervolgens heb ik een template gemaakt die ik kon gaan gebruiken bij alle portfolio items zodat ik deze alleen nog maar hoefde op te vullen. Toen ben ik teksten gaan schrijven voor alle onderdelen en ben ik screenshots en afbeelding gaan maken en zoeken die ik kon gaan gebruiken bij de portfolio items. Toen ik alles klaar had staan ben ik de website gaan opvullen zodat die helemaal klaar stond voor oplevering. Uiteindelijk leek het me ook nog een erg leuk idee om een geanimeerde tekst toe te voegen aan de home pagina, hier heb ik uiteindelijk een CSS animatie voor gemaakt.    </p>
                        </br>
                    </div>

                    <div>
                        <h1 id="HeaderProject">Hoe kijk ik erop terug?</h1>
                        <p>
                        Ik kijk erg blij terug op de portfolio website en ik vind dat die goed gelukt is. Wel zal ik in het vervolg meer onderzoek doen naar flexboxes aangezien ik dit niet helemaal goed had gedaan en daardoor de lay-out op nieuw moest maken. Ook wil ik in het vervolg vaker de site naar GitHub pushen aangezien ik dan meer versies kan laten zien.
                     </p>
                        </br>
                    </div>
                        
                </div>
            </div>
        </div>
    
        <div class="flex-container-column ImageSection">
            <div id="ProjectImage1"><video width="740" height="410" controls>
                <source src="../Videos/Website Preview.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
            </div>
                <h1 id="HeaderProject">Links</h1>
                <div id="ProjectPageText">
                <p id="projectsectiontext">
                    <a href="http://leelarosa.jdkdesigns.nl/">Website</a></br>
                    <a href="https://github.com/superjoep/Portfolio">Github</a>
                </p>  
                <h1 id="HeaderProject">Feedback</h1>
                <p id="projectsectiontext">
                    Voor feedback bekijk <a href="PortfolioPrototype">deze</a> pagina.
                </p> 
            </div>    
        </div>
    </div>
    
    <div class="flex-container-column">
        <div class="flex-container-row2">
                        <div id="projectsection">
                            <div>
                                
                                    <div id="ProjectPageText">
                                    <h1 id="HeaderProject">Flexboxes</h1>
                                    <p>
                                    Aangezien ik voor de site van Leela Rosa al met flexboxes gewerkt had verliep het op mijn portfolio site een stuk soepeler. Maar ondanks dat liep ik alsnog tegen wat dingen aan en heb ik heel veel nieuws geleerd over flexboxes. Ik heb geleerd hoe ik columns en rows kan combineren zodat ik de lay-out precies zo kon krijgen zoals ik dat wilde. En ik heb geleerd hoe ik afbeeldingen op de juiste plek kan krijgen doormiddel van flexboxes.
                                    </p>
                                    </br>
                                    </div>  
                                
                            </div>
                        </div>

                        <div class="flex-container-column ImageSection2">
                            <div id="ProjectImage2">
                                <img src="../Images/PortfolioDev/FlexboxImage.png">
                            </div>
                            <div id="ProjectImage2">
                                <img src="../Images/PortfolioDev/Flexboxcss.png">
                            </div>
                        </div>
                            
        </div>
    </div>

    <div class="flex-container-column">
        <div class="flex-container-row2">
                        <div id="projectsection">
                            <div>
                                
                                <div id="ProjectPageText">
                                    <h1 id="HeaderProject">CSS Animatie</h1>
                                    <p>
                                        
                                    Voor de portfolio tekst op de homepagina wilde ik graag een CSS-animatie maken, het leek me heel vet als de tekst verdween in de achtergrond en vervolgens weer terugkwam doormiddel van shadows.
Ik heb hierbij veel research gedaan naar CSS-animaties en uiteindelijk verliep het gelukkig erg soepel en liep ik tegen weinig dingen aan. Ik heb per Letter een span aangemaakt die ik vervolgens doormiddel van CSS met een delay een shadow heb gegeven in de juiste volgorde. Hierdoor kreeg de animatie een erg mooi effect en verliep hij door verschillende delays uit te proberen uiteindelijk erg soepel.
  </p>
                                    </br>
                                </div>  
                                
                            </div>
                        </div>

                <div class="flex-container-column ImageSection2">
                    <div id="ProjectImage2">
                        <img src="../Images/PortfolioDev/Textanimatie.png">
                    </div>
</br>
                    <div id="ProjectImage2">
                        <img src="../Images/PortfolioDev/TextanimatieCSS.png">
                    </div>
                </div>      
        </div>
    </div>
    <div class="flex-container-column">
        <div class="flex-container-row2">
                        <div id="projectsection">
                            <div>
                                
                                <div id="ProjectPageText">
                                    <h1 id="HeaderProject">PHP Include</h1>
                                    <p>
                                        
                                    Om op iedere pagina de header terug te laten komen zonder dat ik dit iedere keer opnieuw erin moest zetten besloot ik dit te doen met een PHP include. Hierdoor hoefde ik maar 1 bestand te maken met de header erin en kon ik hem gemakkelijk op iedere pagina terug laten komen zodat ik ook veel makkelijker verandering kon doorvoeren. </p>
                                    </br>
                                </div>  
                                
                            </div>
                        </div>

                <div class="flex-container-column ImageSection2">
                    <div id="ProjectImage2">
                        <img src="../Images/PortfolioDev/HeaderImage.png">
                    </div>
</br>
                    <div id="ProjectImage2">
                        <img src="../Images/PortfolioDev/IncludeImage.png">
                    </div>
                </div>      
        </div>
    </div>
</body>
