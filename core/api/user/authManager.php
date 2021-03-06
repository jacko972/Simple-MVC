<?php 
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file 
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of 
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:       authManager.php
 * 
 * @author      Anis BEREJEB
 * @version     0.1
 */

/**
 * An Authentification manager.
 * 
 * Handles the authentification process
 * 
 */
class authManager
{
    /**
     * Checks if a user is logged in
     * 
     * @return boolean true if the user is logged in, false otherwise
     */
    public static function check()
    {
        sessionManager::init();
        if (false === sessionManager::get('login') || (false === sessionManager::get('password')))
        {
            return false;
        }
        return true;
    }
}    
