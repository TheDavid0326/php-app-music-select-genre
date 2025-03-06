<?php 
require_once('const.php');
require_once('functions.php');

$genre = $_GET['genre'] ?? genres[rand(0, count(genres) - 1)];
$API_URL = "https://itunes.apple.com/search?term=$genre&media=music&entity=album&limit=10";

$data=get_data($API_URL);
$data['genre']= $genre;
?>

<?php echo render_template('head', $data); // Hay que poner echo porque recibimos un string de la función ?>
<?php echo render_template('body', $data); ?>
<?php require('styles.php'); ?>




