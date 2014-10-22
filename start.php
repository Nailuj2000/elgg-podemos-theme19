<?php
/**
 * Aalborg theme plugin
 *
 * @package AalborgTheme
 */

//EJECUCIÓN DEL METODO QUE REGISTRA UN MANEJADOR DE EVENTOS DE ELLG
//CUANDO SE ACTIVA O SE VUELVEN ACTUALZIAR LA CONFIGURACIÓN SE EJECUTA EL EVENTO INITI 
elgg_register_event_handler('init','system','podemos_theme19_init');
// init es el evento y system es el ámbito (allá donde te encuentras).

//DECLARACIÓN DEL METODO A EJECUTAR CUANDO SE EJECUTA EL START.PHP
function podemos_theme19_init() {

	//REGISTRO DE UN MANEJADOR DE EVENTOS PAGESETUP
	elgg_register_event_handler('pagesetup', 'system', 'podemos_theme19_pagesetup', 1000);
	//Le establecermos una prioridad 1000 que es la maxima.

	// theme specific CSS
	// sobrescribimos las vistas del core.
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

	//DECLARACION DE LOS MANEJADORES DE CUATRO PAGINAS NUEVAS, dashboard, decidir, debatir, informarme
	elgg_register_page_handler("dashboard","dashboard_page_handler");
	elgg_register_page_handler("decidir","decidir_page_handler");
	elgg_register_page_handler("debatir","debatir_page_handler");
	elgg_register_page_handler("informarme","informarme_page_handler");

}

//CONJUNTO DE FUNCIONES CALLBACK LAS CUALES GENERARAN CADA PAGINA DE  dashboard, decidir, debatir, informarme
function dashboard_page_handler() {

	$params = array(
        'title' => 'Dashboard',
        'content' => 'El Dashboard del usuario actual dentro del grupo',
        'filter' => '',
    	);

    	$body = elgg_view_layout('content', $params);

    	echo elgg_view_page('Dashboard', $body);

}

function decidir_page_handler() {

	$params = array(
        'title' => 'Decidir',
        'content' => 'La zona de debate del grupo, para este usuario',
        'filter' => '',
    	);

    	$body = elgg_view_layout('content', $params);

    	echo elgg_view_page('Decidir', $body);

}

function debatir_page_handler() {

	$params = array(
        'title' => 'Debatir',
        'content' => 'La zona de debate del grupo, para este usuario',
        'filter' => '',
    	);

    	$body = elgg_view_layout('content', $params);

    	echo elgg_view_page('Debatir', $body);

}

function informarme_page_handler() {

	$params = array(
        'title' => 'Informarme',
        'content' => 'La zona de información del grupo, para este usuario',
        'filter' => '',
    	);

    	$body = elgg_view_layout('content', $params);

    	echo elgg_view_page('Informarme', $body);

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
