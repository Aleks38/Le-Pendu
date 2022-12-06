<?php
    session_start();
    $nb_vie = 0;

    if (isset($_SESSION['nb_vie'])) {
        $nb_vie = $_SESSION['nb_vie'];

    }
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
        

        <form action="" method="post" class="form-example" id="champsconnection"> 
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                <input name="lettre" type="text" class="form-control" placeholder="Renter une lettre" aria-label="Example text with button addon" aria-describedby="button-addon1">
            </div>
        </form>
        <?php
            

            $findLetter = 'test';
            ?><img src="Images/image<?php echo $_SESSION['nb_vie']; ?>.jpg"/><?php
            echo $_SESSION['nb_vie'];

            $find = false;
            if (isset($_POST["lettre"]))
            {
                for($i=0; $i < strlen($findLetter); $i++)
                {
                    if($findLetter[$i] == $_POST["lettre"])
                    {
                        $find = true;
                    }
                }
                if ($find == false)
                {
                    $_SESSION['nb_vie'] = $nb_vie + 1;
                    echo $_SESSION['nb_vie'];
                }
                elseif($find == true)
                {
                    echo "gg";
                }
            }
            ?>
            <div class="col-4">
                <div class="row">
                    <?php
                    for ($i = 0; $i < strlen($findLetter); $i++)
                    {
                        ?>
                        <div class="col mx-2">
                            <hr ALIGN=CENTER WIDTH="50">
                        </div>
                        <?php
                    }
                    if ($nb_vie >= 2){

                        $_SESSION['nb_vie'] = 0 ;

                        session_destroy();
                    }
        ?>
                </div> 
            </div>


            <div class="container text-center">

                <form action="" method="post" class="form-example">

                    <div class="row justify-content-center">
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="a" type="button" class="btn btn-primary"></input>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="z" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="e" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="r" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="t" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="y" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="u" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="i" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="o" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="p" type="button" class="btn btn-primary"></button>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="q" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="s" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="d" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="f" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="g" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="h" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="j" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="k" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="l" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="m" type="button" class="btn btn-primary"></button>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="w" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="x" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="c" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="v" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="b" type="button" class="btn btn-primary"></button>
                        </div>
                        <div class="col-1 px-0">
                            <input type="submit" name="test" value="n" type="button" class="btn btn-primary"></button>
                        </div>
                    </div>
                    
                    <?php 
                        if (isset($_POST['test']))
                        {
                            ?>
                                <input type="hidden" name="historique" value="<?= $_POST['historique'] . $_POST['test']; ?>" />
                            <?php 
                                if (isset($_POST['historique']))
                                {
                                    for ($i=0; count($_POST['historique']); $i++)
                                    {
                                        echo($_POST['historique']);
                                    }
                                }
                        } 
                    ?>

                </form>
                
            </div>

    </body>
</html>
