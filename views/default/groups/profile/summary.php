<?php
/**
 * Group profile summary
 *
 * Icon and profile fields
 *
 * @uses $vars['group']
 */

if (!isset($vars['entity']) || !$vars['entity']) {
	echo elgg_echo('groups:notfound');
	return true;
}

$group = $vars['entity'];
$owner = $group->getOwnerEntity();

if (!$owner) {
	// not having an owner is very bad so we throw an exception
	$msg = "Sorry, '" . 'group owner' . "' does not exist for guid:" . $group->guid;
	throw new InvalidParameterException($msg);
}

?>
<div class="groups-profile clearfix elgg-image-block">
	<!--IMAGEN Y ESTADISTICAS DEL GRUPO-->
	<div class="elgg-image">
		<!--Imagen del grupo-->
		<div class="groups-profile-icon">
			<?php
				// we don't force icons to be square so don't set width/height
				echo elgg_view_entity_icon($group, 'medium', array(
					'href' => '',
					'width' => '',
					'height' => '',
				)); 
			?>
		</div>
		<!--Estadisticas del grupo de debajo de la imagen-->
		<div class="groups-stats">
			<p>
				<b><?php echo elgg_echo("groups:owner"); ?>: </b>
				<br />
				<?php
					echo elgg_view('output/url', array(
						'text' => $owner->name,
						'value' => $owner->getURL(),
						'is_trusted' => true,
					));
				?>
			</p>
			<p>
			<?php
				$num_members = $group->getMembers(array('count' => true));
				echo elgg_echo('groups:members') . ": " . $num_members;
			?>
			</p>
		</div>
	</div>

	<!--DESCRIPCION GRANDE, BREVE Y TAGS DEL GRUPO.-->
	<div class="groups-profile-fields elgg-body">
		<?php
			echo elgg_view('groups/profile/fields', $vars);
		?>
	</div>
</div>
