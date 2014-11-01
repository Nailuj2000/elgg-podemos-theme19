<?php
function remove_all_group_modules($modules_mantener) {
	global $CONFIG;

	$modules_hay = $CONFIG->group_tool_options;
	//var_dump($modules_hay);
	if (!isset($modules_hay) || ($modules_hay == NULL)) {
		return;
	}

	//METODO REGULAR
	foreach($modules_hay as $entity){
		elgg_unextend_view('groups/tool_latest', "$entity->name/group_module");
		if ($entity->name == "forum"){
			elgg_unextend_view('groups/tool_latest', "discussion/group_module");
		}
		if ($entity->name == "activity"){
			elgg_unextend_view('groups/tool_latest', "groups/profile/activity_module");
		}
		if ($entity->name == "subgroups"){
			elgg_unextend_view('groups/tool_latest', "au_subgroups/group_module");
		}
	}
	foreach($modules_mantener as $module){
		elgg_extend_view('groups/tool_latest', "$module/group_module");
	}
	/*
	//INTENTO DE METODO MEJOR
	foreach($modules_hay->name as $entity){
		foreach($modules_mantener as $modules){
			if ($entity == $modules){
				$entity = "";
			}
		}
	}

	foreach($modules_hay as $entity){
		if ($entity!=""){
			elgg_unextend_view('groups/tool_latest', "$entity->name/group_module");
			if ($entity->name == "forum"){
				elgg_unextend_view('groups/tool_latest', "discussion/group_module");
			}
			if ($entity->name == "activity"){
				elgg_unextend_view('groups/tool_latest', "groups/profile/activity_module");
			}
			if ($entity->name == "subgroups"){
				elgg_unextend_view('groups/tool_latest', "au_subgroups/group_module");
			}
		}
	}
	*/


}
