<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of zh2, a theme for Dotclear 2.
# based on WP eponym theme from Leo Babuta (http://leobabauta.com and http://zenhabits.net/themes)
#
# Copyright (c) Franck Paul and contributors
# carnet.franck.paul@gmail.com
#
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/main');

# Templates
$core->tpl->addBlock('IfPreviewIsNotMandatory',array('tplZh2Theme','IfPreviewIsNotMandatory'));

class tplZh2Theme
{
	public static function IfPreviewIsNotMandatory($attr,$content)
	{
		$s = $GLOBALS['core']->blog->settings->themes->get($GLOBALS['core']->blog->settings->system->theme.'_style');
		if ($s !== null) {
			$s = @unserialize($s);
			if (is_array($s)) {
				if (isset($s['preview_not_mandatory'])) {
					if ($s['preview_not_mandatory']) {
						return $content;
					}
				}
			}
		}
		return '';
	}
}
