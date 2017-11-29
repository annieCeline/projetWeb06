<nav>
    <div>
        <img src="./assets/images/logos/symboleMenu50x76.png" alt="Menu">
    </div>

    <ul>
        <li><a href="index.php">Home</a></li>

        <li class="dropdownParent"><a href="#">Programme</a>
        <i class="fa fa-caret-down" aria-hidden="true"></i>

      
            <ul class="dropdownItems">

                <li> <a href="programme.php">En salle</a></li>
                <li> <a href="projet.php">En ligne</a></li>

            </ul>
        </li>
        
        
        <li><a href="infospratiques.php">Infos Pratiques</a></li>
        <li><a href="palmares.php">Palmares</a></li>
        <li><a href="festival.php">Le Festival</a></li>
    </ul>
        
        
        
        

        <div>
          <?php
            session_start();
            

            if (isset($_SESSION['Email'])){
                echo "<span>Bienvenue " .  $_SESSION['Prenom'] . "&nbsp" . $_SESSION['Nom'] . "</span>";
                echo "<a href='./logout.php'> / Se déconnecter</a>";
            } else {
            echo '<a href="login.php">Se connecter </a>';
            echo '<span> / </span>';
            echo '<a href="inscription.php">Se créer un compte</a>';
   
            }
            ?>
                 
        </div>
</nav>