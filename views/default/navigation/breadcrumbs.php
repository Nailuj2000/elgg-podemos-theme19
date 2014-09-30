<?php
/**
 * Displays breadcrumbs.
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['breadcrumbs'] (Optional) Array of arrays with keys 'title' and 'link'
 * @uses $vars['class']
 *
 * @see elgg_push_breadcrumb
 */

// SI EXISTEN BREADCRUMBS EN $vars LAS RECOGEMOS Y SI NO LAS RECOGEMOS 
if (isset($vars['breadcrumbs'])) {
	$breadcrumbs = $vars['breadcrumbs'];
} else {
	$breadcrumbs = elgg_get_breadcrumbs();
}
/*
foreach ($breadcrumbs as $bread){
	print_r($bread);
	echo "<br />";	
} */
$class = 'elgg-menu elgg-breadcrumbs';
$additional_class = elgg_extract('class', $vars, '');
if ($additional_class) {
	$class = "$class $additional_class";
}

//cargamos una imagen u otra dependiendo de si estamo en Index o en un grupo.
if(count($breadcrumbs)>0){
	$class2="elgg-logo-group";
	$image="podemos.png";

}else{
	$class2="elgg-logo";
	$image="ComunidadPodemos.png";

}

$image2="flecha.png";
	
//FUNCIONA. SE RECOGE LA URL DEL SITIO, NO SU RUTA DENTRO DEL SERVIDOR
$path_image= elgg_get_site_url()."mod/podemos_theme19/graphics/".$image;
$path_image2= elgg_get_site_url()."mod/podemos_theme19/graphics/".$image2;

//EL MENU SIEMPRE EXISTE AL MENOS CON UN ELEMENTO INICIO
echo "<ul class=\"$class\">";

//CREAMOS UN PRIMER ELEMENTO DEL MENU QUE MOSTRARÁ UNA IMAGEN QUE PUEDE CAMBIAR.
echo "<li class=\"$class2\"><img src=".$path_image." /><img src=".$path_image2." /></li>";

if (is_array($breadcrumbs) && count($breadcrumbs) > 0) {
	/*$number_breadcrumbs = count($breadcrumbs);
	for ($i=0; $i<$number_breadcrumbs; $i++){
		if ($breadcrumbs[$i]['title'] = 'Groups'){
			$breadcrumbs_groups = $breadcrumbs[$i];
			continue;
		}
	}*/
	$number_breadcrumbs = count($breadcrumbs);
	for ($i = 1;$i<$number_breadcrumbs; $i++) {
		if (!empty($breadcrumbs[$i]['link'])) {
			$breadcrumb = elgg_view('output/url', array(
				'href' => $breadcrumbs[$i]['link'],
				'text' => $breadcrumbs[$i]['title'],
				'is_trusted' => true,
			));
		} else {
			$breadcrumb = $breadcrumbs[$i]['title'];
		}
		echo "<li>$breadcrumb</li>";
	}
}
echo '</ul>';
