<?php  session_start();   ?>
<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <title>Recruter les meilleurs profils de secteur automobile avec autorecrute.com,le site spécialisé dans le recrutement automobile-Autorecrute.com</title>
    <link rel='stylesheet' href='style-css/style.css' />
</head>

<body>
    <header>
        <?php
        $color7 = '#d7dae1';
        include('scriptes/menu.php'); ?>
        <?php include('scriptes/recherche.php'); ?>
    </header>
    <div style='margin-left:370;'>
        <div id='sous'>
            <div style='font-weight:100; font-size:13; margin:auto; margin-top:50; margin-left: 105px'><a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a><a href='http://localhost/autorecrute/recruteurs.php'> >Espace recruteur</a> >Création d'un compte</div>
        </div>
        <form id=form method=POST action='bd2.php' onsubmit="return validate()" name='form' style='margin-left:138px;'>
            <p style='margin-left:100px; color: darkred; font-size: 25px; font-family: sans-serif;'>Créez un compte recruteur en quelques clics</p></br>
            <div class="elem-form">
                *Nom de la société<input type=text name=nom style='margin-bottom:10; margin-left:30;' required /></br>
                *Type d'entreprise<select name=type style='margin-bottom:10; margin-left:34;' >
                    <option>Séléctionnez un type d'entreprise</option>
                    <option>Agence d'intérim</option>
                    <option>Cabinet de recrutement</option>
                    <option>Entreprise</option>
                </select></br>
                *Pays<select name=pays style='margin-bottom:10; margin-left:108;'>
                    <option value='selectionnez un pays'>Sélectionnez un pays</option>
                    <option>France</option>
                    <option>Belgique</option>
                    <option>Luxembourg</option>
                    <option>Allemagne</option>
                    <option>Royaume-Uni</option>
                    <option>Afghanistan</option>
                    <option>Afrique de Sud</option>
                    <option>Albanie</option>
                    <option>Algérie</option>
                    <option>Andorre</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antigua-et-Barbuda</option>
                    <option>Antilles Néérlandaises</option>
                    <option>Arbie Saoudite</option>
                    <option>Argentine</option>
                    <option>Arménie</option>
                    <option>Aruba</option>
                    <option>Australie</option>
                    <option>Autriche</option>
                    <option>Azerbaidjan</option>
                    <option>Bahamas</option>
                    <option>Bahrein</option>
                    <option>Bande de Gaza</option>
                    <option>Bangladesh</option>
                    <option>Barbade</option>
                    <option>Beliz</option>
                    <option>Bénin</option>
                    <option>Bermudes</option>
                    <option>Bhoutan</option>
                    <option>Bilérussie</option>
                    <option>Bolivie</option>
                    <option>Bosnie-Herzégovine</option>
                    <option>Botswana</option>
                    <option>Brésil</option>
                    <option>Brunei Darussalam</option>
                    <option>Bulgarie</option>
                    <option>Burkina Faso</option>
                    <option>Burundi</option>
                    <option>Cambodge</option>
                    <option>Cameroun</option>
                    <option>Canada</option>
                    <option>Cap vert</option>
                    <option>Chili</option>
                    <option>Chine</option>
                    <option>Chypre</option>
                    <option>Cisjordanie</option>
                    <option>Colombie</option>
                    <option>Comores</option>
                    <option>Congo</option>
                    <option>Cook Islands</option>
                    <option>Corée du Nord</option>
                    <option>Corée du Sud</option>
                </select></br>
                *Adresse<input type=text name=adresse style='margin-bottom:10; margin-left: 88px;' required /></br>
                *Code postal<input type=text name=postal style='margin-bottom:10; margin-left: 65px;' required /></br>
                *Ville<input type=text name=ville style='margin-bottom:10; margin-left: 106px;' required /></br>
                *Téléphone<input type=number name=telephone maxlength=10 style='margin-bottom:10; margin-left: 72px;' required /></br>
                Fax<input type=number name=fax1 maxlength=10 style='margin-bottom:10; margin-left: 120px;' /></br>
                Site web<input type=text name=site style='margin-bottom:10; margin-left: 91px;' /></br>
                <input type="checkbox" id="mycheck" onclick="myfunction()" />Ajouter une adresse de facturation</br>
                <p id="texte" style="display:none">*Adresse de facturation<input type=text name=adrfact style='margin-bottom:10; margin-left: 65px;'></br>
                    *Code Postal de facturation<input type=text name=postalfact style='margin-bottom:10; margin-left: 40px;'></br>
                    *Ville de facturation<input type=text name=villefact style='margin-bottom:10; margin-left: 83px;'></br>
                </p>
                </br>
                <span style='margin-bottom:10; margin-left:325;'>*Obligatoire </span></br>
                <b style='margin-bottom:10; color:red;'>Logo</b></br><img src='images/2918.png' style='box-sizing: border-box;' />
                <span><input type="file" name="myfile"></span>

            </div>
            </br>
            <div class='elem-form'>
                <b>Informations sur l’administrateur du compte</b></br>
                Titre de civilité<select name=civilite style='margin-bottom:10; margin-left:48; '>
                    <option>Monsieur,Madame</option>
                    <option value='M.'>M.</option>
                    <option value='Mme'>Mme</option>
                </select></br>
                *Nom<input type=text name=nom2 style='margin-bottom:10; margin-left:101;' required /></br>
                *Prénom<input type=text name=prenom style='margin-bottom:10; margin-left:84;' required /></br>
                *Fonction<input type=text name=fonction style='margin-bottom:10; margin-left:76;' required /></br>
                *E-mail<input type=text name=mail style='margin-bottom:10; margin-left:89;' required /></br>
                *Mot de passe<input type=password name=mtp style='margin-bottom:10; margin-left:51; ' required /></br>
                <p style='background:#bce8f1; color:#31708f; margin-left:48;padding:10;width: 260px;'>Votre mot de passe doit faire plus de 12 caractères
                </p></br>
                *Confirmation</br> Mot de passe<input type=password name=confmtp style='margin-top: -20px;margin-bottom:10; margin-left:64;' required /></br>
                *Téléphone<input type=number maxlength=10 name=tele style='margin-bottom:10;margin-left:72;' required /></br>
                Téléphone Portable<input type=number maxlength=10 name=teleptb style='margin-bottom:10;margin-left:27;' /></br>
                Fax<input type=number maxlength=10 name=fax2 style='margin-bottom:10; margin-left:120;' /></br>
                <span style='margin-bottom:10; margin-left:408;  background: white; height:33px;   width: 260px;'>*Obligatoire</span>
            </div>
            <input type=submit name='btn' value='CRÉER LE COMPTE' class='btn-form' />
        </form>


    </div>

    <?php include('scriptes/footer.php'); ?>
</body>

</html>
<script>
    function validate() {
        var password = document.forms["form"]["mtp"].value;
        var confirm = document.forms["form"]["confmtp"].value;
        var gmail = document.forms["form"]["mail"].value;
        var exp = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

        if (password != confirm) {
            alert("Les mots de passe ne sont pas identiques");
            return false;
        }
        if (password.length <=  12) {
            alert("votre mot de passe doit respecter les conditions");
            return false;
        }
        if (!exp.test(gmail)) {
            alert("L’email n’est pas au bon format");
            return false;
        }
    }

    function myfunction() {
        var checkBox = document.getElementById("mycheck");
        var text = document.getElementById("texte");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>