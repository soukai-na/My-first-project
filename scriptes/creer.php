<div id=comptee style='margin-left:<?php echo $margin;  ?>; height:365;'>
<p>
<form action="inscription.php" method='POST' onsubmit="return validate()" name='myform'>
    <font style='font-size:15; font-family:sans-serif; color:white;'>Inscrivez-vous maintenant et trouvez un emploi rapidement</font>
    </p>
    <hr><a href=https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=77reu8cupyym2y&state=fc68342e58e6e0cfc1b7b33399480ef2&redirect_uri=http%3A%2F%2Fwww.autorecrute.com%2F&scope=r_basicprofile%20r_emailaddress> <img src=images/linkedin.png /></a></br></br>
    <input type='text' name='mail' class='textInput' placeholder='Adresse e-mail' required /></br>
    <p style='font-size:10; color:white;'>Votre mot de passe doit faire plus de 12 caractères</p>
    <input type='password' name='pass' placeholder='Mot de passe' required /></br></br>
    <input type='password' name='confpass' placeholder='Confirmation du mot de passe' required /></br>
    <p style='display:flex;'><input type='submit' name='btn' value="S'inscrire" style='width:40%;' />
        <span style='margin-left:50; color:white;'>Déjà membre ?</br><a href=<?php echo $link; ?>>Connectez-vous</a></span></p>
</form>
</div>
<script>
    function validate() {
        var email = document.forms["myform"]["mail"].value;
        var passwd = document.forms["myform"]["pass"].value;
        var conf = document.forms["myform"]["confpass"].value;
        var exp = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

        if (passwd != conf) {
            alert("Les mots de passe ne sont pas identiques");
            return false;
        }
        if (passwd.length <= 12) {
            alert("votre mot de passe doit respecter les conditions");
            return false;
        }
        if (!exp.test(email)) {
            alert("L’email n’est pas au bon format");
            return false;
        }
    }
</script>