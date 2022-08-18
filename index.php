<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Montant en lettre</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script>
        function myFunction() {
        var copyText = document.getElementById("NbreConvertis");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);
        }
</script>
    </head>
    <body> 
    <div class="container-fluid wrapper">
        <br><br>
        <!-- Navigation-->
   <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#!">CONVERTAMOUNT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#!">
                            PLATEFORME DE CONVERSION MONTANT EN LETTRE
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>-->
        <!-- Page content-->
        <div class="container">
            <div class="text-center">
                <br>
               
           <div class="jumbotron">
                <h1 class="mt-5">Convertir un nombre en lettre </h1>
                <p class="lead">Entrez le nombre à convertir & choississez langue</p>
                <form action="index.php" method="POST">
                <div>
                        <?php
                    require_once 'nut.php';
                    if (isset($_POST['adBtn'])) {
                        
                        $NbreConvertis=trim($_POST['NbreConvertis']);
                        $extra = array(".00", "~\.0+$~");
                        $NbreConvertise=$NbreConvertis;
                        $NbreConvertis=str_replace($extra,"",$NbreConvertis);
                        //$NbreConvertis=$NbreConvertis."0";
                        
                        //echo $NbreConvertis;
                        
                        $langue=$_POST['langue'];
                    
                        if (empty($NbreConvertis)) {
                            
                            echo "Veuillez remplir le nombre à convertir";
                        } else {
                            $nuts = new nuts($NbreConvertis, 'FCFA');
                            echo '<div class="alert alert-warning" role="alert">';
                            if($langue!=2){
                                
            
                                echo strtoupper($nuts->convert('fr-FR'));
                               echo "<br>";
                            }else{ echo strtoupper($nuts->convert('en-EN'))  ;
                                "<br>";
                            }
                           echo '</div>';
                           
                           
                        }
                       
                    }
                   
                    ?>
                    
                <div class="content">
                
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Veuillez entre le nombre à convertir:"  value="<?php if(isset($_POST['adBtn'])) {echo $NbreConvertise;}?>" name="NbreConvertis"  aria-label="Recipient's username" aria-describedby="button-addon2">
                       
                        <button class="btn btn-primary" name="adBtn" type="submit" id="convertis">Convertir</button>
                      </div>
                      <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="langue" value="1" id="flexRadioDefault1" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Français
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="langue" value="2" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    Anglais
                </label>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>  
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="nombre_en_lettre.js"></script>
        
    </body>
</html>
