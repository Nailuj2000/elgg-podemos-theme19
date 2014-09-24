<?php
/**
 * Elgg sidebar contents
 * Vista que muestra los contenidos de la sidebar (no se si solo la de la derecha en one-colum)
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */

echo elgg_view_menu('extras', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

//TODO: hacer que solo se muestren alguna secciones.
echo elgg_view_menu('page', array('sort_by' => 'name'));

// optional 'sidebar' parameter
//MUESTRA EL RESTO DE ELEMENTOS DE LA SIDEBAR
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}
elgg_log($vars['sidebar']);

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
if (isset($vars['area2'])) {
	echo $vars['area2'];
}

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
if (isset($vars['area3'])) {
	echo $vars['area3'];
}
