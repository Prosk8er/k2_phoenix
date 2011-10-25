<?php
/**
*
* @package Kiss Portal Engine (acp_k_config) (English)
*
* @package language
* @version $Id:$ 1.0.0h
* @copyright (c) 2005-2011 Michael O'Toole (mike@phpbbireland.com)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
// phpbbportal profile fields
$lang = array_merge($lang, array(

	'BLOCK_DEFAULT'			=> 'Default',
	'BLOCK_FIVE_COLUMN'		=> 'Five Column',
	'BLOCK_FOUR_COLUMN'		=> 'Four Column',
	'BLOCK_THREE_COLUMN'	=> 'Three Column',
	'BLOCK_TWO_COLUMN'		=> 'Two Column',

	'BLOCKS_CONFIGURE'					=> 'Configure Portal Defaults',
	'BLOCKS_UPDATE_FILES'				=> 'Update Files',
	'BLOCKS_UPDATED'					=> 'Portal info updated',
	'BLOCKS_UPDATE_FILES'				=> 'Generate HTML Files',
	'BLOCKS_UPDATE_FILES_EXPLAIN'		=> 'When you have updates all your blocks you can create the html layout files here... See <b>Manage/Edit Blocks</b> for these settings',
	'BLOCKS_UPDATE_HTML_FILES' 			=> 'Update / Create block html files',
	'BLOCKS_USE_EXTERNAL_FILES_EXPLAIN' => 'You can use external html files or auto-generated files',

	'CONFIG_SAVED'			=> 'Config data saved...',
	'GENERATE'				=> 'Create Block HTML Files',
	'HEADER_MENU'			=> 'Header Menu',
	'HEADER_MENU'			=> 'Header Menu',

	'PBLOCK_HEADER'			=> 'Stargate aka Kiss Portal Block Manager (Future Development!) ',
	'PBLOCK_NAME'			=> 'Block Name',
	'PBLOCK_CLASS'			=> 'Class',
	'PBLOCK_APPROVED'		=> 'Approved',
	'PBLOCK_AUTHOR'			=> 'Author',
	'PBLOCK_VERSION'		=> 'Revision',
	'PBLOCK_DATE'			=> 'Date',
	'PBLOCK_UPDATE'			=> 'Update',
	'PBLOCK_SITE'			=> 'Site',

	'PORTAL' 						=> 'Portal',

	'PORTAL_BLOCKS_CENTRE_ENABLED' 	=> 'Enable Portal Blocks Centre',
	'PORTAL_BLOCKS_ENABLED_EXPLAIN'	=> 'Enable all blocks, note blocks can be disabled individually see: Manage/Edit All Blocks',
	'PORTAL_BLOCKS_LEFT_ENABLED' 	=> 'Enable Portal Blocks Left',
	'PORTAL_BLOCKS_RIGHT_ENABLED' 	=> 'Enable Portal Blocks Right',
	'PORTAL_BLOCKS_ENABLED'			=> 'Block Enabled',
	'PORTAL_BLOCKS_WIDTH' 			=> 'Block Width (Left and Right Blocks)',
	'PORTAL_BLOCKS_WIDTH_EXPLAIN'	=> 'Other blocks widths are proportional i.e. Centre blocks are 100% of available space, if you display two blocks in centre they will be approximately 50% each, three blocks 33% etc.',
	'PORTAL_BUILD'					=> 'Build version',
	'PORTAL_BUILD_EXPLAIN'			=> 'The portal build version.',
	'PORTAL_CONFIG_UPDATED'			=> 'Portal config updated!... ',
	'PORTAL_MAIN'					=> 'Main Block/Portal Configuration',
	'PORTAL_SCROLL_RECENT'			=> 'Allow Recent Topics Scrolling ',
	'PORTAL_SCROLL_LINKS'			=> 'Allow Links Scrolling',
	'PORTAL_SET_LAYOUT'				=> '*Set Block Layout/Style for Site (Default Option)',
	'PORTAL_SET_LAYOUT_EXPLAIN'		=> 'Default layout Stargate aka Kiss Portal (see dropdown options).',
	'PORTAL_SET_LAYOUT_NEW'			=> '*Set Block Layout/Style for Welcome Page (New Optional)',
	'PORTAL_SET_LAYOUT_NEW_EXPLAIN'	=> 'New layout for News/Welcome page',
	'PORTAL_VERSION'				=> 'Portal Version',
	'PORTAL_VERSION_EXPLAIN'		=> 'Version also set in phpBB config',

	'TITLE' 						=> 'Portal default configuration',
	'TITLE_EXPLAIN'					=> 'Here you can set the portal block default. Items marked with <strong>*</strong> are under construction or for future development.',
));

?>