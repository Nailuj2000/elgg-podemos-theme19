<?php
/**
 * Podemos theme
 *
 * @package podemos_theme19
 */

//EJECUCIÓN DEL METODO QUE REGISTRA UN MANEJADOR DE EVENTOS DE ELLG
//CUANDO SE ACTIVA O SE VUELVEN ACTUALZIAR LA CONFIGURACIÓN SE EJECUTA EL EVENTO INITI
elgg_register_event_handler('init','system','podemos_theme19_init');
// init es el evento y system es el ámbito (allá donde te encuentras).

//DECLARACIÓN DEL METODO A EJECUTAR CUANDO SE EJECUTA EL START.PHP
function podemos_theme19_init() {

	//REGISTRO DE LIBRERIAS PARA EL THEME
	$root = dirname(__FILE__);
	elgg_register_library('group_modules', "$root/lib/group_modules.php");
	elgg_register_library('migas_pan', "$root/lib/migas_pan.php");
	elgg_register_library('elgg:groups', "$root/lib/groups.php");
	elgg_register_library('sidebar_modules', "$root/lib/sidebar_modules.php");
	elgg_load_library("group_modules");
	elgg_load_library("migas_pan");
	elgg_load_library("sidebar_modules");

	//DESACTIVAMOS ELEMENTOS DEL MENU OWNER_BLOCK DE GROUPS
	/*TODO:establecer en settings que secciones queremos y cuales no.
	y llamar a una funcion que recorra los que tenemos y desregistrarlos*/
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'groups_activity_owner_block_menu');
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'blog_owner_block_menu');
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'bookmarks_owner_block_menu');
	elgg_unregister_plugin_hook_handler('register', 'menu:owner_block', 'file_owner_block_menu');
	elgg_unregister_plugin_hook_handler("register", "menu:owner_block", "event_manager_owner_block_menu");

	//En las que hemos dejado, queremos meter algunos sidebar_modules de otras.
	//elgg_extend_view("page/elements/$module", 'page/elements/podemos_theme/'.$module.'_new',$module);

	//PASAMOS LOS GROUP MODULES QUE QUEREMOS
	//recogemos los que queremos mantener.
	//TODO: que los recoja de las settings del theme.
	$modules = array("bookmarks","blog");

	//se los pasamos a una función que elimina todos menos estos
	remove_all_group_modules($modules);


	//REGISTRO DE UN MANEJADOR DE EVENTOS PAGESETUP
	elgg_register_event_handler('pagesetup', 'system', 'podemos_theme19_pagesetup', 1000);
	//Le establecermos una prioridad 1000 que es la maxima.

	// theme specific CSS
	// extendemos el css del core.
	elgg_extend_view('css/elgg', 'aalborg_theme/css');

	elgg_register_plugin_hook_handler('head', 'page', 'podemos_theme19_setuphead');

	elgg_register_js('respond', 'mod/podemos_theme19/vendors/js/respond.min.js');
	elgg_load_js('respond');

	// non-members do not get visible links to RSS feeds
	if (!elgg_is_logged_in()) {
		elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');
	}

	//REGISTRAMOS UN NUEVO ELEMENTO EN EL MENU TOPBAR, EL CUAL TIENE DOS SECCIONES: 'default' y 'alt'
	elgg_register_menu_item('topbar', array(
        'name' => 'search',
				'priority' => 600,
        'text' => "<img src='".elgg_get_site_url()."/mod/podemos_theme19/graphics/lupa.png'/>",
        'href' => "#",
				'section' => 'alt',
	));
	//RECOGEMOS EL ITEM DEL MENU COMO UN OBJETO
	//$item = elgg_get_menu_item('topbar', 'search');

}

/**
 * Rearrange menu items
 * Reorganizar los elementos del menu.
 */
function podemos_theme19_pagesetup() {

	/*
	//DESXTENDER LA VISTA search/header DE LA DE page/elements/header
	//¿QUE ESTARÁ EXTENDIDA POR EL CORE?
	elgg_unextend_view('page/elements/header', 'search/header');
	//SOLO SE EXTIENDE A LOS USUARIOS LOGUEADOS.
	if (elgg_is_logged_in()) {
		elgg_extend_view('page/elements/topbar', 'search/header', 0);
	}
	*/

	if (elgg_is_logged_in()) {

		/*CAMBIAMOS EL TEXTO (TEXT) POR UNA IMAGEN (antes elgg_echo('account'))*/
		elgg_register_menu_item('topbar', array(
			'name' => 'account',
			'text' => "<img src='".elgg_get_site_url()."/mod/podemos_theme19/graphics/cuenta.png'/>",
			'href' => "#",
			'priority' => 100,
			'section' => 'alt',
			'link_class' => 'elgg-topbar-dropdown',
		));

		if (elgg_is_active_plugin('dashboard')) {
			$item = elgg_unregister_menu_item('topbar', 'dashboard');
			if ($item) {
				$item->setText(elgg_echo('dashboard'));
				$item->setSection('default');
				elgg_register_menu_item('site', $item);
			}
		}

		$item = elgg_get_menu_item('topbar', 'usersettings');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('settings'));
			$item->setPriority(103);
		}

		$item = elgg_get_menu_item('topbar', 'logout');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('logout'));
			$item->setPriority(104);
		}

		$item = elgg_get_menu_item('topbar', 'administration');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('admin'));
			$item->setPriority(101);
		}

		if (elgg_is_active_plugin('site_notifications')) {
			$item = elgg_get_menu_item('topbar', 'site_notifications');
			if ($item) {
				$item->setParentName('account');
				$item->setText(elgg_echo('site_notifications:topbar'));
				$item->setPriority(102);
			}
		}



		if (elgg_is_active_plugin('reportedcontent')) {
			$item = elgg_unregister_menu_item('footer', 'report_this');
			if ($item) {
				$item->setText(elgg_view_icon('report-this'));
				$item->setPriority(500);
				$item->setSection('default');
				elgg_register_menu_item('extras', $item);
			}
		}
	}
}

/**
 * Register items for the html head
 *
 * @param string $hook Hook name ('head')
 * @param string $type Hook type ('page')
 * @param array  $data Array of items for head
 * @return array
 */
function podemos_theme19_setuphead($hook, $type, $data) {
	$data['metas'][] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
	);

    // https://developer.chrome.com/multidevice/android/installtohomescreen
    $data['metas'][] = array(
        'name' => 'mobile-web-app-capable',
        'content' => 'yes',
    );

    $data['metas'][] = array(
        'name' => 'apple-mobile-web-app-capable',
        'content' => 'yes',
    );

	$data['links'][] = array(
		'rel' => 'apple-touch-icon',
		'href' => elgg_normalize_url('mod/podemos_theme19/graphics/homescreen.png'),
	);
	return $data;
}
