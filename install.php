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

if(defined('WB_URL'))
{
    include_once(dirname(__FILE__)."/init.php");

    $r = $clsMarkdown->install();
    if ($r !== true) $admin->print_error($r);
}
