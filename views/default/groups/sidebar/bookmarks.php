<?php
/**
 * Group bookmarks sidebar
 *
 * @package ElggGroups
 *
 * @uses $vars['entity'] Group entity
 * @uses $vars['limit']  The number of members to display
 */

if (elgg_is_active_plugin('bookmarks')) {
  $title = elgg_echo('groups:bookmarks');

  $bookmarks = elgg_get_entities(array(
    'type' => 'object',
    'subtype' => 'bookmarks',
    'container_guid' => $vars['entity']->guid,
  ));
  //var_dump($bookmarks);
  $body = "";
  /*
  //TODO:Quizás es mejor, puesto que muestra más objetos como el de compartir, mirar de usarlo más adelante
  $body = elgg_view_entity_list( $bookmarks, array("count"=> 0,
                                                   "offset" => 0,
                                                   "limit" => 5,
                                                   "full_view" => false,
                                                   )

  );*/
  /*TODO:hacer que te mande al sitio además de a la página del enlace
  (no encuentro el atributo de url del mismo)*/
  foreach ($bookmarks as $bookmark) {
    $body .= elgg_view_image_block(
      //elgg_view_entity_icon($subgroup, 'tiny'),
      elgg_view('output/url', array(
        'href' => $bookmark->getURL(),
        'text' => $bookmark->title,
        'is_trusted' => true)
      )
    );
  }

  $all_link = elgg_view('output/url', array(
    'href' => 'bookmarks/group/' . $vars['entity']->guid,
    'text' => elgg_echo('groups:bookmarks:more'),
    'is_trusted' => true,
  ));

  $body .= "<div class='center mts'>$all_link</div>";

  echo elgg_view_module('aside', $title, $body);
}
