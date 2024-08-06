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
      <?= $data["title"] ?> - <?= $until_message ?>
    </h3>
    <p> Fecha de estreno
      <?= $data["release_date"] ?>
    </p>
    <p> La siguiente película a estrenarse es:
      <?= $data["following_production"] ?>
    </p>

  </hgroup>

</main>