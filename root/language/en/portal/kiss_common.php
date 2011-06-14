<?php
/**
*
* @author Original Author Michael O'Toole
* @www.stargate-portal.com
*
* @package Kiss Portal Engine
* @version $Id:$ 1.0.0d (beta)
*
* @note: Do not remove this copyright. Just append yours if you have modified it,
*        this is part of the Stargate Portal copyright agreement...
* @copyright (c) 2005 phpbireland
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
// � � � � �
//
//- stargate aka kiss portal engine lang definitions -//
$lang = array_merge($lang, array(
	'ACP_FILE_BACKUP'		=> 'Backup files',
	'ACP_MINI'				=> 'Admin',
	'ACP_SMALL'				=> 'ACP',
	'ADD_SMILIES'			=> 'Add smilies',
	'ADVANCED_SEARCH'		=> 'Advanced Search',
	'ARRANGE_ON'			=> 'Arrange Blocks',
	'ARRANGE_OFF'			=> 'Save block layouts',
	'ATTACH_SIG'			=> 'Attach your signature',
	'AUTHOR'				=> 'Author',
	'AUTO_LOGIN'			=> 'Auto Login',

	'BASIC_RULES' 			=> 'Basic Rules',
	'BASIC_RULES'			=>	"While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br />
	You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent, the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br />
	This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above; they serve only to improve your viewing pleasure. The e-mail address is used for confirming your registration details and password or details of new passwords should you forget your current one. Your email address may also be used to send notification of post updates should you require notification.<br /><br />
	The Rules may change from time to time. Please check back often. Administration",

	'BASIC_RULES_HEADER'	=> 'Site rules.',
	'BBCODE_ST_HELP'		=> 'Strike through: [strike]text[/strike]', // More BBCodes
	'BEGIN'					=> 'BEGIN',
	'BOARD_DEFAULT_STYLE'	=> 'Default Style',
	'BOOKMARK_OFF' 			=> 'Remove Bookmark',
	'BOOKMARK_ON' 			=> 'Bookmark Post',
	'BOOKMARKS'				=> 'Bookmarks',

	'BLOCK_BOT_TRACKER'			=> 'Kiss Portal Bot Tracker',
	'BLOCK_CALENDAR'			=> 'Kiss Portal Calendar',
	'BLOCK_CATEGORIES'			=> 'Kiss Portal Categories',
	'BLOCK_CACHE_TIME_HEAD'		=> 'Block Cache Time',
	'BLOCK_CACHE_TIME'			=> 'Default block cache time.',
	'BLOCK_CACHE_TIME_EXPLAIN'	=> 'Used if cache time is not set (normally 600).',
	'BLOCK_CLOCK'				=> 'Kiss Portal Clock',
	'BLOCK_CLOUD'				=> 'Kiss Portal Cloud 9',
	'BLOCK_CURRENTLY_DISABLED'	=> 'Block disabled!',
	'BLOCK_DEV_STATUS'			=> 'Kiss Portal Development Status',
	'BLOCK_IRC'					=> 'Kiss Portal IRC',
	'BLOCK_MP3'					=> 'Kiss Portal MP3',
	'BLOCK_PORTAL_STATUS'		=> 'Kiss Portal Status',
	'BLOCK_RECENT_TOPICS'		=> 'Kiss Portal Recent Topics',
	'BLOCK_RSS_FEED'			=> 'Kiss Portal Rss Feeds',
	'BLOCK_STATS'				=> 'Kiss Portal Statistics',
	'BLOCK_TOP_POSTERS'			=> 'Kiss Portal Top Posters',
	'BLOCK_TOP_TOPICS'			=> 'Kiss Portal Top Topics',
	'BLOCK_WEB_PAGES'			=> 'Kiss Portal Web Pages',
	'BLOCK_WEB_TEAM'			=> 'Kiss Portal Web Team',
	'BY'						=> 'By',

	'CATEGORY'				=> 'Category',
	'CHAT_LINK'				=> 'Online Chat',
	'CLICK_TO_ENLARGE'		=> 'Click to enlarge',
	'COLOR_DARK_RED' 		=> 'Dark Red',
	'COLOR_RED' 			=> 'Red',
	'COLOR_ORANGE' 			=> 'Orange',
	'COLOR_BROWN' 			=> 'Brown',
	'COLOR_YELLOW' 			=> 'Yellow',
	'COLOR_GREEN' 			=> 'Green',
	'COLOR_OLIVE' 			=> 'Olive',
	'COLOR_CYAN' 			=> 'Cyan',
	'COLOR_BLUE' 			=> 'Blue',
	'COLOR_DARK_BLUE' 		=> 'Dark Blue',
	'COLOR_INDIGO' 			=> 'Indigo',
	'COLOR_VIOLET' 			=> 'Violet',
	'COLOR_WHITE' 			=> 'White',
	'COLOR_BLACK' 			=> 'Black',
	'COMMENTS'				=> 'Comments',

	'COPY_RIGHT_BOTTOM'				=> 'Support Site & Affiliates',
	'COULD_NOT_ADD_BLOCK'			=> 'Error! Could not add block!',
	'COULD_NOT_EDIT_BLOCK'			=> 'Error! Could not edit block',
	'COULD_NOT_RETRIEVE_BLOCK'		=> 'Error! Could not retrieve block data',
	'COULD_NOT_REINDEX_BLOCKS'		=> 'Error! Could not reindex blocks',
	'COULD_NOT_QUERY_K_MODULES'		=> 'Error! Could not query portal k_modules table',
	'COULD_NOT_UPDATE_K_MODULES'	=> 'Error! Could not update k_modules table',

	'CURRENT_STYLE'			=> 'Current Style Information',
	'CURRENTLY_DISABLED'	=> 'Code is currently disable pending updates',

	'DESIGNED_BY'			=> 'Designed by',
	'DEV_VERSION'			=> 'Version (RC)',

	'DISABLE_BBCODE'		=> 'Disable BBCode',
	'DISABLE_MAGIC_URL'		=> 'Dont automatically parse URLs',
	'DISABLE_SMILIES'		=> 'Disable smilies',
	'DONT_HAVE_ACCOUNT' 	=> 'We are a free and open<br />community, all are welcome.<br />',

	'EDITED'						=> 'Edited*',
	'END'							=> 'END',
	'ERROR_PORTAL_MODULE'			=> 'Error! Could not query portal modules information: ',
	'ERROR_PORTAL_ANNOUNCE'			=> 'Error! Could not query announcements information',
	'ERROR_PORTAL_BLOCKS'			=> 'Error! Could not retrieve Block data',
	'ERROR_PORTAL_CLOUD'			=> 'Error! Could not retrieve cloud data',
	'ERROR_PORTAL_CONFIG'			=> 'Error! Could not retrieve portal config data',
	'ERROR_PORTAL_FORUMS'			=> 'Error! Could not query forums information',
	'ERROR_PORTAL_HTTP'				=> 'Error! Could not retrieve HTTP Referrals data',
	'ERROR_PORTAL_HTTP_DELETE'		=> 'Error! Couldn�t delete HTTP Referrals',
	'ERROR_PORTAL_HTTP_QUERY'		=> 'Error! Couldn�t query HTTP Referrals',
	'ERROR_FORUM_INFO'				=> 'Error! Could not query forum info',
	'ERROR_PORTAL_MENUS'			=> 'Error! Could not query portal menus information ',
	'ERROR_PORTAL_MODULE'			=> 'Error! Could not query portal modules information: ',
	'ERROR_PORTAL_NEWS'				=> 'Error! Could not query news data',
	'ERROR_PORTAL_QUOTES'			=> 'Error! Could not query portal quotes',
	'ERROR_PORTAL_RECENT_TOPICS'	=> 'Error! Could not query recent topics data',
	'ERROR_PORTAL_STATUS'			=> 'Error! Portal status table error.',
	'ERROR_PORTAL_STYLE_SELECT'		=> 'Error! Style Select',
	'ERROR_PORTAL_STYLE_STATUS'		=> 'Error! Could not query styles status information',
	'ERROR_PORTAL_VIDEO'			=> 'Error! Portal youtube video table',
	'ERROR_PORTAL_SUB_MENU'			=> 'Error! Could not query portal sub menus information',
	'ERROR_PORTAL_WEB_TABLE'		=> 'Error! Portal Web Table',
	'ERROR_PORTAL_WELCOME'			=> 'Error! Could not query messages (Welcome etc...)',
	'ERROR_PORTAL_WORDS'			=> 'Error! Words table...',
	'ERROR_SMILIES_DATA'			=> 'Error! Could not get smilies data',
	'ERROR_USER_TABLE'				=> 'Error! Could not retrieve user table data',

	'FLAG'					=> 'Flag',
	'FLASH_IS_OFF'			=> '[flash] is <em>OFF</em>',
	'FLASH_IS_ON'			=> '[flash] is <em>ON</em>',
	'FLOOD_ERROR'			=> 'You cannot make another post so soon after your last.',
	'FORUM_INDEX'			=> 'Forum',
	'FORUM_IMAGES_EXPLAIN'	=> 'Forum Icons',
	'FM_RADIO'				=> 'Popup FM Radio',
	'FONT_COLOR'			=> 'Font colour',
	'FONT_HUGE'				=> 'Huge',
	'FONT_LARGE'			=> 'Large',
	'FONT_NORMAL'			=> 'Normal',
	'FONT_SIZE'				=> 'Font size',
	'FONT_SMALL'			=> 'Small',
	'FONT_TINY'				=> 'Tiny',
	'FOUND'					=> 'Found: ',
	'FORUM_PORTAL'			=> 'Portal',
	'FORUM_RULES'			=> 'Forum Rules',
	'FULL_SEARCH'			=> 'Full Search: ',

	'GOTO_BOTTOM_IMG' 		=> 'Goto Bottom',
	'GOTO_DEV_SITE'			=> 'Go to Dev Site',
	'GOTO_TOP_IMG' 			=> 'Goto Top',

	'HIDE'					=> 'Hide',
	'HITS'					=> 'Hits',
	'HOME'					=> 'Home',
	'HTTP_HOST'				=> 'Host',

	'ICON_ANNOUNCEMENT'		=> 'Announcement',
	'ICONS_EXPLAIN'         => 'Icons explain',
	'INFO'					=> 'Info',
	'INDEX_OF_FORUMS'		=> 'Index of forums',
	'IN_HOUSE_DESIGNS'		=> 'In House Designs',
	'IN_PROGRESS'			=> 'This page is under construction',
	'IRC_TITLE'				=> 'Stargate Portal IRC Popup',

	'K_QUICK_REPLY'			=> 'Kiss Simple Quick Reply',
	'K_RECENT_SEARCH_DAYS'	=> 'Search days: ',

	'L_CLOCK'		    	=> 'Local Time',
	'LINE'					=> 'line ',
	'LINK'					=> '<img scr="./images/bbcode/link.png" />',
	'LINKS_FORUM'			=> 'Submit A Link',
	'LINKS_FORUM_REQU'		=> 'Post your request here... approval required... you must create a forum for links upload!',
	'LOG_ME_IN_SHORT'   	=> 'Remember Login',
	'LOGOUT_REDIRECT_P'		=> 'Yoou have logged out... retirning to portal',

	'MAKE_PERMANENT'		=> 'If check, the style chosen will be set as your default style!',
	'MEMBERS'				=> 'Members',
	'MEMBER_INFO'			=> 'Members Info',
	'MERITS'				=> 'Merits',
	'MESSAGE_BODY_EXPLAIN'	=> 'Type your message here...',
	'MINI_SAMPLE_1'			=> 'This block was written using the MiniMod module... No database entries or sql queries were required. Only installed styles will be displayed here... The block is for stargatestyles only... Anyone wanting to use this code will have to ask Mitch.',
	'MISSING_BLOCK_DATA'	=> 'You have not entered all the required data!',
	'MISSING_FILES'			=> ' error:<br /><br />File %1$s or <br />File %2$s does not exist or is empty.',
	'MORE_SMILIES'			=> 'View more smilies',
	'MOVE'					=> 'Move',
	'MP3_POPUP'				=> 'Popup Player',
	'MP3_PLAYER'			=> 'SGP MP3 Player',

	'NAME'					=> 'Name',
	'NARROW'				=> 'Fixed',
	'NARROW2'				=> 'Style Width (70~90%)',
	'NEWS_BREAKING'			=> 'Breaking News... ',
	'NEWS_FLASH_GLOBAL'		=> 'Global News Flash... ',
	'NEWS_FLASH_LOCAL'		=> 'Local News Flash... ',

	'NO_ADMINS'				=> 'No admins assigned.',
	'NO_ANNOUNCEMENTS'		=> 'No current announcements',
	'NO_BLOCK_ID'			=> 'Missing ID?',
	'NO_BOT_DATA'			=> 'No bot data to display',
	'NO_COMMENTS'			=> 'No comments to display.',
	'NO_ID_GIVEN'			=> 'No id supplied<br />',
	'NO_MODS'				=> 'No mods assigned.',
	'NO_MENU'				=> 'No menus entries!<br />Can be added in<br /> ACP > PORTAL > MENUS',
	'NO_NEWS'           	=> 'No News Today',
	'NO_TEAMS'				=> 'No teams selected!<br />Can be added in<br /> ACP > PORTAL > BLOCKS (team block variables)',
	'NO_POLL'				=> 'No poll selected',
	'NO_RECENT_TOPICS'	 	=> ' No recent topics to display',
	'NO_SEARCH'				=> 'Sorry but you are not permitted to use the search system.',
	'NO_SEARCHS'			=> 'No words found.',
	'NO_UNRESOLVED'			=> 'No bugs to report...',
	'NO_VIEW_USERS_R'		=> 'You are not authorized to view the online users list.',
	'NO_VIEW_USERS_A'		=> 'In order to view the online list you have to be registered and logged in.',
	'NORMAL'				=> 'Normal',

	'ON'					=> 'on',
	'OF_TYPE'				=> ' of type: ',
	'ONLINE_USERS'			=> 'Online Users',
	'ONLINE_USERS_SHOW' 	=> '[ View Online List ]',
	'OPTION'				=> 'Option',

	'PERFORMED_BY'			=> 'Performed by',
	'PERMANENT'				=> 'Save my choice:',
	'PICTURES'				=> 'Pictures',
	'PLURAL'				=> 'S',
	'POSTED_BY'				=> 'Posted by',
	'POST_COMMENTS'			=> 'Post Comments',
	'POSTERS_COMMENT'		=> '%1$s�s comments: %2$s.',
	'PORTAL_DEVELOPMENT'	=> 'Portal Development',
	'PHP_SUPPORT_SITES' 	=> 'php Support Sites',
	'PORTAL'				=> 'Portal',
	'POST_BY_AUTHOR'		=> 'Author:',
	'PROFILE_SMALL'			=> 'UCP',
	'POST_BY_POSTER'		=> 'by',
	'PORTED_BY'				=> 'Ported by',
	'PORTAL_DEBUG_QUERIES'	=> '<div style="text-align:center; border: dotted 1px #FF0000; background-color:#E4DFD2; padding:5px;">Q = %d, C = %d, RT = %d</div>',
	'PORTAL_DEBUG_RUNTOT'	=> 'Running: %d',
	'POSTER'				=> 'Poster',
	'POST_IMG'				=> 'Post',
	'POST_NEWS'				=> 'News',
	'POST_NEWS_GLOBAL'		=> 'Global News',
	'POST_NEW_IMG'			=> 'Post New',
	'POST_NEW_HOT_IMG'		=> 'Post New Hot',
	'POST_LOCKED_IMG'		=> 'Post Locked',
	'POST_REPLY' 			=> 'Post a reply',
	'PRINT_IT'				=> 'Print it',
	'PROFILE_SMALL'			=> 'UCP',
	'POST_ANNOUNCEMENT_NEW'	=> 'New Announcement',
	'POST_ANNOUNCEMENT'		=> 'Announcement',
	'POSTED_BY'				=> 'Posted by',
	'PORTED_STYLES'			=> 'Ported Styles',
	'POST_IMAGES_EXPLAIN'	=> 'Post Icons',
	'POLL_BLOCK'			=> 'Poll Block',
	'PROFILE_SMALL'			=> 'UCP',

	'QUICK_STATISTICS'			=> 'Site Statistics',
	'QUICK_REPLY'				=> 'Quick Reply',
	'QUICK_REPLY_NO'			=> 'Hide Quick Reply',

	'UCF_MOD'					=> 'A valid location is required for this Mod',
	'UCP_SMALL'					=> 'UCP',
	'UPDATED'					=> 'Updated ',
	'UPDATING'					=> 'Processing...',
	'UNDER_CONSTRUCTION'		=> 'Under construction...',
	'UPLOAD'					=> 'Upload',
	'UPLOAD_LINK'				=> 'Post Link',
	'URL' 						=> 'URL',
	'USED_BY'					=> '%d user%s, use%s this style',
	'USER_COUNTRY_FLAG'			=> 'Country Flag',
	'USER_COUNTRY_FLAG_EXPLAIN'	=> 'Full mod requires <strong>Location</strong> data above (Google Map).',
	'USER_REAL_NAME'			=> 'Real Name',
	'USER_REAL_NAME_EXPLAIN'	=> 'Users first name',
	'USERS_STYLE'				=> 'Current Style',

	'RAND_BANNER'				=> 'Portal Random Banner',
	'RATING'					=> 'Rating',
	'READ_ARTICLE'				=> 'Read Full Article',
	'READ_FULL'					=> 'Read full message',
	'RECENT_TOPICS'				=> 'Recent Topics',
	'RECENT_REPLY'				=> 'View latest reply...',
	'REGISTRATION'       		=> '<b>Click here to Register</b>',
	'RE-INDEXING BLOCKS'		=> 'Error! You need to re-index the blocks!',
	'RETURN_INDEX'				=> '%sReturn to the portal page%s',
	'RETURN_PORTAL'				=> '%sReturn to the portal page%s',
	'RSS_DISABLED'				=> 'Newsfeeds are currently disabled',

	'SEARCH_OPTION'				=> 'Search Option',
	'SEARCH_ACTIVE_TOPICS_SMALL'=> 'Active Topics!',
	'SEARCH_DAYS'				=> 'Search days: ',
	'SEARCH_NEW_SMALL'			=> 'New Posts!',
	'SEARCH_SELF_SMALL'			=> 'Your Posts!',
	'SEARCH_UNANSWERED_SMALL'	=> 'Unanswered Posts!',
	'SCROLLING_BLOCKS_DISABLED' => 'Scrolling blocks are disabled when arranging blocks',
	'SELECT_STYLE_EXPLAINED'	=> '<br /><strong>Dropdown Legend</strong><br /><span class="green"><strong>Released</strong></span><br /><span class="orange"><strong>RC Style</strong></span><br /><span class="gray"><strong>Beta Style</strong></span><br /><span class="red"><strong>Alpha Style</strong></span><hr />',
	'SGP_IN_DEVELOPMENT'		=> 'Stargate-Portal�s youtube web-pages (in development)',
	'SGP_IRC_POPUP'				=> 'Stargate Portal IRC Popup',
	'SGP_REFRESH_ALL'			=> 'SGP Refresh All - version',
	'SGP_TOOLS'					=> 'Stargate Tools',
	'SGP_STYLE_ERROR_10'		=> 'The style option is not currently used in web pages... Please remove it from the address bar and press enter to continue...',
	'SGP_SUPPORTING'			=> 'Stargate Portal &bull; Supporting Communities Worldwide',
	'SHOW'						=> 'Show',
	'SHOW_ALL'					=> 'Show all announcements',
	'SHOWHIDE_BABEL'			=> 'Show/Hide Babel Fish  translations',
	'SHOWHIDE_GOOGLE'			=> 'Show/Hide Google translations',
	'SHOWHIDE_LIVE'				=> 'Show/Hide Windows live  translations',
	'SITE_LINK_TXT_EXPLAIN'		=> 'The HTML code below contain all the necessary code to link to <strong>%s</strong> please feel free to add it to your site.<br /><br />',
	'SITE_LINK_TXT_EXPLAIN2' 	=> 'This code produces:',
	'SITE_NAME'					=> 'phpbbireland',
	'SITE_SURVEY'				=> 'Site Survey',
	'SMILIES' 					=> 'Smilies',
	'SOMETHING_WENT_WRONG'		=> 'An error occurred, this should not happen... Please check code at line indicated: ',
	'STATUS'					=> 'Progress',
	'STATUS_2'					=> 'progress bar',
	'STICKY'					=> 'Sticky',
	'STYLE'						=> 'Style',
	'STYLE_USERS'				=> 'Style used by %d user%s',
	'STYLE_SELECT_ALLOW'		=> 'Allow style change',
	'STYLE_SELECT_DISABLED'		=> 'Style Switch is Disabled',
	'STYLEREG'					=> 'You must be logged in to use the Styles Changer',
	'SUBMITTED_BY'				=> 'Submitted By',
	'SUBMIT_LINK'				=> 'Submit Link',
	'SUBMITTED_BY'				=> 'Submitted By',
	'SWPYVL'					=> 'Stargate Web Pages: youtube video links',

	'TEAM_MAX_COUNT'			=> '(limiting: %s per team)',
	'TEMPORARILY_HIDE_BLOCKS'	=> 'Temporarily Hide Blocks',
	'THEME_NEWS_UPDATES'		=> 'Theme News & Updates',
	'THE_COLLECTIVE'			=> 'The collective',
	'THIS_MEANS_YOU'			=> 'you ;-)',
	'TIME_BEING'				=> 'Use refresh in ACP for time being...',
	'TIMEX'						=> 'Time %s',
	'TITLE'						=> 'Title',
	'TITLE_LEGEND'				=> 'Title Legend',
	'T_LIMITS'					=> 'Limit: ',
	'TO_DAY'					=> 'Date: %s',
	'TOOLS_ON'					=> 'Portal Tools',
	'TOOLS_OFF'					=> 'Save Changes',
	'TOPICS_PER_FORUM_DISPLAY'	=> ' topics per forum &bull; Display: ',
	'TOTAL_STYLES'				=> 'Total available styles',

	'UNDER_CONSTRUCTION'		=> "<strong>The page you requested is currently under construction...</strong><br /><br />Please use the 'Back' button to return to previous page.",

	'VERSION'				=> 'Version',
	'VIDEO_COMMENTS'		=> 'Comments',
	'VIDEO_POSTER'			=> 'Posted by',
	'VIEW'					=> 'View',
	'VIEW_COMMENTS'			=> 'View Comments',
	'VIEW_FULL_ARTICLE'		=> 'Read full article',
	'VIEW_NEXT_MONTH'		=> 'View next month',
	'VIEW_PREVIOUS_MONTH'	=> 'View previous month',
	'VIEW_POSTS'			=> 'View Posts',
	'VIEW_TOPIC_NEWS'		=> 'News: ',

	'WARNINGIMG_COPYRIGHT'			=> 'No copyright info',
	'WARNING_LOGIN_STYLE_SELECT'	=> 'Please login to use Style Select block',
	'WARNINGIMG_DIR'				=> 'Check to see if you added the image directory!',

	'WEB_PAGE'				=> 'Web Page',
	'WEB_PAGE_EXAMPLES_1'	=> 'Web Pages Examples:',
	'WEB_PAGE_EXAMPLES_2'	=> 'These pages are presented as example only, not all links are valid...<br />',
	'WIDE'					=> 'Wide',
	'WIDE2'					=> 'Style Width (100%)',
	'WIDE_VERSION'			=> 'Wide Version',

	'YOUTUBE'				=> 'Youtube',
	'YOUTUBE_PAGE'			=> 'Youtube Page',

	'ALL_COMMON'	=> 'All common vars are now available to all block code',
	'THEME_INFO'	=> 'Theme Information',
));
//- stargate aka Kiss portal engine lang definitions -//

?>