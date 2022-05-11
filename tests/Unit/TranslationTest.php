<?php

use CheckoutLocalization\Translator;

$translator = new Translator();

test('translate approved codes', function () use ($translator) {
    $translation = $translator->translate('10100', 'fr');
    $this->assertEquals($translation, 'Signalé comme une transaction potentiellement risquée');
});

test('translate hard declines codes', function () use ($translator) {
    $translation = $translator->translate('30033', 'fr');
    $this->assertEquals($translation, 'Carte expirée');
});

test('translate risk responses codes', function () use ($translator) {
    $translation = $translator->translate('40104', 'fr');
    $this->assertEquals($translation, 'CVV manquant ou incorrect');
});

test('translate soft declines codes', function () use ($translator) {
    $translation = $translator->translate('20012', 'fr');
    $this->assertEquals($translation, 'Transaction invalide');
});

