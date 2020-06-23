<?php  
require_once('classes.php');
 
                    $chat = new faune("Peter");


                    $chat->setPedigree("bengal");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$chat->getNom() . "<br />".
                    "vacciné le : " .  $chat->getdateVaccination(). "<br />". 
                    $chat->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $chat->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $chat->setAdresse("2, rue des Miaou","75006","Paris");
            echo "Adresse :<br />" . $chat->getAdresse();
?>