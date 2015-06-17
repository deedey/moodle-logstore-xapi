<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * External xapi log store plugin
 *
 * @package    logstore_xapi
 * @copyright  2015 Jerrett Fowler <jfowler@charitylearning.org>
 *                  Ryan Smith <ryan.smith@ht2.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    //endpoint
    $settings->add(new admin_setting_configtext('logstore_xapi/endpoint', get_string('endpoint', 'logstore_xapi'), '', 'http://your.domain.com/endpoint/location/', PARAM_TEXT));
    //username
    $settings->add(new admin_setting_configtext('logstore_xapi/username', get_string('username', 'logstore_xapi'), '', 'username', PARAM_TEXT));
    //key or password
    $settings->add(new admin_setting_configtext('logstore_xapi/password', get_string('password', 'logstore_xapi'), '', 'password', PARAM_TEXT));
}
