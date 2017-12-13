<?php
/**
 *
 * @category        module
 * @package         wbs_markdown
 * @author          Polyakov Konstantin
 * @license         http://www.gnu.org/licenses/gpl.html
 *
 */

if (! defined('WB_PATH')) { die('Cannot access this file directly'); }

include_once(dirname(__FILE__)."/init.php");

$r = $clsMarkdown->add($page_id, $section_id);
if ($r !== true) $admin->print_error($r);