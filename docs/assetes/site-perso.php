<?php

// Charger les données à partir d'un fichier YAML
require_once "../../assetes/yaml/acceuil.yaml";
$accueil = Yaml::parseFile('yaml/acceuil.yaml');


// Afficher les données
var_dump($accueil);

?>