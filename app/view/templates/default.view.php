<style>
    .img-header {
        height: 50px;
        width: 50px;
    }

    .text-center {
        text-align: center;
    }

    .text-justify {
        text-align: justify;
    }

    .text-italic{
        font-style: italic;
    }

    html {
        font-family: Arial, Helvetica, sans-serif;
    }

</style>

<?php

$path = ROOT."assets/images/favicon.png";
$path_ext = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$logo = 'data:image/' . $path_ext . ';base64,' . base64_encode($data);

?>

<div class="text-center">
    <img class="img-header" src="<?= $logo ?>" alt="">
    <h3>LULAN INCORPORATION</h3>
    <p>416 Sta. Catalina St. Brgy. Holy Spirit Quezon City</p>
    <p>(02) 000-000</p>
</div>
<br>
<br>

<?= $content ?>