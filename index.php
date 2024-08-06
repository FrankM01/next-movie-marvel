<?php
require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();
?>

<?php render_templates('head', ["title" => $next_movie_data["title"]]); ?>
<?php render_templates('main', array_merge(
  $next_movie_data,
  ["until_message" => $next_movie->get_until_message()]
)); ?>
<?php render_templates('styles'); ?>

