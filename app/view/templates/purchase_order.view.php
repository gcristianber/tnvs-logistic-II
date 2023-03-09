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

    table {
        width: 100%;
    }

    table,
    th,
    tr,
    td {
        border: 1px #000 solid;
        border-collapse: collapse;
    }

    td{
        padding: 20px;
    }

    th {
        padding: 5px 13px;
    }

    .text-underline {
        text-decoration: underline;
    }
</style>

<?php

$path = ROOT . "assets/images/favicon.png";
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

<div class="text-center">
    <h2>PURCHASE REQUEST FORM</h2>
    <small>Date issued: 09/03/2023</small>
</div>

<br>
<p>Special Instructions:</p>
<table>
    <thead>
        <tr>
            <th>Item No.</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Per-Unit Price</th>
            <th>Line Item Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>