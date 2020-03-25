<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Enigme 1</title>
    </head>

    <body>
    	<header>
    	 	<h1 class="titre">CODE</h1>
		</header>
		
        <?php
            if ($_POST['code']== "1234") 
                {
                echo ("<div class='boutonBon'><a href='Code_E1.php' title='Code bon.'><img src='bonCode_btn.png'></a> </div>");
                }
            else 
            {
            echo ("<div class='boutonMauvais'><a href='Code_E1.php' title='Mauvais code.'><img src='mauvaisCode_btn.png'></a> </div>");
                    
            } 
        ?>

		
    	<!--<footer>
    		<p class="contact"><a href="mailto:votrenom@bidule.com">Contacter DAP.</a></p>    	
    	</footer>-->
    </body>
</html>

