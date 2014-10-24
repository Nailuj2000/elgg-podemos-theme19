<?php
/**
 * Layout of the groups profile page
 * Vista principal estructura de los grupos.
 *
 * @uses $vars['entity']
 */

/* @var ElggGroup $group */
$group = elgg_extract('entity', $vars);

//MUESTRA EL AVATAR GRANDE DEL GRUPO Y LA INFO DEL MISMO.
echo elgg_view('groups/profile/summary', $vars);

if (elgg_group_gatekeeper(false)) {

	if (!$group->isPublicMembership() && !$group->isMember()) {

		echo elgg_view('groups/profile/closed_membership');

	}

echo elgg_view('groups/profile/widgets', $vars);

	} else {

		if ($group->isPublicMembership()) {

			echo elgg_view('groups/profile/membersonly_open');

		} else {

		echo elgg_view('groups/profile/membersonly_closed');
	}
}
