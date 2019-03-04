<?php
// Les inclusions

#require('Classes/Product.php');
#require('Classes/Category.php');

#Automatiser les require :
function autoloader_perso($className){
    var_dump($className);
    require_once('Classes/'. $className .'.php');
}
spl_autoload_register('autoloader_perso');

//HEY
echo '<p>Hey</p>';

// Création de l'objet
#création objet Product : un hamac
$hamac = new Product();
var_dump($hamac);

echo '<br>';

$hamac->name = 'Hamac';
$hamac->description = 'Pour s\'allonger au soleil';
$hamac->price = 100;
#debug de hamac
var_dump($hamac);

echo '<br>';

#création d'un 2nd objet product : parasol
$parasol = new Product();
#changement des valeurs des propriétés du parasol
$parasol->name = 'parasol';
$parasol->description = 'Pour faire de l\'ombre';
$parasol->price = 50;
#debug de parasol
var_dump($parasol);
#Affichage d'une propriété (price) du parasol
echo '<p>'. $parasol->price .'€</p>';

#via une fonction de la class
echo '<p>'. $parasol->displayPrice() .'€</p>';
echo '<p>'. $hamac->displayPrice() .'€</p>';

#Affichage d'une constante
echo '<p>Nombre de vues par défaut des produits: ' .$hamac::DEFAULT_NB_VIEWS.'</p>';

$voyage = new Category();
var_dump($voyage);

echo '<br>';