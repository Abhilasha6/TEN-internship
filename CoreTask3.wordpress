/**Set the activation hook for a plugin.
When a plugin is activated, the action 'activate_PLUGINNAME' hook is called.
In the name of this hook, PLUGINNAME is replaced with the name
    of the plugin, including the optional subdirectory. For example, when the
    plugin is located in wp-content/plugins/sampleplugin/sample.php, then
    the name of this hook will become 'activate_sampleplugin/sample.php'.
    When the plugin consists of only one file and is (as by default) located at
    wp-content/plugins/sample.php the name of this hook will be
    'activate_sample.php'.
*/

function register_activation_hook( $file, $callback ) {

    $file = plugin_basename( $file );
    add_action( 'activate_' . $file, $callback );

}
------------------OR-----------------
Click on Navigation Menu-> Plugins-> Add New
Select the plugin you want to install, I have installed BuddyPress plugin.
After the installation gets complete click on Activate.
The plugin will get activated.