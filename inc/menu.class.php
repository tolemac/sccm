<?php

/**
 * -------------------------------------------------------------------------
 * SCCM plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of SCCM.
 *
 * SCCM is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * SCCM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with SCCM. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @author    François Legastelois
 * @copyright Copyright (C) 2014-2023 by SCCM plugin team.
 * @license   GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link      https://github.com/pluginsGLPI/sccm
 * -------------------------------------------------------------------------
 */

class PluginSccmMenu extends CommonGLPI {

   static function getTypeName($nb = 0) {
      return __('Menu', 'sccm');
   }

   static function getSearchURL($full = true)
   {
      $url = Plugin::getWebDir('sccm', false);
      return $url . '/front/config.php';
   }

   static function getNewURL($full = true)
   {
      $url = Plugin::getWebDir('sccm', false);
      return $url . '/front/config.form.php';
   }

   static function getMenuName() {
      return __('SCCM', 'sccm');
   }

   public static function getIcon() {
      return "fa-solid fa-dice-d20";
   }

   static function getMenuContent() {
      $menu = [
         'title'   => self::getMenuName(),
         'page'    => self::getSearchURL(false),
         'icon'    => self::getIcon(),
         'options' => [],
      ];

      $menu['links']['add'] = self::getNewURL();
      return $menu;   
   }

}