
<?php
    require_once('./traitement/fonctions.php');
    is_connect();
?>

<div class="container_page_de_jeu">

    <div class="container-header_page_de_jeu">

            <div class="avatar_page_de_jeu">
            <?php 
echo '<img src="./public/images/upload/' .$_SESSION['user']['photo'].'"';

            ?>
                <img src="<?= $_SESSION['user']['photo']; ?>" class="image-ronde_joueur">
                    <div class="nom_prenom_joueur">
                        <p>
                            <strong>
                                <?php
                                    echo $_SESSION['user']['prenom'];
                                ?>
                               
                                <?php
                                    echo $_SESSION['user']['nom'];
                                ?>
                            </strong>
                        </p>
                    </div>
            </div>

        <div class="title_page_de_jeu">
            <strong>BIENVENUE SUR LA PLATFORME DE JEU DE QUIZZ<br> JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRALE</strong>
        </div>
        <form action="" method="POST" id="form-connexion">
            
                <button type="submit" class="btn-form-page_de_jeu"  name="btn_submit_page_de_jeu" id=""><a href="index.php?statut=logout" style="text-decoration: none;color:white;"> Déconnexion</a></button>
        
        </form>

    </div>

    <div class="zone-affichage_page_de_jeu_Questions">
        <div id="block_G">


        
        </div>
        <div id="block_D"></div>
    </div>



    
<style>
#block_G{
    border:1px solid gray;
    width:40%;
    height:100px;
    margin-left:1%;
}
#block_D{
border:1px solid gray;
width:56%;
float:right;
height:100px;
margin-left:2%;
}

.container_page_de_jeu {
    position: relative;
    top: 2%;
    left: 3%;
    height: 96%;
    width: 94%;
    background-color: rgb(231, 223, 223);
}

.container-header_page_de_jeu {
    height: 100px;
    background-color: #51bfd0;
}

.avatar_page_de_jeu {
    color: white;
    font-size: 12px;
    font-weight: bold;
    padding: 5px;
    text-align: center;
    width: 5%;
    height: 100%;
}

.image-ronde_joueur {
    float: left; 
    width : 65px; 
    height : 65px; 
    margin-left: 5%; 
    margin-top: 0%; 
    border: none; 
    -moz-border-radius : 75px; 
    -webkit-border-radius : 75px; 
    border-radius : 75px;
}

.nom_prenom_joueur p{
    float: left; 
    margin-top: 2%; 
    left: 21%; 
    position: relative;
    color: white;
    font-family:arial;
}

.title_page_de_jeu {
    float: left;
    width: 75%;
    position: relative;
    top: -100%;
    left: 7%;
    color: white;
    font-size: 30px;
    font-family:arial;
    font-weight: bold;
    padding: 0px;
    text-align: center;
}

.btn-form-page_de_jeu {
    float: right;
    right: 2%;
    top: 5%;
    padding: 8px;
    background-color: #3addd6;
    font-size: 15px;
    font-weight: bold;
    border-radius: 5px;
    border: 1px solid white;
    font-family:arial;
    position: absolute;
    width: 10%;
    
}

.btn-form_page_de_jeu a {
    text-decoration: none;
    color: white;
}

.form-control_page_de_jeu {
    width: 100%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    font-size: 12px;
    font-weight: bold;
    color: silver;
}


.zone-affichage_page_de_jeu_Questions {
    float: left;
    width: 96%;
    height: 75%;
    top: 20%;
    left: 2%;
    border: 1px solid darkturquoise;
    border-radius: 5px 5px 5px 5px;
    background-color: white;
    position: absolute;
    display :flex;
}


</style>






