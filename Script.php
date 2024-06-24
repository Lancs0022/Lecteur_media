<!----------------------------------------------------------------------------------------------------------------------------------------------------------

    if($mode == "Videos" && file_exists('./Videos') || $mode == "Audio" && file_exists('./Audio') || $mode == "Images" && file_exists('./Images'))

    est une condition pour verifier s'il existe des fichiers dans le repertoire voulu


    Inventaire des fonctions 
    @ Fonctions php specifiques utilises 
        - scandrir()    : Permet de scanner une repertoire indique en parametre et stoque les fichiers dans un array
        - count()       : Compte le nombre d'entree d'un tableau
        - file_exists() : Test booleen verifiant l'existence d'un fichier en particulier 
        - strtolower()  : Transforme une chaine de caractere en miniscule
        - pathinfo($files[$i], PATHINFO_EXTENSION) : Donne l'extension d'un fichier 
    @ Fonctions construits    
        - Scan()         : Trie le nom des fichiers d'un repertoire dans un tableau avec plusieurs if pour bien filtrer
        - Lister()       : Deplace un element d'un tableau a une autre et compte le nombre d'entree
        - Presentation() : Cree un balise de liste avec le nom des fichiers comme lien (Ces liens envoyent le numero du fichier a lire vers "lecture.php")

------------------------------------------------------------------------------------------------------------------------------------------------------------>

<?php
    //Cette fonction envoye betement le contenu d'un tableau a un autre (utilise dans scan) 
    function Lister(&$nombre_fichiers, &$files, &$tab_media, &$j, &$i)
    {
        //echo 'Lister identifie</br>';
        $tab_media[$j] = $files[$i];
        // A chaque fois que l'extension 'mp4' est rencontre $nombre_fichiers augmente
        $nombre_fichiers++;
        $j++;
    }
    //Fonction utile pour afficher rapidement un tableau
    function Show_the_Array($Array)
    {
        echo '<pre>';
        print_r($Array);
        echo '</pre>';
    }

    //La fonction trie la repertoire actuelle en filtrant les extensions
    function Scan(&$nombre_fichiers, $mode)
    {
        $j = 0;
        //Scandir met le nom de tous les fichiers du repertoire actuelle dans un tableau
        if($mode == "Videos" && file_exists('./Videos')) $files = scandir('./Videos');
        if($mode == "Images" && file_exists('./Images')) $files = scandir('./Images');
        if($mode == "Audio" && file_exists('./Audio')) $files = scandir('./Audio');
        if($mode == "Videos" && file_exists('./Videos') || $mode == "Audio" && file_exists('./Audio') || $mode == "Images" && file_exists('./Images'))
        {
            //Count compte le nombre d'entrees du tableau
            $nb_Ligne = count($files)-2;
            for($i = 2; $i < $nb_Ligne+2; $i++)
            {
                //On entre l'extention du fichier dans un var pour le verifier
                $test_Extension = strtolower(pathinfo($files[$i], PATHINFO_EXTENSION));
                if($mode == "Videos" && file_exists('./Videos'))
                    if($test_Extension == 'mp4' || $test_Extension == 'webm' || $test_Extension == 'mkv' 
                    || $test_Extension == 'ts'  || $test_Extension == 'flv')
                    {
                        Lister($nombre_fichiers, $files, $tab_media, $j, $i);
                    }
                if($mode == "Images" && file_exists('./Images'))
                    if($test_Extension == 'jpeg'|| $test_Extension == 'jpg' || 
                    $test_Extension == 'png' || $test_Extension == 'webp')
                    {
                        Lister($nombre_fichiers, $files, $tab_media, $j, $i);
                    }
                if($mode == "Audio" && file_exists('./Audio'))
                    if($test_Extension == 'mp3' || $test_Extension == 'm4a' || $test_Extension == 'ogg'
                        || $test_Extension == 'wav' ||  $test_Extension == 'midi'|| $test_Extension == 'wma')
                    {
                        // Triage
                        Lister($nombre_fichiers, $files, $tab_media, $j, $i);
                    }
            }
        }
        //Le tableau tout chaud tout cuit sort de la fonction
        if($mode == "Videos" && file_exists('./Videos') || $mode == "Audio" && file_exists('./Audio') || $mode == "Images" && file_exists('./Images' ) && $nombre_fichiers != 0)return $tab_media;
    }

    //"Presentation" s'occupe de placer le noms en tant que lien de tout les fichier dans une balise de liste
    function Presentation($choix, &$tableau_Media, $Nombre_du_media)
    {
        $Numerotation = 1;
        echo '<ol>';
        for($i = 0; $i < $Nombre_du_media; $i++)
        {
            if($choix == "Gestionnaire")
            {
                echo '<li><a href="Lecture_V2.php?Ouverture_de='.$tableau_Media[$i].'">'.$tableau_Media[$i].'</a></li></br>';
            }
            else
            {
                echo '<li><a href="Lecture.php?numero='.$Numerotation.'&media_Type=';
                if($choix == "Videos") echo "Videos";
                if($choix == "Images") echo "Images";
                if($choix == "Audio") echo "Audio";
                echo '">'.$tableau_Media[$i].'</a></li></br>';
                $Numerotation++;
            }
        }
        echo '</ol>';
    }  
?>