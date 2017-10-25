


    <header>
    
        <div class="row">
            <div class="col-xs-12 col-lg-12 entete">
                <!----------- ENTETE ---------------->
                
                    
                
                <nav>
                    <ul>
                <?php 
                if(isset($_SESSION['connecte']))
                {
                ?>
                        <a href="<?=BASE_URL;?>/userController"><li class="col-xs-2 col-md-2 liste"><span class="glyphicon glyphicon-user"> </span> Mon compte</li></a>
                        <a href="<?=BASE_URL;?>/logout"><li class="col-xs-2 col-md-2 liste"><span class="glyphicon glyphicon-off"> </span> Déconnexion</li></a>
                <?php 
                    if($_SESSION['lvl'] == 3)
                    {
                ?>      
                        <a href="<?=BASE_URL;?>/adminController"><li class="col-xs-2 col-md-2 liste"><span class="glyphicon glyphicon-off"> </span> Gestion Admin</li></a> 
                <?php
                    }
                }
                else { ?>
                        <li class="col-xs-2 col-md-2 liste">
                           <?php require "controller/loginController.php";?>
                        </li>
                        <li class="col-xs-2 col-md-2 liste">
                            <?php require "controller/inscriptionController.php";?>
                        </li>
                     <?php } ?>   
                    </ul>
                </nav>
            </div>
        </div>
        

 
    
    <div class="row top0">
        <div class="col-xs-12 col-md-12 titre">
            <a class="href" href="index.php"><p class="titre_parking">Parking.yeah</p></a>
        </div>
    </div>
    </header>
    <div class="row">
        <div class="col-xs-12 col-md-12 entete2">
            
        </div>
    </div>
<body>