<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<div class='compte'>
    
        <form method='POST' action='' onsubmit='return validate()' name='myform'>
            <font color='white' size='5' face='arial'><b>Mon compte</b></font>
            <hr>
            <input type='text' name=mail placeholder='Adresse e-mail' /></br></br>
            <input type='password' name=passwd id=passwd placeholder='Mot de passe' /><span> <i class="material-icons" style='font-size: 17px; color: black; margin-top: -29px; margin-left: 235px; cursor:pointer;' onclick="myFunction()">visibility</i></span></br>
            <p id=mtp onclick='mafonction()' style="cursor:pointer;">>Mot de passe oublié?</p>
            <div style='display:flex; height:50px; width:230px; margin:1; height:35px;'><input type='submit' value='Se connecter' name=connecter style='margin-right:10;height:43px;' />
                <hr>
        </form><form method='POST' action=''>
        <p><a style='cursor:pointer;'>
                <font size='2' color='white'><input type='submit' value='Créer un compte' name='btn' style='margin-top:-11px; margin-left: 9px; width: 100%;'></font>
            </a></p>
    </form>
</div>

</div>
<script>
    function mafonction() {
        var pass = prompt('entrez votre email', 'user@gmail.com');
        if (pass != null) {
            alert('veuillez visiter votre boite email! ');
        } else {
            alert('Veuillez entrer votre email pour récupérer votre mot de passe');
        }
    }

    function myFunction() {
        var x = document.getElementById("passwd");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function validate() {
        var email = document.forms["myform"]["mail"].value;
        var passwd = document.forms["myform"]["passwd"].value;
        var exp = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
        if (!exp.test(email)) {
            alert("L’email n’est pas au bon format");
            return false;
        }

        if (passwd.length <= 12) {
            alert("votre mot de passe est incorrecte");
            return false;
        }

    }
</script>