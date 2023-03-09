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
<div class="text-center">
    <h2>EMPLOYMENT CERTIFICATE</h2>
</div>
<br>
<p class="text-justify">
    This is to certify that <strong>[Employee Name]</strong> was employed with LULAN Incorporation (Quezon City) from <strong>[Start Date]</strong> to <strong>[End Date]</strong> as <strong>[Employee's Role]</strong> of <strong>[Department Name]</strong>.
</p>

<p class="text-justify">
    This certification is issued upon request of <strong>[Requestor Name]</strong> for employment purposes and not valid for any other purpose.
</p>
<br>
<br>
<br>
<h4>[Manager Name]</h4>
<p>Human Resource Manager</p>