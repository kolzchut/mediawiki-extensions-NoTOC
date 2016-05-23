<?php
/**
 * NoTOC extension - Turns off the Table of Contents (TOC) by default on all pages
 * @version 0.1.1 - 2013/12/11
 *
 * @link https://www.mediawiki.org/wiki/Extension:NoTOC Documentation
 * @link https://www.mediawiki.org/wiki/Extension_talk:NoTOC Support
 *
 * @ingroup Extensions
 * @package MediaWiki
 * @author Andrew Fitzgerald (Frantik)
 * @author Karsten Hoffmeyer (Kghbln)
 * @copyright (C) 2010 Andrew Fitzgerald
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

// check the call
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension and thus not a valid entry point.' );
}

// provide information
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'NoTOC',
	'author' => array(
		'Andrew Fitzgerald', '...'
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:NoTOC',
	'descriptionmsg' => 'notoc-desc',
	'version' => '0.1.1'
);

// show way to files
$wgExtensionMessagesFiles['NoTOC'] = dirname( __FILE__ ) . '/NoTOC.i18n.php';

// register hooks
$wgHooks['ParserClearState'][] = 'efMWNoTOC';

// perform purpose
function efMWNoTOC($parser) {
	$parser->mShowToc = false;
	return true;
}

