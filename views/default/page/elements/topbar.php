<?php
/**
 * Elgg topbar
 * The standard elgg top toolbar
 */

//MOSTRAR LOS BREADCRUMS DE LOS GRUPOS COMO NAVEGACIÓN.
echo elgg_view('navigation/migas_pan');

//MOSTRAMOS EL MENU TOPBAR
echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));

// elgg tools menu
// need to echo this empty view for backward compatibility.
echo elgg_view_deprecated("navigation/topbar_tools", array(), "Extend the topbar menus or the page/elements/topbar view directly", 1.8);
