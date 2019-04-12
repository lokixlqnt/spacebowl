<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/stylesheets/normalize.css">
  <link rel="stylesheet" href="assets/stylesheets/log.css">
  <link rel="stylesheet" href="assets/stylesheets/text.css">
  <link rel="stylesheet" href="assets/stylesheets/header.css">
  <link rel="stylesheet" href="assets/stylesheets/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
  <section class="main">
    <div id="wrapper">
      <div id="login" class="animate form">
        <form action="mysuperscript.php" autocomplete="on">
          <h1>Se connecter</h1>
          <p>
            <label for="username" class="uname" data-icon="u"> Votre email ou nom d'utilisateur </label>
            <input id="username" name="username" required="required" type="text" placeholder="monpseudo ou monmmail@mail.com" />

            <label for="password" class="youpasswd" data-icon="p"> Votre mot de passe </label>
            <input id="passwordsignin" name="passwordsignin" required="required" type="password" />

            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
            <label for="loginkeeping">Rester connecté</label>

            <input type="submit" value="Login" />

        </form>
      </div>

      <div id="register" class="animate form">
        <form action="mysuperscript.php" autocomplete="on">
          <h1> S'inscrire </h1>
          <p>
            <label for="usernamesignup" class="uname" data-icon="u">Votre pseudo</label>
            <input id="usernamesignup" name="usernamesignup" required="required" type="text" />

            <label for="emailsignup" class="youmail" data-icon="e"> Votre email</label>
            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="monmail@mail.com" />

            <label for="passwordsignup" class="youpasswd" data-icon="p">Votre mot de passe </label>
            <input id="passwordsignup" name="passwordsignup" required="required" type="password" />

            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirmez votre mot de passe </label>
            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" />

            <input type="submit" value="S'inscrire" />

        </form>
      </div>
      </div>
  </section>













  <!-- <section class="main">
    <div class="form">
      <form action="action_page.php">

        <label for="email">E-mail</label>
        <input type="" id="email" name="email" placeholder="">

        <label for="subject">Mot de passe</label>
        <input type="password" id="pass" name="pass" placeholder="">

        <input type="submit" value="Envoyer">
    </div>
  </section> -->
</body>
