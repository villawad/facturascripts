<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2019 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Core\Base;

use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Dinamic\Lib\IPFilter as DinamicIPFilter;

/**
 * Description of ToolBox
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class ToolBox
{

    /**
     * 
     * @return AppSettings
     */
    public function appSettings()
    {
        return new AppSettings();
    }

    /**
     * 
     * @return Cache
     */
    public static function cache()
    {
        return new Cache();
    }

    /**
     * 
     * @return FileManager
     */
    public static function fileManager()
    {
        return new FileManager();
    }

    /**
     * 
     * @param string $langcode
     *
     * @return Translator
     */
    public static function i18n(string $langcode = '')
    {
        return new Translator($langcode);
    }

    /**
     * 
     * @param string $channel
     *
     * @return Translate2Log
     */
    public static function i18nLog(string $channel = '')
    {
        return new Translate2Log($channel);
    }

    /**
     * 
     * @return DinamicIPFilter
     */
    public static function ipFilter()
    {
        return new DinamicIPFilter();
    }

    /**
     * 
     * @param string $channel
     *
     * @return MiniLog
     */
    public static function miniLog(string $channel = '')
    {
        return new MiniLog($channel);
    }

    /**
     * 
     * @return Utils
     */
    public static function utils()
    {
        return new Utils();
    }
}
