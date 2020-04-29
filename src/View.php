<?php

namespace App;

class View
{

    public static function render(string $path, array $data = null)
    {
        // Extraire les variables
        ($data) ?extract($data) : null;

        //ouvrir un buffer
        ob_start();
        // le buffer analyse le contenu
        include($path);
        //récupère le contenu du buffer
        $template = ob_get_contents();
        // Efface les données du buffer
        ob_end_clean();

        return $template;
    }


}