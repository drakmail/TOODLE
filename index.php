<?php
/**
 * TOODLE
 *
 * PHP Version 5.3
 *
 * @category  Site
 * @package   Bootstrap
 * @author    Alexander Maslov <it@delta-z.ru>
 * @copyright 2011 Alexader Maslov (http://www.delta-z.ru)
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3
 * @link      https://github.com/drakmail/toodle
 */

namespace toodle;

/**
 * Auto classloader
 * @param $class class name
 */
function autoload($class)
{
    $class = str_replace('toodle\\', '', $class);
    $class = str_replace('\\', '/', $class) . '.php';
    require_once($class);
}

spl_autoload_register('\toodle\autoload');

use \toodle\core\Core;

$t = new Core($_GET,$_POST);
?>