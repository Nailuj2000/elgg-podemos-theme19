<?php
/**
 * Elgg owner block
 * Displays page ownership information
 *
 * @package Elgg
 * @subpackage Core
 *
 */

elgg_push_context('owner_block');

// groups and other users get owner block
$owner = elgg_get_page_owner_entity();
if ($owner instanceof ElggGroup || $owner instanceof ElggUser) {
// si $owner es una instancia de la clase ElggGroup o es una instancia de ElggUser.....

	//DESACTIVAMOS ELEMENTOS DEL MENU OWNER_BLOCK DE GROUPS
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'groups_activity_owner_block_menu');
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'blog_owner_block_menu');
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'bookmarks_owner_block_menu');
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'file_owner_block_menu');
	elgg_unregister_plugin_hook_handler("register", "menu:owner_block", "event_manager_owner_block_menu");

	//MUESTRA EL AVATAR DE ENTIDAD Y EL NOMBRE
	$header = elgg_view_entity($owner, array('full_view' => false));

	//MUESTRA EL MENU DE ENTIDAD O GRUPO, FILTRADO POR PRIORIDAD
	$body = elgg_view_menu('owner_block', array('entity' => $owner,'sort_by' => 'priority'));

	//TODO: Encontrar que muestra esta vista.
	$body .= elgg_view('page/elements/owner_block/extend', $vars);

	echo elgg_view('page/components/module', array(
		'header' => $header,
		'body' => $body,
		'class' => 'elgg-owner-block',
	));
}

elgg_pop_context();
