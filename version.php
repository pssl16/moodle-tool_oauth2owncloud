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
 * Version.php for oauth2sciebo admin tool
 *
 * @package    tool_oauth2sciebo
 * @copyright  2016 Westfälische Wilhelms-Universität Münster (WWU Münster)
 * @author     Projektseminar Uni Münster
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'tool_oauth2sciebo'; // Full name of the plugin (used for diagnostics).
$plugin->version   = 2016111100;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->release = 'v0.0';
$plugin->requires  = 2016051900;        // Requires this Moodle version.
$plugin->maturity = MATURITY_ALPHA;
$plugin->cron = 0;
$plugin->dependencies = array();
