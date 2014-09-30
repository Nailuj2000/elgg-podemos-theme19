<?php
/**
 * Search for content in this group
 *
 * @uses vars['entity'] ElggGroup
 */

//se crea la ruta http://sitio.com/search
$url = elgg_get_site_url() . 'search';
//se guarda la vista de formulario search con la acción que manda a la ruta anterior, method get y ??
$body = elgg_view_form('groups/search', array(
	'action' => $url,
	'method' => 'get',
	'disable_security' => true,
), $vars);

//MUESTRA EL BUSCADOR DE GRUPO EN LA SIDEBAR
//echo elgg_view_module('aside', elgg_echo('groups:search_in_group'), $body);
