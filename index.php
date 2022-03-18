<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




//Head
require_once('./components/head.php');   

//Menu
require_once('./components/navbar.php');

//Cabeçalho
require_once('./components/header.php');

//Página Home
//Grid
?>

<div class="container">
    <div class="row">
       <?php
        //importando os Dados da matriz
        require('data/videoDAO.php');
        $videos = all();

        //percorrendo a matriz
        foreach($videos as $video){
            include('./components/cardVideo.php');
        }
       ?>
    </div><!-- fim da linha(row) -->
</div><!-- fim da container -->

<?php
//Rodapé
require_once('./components/footer.php');

?>













<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br> */