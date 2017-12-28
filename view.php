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

$markdown['use_post_twig'] = '1';

if ($markdown['is_active'] == '1') {
    $output = $clsMarkdown->convert_text($markdown['text'], $markdown['processor']);
    if ($markdown['use_post_twig'] == '1') {
        $loader = new Twig_Loader_Array(['main'=>$output]);
        $twig = new Twig_Environment($loader);
        $output = $twig->render('main', [
            'page_title'=>PAGE_TITLE,
            'wb_url'=>WB_URL
        ]);
    }
    echo $output;
}

?>