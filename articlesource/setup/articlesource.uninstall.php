<?php
/**
 * articlesource plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2016 - today: Roffun |  https://webcot.net/cotonti/extensions/articlesource-plugin
 * @license BSD
 */
 
defined('COT_CODE') or die('Wrong URL');

require_once cot_incfile('page', 'module');

global $db_pages;

cot_extrafield_remove($db_pages, 'ARTICLESOURCE_URL');
cot_extrafield_remove($db_pages, 'ARTICLESOURCE_ANCHOR');
