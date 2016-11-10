<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Register new user as private');
$I->amOnPage('/');
$I->click('.header-sign__auth._action');
$I->click('.b-popup-register__type-private');
$I->waitForElement('.b-modal__window', 30); // secs
$I->fillField('#user-name', 'vasya');
$I->fillField('#user-passport', 'passport');
$I->fillField('#user-email', 'vasya@tut.by');
$I->fillField('#user-pass', '1111');
$I->fillField('#user-pass-repeat', '1111');
$I->fillField('#user-tel', '375291111111');
$I->click('.register_button.register_button.js-submitBtn');
$I->waitForElement('.response-message', 10); // secs
$I->seeInField('.response-message','Регистрация успешно завершена');
$I->dontSeeElement('.header-sign__reg._action');
$I->dontSeeElement('.header-sign__auth._action');
$I->seeInField('.header-sign__login','vasya');
$I->click('.login-nav__link');
$I->seeInField('#register-block__name','vasya');
$I->seeInField('#register-block__field-email','vasya@tut.by');
?>