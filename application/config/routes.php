<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';

$route['selection'] = 'admin/dashboard/selection';
$route['admindashboard'] = 'admin/admindashboard';

/* Korroboree Team Journal Dashboard*/

$route['account'] = 'k_team_journal/admin/account';
$route['settings'] = 'k_team_journal/admin/settings';

$route['kteam'] = 'k_team_journal/kteam';
$route['dashboard'] = 'k_team_journal/kteam/dashboard';
$route['kteam_file_manager'] = 'k_team_journal/kteam/kteam_file_manager';
$route['kteam_library'] = 'k_team_journal/kteam/kteam_library';
$route['kteam_userdata'] = 'k_team_journal/kteam/kteam_userdata';
$route['userdata_view'] = 'k_team_journal/kteam/userdata_view';
$route['userdata_topic_view'] = 'k_team_journal/kteam/userdata_topic_view';

/* Episode Pages*/
$route['project_list'] = 'k_team_journal/kteam/project_list';
$route['episode_list'] = 'k_team_journal/episode/episode_list';
$route['create'] = 'k_team_journal/episode/create';
$route['edit'] = 'k_team_journal/episode/edit';
$route['view'] = 'k_team_journal/episode/view';
$route['tracker'] = 'k_team_journal/episode/tracker';

/* Topic Pages*/
$route['topic_list'] = 'k_team_journal/topic/topic_list';
$route['topic_create'] = 'k_team_journal/topic/topic_create';
$route['topic_edit'] = 'k_team_journal/topic/topic_edit';
$route['topic_view'] = 'k_team_journal/topic/topic_view';
$route['topic_tracker'] = 'k_team_journal/topic/topic_tracker';

/* Korroboree Team Video Journal Dashboard*/
$route['dashboard_v'] = 'k_team_video_journal/kteam/dashboard_v';

$route['account_v'] = 'k_team_video_journal/admin/account_v';
$route['settings_v'] = 'k_team_video_journal/admin/settings_v';

$route['kteam_file_manager_v'] = 'k_team_video_journal/kteam/kteam_file_manager_v';

/* Video Journal Pages*/
$route['project_list_v'] = 'k_team_video_journal/kteam/project_list_v';
$route['episode_list_v'] = 'k_team_video_journal/episode/episode_list_v';

$route['create_v'] = 'k_team_video_journal/episode/create_v';
$route['view_v'] = 'k_team_video_journal/episode/view_v';
$route['edit_v'] = 'k_team_video_journal/episode/edit_v';
$route['tracker_v'] = 'k_team_video_journal/episode/tracker_v';

/* User Data Capture Links*/

$route['kteam_userdata_v'] = 'k_team_video_journal/kteam/kteam_userdata_v';
$route['userdata_view_v'] = 'k_team_video_journal/kteam/userdata_view_v';
$route['userdata_topic_view_v'] = 'k_team_video_journal/kteam/userdata_topic_view_v';



/* 5THDT Team Journal Dashboard*/
$route['dashboard_five'] = 'journal_5th/five_team/dashboard_five';
$route['account_five'] = 'journal_5th/five_team/account_five';
$route['settings_five'] = 'journal_5th/five_team/settings_five';

$route['project'] = 'journal_5th/project';
$route['kanban'] = 'journal_5th/project/kanban';

/* Episode Pages*/
$route['episode_list_five'] = 'journal_5th/episode/episode_list_five';

/* 5THDT Team Video Journal Dashboard*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
