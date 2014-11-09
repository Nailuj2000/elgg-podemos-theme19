<?php
/**
 * Elgg sidebar contents
 * Vista que muestra los contenidos de la sidebar (no se si solo la de la derecha en one-colum)
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */

/*MENU EXTRAS DE MOMENTO COMENTADO*/
/*echo elgg_view_menu('extras', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));*/

//TODO: Encontrar donde se cargar los elementos de $vars['sidebar'].
//echo elgg_view_menu('page', array('sort_by' => 'name'));

echo elgg_get_context();
$array_secciones = array("group_profile", "pages");
//echo set_sidebars_modules($array_secciones);
// optional 'sidebar' parameter
//MUESTRA EL RESTO DE ELEMENTOS DE LA SIDEBAR
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
/*if (isset($vars['area2'])) {
	echo $vars['area2'];
}*/

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
/*if (isset($vars['area3'])) {
	echo $vars['area3'];
}*/
