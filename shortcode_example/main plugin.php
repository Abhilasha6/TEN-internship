<?php
/**Plugin Name: shortcode_example
Plugin URI: https://example.com/shortcode_example
Description: Description of the plugin.
Version: 1.0.0
Author: Abhilasha
Author URI: https://example.com
Text Domain: shortcode_example
*/

//Then return to the Wordpress page, click on Plugin-> Activate the plugin to check if the empty plugin works well.
add_shortcode('wordpress_contact_form','render_wordpress_contact_form');

function render_wordpress_contact_form(){?>
<form>
First name:<br>
<input type="text" name="firstname" value="Joe">
<br>
<input type="submit" value="Send">
</form>
<?php

  // now after the plugin is activated go to the Wordpress page, click on Pages-> Add New
  //enter the title as "Shortcode plugin"  
  // in the block area enter a paragraph by clicking the + icon on the right side just below title tag, enter [wordpress_contact_form]
  // now click on Publish (on the top right corner part)
}
