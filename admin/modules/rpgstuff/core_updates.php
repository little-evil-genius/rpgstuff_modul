<?php
/**
 * RPGStuff admin core_updates page.
*/

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$page->add_breadcrumb_item($lang->core, "index.php?module=rpgstuff-core_updates");

$page->output_header($lang->core);

$sub_tabs['update_core'] = array(
    'title' => $lang->core,
    'link' => "index.php?module=rpgstuff-core_updates",
    'description' => $lang->core_desc
);
$page->output_nav_tabs($sub_tabs, 'update_core');

// Tabelle erstellen
$table = new Table;

// Hook für die Tabelleninhalte hinzufügen
$plugins->run_hooks("admin_rpgstuff_update_core", $table);

// Tabelle anzeigen
$table->output($lang->core_table);

$page->output_footer();
