<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Initially developped for :
 * Université de Cergy-Pontoise
 * 33, boulevard du Port
 * 95011 Cergy-Pontoise cedex
 * FRANCE
 *
 * UCP fordson based theme
 *
 * @package   theme_fordsonucp
 * @copyright 2019 Laurent Guillet <laurent.guillet@u-cergy.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * File : settings.php
 * Settings file. Actual settings are in other files.
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    // Note new tabs layout for admin settings pages.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingfordsonucp',
            get_string('configtitle', 'theme_fordson'));

    require('settings/presets_settings.php');
    require('settings/presets_adjustments_settings.php');
    require('settings/image_settings.php');
    require('settings/colours_settings.php');
    require('settings/content_settings.php');
    require('settings/menu_settings.php');
    require('settings/fpicons_settings.php');
    require('settings/modchooser_settings.php');
    require('settings/slideshow_settings.php');
    require('settings/markettiles_settings.php');
    require('settings/footer_settings.php');
    require('settings/customlogin_settings.php');
}