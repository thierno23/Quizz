<div class="" style="position: relative;
    top:-18px;">

<head>
    <style>
        p{
    position: absolute;
    top: 2px;
    padding:10px;
    color: black;
    font-family:arial;
    font-size:15px;
}

h3{
    font-family:arial;
    margin-left:6px;

}

hr{
    position: relative;
    background-color: #989898;
    height: 0;
    top: 10px  0px;
    width: 55%;
    float:left;
}
.form-controle{
    width: 60%;
    height: 10%;
    padding: 2px;
}
.label{
    float: left;
    width: 100%;
    margin-left:4%;
    color: black;
    font-size: 20px;
    padding: 1px;
}
.form-input{
    position: relative;
    width: 70%;
    height: 30px;
    border-radius: 5px;
    margin: 1% 3% ;
}
.avatar-text{
    font-size: 20px;
    font-weight: bolder;
}
#div-avatar {
    width: 60%;
    height: auto;
    display: inline-block;
    position: relative;
  }
  input[type=file] {
    left: 30%;
    opacity: 0;
    position: relative;
    bottom: 30px;
    font-size: 20px;
  }
  .btn-file {
    background-color: #51bfd0;
    border: 3px solid #51bfd0;
    color: white;
    border-radius: 5px;
    font-size: 15px;
    position: relative;
    left: 25%;
    font-weight: bold;
  }
  .btn-submit {
    background-color: #51bfd0;
    border: 3px solid #51bfd0;
    color: white;
    border-radius: 2px;
    font-size: 22px;
    position: relative;
    bottom: 30px;
    height: 30px;
    left: 20%;
    font-weight: bold;
  }
  .avatar-img{
      position: absolute;
      left: 75%;
      bottom: 50%;
      width: 15%;
      height: 150px;
      border-radius: 70%;
      border: 3px solid #51bfd0;
  }
#avatar-texte{
    position: absolute;
    left: 72%;
    bottom: 40%;
    font-size: 20px;
    font-weight: bolder;

}
#img{
    max-width: 100%;
    max-height: 100%;

}
.error-form{
    color: red;
    width: 100%;
    font-size: 16px;
    font-weight: bold;
}
    </style>
</head>
<body>
    <h3>S'INSCRIRE</h3>
    <p>Pour proposer des quizz</p>
    <hr>
    <form method="post" id="myform">
        <div class="form-controle">
            <label for="" class="label">Prénom</label>
            <input type="text" class="form-input" error="error-1" name="prenom" id="">
            <div class="error-form" id="error-1"></div>
        </div>
        <div class="form-controle">
            <label for="" class="label">Nom</label>
            <input type="text" error="error-2" class="form-input" name="nom" id="">
            <div class="error-form" id="error-2"></div>
        </div>
        <div class="form-controle">
            <label for="" class="label">Login</label>
            <input type="text" error="error-3"  class="form-input" name="login" id="login">
            <div class="error-form" id="error-3"><?= isset($message) ? $message : "" ?></div>
        </div>
        <div class="form-controle">
            <label for="" class="label">Password</label>
            <input type="password" error="error-4" class="form-input" name="pwd1" id="">
            <div class="error-form" id="error-4"></div>
        </div>
        <div class="form-controle">
            <label for="" class="label">Confirmer Password</label>
            <input type="password" error="error-5" class="form-input" name="pwd2" id="">
            <div class="error-form" id="error-5"><?= isset($msg) ? $msg : "" ?></div>
        </div>
        <div class="form-controle" id="div-avatar">
            <label for="" class="avatar-text" style=" margin-left: 10px;">Avatar</label>
            <label class="btn-file">Choisir un fichier</label>
            <input type="file" accept="image/jpeg, image/png" onchange="load_image(this)" name="file" id="fichier">
        </div>
        <div class="form-controle">
            <input type="submit" value="Créer compte" class="btn-submit" name="btn" id="">
        </div>
        <div class="avatar-img"><img src="" id="img" style="width:100%;height:100%;border-radius: 75%;" alt=""></div>
        <label for="" id="avatar-texte">Avatar du Joueur</label>
    </form>
    

</body>
</html>
</div>
