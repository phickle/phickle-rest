<?php
/**
 * @author Ujjwal Bhardwaj <ujjwalb1996@gmail.com>
 *
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace Phickle\Core\Helpers;

class Config
{
    public $config;

    public function get($key)
    {
        if (!$this->config) {

            $config_file = '../Application/Config/config.php';

            if (!file_exists($config_file)) {
                return false;
            }

            $this->config = require $config_file;
        }

        return $this->config[$key];
    }
}