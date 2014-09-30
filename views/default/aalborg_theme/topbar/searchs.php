<?php

//CREAMOS EL ICON LUPA PARA INSERTAR EN EL MENU TOPBAR
$url = elgg_get_site_url();
$img_lupa = elgg_view('output/img', array(
	'src' => 'mod/podemos_theme19/graphics/lupa.png';
));

//INCLUIMOS LA VISTA DEL BUSCADOR EN LA TOPBAR
//Todo: averiguar por qué poniéndola antes, aparece después de la vista del menú topbar
echo elgg_view('search/header',$vars);

//se crea la ruta http://sitio.com/search
$url = elgg_get_site_url() . 'search';
//se guarda la vista de formulario search con la acción que manda a la ruta anterior, method get y ??
$search_groups = elgg_view_form('groups/search', array(
	'action' => $url,
	'method' => 'get',
	'disable_security' => true,
), $vars);
echo $search_groups;
