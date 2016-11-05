<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('log in as regular user');
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->waitForElement('.b-modal__window', 15); // secs
$I->fillField('#email', '1313@tut.by');
$I->fillField('#pass', '1111');
$I->click('.auth_button.js-submitBtn');
$I->waitForElementNotVisible('.header-sign__reg._action', 15);
$I->waitForElementNotVisible('.header-sign__auth._action', 15);


$I->see('eeee', '.header-sign__login');
$I->click('.header-sign__login');
$I->click('.login-nav__link');

$I->seeElement('input .user-info__field-name [value="eeee"]');
$I->seeElement('input .user-info__field-email [value="1313@tut.by"]');

$I->seeCurrentUrlEquals('/user/update/71');
?>