<?php

$img = 'data:image/' . pathinfo(ROOT . "assets/images/favicon.png", PATHINFO_EXTENSION) . ';base64,' . base64_encode(file_get_contents(ROOT . "assets/images/favicon.png"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<style>
    * {
        font-family: "Roboto", Helvetica, sans-serif;
    }
</style>

<body>
    <div style="text-align: center;">
        <div style="display: inline-block; text-align: left;">
            <img src="<?= $img ?>" style="height: 50px;" alt="">
            <div style="display: inline-block; margin-left: 10px;">
                <h4 style="margin: 0;">LULAN INCORPORATION</h4>
                <p style="margin: 0;">Quezon City, Philippines</p>
                <small style="margin: 0;">202-555-0163</small>
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 1.6rem;">
        <h4 style="margin: 0;"><?= $report->subject ?></h4>
        <p style="margin: 0; font-size: 0.8rem;"><?= $report->report_id ?></p>
        <small style="margin: 0; font-size: 0.7rem;"><?= date("Y/m/d h:i A", strtotime($report->report_date)) ?></small>
    </div>

    <div style="margin-top: 1.6rem; text-align: justify;">
        <?= $report->remarks ?>
    </div>

    <div>
        <table style="table-layout: fixed; border-collapse: collapse; border: 1px black solid; width: 100%; margin-top: 1.6rem;">
            <thead>
                <tr>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;">PRODUCT ID</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">PRODUCT NAME</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">QUANTITY</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">ACTUAL COUNT</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($line_items as $item):
                ?>
                <tr style="border: 1px black solid; text-align: right;">
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;"><?= $item->product_id ?></td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;"><?= $item->product_name ?></td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;"><?= $item->quantity ?></td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;"><?= $item->actual_count ?></td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>