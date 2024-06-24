<!--
=====================================  Presentation global du projet ============================================
|                                                                                                               |
|   Ce projet est inspire de Youtube et permet de lire des fichiers multimedia.                                 |                                                                                
|   Le projet est compose principalement de 3 fichiers essentiels et le fichier de style css                    |
|   dont celle-ci qui servira de point d'entree                                                                 |
|   du projet. Alors il y a :                                                                                   |
|                                                                                                               |
|         - "index.php"    : ce fichier qui est pourtant puremement html,                                       |
|         - "Lecture.php"  : ce fichier servira d'interface de lecture avec un lecteur et une liste de lecure   |
|         - "Script.php"   : Contenant les fichiers qui gere le scan des dossiers multimedia et                 |
|                           s'occupe de trier et ordonner les fichiers                                          |
|         - "Style.php"    : Le fichier de mise en forme est adapte en php pour etre integre correctement dans  |
|                           "Lecture "                                                                          |
|                                                                                                               |
|   Puis il a aussi un fond d'ecrant "fond (6).jpg"                                                             |
|                                                                                                               |
|   Et les 3 dossiers qui va contenir les fichiers multimedia selon les types :                                 |
|         -  "Videos"                                                                                           |
|         -  "Images"                                                                                           |
|         -  "Audio"                                                                                            |
|                                                                                                               |
|    Createur :                                                              Associes :                         |
|        LAIPELIKA Dufresnes Lancaster                                           Malandy Jacky                  |
|                                                                                Baptistine Juliana             |
|    Codage   :                                                              Codage   :                         |
|        0045                                                                    0050                           |
|                                                                                0008                           |
|                                                                                                               |
|                               -    E t e r n a l   V e h e m e n c e   -                                      |
|                                                                                                               |
=================================================================================================================
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecteur Media</title>
    <link rel="stylesheet" type="text/css" href="style.php">
</head>

<body>
    <h1>Lancs Media player</h1>
<!--
    Cette partie represente la barre de navigation permetant d'envoyer a la page lecture le mode de lecture a adopter
    La chaine "Videos", "Images", ou "Audio" sera envoye a la page lecture et elle s'adaptera par consequence.
-->

    <div class="Navigation">
        <a href="index.php" class="bouton" title="Voir mes videos">Accueil</a>
        <a href="Lecture.php?numero=0&media_Type=Videos" class="bouton" title="Voir mes videos">Videos</a>
        <a href="Lecture.php?numero=0&media_Type=Images" class="bouton" title="Voir mes images">Images</a>
        <a href="Lecture.php?numero=0&media_Type=Audio" class="bouton" title="Voir mes musiques">Audio</a>
    </div>

    <article id="Intro">
        <p class="intro">
            Utilisez votre navigateur comme un lecteur !</br>
            Ce petit site vous permet de <em>lire</em> des videos, des images, et des fichiers audios.<br>
        </p>

        <p class="intro">
            L'utilisation est relativement simple ; dans le dossier racine du projet,</br>
            il y a 3 dossiers correspondant a chaque type de fichier multimedia et voici les formats actuellement supportes:<br>
            <ol>
                <li>pour les videos, mettez les dans le dossier "Videos"</li>
                    <ul>
                        <li>mp4</li>
                        <li>webm</li>
                        <li>mkv</li>
                        <li>ts</li>
                        <li>flv</li>
                    </ul>
                <li>pour les Images, mettez les dans le dossier "Images"</li>
                    <ul>
                        <li>jpeg</li>
                        <li>jpg</li>
                        <li>png</li>
                        <li>webp</li>
                    </ul>
                <li>pour les musiques, mettez les dans le dossier "Audio"</li>
                    <ul>
                        <li>mp3</li>
                        <li>m4a</li>
                        <li>ogg</li>
                        <li>wav</li>
                        <li>midi</li>
                        <li>wma</li>
                    </ul>
            </ol>
            Si vous ne respectez pas cet ordre vos fichiers ne seront pas detectes par le script php charge de faire le tri.<br>
            Appuyez sur les boutons en haut de la page pour choisir ce que vous voulez lire puis le contenu du dossier correspondant</br>
            sera liste et presente par ordre alphabetique et assigne d'un numerotation<br>
            <em class="essentiel">Le nom des fichiers ne doivent pas contenir certains caracteres speciaux sinon la lecture risque d'echouer<br></em>
            Voila tout :)</br>
            Libre a vous d'ajouter d'ameliorer ce cite a votre guise ! <br>
            D'autres trucs plus simpa les uns que les autres suivront avec le temps.
        </p>
    </article>

</body>

</html>