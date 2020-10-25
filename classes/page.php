<?php

class Page
{
    private $template;
    private $personnalisations;

    function __construct()
    {
        $this->template = "";
    }

    function __toString()
    {
        // TODO lire le template

        $contenu = file_get_contents("template/" . $this->template . "/index.twig");

        foreach ($this->personnalisations as $key => $value) {
            $contenu = str_replace("{{ $key }}", $value, $contenu);
        }
        $contenu = str_replace("{{ titre }}", "Bienvenue", $contenu);

        $contenu = str_replace("{{ sous-titre }}", "Notre site dynamique, c'est de la dynamite", $contenu);

        $contenu = str_replace("{{ description }}", "", $contenu);

        return $contenu;
    }

    function prepare()
    {
        global  $dbh;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = "home";
        }
        include "router/$page.php";

        $this->personnalisations = $texte;
    }
}
