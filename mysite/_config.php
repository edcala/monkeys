<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'monkeyuser',
	"password" => 'monkeypass',
	"database" => 'monkeydb',
	"path" => '',
);

SSViewer::set_theme("asdf");
		HtmlEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');

// Set the site locale
i18n::set_locale('en_AU');