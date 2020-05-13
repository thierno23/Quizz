
<?php
    require_once('./traitement/fonctions.php');
    is_connect();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/liste-question.css">
    <title>Quizz</title>
</head>
<style >
 
#block_G{
    border:1px solid  silver;
    border-radius:5px;
    width:35%;
    margin-left:1%;
}
#block_D{
width:60%;
float:right;
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
    top: 30%;
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
    height: 85%;
    top: 20%;
    left: 2%;
    border: 1px solid darkturquoise;
    border-radius: 5px;
    background-color: white;
    position: absolute;
    display :flex;
}

.formel {
    background-image: linear-gradient(to top, #5ac2d2, white);
    width: 100%;
    height: 30%;
    border-radius: 5% 5% 0 0;
}

.pp{
    position: relative;
    left: 5%;
    top: 10%;
    width: 25%;
    height: 70%;
    border-radius: 50%;
    border: #6e9393 solid 1.5px;
}
.pp img{
    position: relative;
   
    top: 15%;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
.personal{
    position: relative;
    width: 70%;
    height: 50%;
    left: 100%;
    bottom: 100%;
    font-family:arial;
}
#prenom{
    font-size: 1.2em;
    font-variant: normal;
    color: white;
    position: relative;
    top: 30%; 
    padding:5%;
    margin-left:15px;

}
#nom{
    padding:5%;
    font-size: 1.2em;
    font-variant: normal;
    color: white;
    position: relative;
    bottom: 20%;
    left: 20%; 
    margin-left:15px;

}

.list{
    background-color: white;
    width: 100%;
    height: 70%;
    margin-top:50px;
}

.li {
    width: 100%;
    height: 25%;
}
li { background: transparent none;
margin:20px;
}
a li{ color: #818181; 
        position: relative;
        width: 100%;
        height: 70%;
        padding:7px;
        top: 25%;
        right: 10%;
        font-size:20px;
        list-style: none;
        font-family:arial;
}
.li a li:hover {
    border-left: 5px solid green;
    background-color: #f8f3f0;
} 


.li a {
    text-decoration: none;
}
.text {
    position: relative;
    left: 5%;
    top: 30%;
}
.icon {
    float: right;
    position: relative;
    top: 25%;
    right: 5%;
}

</style>
<body>
<div class="container_page_de_jeu">

    <div class="container-header_page_de_jeu">

            

        <div class="title_page_de_jeu">
            <strong>CRÉER ET PARAMÉRTER VOS QUIZZ</strong>
        </div>
        <form action="" method="POST" id="form-connexion">
            
                <button type="submit" class="btn-form-page_de_jeu"  name="btn_submit_page_de_jeu" id=""><a href="index.php?statut=logout" style="text-decoration: none;color:white;"> Déconnexion</a></button>
        
        </form>

    </div>

    <div class="zone-affichage_page_de_jeu_Questions">
        <div id="block_G">
           <div class="formel">
                    <div class="pp">
                           <img src="" alt="" ><?php echo '<img src="./public/images/upload/' .$_SESSION['user']['photo'].'"'; ?>
                    </div>
                        <div class="personal">

                            <p id="prenom"> <?php   echo $_SESSION['user']['prenom'] ; ?> </p>
                            <p id="nom"><?php   echo $_SESSION['user']['nom'] ; ?></p>
                        </div>
                       
           </div>
           <div class="list">
                   <ul>
                      <div class="li"><a href="index.php?lien=accueil&page=1"><li><span class="text">Liste Questions</span><span class="icon"><img src="./public/icones/ic-liste.png" alt=""></span></li></a></div>
                      <div class="li"><a href="index.php?lien=accueil&page=2" ><li><span class="text">Créer Admin</span><span class="icon"><img src="./public/icones/ic-ajout.png" alt="" ></span></li></a></div>
                      <div class="li"><a href="index.php?lien=accueil&page=3"><li><span class="text">Liste Joueurs</span><span class="icon"><img src="./public/icones/ic-liste.png" alt="" ></span></li></a></div>
                      <div class="li"><a href="index.php?lien=accueil&page=4"><li><span class="text">Créer Questions</span><span class="icon"><img src="./public/icones/ic-ajout.png" alt="" ></span></li></a></div>
                   </ul>

            </div>
        
        </div>
        
       
    </div>

    <div id="block_D">

           <?php  
                         if(isset($_GET['page'])){

                             if ($_GET['page'] == 1) {
                                 include 'question.php';
                             }else if ($_GET['page'] == 2) {
                                include 'Creer-admin.php';
                            }else if ($_GET['page'] == 3) {
                                include 'liste-joueur.php';
                            }else if ($_GET['page'] == 4) {
                                include 'Creer-question.php';
                            }else {
                                include 'question.php';
                            }

                         }
           ?>
    </div>

</div>

</html>

