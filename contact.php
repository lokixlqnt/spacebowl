<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/stylesheets/normalize.css">
  <link rel="stylesheet" href="assets/stylesheets/contact.css">
  <link rel="stylesheet" href="assets/stylesheets/text.css">
  <link rel="stylesheet" href="assets/stylesheets/header.css">
  <link rel="stylesheet" href="assets/stylesheets/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
  <?php include('header.php'); ?>

  <section class="main">
    <h1>Vous souhaitez nous contacter ? Remplissez le formulaire <span class="orange">ci-dessous</span>, nous nous efforcerons de vous répondre dans les <span class="orange">meilleurs délais</span>.</h1>
    <div class="form">

      <form action="action_page.php">

        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="">

        <label for="subject">Le sujet de votre requête</label>
        <input type="text" id="subject" name="subject" placeholder="">

        <label for="msg">Votre message ici</label>
        <textarea id="msg" name="msg" placeholder="" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">

      </form>
    </div>

  </section>
  <?php include('footer.php'); ?> 

</body>
