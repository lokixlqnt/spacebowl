<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/stylesheets/normalize.css">
    <link rel="stylesheet" href="assets/stylesheets/reserve.css">
    <link rel="stylesheet" href="assets/stylesheets/text.css">
    <link rel="stylesheet" href="assets/stylesheets/header.css">
    <link rel="stylesheet" href="assets/stylesheets/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  </head>
<body>
  <?php include('header.php'); ?>

    <h1>Réservez dès <span class="orange">maintenant</span> !</h1>
    <?php
    require('date.php');
    $date = new Date();

    $year = date('Y');
    $dates = $date->getAll($year);
    ?>
    <div class="periods">
      <div class="year">  <?php echo $year ?>  </div>
      <div class="months">
        <ul>
          <?php foreach ($date->months as $id=>$m): ?>
          <li><a href="#" id="linkMonth<?php echo $id+1;?>"> <?php echo substr($m, 0, 3);?> </a></li>
        <?php   endforeach; ?>
        </ul>

      </div>
      <?php $dates = current($dates); ?>
      <?php foreach ($dates as $m=>$days): ?>
        <div class="month" id="month<?php echo $m; ?>">
          <table>
            <thead>
              <tr>
                <?php foreach ($date->days as $d): ?>
                  <th><?php echo substr($d, 0, 3); ?></th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php $end = end($days); foreach ($days as $d=>$w): ?>
                  <?php if ($d == 1): ?>
                    <td colspan="<?php echo $w-1; ?>" class="padding"></td>
                  <?php endif; ?>
                  <td>
                    <div class="relative">
                      <div class="day"><?php echo $d; ?></td></div></div>
                  <?php if ($w == 7): ?>
                  </tr><tr>
                  <?php endif; ?>
                <?php endforeach; ?>
                <?php if ($end != 7): ?>
                  <td colspan="<?php echo 7-$end; ?>" class="padding"></td>

                <?php endif; ?>
              </tr>

            </tbody>
          </table>

        </div>
        <?php endforeach; ?>
    </div>

  <?php include('footer.php'); ?>

</body>
