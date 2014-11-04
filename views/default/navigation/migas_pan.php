<?php
/**
 * Displays Migas de pan.
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['breadcrumbs'] (Optional) Array of arrays with keys 'title' and 'link'
 * @uses $vars['class']
 *
 * @see elgg_push_breadcrumb
 */

$migas = array_reverse($CONFIG->array_migas);
//print_r($CONFIG->array_migas);

$class = 'elgg-menu elgg-breadcrumbs';
$additional_class = elgg_extract('class', $vars, '');
if ($additional_class) {
	$class = "$class $additional_class";
}

//cargamos una imagen u otra dependiendo de si estamo en Index o en un grupo.
if(count($migas)>0){
	$class2="elgg-logo-group";
	$image="podemos.png";

}else{
	$class2="elgg-logo";
	$image="ComunidadPodemos.png";

}

//$image2="flecha.png";

//FUNCIONA. SE RECOGE LA URL DEL SITIO, NO SU RUTA DENTRO DEL SERVIDOR
$path_image= elgg_get_site_url()."mod/podemos_theme19/graphics/".$image;
//$path_image2= elgg_get_site_url()."mod/podemos_theme19/graphics/".$image2;

//EL MENU SIEMPRE EXISTE AL MENOS CON UN ELEMENTO INICIO
echo "<ul class=\"$class\">";

//CREAMOS UN PRIMER ELEMENTO DEL MENU QUE MOSTRARÁ UNA IMAGEN QUE PUEDE CAMBIAR.
echo "<li class=\"$class2\"><div class='contenido_item1'><a href='".elgg_get_site_url()."groups'><img src='".elgg_get_site_url()."/mod/podemos_theme19/graphics/$image'/></a></div><div class='flecha'></div></li>";

//<img src=".$path_image." />

if (is_array($migas) && count($migas) > 0) {

	$number_migas = count($migas);
	for ($i = 0;$i<$number_migas; $i++) {

		$miga = $migas[$i][1];
		$miga_link = $migas[$i][2];
		//elgg_require_js("breadcrumbs");
		echo "<li><div class='flecha_reves'></div><div class='contenido elgg-podemos-breadcrumb'><a href='$miga_link'>$miga</a></div><div class='flecha'></div></li>";
	}
}

echo '</ul>';
