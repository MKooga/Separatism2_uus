<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('see mysql data');
$I->amOnPage('/');
$I->see('agar');
?>
