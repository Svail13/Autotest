<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Send');
$I->amOnPage('/');
$I->click('.header-sign__reg._action');
$I->waitForElement('.b-modal__window', 15); // secs
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
$I->see('Работа добавлена', '.response-message');

$I->click('.header-sign__login');
$I->click('.login-nav__link');
$I->see('Work', '.work__title');
$I->see('BEST IDEA', '.work__nomination');
$I->see('Product', '.work__product');
$I->see('Customer', '.work__customer');
$I->see('site.com', '.work__site-span');
$I->see('1', '.work__series-span');
?>