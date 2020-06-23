<?php  
require_once('classes.php');
 
                    $perruche = new faune("Coco");


                    $perruche->setPedigree("ondule");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$perruche->getNom() . "<br />".
                    "vacciné le : " .  $perruche->getdateVaccination(). "<br />". 
                    $perruche->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $perruche->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $perruche->setAdresse("45, rue des Pioupiou","75001","Paris");
            echo "Adresse :<br />" . $perruche->getAdresse();
?>