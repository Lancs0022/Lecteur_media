<?php   

    //Ce fichier contient l'interface de lecture.
    //Le type de media a lire est pris en compte par le type_lecture 
    //Et adapte l'interface en consequence.

    //Le nom des mwedia est lue depuis leurs repertoires respectives 
    //Et affiches avec numerotation.
    //Tous les outils necessaire pour compter 
    //les ficiers sont importes avec le numero et type de media a lire

    include 'Script.php';
    $num_choix = $_GET['numero'];
    $type_Lecture = $_GET['media_Type'];
    $nombre_fichiers = NULL;
    $tableau_Media = Scan($Nombre_du_media, $type_Lecture);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lecteur <?php    //Titre differe
            if($type_Lecture == "Videos") echo "Video";
            if($type_Lecture == "Images") echo "d'mage";
            if($type_Lecture == "Audio") echo "Audio";
        ?></title>
        <link rel="stylesheet" type="text/css" href="style.php">
    </head>
    
    <body>
        <h1>Galerie 
            <?php    //Titre differencie
            if($type_Lecture == "Videos") echo "Video";
            if($type_Lecture == "Images") echo "d'mage";
            if($type_Lecture == "Audio") echo "Audio";
            ?>
        </h1>
        <div class="Navigation">
            <a href="index.php" class="bouton" title="Voir mes videos">Accueil</a>
            <a href="Lecture.php?numero=0&media_Type=Videos" class="bouton" title="Voir mes videos">Videos</a>
            <a href="Lecture.php?numero=0&media_Type=Images" class="bouton" title="Voir mes images">Images</a>
            <a href="Lecture.php?numero=0&media_Type=Audio" class="bouton" title="Voir mes musiques">Audio</a>
        </div>
        <?php 
            if($type_Lecture == "Images") echo '<div class="MegaBox2">';
            else echo '<div class="MegaBox1">'
        ?>
        <section class="Lecteur">
            <?php
                //Une premiere verification pour voir si la repertoire n'est pas vide 
                if($num_choix == 0)
                {
                    if($Nombre_du_media != null)
                    echo "<span>Selectionnez le fichier a lire</span>";
                    else
                    echo "<span>Aucun fichier dans le repertoire de lucture</span>";
                }
            ?>
            <?php
                if($num_choix != 0)
                {
                    //Appel des lecteurs ici
                    if($type_Lecture == "Videos")
                    {
                        echo '<video source src="./Videos/'.$tableau_Media[$num_choix-1].'" type="video/mp4" controls volume="0.5" >
                        Un erreur est survenu lors de l\'ouverture de la video
                        </video>';
                    }
                    elseif($type_Lecture == "Images")
                    {
                        echo '<span>Image numero : '.$num_choix.'</span>';
                        echo '<img  href="Lecture.php" src="Images/'.$tableau_Media[$num_choix-1].'">';
                    }
                    elseif($type_Lecture == "Audio")
                    {
                        echo '<h2>Lecture de votre fichier audio</h2>';
                        echo '<audio src="Audio/'.$tableau_Media[$num_choix-1].'" controls>
                        Une erreur est survenu lors de l\'ouverture du fichier audio
                        </audio>';
                    }
                }
            ?>
        </section>
        <section class="Presentation">
            <?php   
                //On affiche la liste et le tour est joue (Resterait plus que la mise en forme)
                Presentation($type_Lecture, $tableau_Media, $Nombre_du_media);
            ?>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, expedita voluptates. Velit excepturi fugiat, ipsam perferendis commodi deleniti, libero corporis nostrum asperiores similique obcaecati veritatis rem nobis fugit facere quas!
            </p>
        </section>
        </div>

    </body>
</html>