<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('check if sorting is performed');
$I->amOnPage('/');
$I->wait(1);
$I->click('/html/body/div/div/div/table/thead/tr/th[1]/a');
$a = $I->grabAttributeFrom('/html/body/div/div/div/table/tbody/tr[1]/td[2]/a', 'href');
$I->click('/html/body/div/div/div/table/thead/tr/th[1]/a');
$b = $I->grabAttributeFrom('/html/body/div/div/div/table/tbody/tr[1]/td[2]/a', 'href');
if ($a != $b) {
    $I->see("agar");
} else {
    $I->dontsee("agar");}