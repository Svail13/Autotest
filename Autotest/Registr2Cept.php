<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Register new user as private');
$I->amOnPage('/');
$I->click('.header-sign__auth._action');
$I->click('.b-popup-register__type-private');
$I->waitForElement('.b-modal__window', 15); // secs
$I->fillField('#user-name', 'vasya');
$I->fillField('#user-passport', 'passport');
$I->fillField('#user-email', 'vasya@tut.by');
$I->fillField('#user-pass', '1111');
$I->fillField('#user-pass-repeat', '1111');
$I->fillField('#user-tel', '375291111111');
$I->click('.register_button.register_button.js-submitBtn');
$I->see('Регистрация прошла успешно', '.response-message');
$I->dontSeeElement('.header-sign__reg._action');
$I->dontSeeElement('.header-sign__auth._action');
$I->see('vasya', '.header-sign__login');
$I->click('.login-nav__link');
$I->see('vasya', '.register-block__name');
$I->see('vasya@tut.by', '.register-block__field-email');
?>