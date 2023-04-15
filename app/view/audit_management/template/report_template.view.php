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
        <h4 style="margin: 0;">INVENTORY AUDIT FOR</h4>
        <p style="margin: 0; font-size: 0.8rem;">RFN-761DHJA1</p>
        <small style="margin: 0; font-size: 0.7rem;">03 Apr 2023</small>
    </div>

    <div style="margin-top: 1.6rem; text-align: justify;">
        <p>Dear Mr/Mrs. Dela Cruz,</p>
        <p>
            This is the report of your request Office Supplies as of April 04, 2023 there's no discrepancies found in this products. I also attached some additional files and evidences used during the audit, Thank you!.
        </p>
    </div>

    <div>
        <table style="table-layout: fixed; border-collapse: collapse; border: 1px black solid; width: 100%; margin-top: 1.6rem;">
            <thead>
                <tr>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">#</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;">PRODUCT NAME</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">QUANTITY</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">UNIT COST</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">TOTAL</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;">ACTUAL COUNT</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">VARIANCE</th>
                    <th style="font-size: 0.8rem; border: 1px black solid; text-transform: uppercase; padding: 10px 16px;white-space: nowrap;">ACCURACY</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border: 1px black solid; text-align: right;">
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">001</td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">Chips</td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">56</td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">P 16.00</td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">P 896.00</td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">56</td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">0</td>
                    <td style="font-size: 0.8rem; border: 1px black solid; padding: 10px 16px;">100%</td>
                </tr>
            </tbody>
        </table>
    </div>


    <div style="text-align: center; margin-top: 1.6rem;">
        <p style="margin: 0; font-size: 0.8rem;">Overall Accuracy</p>
        <h4 style="margin: 0;">100%</h4>
    </div>

    <div style="margin-top: 10rem;">
        <table style="width: 100%; ">
            <tbody>
                <tr>
                    <td style="border-top: 1px black solid; text-align: center;">Inventory Auditor</td>
                    <td style="padding-left: 4rem; padding-right: 4rem;"></td>
                    <td style="border-top: 1px black solid; text-align: center;">Inventory Auditor</td>
                </tr>

            </tbody>
        </table>
    </div>




</body>

</html>