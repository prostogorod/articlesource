<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.tags
Tags=page.tpl:{PAGE_ARTICLESOURCE}
[END_COT_EXT]
==================== */

/**
 * articlesource plugin
 *
 * @author Roffun
 * @copyright Copyright (c) 2016 - today: Roffun | https://github.com/Roffun
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');
require_once cot_langfile('articlesource', 'plug');

if ($cfg['plugin']['articlesource']['as_source'] == 'golink')
{
     $as_url = '/?r=golink&amp;' . $cfg['plugin']['golink']['golink_prfx'] . '=' . htmlentities(base64_encode($pag['page_ARTICLESOURCE_URL']));
     $as_data_link = ' data-link="' . $as_url . '"';
     $as_class = ' class="' . $cfg['plugin']['golink']['golink_class'] . '"';
}
else
{
     $as_url = $pag['page_ARTICLESOURCE_URL'];
}

$as_anchor = ($pag['page_ARTICLESOURCE_ANCHOR'] == '' ? $pag['page_ARTICLESOURCE_URL'] : $pag['page_ARTICLESOURCE_ANCHOR']);
$as_nofollow = ($cfg['plugin']['articlesource']['as_source'] == 'nofollow' ? ' rel="nofollow"' : '');
$page_articlesource = cot_rc_link($as_url, $as_anchor, 'target="_blank"' . $as_nofollow . $as_data_link . $as_class);

$t->assign('PAGE_ARTICLESOURCE', !empty($pag['page_ARTICLESOURCE_URL']) ? ($L['cfg_as_source'] . ': ' . $page_articlesource) : '');
