<?php
/**
 * @brief zh2, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
declare(strict_types=1);

namespace Dotclear\Theme\zh2;

use dcCore;
use dcNsProcess;

class Frontend extends dcNsProcess
{
    public static function init(): bool
    {
        static::$init = My::checkContext(My::FRONTEND);

        return static::$init;
    }

    public static function process(): bool
    {
        if (!static::$init) {
            return false;
        }

        // Templates
        dcCore::app()->tpl->addBlock('IfPreviewIsNotMandatory', [FrontendTemplate::class, 'IfPreviewIsNotMandatory']);

        // Behaviors
        dcCore::app()->addBehaviors([
            'tplIfConditions' => [FrontendBehaviors::class, 'tplIfConditions'],
        ]);

        return true;
    }
}