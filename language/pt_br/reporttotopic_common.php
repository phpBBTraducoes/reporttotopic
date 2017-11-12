<?php
/**
*
* @package Report to Topic
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 0.2.0-beta] (https://github.com/phpBBTraducoes)
*/

/**
* @ignore
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

$lang = array_merge($lang, array(
	'R2T_NOTIFICATION'	=> 'R2Topic',

	'r2t_tokens'	=> array(
		'REPORTER'		=> 'Nome de usuário do reportado.',
		'REPORTER_FULL'	=> 'Link para o perfil completo do usuario reportado',
		'REPORT_LINK'	=> 'Link para a página de relatório no MCP.',
		'REPORT_POST'	=> 'Link para o post relatado.<strong>Não está disponível nos relatórios da MP!</strong>',
		'REPORT_REASON'	=> 'Razão para o reporte.',
		'REPORT_TEXT'	=> 'Descrição enviada pelo usuário no relatório.',
		'REPORT_TIME'	=> 'Hora do relatório.',
		'TITLE'			=> 'O assunto do post ou MP relatada ',
	),
));