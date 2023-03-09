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
<div class="text-center">
    <h2>VENDOR CONTRACT</h2>
    <h3>for</h3>
    <h2>[CONTRACT TITLE]</h2>
    <h4>[PURCHASE REQUEST ID]</h4>
</div>
<br>
<p class="text-justify">This Vendor Contract, herein referred to as “Contract,” is made effective on <strong>[MM/DD/YYYY]</strong>  by and between /, herein frequently referred to as "Vendor," and /, herein frequently referred to as "Lulan Inc.."</p>
<p class="text-justify">Vendor and Lulan Inc. may be referred to as individually as "Party" or collectively as the "Parties."</p>
<strong>Whereas:</strong>
<p>A) The Vendor is engaged in the business of supplying certain goods as defined below;</p>
<p>B) The Lulan Inc. wishes to acquire certain goods from the Vendor as defined below; </p>
<p>Now, therefore, the Parties agree as follows:</p>
<br>
<strong>Scope</strong>
<p class="text-justify">
The purpose of this Contract is to set out the provisions under which Vendor will deliver to Lulan Inc. the "Products" as described in the following clause. The purchases of all Products by Lulan Inc. from Vendor shall be exclusively subject to the provisions of this Contract. 
</p>
<p class="text-justify">
Both Parties acknowledge that this Contract forms the basis of the contractual relationship between the Parties and waive application of their respective standard terms and conditions that typically apply to such transactions.
</p>
<strong>Products</strong>
<p>The Vendor shall supply the following Products: </p>
<p class="text-justify">
The purpose of this Contract is to set out the provisions under which Vendor will deliver to Lulan Inc. the "Products" as described in the following clause. The purchases of all Products by Lulan Inc. from Vendor shall be exclusively subject to the provisions of this Contract. 
</p>

<p class="text-italic">(Describe the exact products to be supplied along with any delivery schedule that may apply i.e. delivery in set installments, regular ongoing pre-scheduled deliveries, etc.)</p>

<strong>Supply of products</strong>
<p class="text-justify">
During the term of this Contract and any extension thereof, the Vendor shall sell and supply the products to the Lulan Inc., and the Lulan Inc. shall buy the products from Vendor exclusively/non-exclusively. The Lulan Inc. shall have the right to inspect the Products upon delivery for any potential deficiencies or defects and to communicate any such issues to the Vendor for appropriate rectification as elaborated on in the Warranties clause of this Contract.
</p>
<strong>Orders</strong>
<p class="text-justify">
Every transaction between the Vendor and the Lulan Inc. shall be evidenced by an invoice. A request shall be made by the Lulan Inc. to the Vendor in writing containing the specific product orders and desired quantity.
</p>
<strong>Pricing</strong>
<p class="text-justify">
The Price to be paid shall be for the sum of <strong>[Amount]</strong> each/in total, including taxes. The pricing shall remain locked for a period of <strong>[Number of days, Weeks, Months, Years]</strong> .
</p>

<strong>Invoicing and Payment Terms</strong>
<p class="text-justify">
Upon receipt of an invoice from the Vendor, the Lulan Inc. shall have (number) days/months to pay the total amount indicated in the invoice. <strong>[Include any additional payment terms such as acceptable payment methods, installments, etc.]</strong> </p>

<strong>Ownership and Risk</strong>
<p class="text-justify">
Ownership of the goods sold shall only transfer to the Lulan Inc. upon delivery by the Vendor to the Lulan Inc. Vendor shall assume all risks in the delivery of the goods. Any damage to the goods that occurs prior to and/or during delivery shall be the responsibility of the Vendor.</p>

<strong>Warranty</strong>
<p class="text-justify">
The Vendor warrants that it is authorized to pass ownership of the Products to the Lulan Inc.. The Vendor warrants that the products sold and delivered to the Lulan Inc. shall conform to the standard technical and quality specifications required and shall be free from defects.</p>
<p class="text-justify">
The Vendor warrants that it is authorized to pass ownership of the Products to the Lulan Inc.. The Vendor warrants that the products sold and delivered to the Lulan Inc. shall conform to the standard technical and quality specifications required and shall be free from defects.
</p>

<strong>Force Majeure</strong>
<p class="text-justify">
Vendor shall not be held responsible for delays or damages caused by reason of force majeure such as due to flood, earthquake, war, or in cases of inclement weather that shall impact the delivery of the goods to the Lulan Inc. in any way. Vendor shall notify the Lulan Inc. as soon as possible regarding any such incident and issue notice in writing thereafter.</p>

<strong>Term and Termination</strong>
<p class="text-justify">
This Contract shall begin on the date listed at the beginning of this document and shall remain in effect until <strong>[insert date or a period of time, i.e., one year from commencement date]</strong>  unless this Contract is terminated sooner as listed in this provision or elsewhere within this Contract. </p>
<p class="text-justify">
Each Party shall have the ability to terminate this Contract for good cause, defined as any material breach of this Contract or in the event of but not limited to either Party's bankruptcy or insolvency, criminal misconduct related to the operation of its business, material misrepresentation in connection with this Contract, behavior that damages the other Party's reputation, or failure to make payments. Termination shall be given in the form of a written notice.
</p>

<strong>Governing Law</strong>
<p class="text-justify">This Contract shall be governed in accordance with the laws of the Republic of the Philippines.</p>

<strong>Severability</strong>
<p class="text-justify">If any provisions hereto are found to be invalid by a competent court, such invalidity shall affect only the said provision, and the rest of the remaining provisions shall remain valid and enforceable.</p>

<strong>Contract Modification</strong>
<p class="text-justify">Any modifications or alterations to this Contract shall require the consent of both Parties hereto in writing.</p>

<strong>Waiver</strong>
<p class="text-justify">The failure of either Party to insist upon the strict compliance of any of the conditions, terms, and covenants shall not be deemed as a waiver or relinquishment of any of the rights or remedy that Party may have. No waiver of either Party hereto shall be considered as having been made unless otherwise such Party executes it in writing.</p>

<strong>Assignment</strong>
<p class="text-justify">Unless otherwise expressly agreed to in writing as a Contract modification by each Party, neither Party may assign the rights, liabilities, obligations, or interests hereunder.</p>
<p>The Parties hereto have executed this Contract on the day above written.</p>

<br>
<br>
<div class="space-between">
    <div>
        <strong>[Vendor Name]</strong>
        <p>[Position]</p>
    </div>
    <div>
        <strong>[Client Name]</strong>
        <p>[Position]</p>
    </div>
</div>