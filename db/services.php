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
 * Forum external functions and service definitions.
 *
 * @package    mod_hsuforum
 * @copyright  2012 Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(

    'mod_hsuforum_get_forums_by_courses' => array(
        'classname' => 'mod_hsuforum_external',
        'methodname' => 'get_forums_by_courses',
        'classpath' => 'mod/hsuforum/externallib.php',
        'description' => 'Returns a list of forum instances in a provided set of courses, if
            no courses are provided then all the forum instances the user has access to will be
            returned.',
        'type' => 'read',
        'capabilities' => 'mod/hsuforum:viewdiscussion'
    ),

    'mod_hsuforum_get_forum_discussions' => array(
        'classname' => 'mod_hsuforum_external',
        'methodname' => 'get_forum_discussions',
        'classpath' => 'mod/hsuforum/externallib.php',
        'description' => 'DEPRECATED (use mod_hsuforum_get_forum_discussions_paginated instead):
                            Returns a list of forum discussions contained within a given set of forums.',
        'type' => 'read',
        'capabilities' => 'mod/hsuforum:viewdiscussion, mod/hsuforum:viewqandawithoutposting'
    ),

    'mod_hsuforum_get_forum_discussion_posts' => array(
        'classname' => 'mod_hsuforum_external',
        'methodname' => 'get_forum_discussion_posts',
        'classpath' => 'mod/hsuforum/externallib.php',
        'description' => 'Returns a list of forum posts for a discussion.',
        'type' => 'read',
        'capabilities' => 'mod/hsuforum:viewdiscussion, mod/hsuforum:viewqandawithoutposting'
    )
);
