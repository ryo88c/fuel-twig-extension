<?php
/**
 * The packages of extra extension for Twig.
 *
 * @author    Ryo HAYASHI
 * @copyright Ryo HAYASHI
 * @license   MIT License http://www.opensource.org/licenses/mit-license.php
 * @package   Fuel
 */
Autoloader::add_core_namespace('TwigExtension');
Autoloader::add_class('TwigExtension\\Extension', __DIR__ . '/classes/extension.php');
