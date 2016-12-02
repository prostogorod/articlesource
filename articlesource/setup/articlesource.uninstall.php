<?php
/**
 * articlesource plugin
 *
 * @author  WebRomen
 * @copyright Copyright (c) 2016 - today: WebRomen | https://github.com/WebRomen/articlesource
 * @license BSD
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');

global $db_pages;

cot_extrafield_remove($db_pages, 'ARTICLESOURCE_URL');
cot_extrafield_remove($db_pages, 'ARTICLESOURCE_ANCHOR');
