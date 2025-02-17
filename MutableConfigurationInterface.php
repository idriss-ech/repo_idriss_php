<?php

declare(strict_types=1);

/* 
* This file is part of the league\config package.
* 
* (c) Colin O'Dell <colinodell@gmail.com>
* 
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace League\Config;

use League\Config\Exception\UnknownOptionException;


/**
 * Interface for setting/mergins user-defined configuration values int the configuration object
 * 
 */

 interface MutableConfigurationInterface 
 {
    /**
     * @param mixed $value
     * 
     * @throws UnknownOptionException if $key contains a nested path 
     */

     public function set(string $key, $value):void;

     /** 
      * @param array<string,mixed> $config 
      */
      public function merge(array $config = []):void;
 }