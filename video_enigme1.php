<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Serious Game - Première énigme</title>
    </head>

    <body>
        
        <header>
            <!-- Compte à rebours avec Target Date fixe :
            </pre>
            <span>
                <font size="20"><font face="impact"><font color="#000000"> 
                    <div align="center">
                        <center>
                            <script language="JavaScript">
                                TargetDate = "03/24/2020 10:20 PM";
                                BackColor = false;
                                ForeColor = false;
                                CountActive = true;
                                CountStepper = -1;
                                LeadingZero = true;
                                DisplayFormat = "%%M%% &nbsp; %%S%%";
                                FinishMessage = "Le temps est écoulé !";
                            </script>
                            <script language="JavaScript" src="http://scripts.hashemian.com/js/countdown.js">
                            </script>
                        </center>
                    </div>
                </span>
            <pre>
            -->
        </header>
        <?php include("rebour.php"); ?>
        <header>
            <h1 class="titre">Enigme 1</h1>
       </header>

       <p class="TexteVideo">Indication sur l'enigme de la video.</p>

        <div class="videoIntro">
            <video src="video1.mp4" controls width="1000"></video>
        </div> 

        <p class="boutonJaiLeCode"><a href="Code_E1.php" title="Cliquez pour entrer le code."><img src="Jai_le_code_btn.png"></a></p>

       <!-- <footer>
            <p class="contact"><a href="mailto:dap@lcl.com">Contacter DAP.</a></p>      
        </footer> -->
    </body>
</html>











