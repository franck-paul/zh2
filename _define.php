<?php

/**
 * @brief zh2, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Themes
 *
 * @copyright Franck Paul (contact@open-time.net)
 * @copyright GPL-2.0
 */
declare(strict_types=1);

if (isset($this) && is_object($this) && method_exists($this, 'registerModule') && isset($this->id) && is_string($this->id)) {
    $this->registerModule(
        'zh2',
        'Zen habits (based on eponym Wordpress theme designed by Leo Babuta)',
        'Franck Paul',
        '8.1',
        [
            'date'               => '2026-11-06T10:13:21+0100',
            'requires'           => [['core', '2.36']],
            'type'               => 'theme',
            'information_config' => true,
            'overload'           => true,

            'details'    => 'https://open-time.net/?q=zh2',
            'support'    => 'https://github.com/franck-paul/zh2',
            'repository' => 'https://raw.githubusercontent.com/franck-paul/zh2/main/dcstore.xml',
            'license'    => 'gpl2',
        ]
    );
}
