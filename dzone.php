<?
/*
Plugin Name: DZone Voting Button
Plugin URI: hhttp://www.absolutelytech.com/wordpress-plugin-dzone-voting-button/
Description: Adds a DZone voting button to your blog posts.
Version: 1.07
Author: Deepak Mittal
Author URI: http://www.absolutelytech.com
*/
function dzone_menu(){
	add_options_page('DZone Vote Button Settings', 'DZone Button', 'manage_options', __FILE__, 'dzone_options_page');
	add_action('admin_init', 'dzone_register');
}
function dzone_register(){
	register_setting('dzonevb-options', 'dzone_placement');
	register_setting('dzonevb-options', 'dzone_shortcode');
	register_setting('dzonevb-options', 'dzone_divstyle');
	register_setting('dzonevb-options', 'dzone_buttonstyle');
	register_setting('dzonevb-options', 'dzone_displayinpage');
	register_setting('dzonevb-options', 'dzone_displayinfront');
	register_setting('dzonevb-options', 'dzone_displayinpost');
	register_setting('dzonevb-options', 'dzone_compatibilitymode');
}
function dzone_options_page(){
	?>
	<div class="wrap">
	<div class="icon32" id="icon-options-general"><br/></div>
	<h2>DZone Vote Button Settings</h2>
	<p>This plugin will enable you to add a DZone voting button to your posts.</p>
	<form method="post" action="options.php">
    <?php
            settings_fields('dzonevb-options');
            ?>
            <table class="form-table">
				<tr>
					<tr>
						<th scope="row" valign="top">
							Display Pages
						</th>
						<td>
							<input type="checkbox" value="1" <?php if (get_option('dzone_displayinfront') == '1') echo 'checked="checked"'; ?> name="dzone_displayinfront" id="dzone_displayinfront" group="dzone_display"/>
							<label for="dzone_displayinfront">Display the button on the front page (home)</label>
							<br/>
							<input type="checkbox" value="1" <?php if (get_option('dzone_displayinpost') == '1') echo 'checked="checked"'; ?> name="dzone_displayinpost" id="dzone_displayinpost" group="dzone_display"/>
							<label for="dzone_displayinpost">Display the button in post</label>
							<br/>
							<input type="checkbox" value="1" <?php if (get_option('dzone_displayinpage') == '1') echo 'checked="checked"'; ?> name="dzone_displayinpage" id="dzone_displayinpage" group="dzone_display"/>
							<label for="dzone_displayinpage">Display the button on pages</label>
						</td>
					</tr>
					<th scope="row" valign="top">
                    Position
					</th>
					<td>
						<select name="dzone_placement">
							<option <?php if (get_option('dzone_placement') == 'before') echo 'selected="selected"'; ?> value="before">Before</option>
							<option <?php if (get_option('dzone_placement') == 'after') echo 'selected="selected"'; ?> value="after">After</option>
							<option <?php if (get_option('dzone_placement') == 'beforeandafter') echo 'selected="selected"'; ?> value="beforeandafter">Before and After</option>
						</select>
					</td>
	            </tr>
	            <tr>
					<th scope="row" valign="top"><label for="dzone_shortcode">Shortcode</label></th>
					<td>
						<input type="radio" value="on" <?php if (get_option('dzone_shortcode') == 'on') echo 'checked="checked"'; ?> name="dzone_shortcode" id="dzone_shortcode_on" group="dzone_shortcode"/>
						<label for="dzone_shortcode_on">Globally Enabled</label>
						<br/>
						<input type="radio" value="on2" <?php if (get_option('dzone_shortcode') == 'on2') echo 'checked="checked"'; ?> name="dzone_shortcode" id="dzone_shortcode_on2" group="dzone_shortcode"/>
						<label for="dzone_shortcode_on2">Enabled</label>
						<br/>
						<input type="radio" value="off" <?php if (get_option('dzone_shortcode') == 'off') echo 'checked="checked"'; ?> name="dzone_shortcode" id="dzone_shortcode_off" group="dzone_shortcode" />
						<label for="dzone_shortcode_off">Disabled</label>
					</td>
				</tr>
	            <tr>
					<th scope="row" valign="top"><label for="dzone_divstyle">Styling</label></th>
					<td>
						<input type="text" value="<?php echo htmlspecialchars(get_option('dzone_divstyle')); ?>" name="dzone_divstyle" id="dzone_divstyle"  style="width:550px;" /><br/>
						<span class="description">Add style to the div tag that surrounds the button. Default - <code>float: right; margin-left: 10px;</code></span>
					</td>
				</tr>
				<tr>
					<th scope="row" valign="top"><label for="dzone_buttonstyle">Button Style</label></th>
					<td>
						<input type="radio" value="1" <?php if (get_option('dzone_buttonstyle') == '1') echo 'checked="checked"'; ?> name="dzone_buttonstyle" id="dzone_buttonstyle_one" group="dzone_buttonstyle"/>
						<label for="dzone_buttonstyle_one">Tall</label>
						<br/>
						<input type="radio" value="2" <?php if (get_option('dzone_buttonstyle') == '2') echo 'checked="checked"'; ?> name="dzone_buttonstyle" id="dzone_buttonstyle_two" group="dzone_buttonstyle" />
						<label for="dzone_buttonstyle_two">Wide</label>
					</td>
				</tr>
				<tr>
					<th scope="row" valign="top"><label for="dzone_compatibilitymode">Compatibility Mode</label></th>
					<td>
						<input type="radio" value="on" <?php if (get_option('dzone_compatibilitymode') == 'on') echo 'checked="checked"'; ?> name="dzone_compatibilitymode" id="dzone_compatibilitymode_on" group="dzone_compatibilitymode"/>
						<label for="dzone_compatibilitymode_on">Enable</label>
						<br/>
						<input type="radio" value="off" <?php if (get_option('dzone_compatibilitymode') == 'off') echo 'checked="checked"'; ?> name="dzone_compatibilitymode" id="dzone_compatibilitymode_off" group="dzone_compatibilitymode" />
						<label for="dzone_compatibilitymode_off">Disable</label>
					</td>
				</tr>
            </table>
            <p class="submit">
				<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
			</p>
    </form>
    <h3>Links</h3>
	<ul>
		<li><a href="http://www.absolutelytech.com/wordpress-plugin-dzone-voting-button">Description, Readme &amp; FAQs</a></li>
    </ul>
    <div id="donations" class="widgetContainer Donations_widget_donations"><h3>Support Me</h3>	
    		<p style="width:400px;"><em>Please help me give more time to plugin development by donating me. Even $1 would encourage me to continue its development and keep adding more features</em></p>
    		<form action="https://www.moneybookers.com/app/payment.pl" method="post" target="_blank">
				<input type="hidden" name="pay_to_email" value="dpac.mittal2@gmail.com">
				<input type="hidden" name="language" value="EN">
				<input type="hidden" name="rid" value="5413099">
				<label>USD <input type="text" name="amount" value="" size="3"></label><br>
				<input type="hidden" name="currency" value="USD">
				<input type="hidden" name="detail1_description" value="">
				<input type="hidden" name="detail1_text" value="">
				<input type="image" src="http://www.absolutelytech.com/wp-content/plugins/donations/images/mb_orange_donate_with.gif" width="90" height="60" border="0" name="submit" alt="Donate with Moneybookers" style="border: none; background: none;">
			</form><p></p>
						<p></p><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
				<input type="hidden" name="cmd" value="_donations">
				<input type="hidden" name="business" value="deepak_mittal21@hotmail.com">
				<input type="hidden" name="item_name" value="">
				<input type="hidden" name="item_number" value="">
				<input type="hidden" name="currency_code" value="USD">
				<label>USD <input type="text" name="amount" value="" size="3"></label><br>
				<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
				<input type="image" src="http://www.absolutelytech.com/wp-content/plugins/donations/images/pp_donate_LG.gif" width="92" height="26" border="0" name="submit" alt="Donate with PayPal" style="border: none; background: none;">
				<img alt="" border="0" src="http://www.absolutelytech.com/wp-content/plugins/donations/images/pixel.gif" width="1" height="1">
			</form><p></p>
		</div>
	</div>
	<?
}
function dzone_generatebutton ( $divstyle, $buttonstyle ) {
    $title = the_title('','',FALSE);
    $url = get_permalink();
    $blurb = '';
    if(get_option('dzone_compatibilitymode') == 'on') {
		if ( $buttonstyle == '1' ){
			$params = 'height="70" width="50"';
		}
		else if ( $buttonstyle == '2' ){
			$params = 'height="25" width="155"';
		}
		$iframeurl = 'http://widgets.dzone.com/links/widgets/zoneit.html?t='.urlencode($buttonstyle).'&url='.urlencode($url).'&title='.urlencode($title);
		
	$button=<<<BUTTON
<div class="dzone_button" style="$divstyle">
<iframe src="$iframeurl" $params scrolling="no" frameborder="0"></iframe>
</div>
BUTTON;
	}
	else{
    $button = <<<BUTTON
<div class="dzone_button" style="$divstyle">
<script type="text/javascript">
var dzone_url = '$url';
var dzone_title = '$title';
var dzone_blurb = '';
var dzone_style = '$buttonstyle';
</script>
<script language="javascript" src="http://widgets.dzone.com/links/widgets/zoneit.js"></script>
</div>
BUTTON;
}
    return $button;
}
function dzone_update($content) {
	$buttonstyle = get_option('dzone_buttonstyle');
	$divstyle = get_option('dzone_divstyle');
    $button = dzone_generatebutton( $divstyle, $buttonstyle );
    if( get_option('dzone_shortcode') == 'on' ){
		$content = str_replace('[dzone]', $button, $content);
	}
    if( get_option('dzone_displayinpage') == null && is_page()){
		return $content;
	}
	if( get_option('dzone_displayinfront') == null && is_home()){
		return $content;
	}
	if( get_option('dzone_displayinpost') == null && is_single()){
		return $content;
	}
    if( get_option('dzone_shortcode') == 'on2' ){
		$content = str_replace('[dzone]', $button, $content);
	}
	$where = get_option('dzone_placement');
	if( $where == 'before' )
		return $button.$content;
    else if ($where == 'after' )
		return $content.$button;
    else if($where == 'beforeandafter')
		return $button.$content.$button;
    else
		return $content;
}
function dzone_activate() {
    add_option('dzone_placement', 'before');
    add_option('dzone_shortcode','on');
    add_option('dzone_divstyle', 'float: right; margin-left: 10px;');
    add_option('dzone_buttonstyle', '1');
    add_option('dzone_displayinpage', '1');
    add_option('dzone_displayinfront', '1');
    add_option('dzone_displayinpost', '1');
    add_option('dzone_compatibilitymode', 'off');
}
if(is_admin()){
    add_action('admin_menu', 'dzone_menu');
}
/*
 * 20 so that it executes very later during processing, 
 * so no other plugin interferes with the button code.
 */
add_filter('the_content', 'dzone_update', 20);  

register_activation_hook( __FILE__, 'dzone_activate');
?>
