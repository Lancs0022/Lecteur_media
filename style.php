<?php header("content-type: text/css; charset:UTF-8");
?>body {
    background-image: url("fond (6).jpg");
    background-size: cover;
}

.essentiel{
    color: yellowgreen;
}

a {
    text-decoration: none;
    color: white;
}
h1 {
    color: #df3cb6;
    text-align: center;
    font-family: Helvetica;
}
h2{
    color: white;
}
.Navigation {
    box-shadow: 5px 3px 2px  rgb(49, 49, 49);
    background-color: rgb(101, 92, 107);
    opacity: 0.9;
    display: flex;
    justify-content: space-evenly;
    font-family: Arial, Helvetica, sans-seriff;
    text-align: center;
    padding-top: 2px;
    padding-bottom: 2px;
    border: 2px grey solid;
    border-radius: 500px;
}

.bouton {
    opacity: 1;
    padding-right: 2em;
    padding-left: 2em;
    padding-top: 6px;
    padding-bottom: 7px;
    border: 2px rgb(151, 151, 151) dashed;
    border-radius: 60px;
}

.bouton:hover {
    color: black;
    background-color: rgb(248, 245, 245);
    padding-right: 2em;
    padding-left: 2em;
    padding-top: 6px;
    padding-bottom: 7px;
    border: 2px rgb(139, 139, 139) solid;
    opacity: 0.7;
    border-radius: 60px;
}

.bouton:active {
    padding-right: 2em;
    padding-left: 2em;
    padding-top: 6px;
    padding-bottom: 7px;
    border: 2px rgb(139, 139, 139) solid;
    opacity: 0.9;
    border-radius: 60px;
}

#Intro {
    color: aliceblue;
    font-size: small;
    font-family: 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
    box-shadow: 5px 3px 16px  rgb(5, 5, 5);
    margin: 16px;
    padding-left: 16px;
    padding-right: 16px;
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: auto;background-color: rgb(90, 86, 92);
}

.centrer {
    text-align: center;
}

.Presentation {
    display: inline;
    color: white;
    border: 2px black solid;
    border-radius: 20px;
    background-color: rgb(75, 75, 75);
    overflow-y: scroll;
    margin-left: 0px;
    text-align: left;
    text-shadow: blanchedalmond 5px;
    word-wrap: break-word;
    border-radius: 3px;
    box-shadow: 2px 3px 3px black;
}

.MegaBox1{
    word-wrap: break-word;
    font-family: monospace ;
    background-color: rgb(12, 24, 48);
    display: grid;
    grid-template-columns: minmax(min-content, 50%) auto;
    grid-template-rows: 600px;
    border: rgb(83, 83, 83) 5px solid;
    border-radius: 3px;
}

.MegaBox2{
    word-wrap: break-word;
    font-family: monospace ;
    background-color: rgb(12, 24, 48);
    display: grid;
    grid-template-columns: minmax(min-content, 50%) auto;
    grid-template-rows: 900px;
    border-radius: 3px;
    height: 50%;
}

.MegaBox1,.MegaBox2{
    margin-top: 1.4em;
}

.Lecteur {
    align-content: center;
    align-self: center;
    justify-self: center;
    margin-bottom:  0px;
    background-color: rgb(0, 0, 0);
    border:rgb(206, 38, 38) 5px solid; 
    border-radius: 5px;
}

span{
    color: white;
    font-size: 2.5em;
}

video {
    display: inline;
    box-sizing: border-box;;
    width: 915px;
    max-height: 600px;
}

img{
    display: block;
    box-sizing: border-box;
    max-height: 852px;
}

@media(max-width: 1250px)
{
    .MegaBox1, .MegaBox2{
        grid-template-rows: min-content auto;
        grid-template-columns: 1fr;
        height: 920px;
    }

    .MegaBox2{
        height: 20%;
    }

    .Presentation{
        min-width: 150px;
    }
    Video, img{
        width: 100%;
        height: auto;
    }
}