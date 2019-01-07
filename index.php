<?php
$month = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre' );
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part5 exe1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">MONTH</th>
        <th scope="col"><?= $month[0] ?></th>
        <th scope="col"><?= $month[1] ?></th>
        <th scope="col"><?= $month[2] ?></th>
        <th scope="col"><?= $month[3] ?></th>
        <th scope="col"><?= $month[4] ?></th>
        <th scope="col"><?= $month[5] ?></th>
        <th scope="col"><?= $month[6] ?></th>
        <th scope="col"><?= $month[7] ?></th>
        <th scope="col"><?= $month[8] ?></th>
        <th scope="col"><?= $month[9] ?></th>
        <th scope="col"><?= $month[10] ?></th>
        <th scope="col"><?= $month[11] ?></th>
      </tr>
    </thead>
    <tbody>
      <tr class="table-success">
        <th scope="row">exercice1</th>
        <td><?= $month[0] ?></td>
        <td><?= $month[1] ?></td>
        <td><?= $month[2] ?></td>
        <td><?= $month[3] ?></td>
        <td><?= $month[4] ?></td>
        <td><?= $month[5] ?></td>
        <td><?= $month[6] ?></td>
        <td><?= $month[7] ?></td>
        <td><?= $month[8] ?></td>
        <td><?= $month[9] ?></td>
        <td><?= $month[10] ?></td>
        <td><?= $month[11] ?></td>
      </tr>
      <tr class="table-danger">
        <th scope="row">exercice2</th>
        <td></td>
        <td></td>
        <td><?= $month[2] ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="table-info">
        <th scope="row">exercice3</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?= $month[5] ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="table-active">
        <th scope="row">exercice4</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?= $month[7] = 'Août'/*str_replace("u", "û", $month[7]);*/?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
