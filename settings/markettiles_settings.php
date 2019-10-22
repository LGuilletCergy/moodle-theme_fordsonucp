<?php

defined('MOODLE_INTERNAL') || die();

/* Marketing Spot Settings temp*/
$page = new admin_settingpage('theme_fordsonucp_marketing', get_string('marketingheading', 'theme_fordson'));

// Toggle FP Textbox Spots.
$name = 'theme_fordsonucp/togglemarketing';
$title = get_string('togglemarketing' , 'theme_fordson');
$description = get_string('togglemarketing_desc', 'theme_fordson');
$displaytop = get_string('displaytop', 'theme_fordson');
$displaybottom = get_string('displaybottom', 'theme_fordson');
$default = '2';
$choices = array('1'=>$displaytop, '2'=>$displaybottom);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot One
$name = 'theme_fordsonucp/marketing1info';
$heading = get_string('marketing1', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot One
$name = 'theme_fordsonucp/marketing1';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing1image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing1content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing1buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing1buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing1target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot Two
$name = 'theme_fordsonucp/marketing2info';
$heading = get_string('marketing2', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot Two.
$name = 'theme_fordsonucp/marketing2';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing2image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing2content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing2buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing2buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing2target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot Three
$name = 'theme_fordsonucp/marketing3info';
$heading = get_string('marketing3', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot Three.
$name = 'theme_fordsonucp/marketing3';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing3image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing3content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing3buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing3buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing3target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot Four
$name = 'theme_fordsonucp/marketing4info';
$heading = get_string('marketing4', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot
$name = 'theme_fordsonucp/marketing4';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing4image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing4image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing4content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing4buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing4buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing4target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot Four
$name = 'theme_fordsonucp/marketing5info';
$heading = get_string('marketing5', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot
$name = 'theme_fordsonucp/marketing5';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing5image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing5image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing5content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing5buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing5buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing5target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot Four
$name = 'theme_fordsonucp/marketing6info';
$heading = get_string('marketing6', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot
$name = 'theme_fordsonucp/marketing6';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing6image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing6image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing6content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing6buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing6buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing6target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot
$name = 'theme_fordsonucp/marketing7info';
$heading = get_string('marketing7', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot Seven
$name = 'theme_fordsonucp/marketing7';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing7image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing7image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing7content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing7buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing7buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing7target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot
$name = 'theme_fordsonucp/marketing8info';
$heading = get_string('marketing8', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot Eight
$name = 'theme_fordsonucp/marketing8';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing8image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing8image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing8content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing8buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing8buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing8target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// This is the descriptor for Marketing Spot
$name = 'theme_fordsonucp/marketing9info';
$heading = get_string('marketing9', 'theme_fordson');
$information = get_string('marketinginfodesc', 'theme_fordson');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Marketing Spot Nine
$name = 'theme_fordsonucp/marketing9';
$title = get_string('marketingtitle', 'theme_fordson');
$description = get_string('marketingtitledesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Background image setting.
$name = 'theme_fordsonucp/marketing9image';
$title = get_string('marketingimage', 'theme_fordson');
$description = get_string('marketingimage_desc', 'theme_fordson');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing9image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing9content';
$title = get_string('marketingcontent', 'theme_fordson');
$description = get_string('marketingcontentdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing9buttontext';
$title = get_string('marketingbuttontext', 'theme_fordson');
$description = get_string('marketingbuttontextdesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing9buttonurl';
$title = get_string('marketingbuttonurl', 'theme_fordson');
$description = get_string('marketingbuttonurldesc', 'theme_fordson');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_fordsonucp/marketing9target';
$title = get_string('marketingurltarget' , 'theme_fordson');
$description = get_string('marketingurltargetdesc', 'theme_fordson');
$target1 = get_string('marketingurltargetself', 'theme_fordson');
$target2 = get_string('marketingurltargetnew', 'theme_fordson');
$target3 = get_string('marketingurltargetparent', 'theme_fordson');
$default = 'target1';
$choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);