<?php

namespace CheckoutLocalization;

class Translator
{
    private const TRANSLATION_FILES = [
        __DIR__ . '/resources/lang/{local}/approved.php',
        __DIR__ . '/resources/lang/{local}/hard-declines.php',
        __DIR__ . '/resources/lang/{local}/risk-responses.php',
        __DIR__ . '/resources/lang/{local}/soft-declines.php',
    ];

    public function translate(string $code, string $locale = 'en'): ?string
    {
        $files = self::TRANSLATION_FILES;

        $translation = null;

        foreach ($files as $path) {
            $path = str_replace('{local}', $locale, $path);

            $translations = require_once $path;

            if (! is_array($translations)) {
                continue;
            }

            if (array_key_exists($code, $translations)) {
                $translation = $translations[$code];
                break;
            }
        }

        return $translation;
    }
}