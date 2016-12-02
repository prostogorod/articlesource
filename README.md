# ПЛАГИН «ARTICLESOURCE» CMF COTONTI

<p>Articlesource - плагин под Cotonti&nbsp;с помощью которого можно вывести&nbsp; ссылку на источник статьи. Вариант открытия ссылок выбирается в настройках. Можно сделать ссылки на источник открытыми, с атрибутом nofollow, или закодированными с помощью плагина <a href="https://github.com/WebRomen/golink">golink</a>.

Плагин предназначен для вывода ссылки на источник статьи в интернете.

Установка плагина articlesource

Распаковать и залить содержимое в папку plugins.
Установить через админпанель: (Управление сайтом / Расширения / articlesource).
Добавить указанный ниже код в шаблон
В page.add.tpl добавить:

<!-- IF {PHP.cot_plugins_active.articlesource} -->               
      <tr>
        <td>{PAGEADD_FORM_ARTICLESOURCE_URL_TITLE}</td>
        <td>{PAGEADD_FORM_ARTICLESOURCE_URL}</td>
      </tr>
      <tr>
        <td>{PAGEADD_FORM_ARTICLESOURCE_ANCHOR_TITLE}</td>
        <td>{PAGEADD_FORM_ARTICLESOURCE_ANCHOR}</td>
      </tr>
<!-- ENDIF -->
 

В page.edit.tpl добавить:

<!-- IF {PHP.cot_plugins_active.articlesource} -->
      <tr>               
        <td>{PAGEEDIT_FORM_ARTICLESOURCE_URL_TITLE}</td>
        <td>{PAGEEDIT_FORM_ARTICLESOURCE_URL}</td>
      </tr>
      <tr>
        <td>{PAGEEDIT_FORM_ARTICLESOURCE_ANCHOR_TITLE}</td>
        <td>{PAGEEDIT_FORM_ARTICLESOURCE_ANCHOR}</td>
      </tr>
 <!-- ENDIF --> 
В page.tpl добавить:

<!-- IF {PHP.cot_plugins_active.articlesource} -->
   <div>{PAGE_ARTICLESOURCE}</div>
<!-- ENDIF -->
 

Режимы открытия ссылок:

Open - ссылка открыта, не кодируется, открывается без редиректа

Nofollow - ссылка в поле имеет атрибут rel="nofollow", не кодируется, открывается без редиректа

Golink - ссылка подчиняется настройкам плагина golink

Поля для вывода ссылки на источник:

Источник - В это поле нужно вставлять саму ссылку (url) на источник, слово Источник: подставится автоматически. Если поле не заполнено, ничего не выводится.

Анкор - Текст ссылки (не обязательно), если пусто, в качестве анкора выводится сама ссылка.

Copyright (c) 2016 - today: WebRomen | https://github.com/WebRomen/articlesource 
