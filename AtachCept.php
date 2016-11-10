<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Send');
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->waitForElement('.b-modal__window', 30); // secs
$I->fillField('#email', '1313@tut.by');
$I->fillField('#pass', '1111');

$I->click('.auth_button.js-submitBtn');
$I->click('.header-sign__login');
$I->click('.header-login__addjob-btn _action');
$I->click('.b-popup-addwork__select addwork-category__select_cont');
$I->selectOption('.b-popup-addwork__select addwork-category__select_cont', 'Индустриальная вертикаль');
$I->selectOption('.addwork-contest__select', 'BEST IDEA');
$I->selectOption('.b-popup-addwork__ul', 'I1. Идея в любом виде рекламы, только реализованные проекты');

$I->fillField('#name_work', 'Work');
$I->fillField('#adv_prod', 'Product');
$I->selectOption('typecompany__radio-span', 'Рекламное агентство:');
$I->fillField('#agency', 'Agency');
$I->fillField('#customer', 'Customer');
$I->fillField('#idea', 'Idea');
$I->selectOption('workseries__radio-span', 'Да');
$I->fillField('#name_series', '1');

$I->fillField('#video', 'video');
$I->fillField('#www', 'site.com');
$I->click('.b-popup-addwork__submit.js-submitBtn');
$I->waitForElement('.response-message', 10); // secs
$I->seeInField('.response-message','Работа добавлена');
$I->click('.header-sign__login');
$I->click('.login-nav__link');

$I->seeInField('#work__title','Work');
$I->seeInField('#work__nomination','BEST IDEA');
$I->seeInField('#work__product','Product');
$I->seeInField('#work__customer','Customer');
$I->seeInField('#work__site-span','site.com');
$I->seeInField('#work__series-span','1');
?>