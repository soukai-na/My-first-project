<?php session_start();    ?>

<?php
$server = 'localhost';
$user = 'root';
$passwd = 'P@ssw0rd';

$conn = mysqli_connect($server, $user, $passwd, 'autorecrute');
if (!$conn) {
    echo "error:" . mysqli_connect_error();
}
?>
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
    <div id='sous'>
        <div style='font-weight:100; font-size:13; margin:auto; margin-top:50;margin-left: 500px;'><a href='http://localhost/autorecrute/autorecrute.php'>Acceuil</a><a href='cnx-recruteur.php'> >Espace recruteur</a> >Compte recruteur</div>
    </div>
    <div id='face'>
        <div id='face1'>
            <form method='POST' enctype="multipart/form-data" action='update-donnees-recruteurs.php'>
                <?php
                $req = "SELECT * FROM formulaire2 WHERE prenom='" . $_SESSION['prenom'] . "' and nom='" . $_SESSION['nom'] . "'";
                $query = mysqli_query($conn, $req);
                $sql = mysqli_fetch_array($query);
                ?>
                <p style='font-weight:bold; color:maroon;font-size: 25px;'>Espace Recruteur</p>
                <p style='color: #e6333c;font-size: 15px;'>Données personnelles</p>
                <div class="elem-form" style='margin-left:10;'>
                    *Nom de la société<input type=text name=nom style='margin-bottom:10; margin-left:30;' value='<?php echo $sql['societe'];  ?>' required /></br>
                    *Type d'entreprise
                    <select name='type' style='margin-bottom:10; margin-left:34;'>
                        <option value='Séléctionnez un type d’entreprise'>Séléctionnez un type d'entreprise</option>
                        <option <?php if ('Cabinet de recrutement' == $sql["type"]) {
                                    echo 'selected="selected"';
                                } ?>>Cabinet de recrutement</option>
                        <option <?php if ('Agence d’intérim' == $sql["type"])  echo 'selected="selected"'; ?>>Agence d’intérim</option>
                        <option <?php if ('Entreprise' == $sql["type"]) echo 'selected="selected"'; ?>>Entreprise</option>
                    </select>
                    </br>
                    *Pays<select name=pays style='margin-bottom:10; margin-left:108;'>
                        <option value='selectionnez un pays'>Sélectionnez un pays</option>
                        <option <?php if ('France' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>France</option>
                        <option <?php if ('Belgique' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Belgique</option>
                        <option <?php if ('Luxembourg' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Luxembourg</option>
                        <option <?php if ('Allemagne' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Allemagne</option>
                        <option <?php if ('Royaume-Uni' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Royaume-Uni</option>
                        <option <?php if ('Afghanistan' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Afghanistan</option>
                        <option <?php if ('Afrique de Sud' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Afrique de Sud</option>
                        <option <?php if ('Albanie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Albanie</option>
                        <option <?php if ('Algérie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Algérie</option>
                        <option <?php if ('Andorre' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Andorre</option>
                        <option <?php if ('Angola' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Angola</option>
                        <option <?php if ('Anguilla' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Anguilla</option>
                        <option <?php if ('Antigua-et-Barbuda' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Antigua-et-Barbuda</option>
                        <option <?php if ('Antilles Néérlandaises' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Antilles Néérlandaises</option>
                        <option <?php if ('Arbie Saoudite' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Arbie Saoudite</option>
                        <option <?php if ('Argentine' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Argentine</option>
                        <option <?php if ('Arménie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Arménie</option>
                        <option <?php if ('Aruba' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Aruba</option>
                        <option <?php if ('Australie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Australie</option>
                        <option <?php if ('Autriche' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Autriche</option>
                        <option <?php if ('Azerbaidjan' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Azerbaidjan</option>
                        <option <?php if ('Bahamas' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bahamas</option>
                        <option <?php if ('Bahrein' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bahrein</option>
                        <option <?php if ('Bande de Gaza' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bande de Gaza</option>
                        <option <?php if ('Bangladesh' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bangladesh</option>
                        <option <?php if ('Barbade' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Barbade</option>
                        <option <?php if ('Beliz' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Beliz</option>
                        <option <?php if ('Bénin' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bénin</option>
                        <option <?php if ('Bermudes' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bermudes</option>
                        <option <?php if ('Bhoutan' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bhoutan</option>
                        <option <?php if ('Bilérussie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bilérussie</option>
                        <option <?php if ('Bolivie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bolivie</option>
                        <option <?php if ('Bosnie-Herzégovine' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bosnie-Herzégovine</option>
                        <option <?php if ('Botswana' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Botswana</option>
                        <option <?php if ('Brésil' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Brésil</option>
                        <option <?php if ('Brunei Darussalam' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Brunei Darussalam</option>
                        <option <?php if ('Bulgarie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Bulgarie</option>
                        <option <?php if ('Burkina Faso' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Burkina Faso</option>
                        <option <?php if ('Burundi' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Burundi</option>
                        <option <?php if ('Cambodge' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Cambodge</option>
                        <option <?php if ('Cameroun' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Cameroun</option>
                        <option <?php if ('Canada' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Canada</option>
                        <option <?php if ('Cap vert' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Cap vert</option>
                        <option <?php if ('Chili' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Chili</option>
                        <option <?php if ('Chine' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Chine</option>
                        <option <?php if ('Chypre' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Chypre</option>
                        <option <?php if ('Cisjordanie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Cisjordanie</option>
                        <option <?php if ('Colombie' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Colombie</option>
                        <option <?php if ('Comores' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Comores</option>
                        <option <?php if ('Congo' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Congo</option>
                        <option <?php if ('Cook Islands' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Cook Islands</option>
                        <option <?php if ('Corée du Nord' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Corée du Nord</option>
                        <option <?php if ('Corée du Sud' == $sql["pays"]) {
                                    echo 'selected';
                                } ?>>Corée du Sud</option>
                    </select></br>
                    *Adresse<input type=text name=adresse style='margin-bottom:10; margin-left: 88px;' value='<?php echo $sql['adresse']; ?>' required /></br>
                    *Code postal<input type=text name=postal style='margin-bottom:10; margin-left: 65px;' value='<?php echo $sql['postal']; ?>' required /></br>
                    *Ville<input type=text name=ville style='margin-bottom:10; margin-left: 106px;' value='<?php echo $sql['ville']; ?>' required /></br>
                    *Téléphone<input type=number name=telephone maxlength=10 style='margin-bottom:10; margin-left: 72px;' value='<?php echo $sql['telephone1']; ?>' required /></br>
                    Fax<input type=number name=fax1 maxlength=10 style='margin-bottom:10; margin-left: 120px;' value='<?php echo $sql['fax1']; ?>' /></br>
                    Site web<input type=text name=site style='margin-bottom:10; margin-left: 91px;' value='<?php echo $sql['site']; ?>' /></br>
                    <input type="checkbox" id="mycheck" onclick="myfunction()" />Ajouter une adresse de facturation</br>
                    <p id="texte" style="display:none">*Adresse de facturation<input type=text name=adrfact style='margin-bottom:10; margin-left: 65px;' value='<?php echo $sql['adrfacturation']; ?>'></br>
                        *Code Postal de facturation<input type=text name=postalfact style='margin-bottom:10; margin-left: 40px;' value='<?php echo $sql['postalfacturation']; ?>'></br>
                        *Ville de facturation<input type=text name='villefact' style='margin-bottom:10; margin-left: 83px;' value='<?php echo $sql['villefacturation']; ?>'></br>
                    </p>
                    </br>
                    <span style='margin-bottom:10; margin-left:325;'>*Obligatoire </span></br>
                    <b style='margin-bottom:10; color:red;'>Logo</b></br><img src='images/2918.png' style='box-sizing: border-box;' />
                    <span><input type="file" name="myfile"></span>(
                    <span style='color:#e6333c'><?php echo $sql['file'];  ?></span>)

                </div>
                </br>
                <div class='elem-form' style='margin-left: 10;'>
                    <b>Informations sur l’administrateur du compte</b></br>
                    Titre de civilité<select name=civilite style='margin-bottom:10; margin-left:48; '>
                        <option <?php if ('' == $sql["civilite"]) {
                                    echo 'selected';
                                } ?>>Monsieur,Madame</option>
                        <option <?php if ('M.' == $sql["civilite"]) {
                                    echo 'selected';
                                } ?>>M.</option>
                        <option <?php if ('Mme' == $sql["civilite"]) {
                                    echo 'selected';
                                } ?>>Mme</option>
                    </select></br>
                    *Nom<input type=text name=nom2 style='margin-bottom:10; margin-left:101;' value='<?php echo $_SESSION['nom'];  ?>' required /></br>
                    *Prénom<input type=text name=prenom style='margin-bottom:10; margin-left:84;' value='<?php echo $_SESSION['prenom'];  ?>' required /></br>
                    *Fonction<input type=text name=fonction style='margin-bottom:10; margin-left:76;' value='<?php echo $sql['fonction'];  ?>' required /></br>
                    *E-mail<input type=text name=mail style='margin-bottom:10; margin-left:89;' value='<?php echo $sql['email'];  ?>' required /></br>
                    *Téléphone<input type=number maxlength=10 name=tele style='margin-bottom:10;margin-left:72;' value='<?php echo $sql['telephone2'];  ?>' required /></br>
                    Téléphone Portable<input type=number maxlength=10 name=teleptb style='margin-bottom:10;margin-left:27;' value='<?php echo $sql['teleportable'];  ?>' /></br>
                    Fax<input type=number maxlength=10 name=fax2 style='margin-bottom:10; margin-left:120;' value='<?php echo $sql['fax'];  ?>' /></br>
                    <span style='margin-bottom:10; margin-left:408;  background: white; height:33px;   width: 260px;'>*Obligatoire</span>
                </div>
                <input type='submit' name='button' value='MODIFIER' id=update />
            </form>
            <form onclick="return validate()" name='myform' action='update-donnees-recruteurs.php'>
                <p style='margin-left: 270px; color:#428bca; text-decoration:underline; cursor:pointer;' onclick="myFunction()">
                    Modifier le mot de passe
                </p>
                <div id="myDIV">
                    Mot de passe actuel<input type='password' name='mtp'></br>
                    Nouveau mot de passe <input type='password' name='nvmtp'></br>
                    Confirmation mot de passe <input type='password' name='confmtp'></br>
                    </bR><input type='submit' value='MODIFIER' class='modifier'>
                </div>
            </form>
            <?php
            $_SESSION['prenom'] = $sql['prenom'];
            $_SESSION['nom'] = $sql['nom'];
            ?>
        </div>
        <div id='face2'>
            <form method='POST' action='cnx-recruteur.php'>
                <div class=icon style='margin-left: 100;'><i class='material-icons' name='button' style='cursor:pointer;'>account_circle</i>
            </form>
            <p style='font-size:37;margin-bottom:0px;    font-family: sans-serif;
                                  font-weight: 900;'><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?>

            </p>
            </br><a href='cnx-recruteur.php'><input type='submit' name='button' value='Acceuil' /></a>
            </br><a href='deconnexion-recruteur.php'><button>Deconnexion</button></a>
        </div>
    </div>
    </div>
    </br>

    <?php include('scriptes/footer.php'); ?>
</body>

</html>
<script>
    function myfunction() {
        var checkBox = document.getElementById("mycheck");
        var text = document.getElementById("texte");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }

    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>