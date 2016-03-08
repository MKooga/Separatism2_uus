<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('type xxyy in seach bar and not see agar');
$I->amOnPage('/');
$I->fillField('search', 'xxyy');
$I->dontsee('agar');
?>
