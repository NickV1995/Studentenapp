<?php

require_once 'pdo.php';

$db = verbinden();
if(is_null($db)) die('<h1>Database verbinding mislukt...');

echo 'Gelukt!';

include 'includes/header.php';
?>

<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>De studentenlijst</h1>
  </div>

  <div class="row table-responsive">
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Naam</th>
          <th scope="col">Email</th>
          <th scope="col">Telefoonnummer</th>
          <th scope="col">Vakkenpakket</th>
          <th scope="col">Actie</th>
        </tr>
      </thead>
      <tbody>
        <?php //foreach ($students as $student):?>
        <tr>
          <td><?php ?></td>
          <td><?php ?></td>
          <td><?php ?></td>
          <td><?php ?></td>
          <td><?php ?></td>
          <td class="actions">
            <a href="includes/student" data-toggle="tooltip" title="Bekijken"><i class="fas fa-info-circle"></i></a>
            <a href="" data-toggle="tooltip" title="Bewerken"><i class="far fa-edit"></i></a>
            <a href="" data-toggle="tooltip" title="Verwijderen"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        <?php //end foreach;?>
      </tbody>
    </table>
  </div>

</main>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>