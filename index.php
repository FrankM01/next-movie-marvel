<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
// Inicializar una nueva sesión de cURL; ch = curl handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrarla por pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la petición y guardar el resultado
$result = curl_exec($ch);

// otra alternativa a curl, seria utilizar file_get_contents
// $result = file_get_contents(API_URL);
// pero esto solo sirve para peticiones GET 


$data = json_decode($result, true);

// Cerrar la sesión de cURL
curl_close($ch);


?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La proxima película de marvel</title>
  <!-- Centered viewport -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">

</head>

<main>
  <!-- <pre style="font-size: 15px; overflow: scroll; height: 250px;">
    <?= var_dump($data) ?>
  </pre> -->
  <section>
    <h2>La proxima película de marvel</h2>
    <img style="border-radius: 16px;" src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"] ?>">

  </section>

  <hgroup>
    <h3>
      <?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días
    </h3>
    <p> Fecha de estreno
      <?= $data["release_date"] ?>
    </p>
    <p> La siguiente película a estrenarse es:
      <?= $data["following_production"]["title"] ?>
    </p>

  </hgroup>

</main>



<style>
  :root {
    color-scheme: light dark;
    font-family: 'Cascadia Code', sans-serif;
  }

  body {
    display: grid;
    place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;

  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;

  }
</style>