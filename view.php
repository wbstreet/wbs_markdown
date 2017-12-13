<?php
/**
 *
 * @category        module
 * @package         wbs_markdown
 * @author          Polyakov Konstantin
 * @license         http://www.gnu.org/licenses/gpl.html
 *
 */
if(!defined('WB_PATH')) {
	require_once(dirname(dirname(__FILE__)).'/framework/globalExceptionHandler.php');
	throw new IllegalFileException();
}
/* -------------------------------------------------------- */
if (!isset($clsMarkdown)) include(dirname(__FILE__)."/init.php"); // include_once не сработает внутри функции page_content. Поэтому подключаем таким способом.

$markdown = $clsMarkdown->api_get_markdown($section_id);

if ($markdown['is_active'] == '1') echo $clsMarkdown->convert_text($markdown['text'], $markdown['processor']);

?>