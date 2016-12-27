<?php
/**
 * articlesource plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2016 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

global $db_pages;

require_once cot_incfile('page', 'module');
require_once cot_incfile('extrafields');
require_once cot_langfile('articlesource', 'plug');

cot_extrafield_add($db_pages, 'ARTICLESOURCE_URL', 'input', $R['input_selectbox'], '', '', '', '', $L['cfg_as_source']);
cot_extrafield_add($db_pages, 'ARTICLESOURCE_ANCHOR', 'input', $R['input_selectbox'], '', '', '', '', $L['anchor']);
