<?php

/**
 * plugin Name: portfolio
 */

use YaelPortfolio\Plugin;

require __DIR__ . '/vendor-yaelPortfolio/autoload.php';

 // instanciation du plugin
$portfolio = new Plugin();

// au moment de l'activation du plugin, nous demandons au plugin de lancer les traitements dont il a besoin


// DOC WP PLUGININ activation "hook" : https://developer.wordpress.org/reference/functions/register_activation_hook/
register_activation_hook(
   // premier argument, le chemin vers le fichier de déclaration du plugin
   __FILE__,
   // appel de la méthode activate sur l'objet $portfolio
   // En js la syntaxe serait portfolio.activate
   [$portfolio, 'activate']
);


register_deactivation_hook(
   __FILE__,
   [$portfolio, 'deactivate']
);