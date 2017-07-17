<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function wp_quick_admin_notice()
{
	add_thickbox();
	$sharelink_text_array_quick = array
						(
						"I use Quick Box - Popup Notification Box wordpress plugin from @xyzscripts and you should too.",
						"Quick Box - Popup Notification Box wordpress plugin from @xyzscripts is awesome",
						"Thanks @xyzscripts for developing such a wonderful Quick Box - Popup Notification Box wordpress plugin",
						"I was looking for a Quick Box - Popup Notification Box and I found this. Thanks @xyzscripts",
						"Its very easy to use Quick Box - Popup Notification Box wordpress plugin from @xyzscripts",
						"I installed Quick Box - Popup Notification Box from @xyzscripts,it works flawlessly",
						"Quick Box - Popup Notification Box wordpress plugin that i use works terrific",
						"I am using Quick Box - Popup Notification Box wordpress plugin from @xyzscripts and I like it",
						"The Quick Box - Popup Notification Box plugin from @xyzscripts is simple and works fine",
						"I've been using this Quick Box - Popup Notification Box plugin for a while now and it is really good",
						"Quick Box - Popup Notification Box wordpress plugin is a fantastic plugin",
						"Quick Box - Popup Notification Box wordpress plugin is easy to use and works great. Thank you!",
						"Good and flexible  Quick Box - Popup Notification Box plugin especially for beginners",
						"The best Quick Box - Popup Notification Box wordpress plugin I have used ! THANKS @xyzscripts",
						);
$sharelink_text_quick = array_rand($sharelink_text_array_quick, 1);
$sharelink_text_quick = $sharelink_text_array_quick[$sharelink_text_quick];
$bare_url=admin_url('admin.php?page=quickbox-basic-settings&quick_notice=hide');
	
	echo '<div id="quick_notice_td" class="error" style="margin-left: 2px;background: none repeat scroll 0pt 0pt infobackground; border: 1px solid inactivecaption; padding: 5px;line-height:16px;">
	<p>It looks like you have been enjoying using <a href="https://wordpress.org/plugins/quick-box-popup/" target="_blank"> Quick Box - Popup Notification Box </a> plugin from Xyzscripts for atleast 30 days.Would you consider supporting us with the continued development of the plugin using any of the below methods?</p>
	<p>
	<a href="https://wordpress.org/support/view/plugin-reviews/quick-box-popup/" class="button" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Rate it 5★\'s on wordpress</a>
	<a href="https://xyzscripts.com/members/product/purchase/XYZWPPOP" class="button" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Purchase premium version</a>';
	if(get_option('xyz_credit_link')=="0")
		echo '<a class="button xyz_qbx_backlink" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Enable Backlink</a>';
	
	echo '<a href="#TB_inline?width=250&height=75&inlineId=show_share_icons_popup" class="button thickbox" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Share on</a>
	
	<a href="'. wp_nonce_url( $bare_url, 'hide_notice').'" class="button" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;">Don\'t Show This Again</a>
	</p>
 
	<div id="show_share_icons_popup" style="display: none;">
	<a class="button" style="background-color:#3b5998;color:white;margin-right:4px;margin-left:100px;margin-top: 25px;" href="http://www.facebook.com/sharer/sharer.php?u=https://wordpress.org/plugins/quick-box-popup/&text='.$sharelink_text_quick.'" target="_blank">Facebook</a>
	<a class="button" style="background-color:#00aced;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://twitter.com/share?url=https://wordpress.org/plugins/quick-box-popup/&text='.$sharelink_text_quick.'" target="_blank">Twitter</a>
	<a class="button" style="background-color:#007bb6;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://www.linkedin.com/shareArticle?mini=true&url=https://wordpress.org/plugins/quick-box-popup/" target="_blank">LinkedIn</a>
	<a class="button" style="background-color:#dd4b39;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="https://plus.google.com/share?&hl=en&url=https://wordpress.org/plugins/quick-box-popup/" target="_blank">google+</a>
	</div>
	
	
	
	</div>';
	
	
}
$quick_installed_date = get_option('popup_installed_date');
if ($quick_installed_date=="") {
	$quick_installed_date = time();
}
//if($quick_installed_date < ( time() - 1))
if($quick_installed_date < ( time() - (30*24*60*60)))
{
	if (get_option('xyz_quick_dnt_shw_notice') != "hide")
	{
		add_action('admin_notices', 'wp_quick_admin_notice');
	}
}
?>

