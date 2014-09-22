<?php
/**
 * Elgg page body wrapper
 *
 * @uses $vars['body'] The HTML of the page body
 */
// EXTRAEMOS DE $VARS EL CONTENIDO DEL OBJETO BODY Y SE MUESTRA POR PANTALLA
echo elgg_extract('body', $vars, '');