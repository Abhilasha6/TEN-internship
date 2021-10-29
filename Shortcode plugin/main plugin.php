<?php
/**Plugin Name:shortcode example
Plugin URI: https://example.com/plugin-name
Description: Description of the plugin.
Version: 1.0.0
Author: Abhilasha
Author URI: https://example.com
Text Domain: plugin-name
*/

add_shortcode('wordpress_contact_form','render_wordpress_contact_form');

function render_wordpress_contact_form(){?>
<form>
First name:<br>
<input type="text" name="firstname" value="Joe">
<br>
<input type="submit" value="Send">
</form>
<?php

}
