<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <header>
          <nav>
               <ul>
                   <li><a <a href="">Qum Somos</a></li>
                   <li><a <a href="index.php">Home</a></li>                      
                   <li><a <a href="index.php?pagina=produtos.php">produtos</a></li>
                   <li><a <a href="">Contato</a></li>
                </ul>
           </nav>
        </header>
        <main>
            <?php
                if(isset($GET["pagina"])&& !empty($GET["pagina"])){
                    $pagina = $GET["pagina"];
                    include($pagina);
            } else {                
            
                echo "Doces bons, gostos e baratos";
                
            }
        ?>
        
        </main>
        <footer>Edvaldo De Oliveira <br/>
            Sistema Pels Internet <br/>
            RA 20045545-5
        </footer>

    </body>
</html>

