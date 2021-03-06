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
 * MOODLE VERSION INFORMATION
 *
 * This file defines the current version of the core Moodle code being used.
 * This is compared against the values stored in the database to determine
 * whether upgrades should be performed (see lib/db/*.php)
 *
 * @package    core
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once (dirname ( __FILE__ ) . '/../../config.php');

global $DB, $USER, $CFG;

require_login();

$baseurl = new moodle_url ( '/local/test/index.php' );
$context = context_system::instance ();
$PAGE->set_context ( $context );
$PAGE->set_url ( $baseurl );
$PAGE->set_pagelayout ( 'standard' );
$PAGE->set_title ( get_string( 'title', 'local_test') );
$PAGE->set_heading ( get_string( 'title', 'local_test') );
$PAGE->navbar->add( get_string( 'test', 'local_test') );
$PAGE->navbar->add( 'index', 'reservar.php' );

echo $OUTPUT->header ();
echo $OUTPUT->heading( get_string( 'title', 'local_test') );
echo $OUTPUT->footer();

