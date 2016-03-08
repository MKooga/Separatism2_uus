<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('type agar in seach bar and see agar');
$I->amOnPage('/');
$I->fillField('search', 'agar');
$I->see('agar');
?>