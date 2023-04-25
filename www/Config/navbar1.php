<div class="navbar-fixed">  
        <nav>
            <div class="nav-wrapper #212121 grey darken-4" id="nav">
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <a href="Contact.php" class="brand-logo right" id="contact">Contact</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="cv.php">CV</a></li>
                    <li>
                        <a class="dropdown-trigger" data-beloworigin="true" href="#!" data-target="dropdown1">
                            Jeux<i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" data-beloworigin="true" href="#!" data-target="dropdown2">
                            Projects<i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
        
                </ul>       
            </div>
        </nav>


        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                        <div class="background">
                            <img src="img/black.jpg">
                        </div>
                    <a href="#user"><img class="circle" src="img/GRISEY2.jpg"></a>
                    <a href="#name"><span class="white-text name">GRISEY</span></a>
                    <a href="#email"><span class="white-text email">Léo</a></span></a>
                </div>
            </li>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="cv.php"> Mon CV</a></li>
            <li><div class="divider"></div></li>
            <li>
                <a class="dropdown-trigger" data-beloworigin="true" href="#!" data-target="dropdown3">
                    Jeux<i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li><div class="divider"></div></li>
        
            <li>
                <a class="dropdown-trigger" data-beloworigin="true" href="#!" data-target="dropdown4">
                    Projects<i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>

        </ul>


        <ul id="dropdown1" class="dropdown-content dropdown-color">
            
            <li><a href="games/loadings/loading_blackjack.php">Plus ou moins</a></li>
            <!-- <li><a href="games/loadings/loading_pendu.php">Pendu</a></li> -->
        </ul>

        <ul id="dropdown2" class="dropdown-content dropdown-color2">
            
            <?php
            $sql = "SELECT * FROM projects";
            $pre = $pdo_projects-> prepare($sql);
            $pre->execute();
            $projects = $pre->fetchall(PDO::FETCH_ASSOC);

            foreach($projects as $project){
            ?> 
            <li><a href="project.php?id=<?php echo $project['id'] ?>"><?php echo $project['projectname']?></a></li>
            <?php
            }
            ?>
        </ul>
        
        <ul id="dropdown3" class="dropdown-content dropdown-color">
            
                <li><a href="games/loadings/loading_blackjack.php">Plus ou moins</a></li>
                <!-- <li><a href="games/loadings/loading_pendu.php">Pendu</a></li> -->
        </ul>


        <ul id="dropdown4" class="dropdown-content dropdown-color2">
            
            <?php
            $sql = "SELECT * FROM projects";
            $pre = $pdo_projects-> prepare($sql);
            $pre->execute();
            $projects = $pre->fetchall(PDO::FETCH_ASSOC);

            foreach($projects as $project){
            ?> 
            <li><a href="project.php?id=<?php echo $project['id'] ?>"><?php echo $project['projectname']?></a></li>
            <?php
            }
            ?>
        </ul>
        
    </div>