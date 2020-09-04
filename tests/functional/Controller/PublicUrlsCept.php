<?php use App\Tests\FunctionalTester;

$I = new FunctionalTester($scenario);
$I->am('Anonymous');
$I->wantTo('Open public urls and see requested page');

$publicUrls = [
    '/',
    '/en/blog/',
    '/en/login',
];

foreach ($publicUrls as $url) {
    $I->amOnPage($url);
    $I->seeResponseCodeIsSuccessful();
    $I->seeCurrentUrlEquals($url);
}
