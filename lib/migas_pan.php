<?php
function get_parent_group($guid){
  global $CONFIG;
  $parent = elgg_get_entities_from_relationship(array(
                                                    'types' => array('group'),
                                                    'limit' => 1,
                                                    'relationship' => AU_SUBGROUPS_RELATIONSHIP,
                                                    'relationship_guid' => $guid,
  ));

  if (is_array($parent)){
    $CONFIG->padre = $parent[0];
    //echo $CONFIG->padre->guid;
    return $parent[0];
  }
}

//TODO:recorrer toda la ascendencia de una vez
function set_migas($guid_actual){
  global $CONFIG;
  $group = get_entity($guid_actual);
  if(!$group || !elgg_instanceof($group, "group")){
    //forward(REFERER);
    return;
    //TODO: ver que es mejor en este caso
  }

  //GUARDAMOS EL ARRAY DEL GRUPO ACTUAL
  $link_group = $group->getURL();
  $title_group = $group->name;
  $guid_group = $group->guid;
  $CONFIG->array_migas[] = array($guid_group, $title_group, $link_group);
  //var_dump($CONFIG->array_migas); // esta vacio

  //GUARDAMOS EL ARRAY DEL GRUPO PADRE
  get_parent_group($guid_actual);
  $group_padre = get_entity($CONFIG->padre->guid);

  if($group_padre != NULL){
    $title_padre = $group_padre->name;
    $link_padre = $group_padre->getURL();

    $CONFIG->array_migas[] = array($CONFIG->padre->guid, $title_padre, $link_padre);
    //var_dump($CONFIG->array_migas); // un 49 como una catedral
  }

  //GUARDAMOS LOS ARRAYS DEL RESTO DE ASCENDENCIA
  while(isset($CONFIG->padre)){

    $abuelo = get_parent_group($CONFIG->padre->guid);
    if($abuelo != NULL){
      //var_dump($abuelo->guid);
      $link_abuelo = $abuelo->getURL();
      $title_abuelo = $abuelo->name;

      $CONFIG->array_migas[] = array($abuelo->guid, $title_abuelo, $link_abuelo);
    }
    // echo $CONFIG->array_migas[0];
    //cuando no haya padre será igual a NULL
    $CONFIG->padre = $abuelo;
  }
  var_dump($CONFIG->array_migas);
}

?>
