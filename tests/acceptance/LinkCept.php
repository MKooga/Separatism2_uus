<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('click on link and go elsewhere');
$I->amOnPage('/');
$I->wait(1);
$I->click('http://www.adityaravishankar.com/projects/games/command-and-conquer');
$I->seeInCurrentUrl('/projects/games/command-and-conquer');