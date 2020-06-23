<?php  
require_once('classes.php');
 
                    $cheval = new faune("Jumper");


                    $cheval->setPedigree("Arabian");
                    
                    //On utilise $classeAnimal comme référence à Animal
                    $classeAnimal = "Animal";


                    echo "<p>".
                    "Nom : " .$cheval->getNom() . "<br />".
                    "vacciné le : " .  $cheval->getdateVaccination(). "<br />". 
                    $cheval->getVaccin(1). "<br />".
                    
                    "Pédigrée : " . $cheval->getPedigree(). "</p>".
                    "<p>".


                    "Nombre de visite : ".  $classeAnimal::totalNbreVisites() . 
                    "</p>";


            $cheval->setAdresse("20, rue des canasson","75005","Paris");
            echo "Adresse :<br />" . $cheval->getAdresse();
?>