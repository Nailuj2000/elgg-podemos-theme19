<?php
/**
 * Elgg page body wrapper
 *
 * @uses $vars['body'] The HTML of the page body
 */
// MUESTRA TODO EL CONTENEDOR DE DEBAJO DE TOPBAR Y DE HEADER, PAGE.
echo elgg_extract('body', $vars, '');