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
	'ACP_REPORTTOTOPIC'					=> 'Report to topic',
	'ACP_REPORTTOTOPIC_CONFIG'			=> 'Configuração de Report to topic',
	'ACP_REPORTTOTOPIC_CONFIG_EXPLAIN'	=> 'A principal configuração de report to topic.',
	'ACP_REPORTTOTOPIC_CONFIG_OPTIONS'	=> 'Opções',
	'ACP_REPORTTOTOPIC_CONFIG_SUCCESS'	=> 'A configuração principal foi atualizada com sucesso!',
	'ACP_REPORTTOTOPIC_PM_CONFIG'		=> 'Configuração do PM report',

	'FORUM_NOT_EXISTS'					=> 'O fórum solicitado (%1$s) não existe',

	'HIDE_TOPIC_LINK'					=> 'Ocultar links',
	'HIDE_TOPIC_LINK_EXPLAIN'			=> 'Ocultar o link do relatório para MCP no viewtopic e o ícone do relatório no viewforum.',

	'LOCK_TOPIC'						=> 'Trancar tópico',
	'LOCK_TOPIC_EXPLAIN'				=> 'Trancar o tópico reportado quando o relatório for fechado.',

	'NO_FORUM_LOG'						=> '<strong>O fórum de destino do report to topic não existe</strong>',

	'PARSE_SIG'							=> 'Exibir assinatura',

	'R2T_DEST_FORUM'					=> 'Fórum de destino padrão',
	'R2T_DEST_FORUM_EXPLAIN'			=> 'Selecione o fórum que será usado como o fórum de destino padrão para as postagens do relatório. Você pode selecionar nos fóruns um fórum de relatório diferente.',
	'R2T_PM_DEST_FORUM'					=> 'Fórum de destino relatório da MP',
	'R2T_PM_DEST_FORUM_EXPLAIN'			=> 'Selecione o fórum que será usado para postar os relatórios de MP.',
	'R2T_PM_TITLE'						=> 'Título do relatório de MP',
	'R2T_PM_TITLE_EXPLAIN'				=> 'Aqui você pode definir o título da postagem para os tópicos do relatório da MP. Você pode usar tokens no título do tópico.',
	'R2T_PM_TEMPLATE'					=> 'PM template',
	'R2T_PM_TEMPLATE_EXPLAIN'			=> 'Aqui você pode definir como as postagens do relatório da MP serão formatadas. Ao usar tokens, você pode especificar quais informações serão exibidas. Você pode usar BBCodes no modelo de postagem.',
	'R2T_POST_TITLE'					=> 'Título do relatório do post',
	'R2T_POST_TITLE_EXPLAIN'			=> 'Aqui você pode definir o título do post para a postagemdos tópicos de relatório. Você pode usar tokens no título do tópico.',
	'R2T_POST_TEMPLATE'					=> 'Post template',
	'R2T_POST_TEMPLATE_EXPLAIN'			=> 'Aqui você pode definir como as postagens do post serão formatadas. Ao usar tokens, você pode especificar quais informações serão exibidas. Você pode usar BBCodes no modelo de postagem.',
	'R2T_SELECT_DEST_FORUM'				=> 'Fórum de destino do relatório',
	'R2T_SELECT_DEST_FORUM_EXPLAIN'		=> 'Selecione o fórum no qual os relatórios elaborados a partir deste fórum serão postados. Se não for selecionado, o fórum padrão será usado.',
	'REPORTTOTOPIC_LOG'					=> '<strong>Configurações do Report to topic atualizadas</strong>',

	'TOKEN'								=> 'Token',
	'TOKENS'							=> 'Tokens',
	'TOKENS_EXPLAIN'					=> 'Os tokens são marcadores de posição para várias informações que podem ser exibidas na publicação do relatório.<br /><br /><strong>Por favor, note que somente os tokens listados abaixo podem ser usados ​​na publicação do relatório.</strong>',
	'TOKEN_DEFINITION'					=> 'Com o que será substituído?',
));