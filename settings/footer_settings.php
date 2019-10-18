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
 * File : settings/footer_settings.php
 * Settings files copied from Fordson.
 */

defined('MOODLE_INTERNAL') || die();

/* Social Network Settings */
$page = new admin_settingpage('theme_fordsonucp_footer', get_string('footerheading', 'theme_fordson'));
$page->add(new admin_setting_heading('theme_fordsonucp_footer', get_string('footerheadingsub', 'theme_fordson'), format_text(get_string('footerdesc' , 'theme_fordson'), FORMAT_MARKDOWN)));

// footer branding
$name = 'theme_fordsonucp/brandorganization';
$title = get_string('brandorganization', 'theme_fordson');
$description = get_string('brandorganizationdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// footer branding
$name = 'theme_fordsonucp/brandwebsite';
$title = get_string('brandwebsite', 'theme_fordson');
$description = get_string('brandwebsitedesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// footer branding
$name = 'theme_fordsonucp/brandphone';
$title = get_string('brandphone', 'theme_fordson');
$description = get_string('brandphonedesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// footer branding
$name = 'theme_fordsonucp/brandemail';
$title = get_string('brandemail', 'theme_fordson');
$description = get_string('brandemaildesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Footnote setting.
$name = 'theme_fordsonucp/footnote';
$title = get_string('footnote', 'theme_fordson');
$description = get_string('footnotedesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// This is the descriptor for socialicons
$name = 'theme_fordsonucp/socialiconsinfo';
$heading = get_string('footerheadingsocial', 'theme_fordson');
$information = get_string('footerdesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Website url setting.
$name = 'theme_fordsonucp/website';
$title = get_string('website', 'theme_fordson');
$description = get_string('websitedesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Blog url setting.
$name = 'theme_fordsonucp/blog';
$title = get_string('blog', 'theme_fordson');
$description = get_string('blogdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Facebook url setting.
$name = 'theme_fordsonucp/facebook';
$title = get_string(        'facebook', 'theme_fordson');
$description = get_string(      'facebookdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Flickr url setting.
$name = 'theme_fordsonucp/flickr';
$title = get_string('flickr', 'theme_fordson');
$description = get_string('flickrdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Twitter url setting.
$name = 'theme_fordsonucp/twitter';
$title = get_string('twitter', 'theme_fordson');
$description = get_string('twitterdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Google+ url setting.
$name = 'theme_fordsonucp/googleplus';
$title = get_string('googleplus', 'theme_fordson');
$description = get_string('googleplusdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// LinkedIn url setting.
$name = 'theme_fordsonucp/linkedin';
$title = get_string('linkedin', 'theme_fordson');
$description = get_string('linkedindesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Tumblr url setting.
$name = 'theme_fordsonucp/tumblr';
$title = get_string('tumblr', 'theme_fordson');
$description = get_string('tumblrdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Pinterest url setting.
$name = 'theme_fordsonucp/pinterest';
$title = get_string('pinterest', 'theme_fordson');
$description = get_string('pinterestdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Instagram url setting.
$name = 'theme_fordsonucp/instagram';
$title = get_string('instagram', 'theme_fordson');
$description = get_string('instagramdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// YouTube url setting.
$name = 'theme_fordsonucp/youtube';
$title = get_string('youtube', 'theme_fordson');
$description = get_string('youtubedesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Vimeo url setting.
$name = 'theme_fordsonucp/vimeo';
$title = get_string('vimeo', 'theme_fordson');
$description = get_string('vimeodesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Skype url setting.
$name = 'theme_fordsonucp/skype';
$title = get_string('skype', 'theme_fordson');
$description = get_string('skypedesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// General social url setting 1.
$name = 'theme_fordsonucp/social1';
$title = get_string('sociallink', 'theme_fordson');
$description = get_string('sociallinkdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 1.
$name = 'theme_fordsonucp/socialicon1';
$title = get_string('sociallinkicon', 'theme_fordson');
$description = get_string('sociallinkicondesc', 'theme_fordson');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 2.
$name = 'theme_fordsonucp/social2';
$title = get_string('sociallink', 'theme_fordson');
$description = get_string('sociallinkdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 2.
$name = 'theme_fordsonucp/socialicon2';
$title = get_string('sociallinkicon', 'theme_fordson');
$description = get_string('sociallinkicondesc', 'theme_fordson');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 3.
$name = 'theme_fordsonucp/social3';
$title = get_string('sociallink', 'theme_fordson');
$description = get_string('sociallinkdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 3.
$name = 'theme_fordsonucp/socialicon3';
$title = get_string('sociallinkicon', 'theme_fordson');
$description = get_string('sociallinkicondesc', 'theme_fordson');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
