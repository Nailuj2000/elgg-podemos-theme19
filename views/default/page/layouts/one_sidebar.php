<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is added to the sidebar
 * @uses $vars['nav']     Optional override of the page nav (default: breadcrumbs)
 * @uses $vars['header']  Optional override for the header
 * @uses $vars['footer']  Optional footer
 * @uses $vars['class']   Additional class to apply to layout
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

?>

<div class="<?php echo $class; ?>">
	<div class="elgg-main elgg-body">
		<?php
			//MUESTRA LOS BREADCRUMS EN LA PARTE SUPERIOR DEL BODY DE LA PAGINA DEL SITE
			//echo elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));
			
			//MUESTRA EL ICONO Y EL TITULO DEL GRUPO Y EL MENU DE LA ENTIDAD.
			echo elgg_view('page/elements/owner_block', $vars);

			//MUESTRA EL HEADER DEL LAS PAGINAS (TITULO Y MENUS DE GROUPS)
			echo elgg_view('page/layouts/elements/header', $vars);
			
			// @todo deprecated so remove in Elgg 2.0
			if (isset($vars['area1'])) {
				echo $vars['area1'];
			}
			if (isset($vars['content'])) {
				//MUESTRA EL CONTENIDO PRINCIPAL, MAIN DE PAGE.
				echo $vars['content'];
			}
			
			echo elgg_view('page/layouts/elements/footer', $vars);
		?>
	</div>
	<div class="elgg-sidebar">
		<?php
			// With the mobile experience in mind, the content order is changed in aalborg theme,
			// by moving sidebar below main content.
			// On smaller screens, blocks are stacked in left to right order: content, sidebar.
			//CARGA LA VISTA DE ELEMENTOS DE LA SIDEBAR Y LA MUESTRA.
			echo elgg_view('page/elements/sidebar', $vars);

			//SE RECOGE EN UNA VARIABLE LOS GRUPOS RELACIONADOS CON EL USUARIO LOGUEADO Y SE MUESTRAN EN LA SIDEBAR
			$groups = elgg_get_entities_from_relationship(array('relationship'=> 'member', 'relationship_guid'=> $owner->guid, 'inverse_relationship'=> FALSE, 'type'=> 'group', 'limit'=> 5));

			//SE CREA UN ENLACE A CADA UNO DE LOS GRUPOS RELACIONADOS CON EL USUARIO LOGUEADO
			foreach ($groups as $group){
				$enlace=elgg_get_site_url()."/groups/profile/".$group['guid']."/".$group['name'];
				echo "<a href={$enlace}>".$group['name']."</a><br />";
				}

		?>
	</div>
</div>
