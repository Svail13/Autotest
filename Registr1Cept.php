<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Register new user as org');
$I->amOnPage('/');
$I->click('.header-sign__auth._action');
$I->click('.b-popup-register__type-org.b-popup-register__type-org-active');
$I->waitForElement('.b-modal__window', 30); // secs
$I->fillField('#user-name', 'ivan');
$I->fillField('#user-email', 'ivan@tut.by');
$I->fillField('#user-pass', '1111');
$I->fillField('#user-pass-repeat', '1111');
$I->fillField('#user-site', 'www.ivanov.ru');
$I->fillField('#user-city', 'Minsk');
$I->fillField('#user-zipadr', 'ulica ivanovskaya 1');
$I->fillField('#user-zipcode', '11111');
$I->fillField('#user-tel', '375291111111');
$I->fillField('#user-lname', 'ivanko');
$I->fillField('#user-ladr', 'MINSK, Pobediteley - 1');
$I->fillField('#user-unn', '111111111111');
$I->fillField('#user-account', '123456789');
$I->fillField('#user-bank', 'MTBank');
$I->fillField('#user-bankcode', '715');
$I->click('.register_button.register_button.js-submitBtn');
$I->waitForElement('.response-message', 10); // secs
//response-message    Регистрация успешно завершена
$I->seeInField('.response-message','Регистрация успешно завершена');
$I->dontSeeElement('.header-sign__reg._action');
$I->dontSeeElement('.header-sign__auth._action');
$I->seeInField('.header-sign__login','ivan');
$I->click('.header-sign__login');
$I->click('.login-nav__link');
$I->seeInField('#register-block__name','ivan');
$I->seeInField('#register-block__field-email','ivan@tut.by');
?>