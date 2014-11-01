<?php
/**
 * Header for layouts
 *
 * @uses $vars['title']  Title
 * @uses $vars['header'] Optional override for the header
 */

if (isset($vars['header'])) {
	echo '<div class="elgg-head clearfix">';
	echo $vars['header'];
	echo '</div>';
	return;
}

$buttons = elgg_view_menu('title', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

if ($buttons) {
	echo '<div class="elgg-podemos-head clearfix">';
	// @todo .elgg-heading-main supports action buttons - maybe rename class name?
	echo $buttons;
	echo '</div>';
}
