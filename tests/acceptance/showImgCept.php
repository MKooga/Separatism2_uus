<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('see an image from the image folder, mounted by the database');
$I->amOnPage('/');
$I->wait(1);
$I->seeElement('//img[@src="assets/img/agar.png"]');
