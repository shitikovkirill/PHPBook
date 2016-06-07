<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 05.06.16
 * Time: 20:23
 */

namespace Theme\Controllers;




class ThemeController extends Controller
{
    public function githubThemeUpdater(){
        $config = array(
            'slug' => plugin_basename(__FILE__), // this is the slug of your plugin
            'proper_folder_name' => 'server', // this is the name of the folder your plugin lives in
            'api_url' => 'https://api.github.com/shitikovkirill/server', // the github API url of your github repo
            'raw_url' => 'https://raw.github.com/shitikovkirill/server/master', // the github raw url of your github repo
            'github_url' => 'https://github.com/shitikovkirill/server', // the github url of your github repo
            'zip_url' => 'https://github.com/shitikovkirill/server/zipball/master', // the zip url of the github repo
            'sslverify' => true, // wether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
            'requires' => '4.0', // which version of WordPress does your plugin require?
            'tested' => '4.0', // which version of WordPress is your plugin tested up to?
            'readme' => 'README.md' // which file to use as the readme for the version number
        );
        new \WPGitHubUpdater($config);
    }
}