<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>;.

/**
 * @package     local_greetings
 * @copyright   2024 Tran Trung Duc <golden4gnvx@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


function local_greetings_get_greeting($user)
{
    if ($user == null) {
        return get_string('greetinguser', 'local_greetings');
    }
    $country = $user->country;
    switch ($country) {
        case 'VN':
            $langstr = 'greetinguservn';
            break;
        case 'ES':
            $langstr = 'greetinguseres';
            break;
        default:
            $langstr = 'greetingloggedinuser';
            break;
    }
    return get_string($langstr, 'local_greetings', fullname($user));
}
