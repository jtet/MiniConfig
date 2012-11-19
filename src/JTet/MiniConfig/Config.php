<?php
/**
 * JTet\MiniConfig
 * https://github.com/jtet/MiniConfig
 *
 * Please see http://www.spdx.org/licenses/OSL-3.0#licenseText
 * for license information.
 */
namespace JTet\MiniConfig;
class Config
{
    protected $s = array();
    function __set($k, $c){ $this->s[$k] = $c; }
    function __get($k){ return @$this->s[$k] ? : null; }
    function __construct($file)
    {
        switch (pathinfo($file, PATHINFO_EXTENSION)) {
        case "ini":
            $this->s = parse_ini_file($file);
            break;
        case "yml":
            if (function_exists("parse_yaml")) {
                $this->s = parse_yaml($file);
                break;
            }
        default:
            trigger_error($file . " can't be loaded as the configuration.",
                    E_USER_ERROR);
        }
    }
}
