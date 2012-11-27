<?php
/**
 *    Copyright (c) 2012 Lunar Logic LLC
 *
 *    This program is free software: you can redistribute it and/or  modify
 *    it under the terms of the GNU Affero General Public License, version 3,
 *    as published by the Free Software Foundation.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

 /**
  * Class to dump log messages to the screen.
  */
class EchoLogger extends Ox_Logger implements Ox_LogWriter
{
    /**
     * Simple constructor with optional log level (e.g. MESSAGE = 1, WARNING = 2, ERROR   = 4, DEBUG   = 8;)
     */
    public function __construct( $level = 0 )
    {
        $this->log_level = $level;
    }

    /**
     * Writes the message out to the screen.
     */
    public function log($message)
    {
        var_dump($message);
    }
}
