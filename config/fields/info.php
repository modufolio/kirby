<?php

use Kirby\Toolkit\I18n;

return [
    'props' => [
        /**
         * Text to be displayed
         */
        'text' => function ($value = null) {
            return I18n::translate($value, $value);
        },
    ],
    'computed' => [
        'text' => function () {
            if (empty($this->text) === false) {
                return $this->kirby()->kirbytext($this->toString($this->text));
            }
        }
    ],
    'save' => false,
];
