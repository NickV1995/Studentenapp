<?php

require_once 'pdo.php';

$db = verbinden();
if(is_null($db)) die('<h1>Database verbinding mislukt...');

echo 'Gelukt!';

include 'includes/header.php';
?>


<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <h1>Welkom op de Studenten webapplicatie</h1>
    <p class="lead">Op deze applicatie kun je studenten, docenten en vakkenpakketten bijhouden.</p>
  </div>

</main><!-- /.container -->


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>