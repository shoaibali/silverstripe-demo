<?php

global $project;
$project = 'mysite';

global $database;
$database = 'ss_demo';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

LeftAndMain::require_css('cwp-core/css/custom.css');

//Director::setBaseURL('http://ssdemo.dev/');

