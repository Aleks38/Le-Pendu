<?php
    session_start();
    $nb_vie = 1;

    if(!isset($_SESSION['nb_vie'] )){
        $resultat = null;
        $badLetter = null;
        $goodLetter = null;

        $_SESSION['nb_vie'] = $nb_vie;
        $_SESSION['resultat']= $resultat ;
        $_SESSION['badLetter'] = $badLetter;
        $_SESSION['goodLetter'] = $goodLetter;

        $_SESSION['lettres']['a'] = 0 ;
        $_SESSION['lettres']['b'] = 0 ;
        $_SESSION['lettres']['c'] = 0 ;
        $_SESSION['lettres']['d'] = 0 ;
        $_SESSION['lettres']['e'] = 0 ;
        $_SESSION['lettres']['f'] = 0 ;
        $_SESSION['lettres']['g'] = 0 ;
        $_SESSION['lettres']['h'] = 0 ;
        $_SESSION['lettres']['i'] = 0 ;
        $_SESSION['lettres']['j'] = 0 ;
        $_SESSION['lettres']['k'] = 0 ;
        $_SESSION['lettres']['l'] = 0 ;
        $_SESSION['lettres']['m'] = 0 ;
        $_SESSION['lettres']['n'] = 0 ;
        $_SESSION['lettres']['o'] = 0 ;
        $_SESSION['lettres']['p'] = 0 ;
        $_SESSION['lettres']['q'] = 0 ;
        $_SESSION['lettres']['r'] = 0 ;
        $_SESSION['lettres']['s'] = 0 ;
        $_SESSION['lettres']['t'] = 0 ;
        $_SESSION['lettres']['u'] = 0 ;
        $_SESSION['lettres']['v'] = 0 ;
        $_SESSION['lettres']['w'] = 0 ;
        $_SESSION['lettres']['x'] = 0 ;
        $_SESSION['lettres']['y'] = 0 ;
        $_SESSION['lettres']['z'] = 0 ;

    }

if(isset($_POST['test']))  $_SESSION['lettres'][$_POST['test']] = 1 ;

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jeu du pendu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>        

        <div class="container text-center">

            <form action="index.php" method="post" class="form-example" id="formulaire">

                <!-- clavier virtuel -->
                <div class="row justify-content-center">

                    <!-- Première ligne du clavier virtuel -->
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="a" class="btn btn-primary" <?php if($_SESSION['lettres']['a'] == '1') echo "disabled" ; ?>>
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="z" class="btn btn-primary" <?php if($_SESSION['lettres']['z'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="testE" value="e" class="btn btn-primary" <?php if($_SESSION['lettres']['e'] == '1') echo "disabled" ; ?>>
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="r" class="btn btn-primary" <?php if($_SESSION['lettres']['r'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="t" class="btn btn-primary" <?php if($_SESSION['lettres']['t'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="y" class="btn btn-primary" <?php if($_SESSION['lettres']['y'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="u" class="btn btn-primary" <?php if($_SESSION['lettres']['u'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="i" class="btn btn-primary" <?php if($_SESSION['lettres']['i'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="o" class="btn btn-primary" <?php if($_SESSION['lettres']['o'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="p" class="btn btn-primary" <?php if($_SESSION['lettres']['p'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <!-- Fin de la première ligne du clavier virtuel -->

                </div>

                <div class="row justify-content-center">

                    <!-- Seconde ligne du clavier virtuel -->
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="q" class="btn btn-primary" <?php if($_SESSION['lettres']['q'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="s" class="btn btn-primary" <?php if($_SESSION['lettres']['s'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="d" class="btn btn-primary" <?php if($_SESSION['lettres']['d'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="f" class="btn btn-primary" <?php if($_SESSION['lettres']['f'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="g" class="btn btn-primary" <?php if($_SESSION['lettres']['g'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="h" class="btn btn-primary" <?php if($_SESSION['lettres']['h'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="j" class="btn btn-primary" <?php if($_SESSION['lettres']['j'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="k" class="btn btn-primary" <?php if($_SESSION['lettres']['k'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="l" class="btn btn-primary" <?php if($_SESSION['lettres']['l'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="m" class="btn btn-primary" <?php if($_SESSION['lettres']['m'] == '1') echo "disabled" ; ?>>
                    </div>
                    <!-- Fin de la seconde ligne du clavier virtuel -->

                </div>

                <div class="row justify-content-center">

                    <!-- Troisième ligne du clavier virtuel -->
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="w" class="btn btn-primary" <?php if($_SESSION['lettres']['w'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="x" class="btn btn-primary" <?php if($_SESSION['lettres']['x'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="c" class="btn btn-primary" <?php if($_SESSION['lettres']['c'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="v" class="btn btn-primary" <?php if($_SESSION['lettres']['v'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="b" class="btn btn-primary" <?php if($_SESSION['lettres']['b'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <div class="col-1 px-0">
                        <input type="submit" name = "test" id="test" value="n" class="btn btn-primary" <?php if($_SESSION['lettres']['n'] == '1') echo "disabled" ; ?>> 
                    </div>
                    <!-- Fin de la troisième ligne du clavier virtuel -->

                </div>
                <!-- Fin du clavier virtuel -->

                <!-- Boutton reset -->
                <a class="btn btn-primary" href="deconnexion.php" role="button">Deconnexion</a>
                
                <!-- Ajout des lettres utilisés dans $_SESSION['resultat'] -->
                <?php
                    if (isset($_POST['test']))
                    {  
                        if(isset($_POST['historique']))
                        {
                            $_SESSION['resultat'] = $_POST['historique'] . $_POST['test'];
                        } 
                        else 
                        {
                            $_SESSION['resultat'] = $_POST['test'];
                        }
                        
                        ?>
                            <input type="hidden" name="historique" value="<?= $_SESSION['resultat']; ?>" />
                        <?php
                    } 
                ?>

            </form>
            
            <!-- Affichage des lettres utilisés -->
            <?php     
                if (isset($_POST['test']))
                {
                    if (isset($_SESSION['resultat']))
                    {
                        echo $_SESSION['resultat'];
                    }
                }
            ?>
            <!-- Fin de l'affichage des lettres utilisés -->

        </div>
        
        <?php
            $findLetter = 'test';
            $find = false;

            if (!isset($_SESSION['goodLetter'])){
                if(strlen($_SESSION['goodLetter']) != strlen($findLetter))
                {
                    for ($i = 0; $i < strlen($findLetter); $i++){
                        $_SESSION['goodLetter'] = $_SESSION['goodLetter'] . "-";
                        
                    }
                }
            }
            
            
            if (isset($_SESSION['resultat']))
            {
                // Verification de la lettre choisi
                for($i=0; $i < strlen($findLetter); $i++)
                {
                    if($findLetter[$i] == $_SESSION['resultat'][strlen($_SESSION['resultat']) - 1])
                    {
                        $find = true;
                    }
                }
                // Evènement en cas de mauvaise lettre choisi
                if ($find == false)
                {
                    $_SESSION['nb_vie'] = $_SESSION['nb_vie'] + 1;
                    $_SESSION['badLetter'] = $_SESSION['badLetter'] . $_SESSION['resultat'][strlen($_SESSION['resultat']) - 1];                            
                    
                }
                // Evènement en cas de bonne lettre choisi
                elseif($find == true)
                {
                    for ($i = 0; $i < strlen($findLetter); $i++){

                        if ($_SESSION['resultat'][strlen($_SESSION['resultat']) - 1] == $findLetter[$i]){

                            $_SESSION['goodLetter'] = substr_replace($_SESSION['goodLetter'], $_SESSION['resultat'][strlen($_SESSION['resultat']) - 1], $i, 1);
                            
                        }
                    }
                }                 
            }
        ?>

        <!-- Affichage de l'image du pendu. -->
        <img src="Images/pendu/LePendu<?php echo $_SESSION['nb_vie']; ?>V.png"/>

        <div class="col-4">
            <div class="row">

                <?php
                    // Affichage nombre de lettre dans le mot
                    for ($i = 0; $i < strlen($findLetter); $i++)
                    {
                        ?>
                        <div class="col mx-2">
                            <p class="text-center mb-0 fs-1">
                                <?php
                                    if (isset($_SESSION['goodLetter'])){
                                        echo $_SESSION['goodLetter'][$i];
                                    }  
                                ?>
                            </p>
                            <hr class="mx-auto my-0" ALIGN=CENTER WIDTH="50" HEIGHT="20">
                        </div>
                        <?php
                    }
                    if ($_SESSION['goodLetter'] == $findLetter){
                        echo "Vous avez gagné";
                    }


                    // Evenement en cas de partie perdu
                    if ($_SESSION['nb_vie'] == 10)
                    {
                        ?>
                        <a class="btn btn-primary" href="deconnexion.php" role="button">Voulez vous recommencez ?</a>
                        <?php
                    }
                ?>
            </div> 
        </div>

    </body>
</html>
