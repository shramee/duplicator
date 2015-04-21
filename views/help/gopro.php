<?php
DUP_Util::CheckPermissions('read');

require_once(DUPLICATOR_PLUGIN_PATH . '/views/javascript.php');
require_once(DUPLICATOR_PLUGIN_PATH . '/views/inc.header.php');
?>
<style>
    /*================================================
    PAGE-SUPPORT:*/
    table.dup-support-hlp-hdrs {border-collapse:collapse; width:100%; border-bottom:1px solid #dfdfdf}
    table.dup-support-hlp-hdrs {background-color:#efefef;}
    table.dup-support-hlp-hdrs td {
        padding:6px; 
        font-weight:bold; font-size:32px;
        background-image:-ms-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:-moz-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:-o-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #DEDEDE));
        background-image:-webkit-linear-gradient(top, #FFFFFF 0%, #DEDEDE 100%);
        background-image:linear-gradient(to bottom, #FFFFFF 0%, #DEDEDE 100%);
    }
    div.dup-compare-area {width:400px;  float:left; border:1px solid #dfdfdf; border-radius:4px; margin:10px; line-height:18px;box-shadow: 0 8px 6px -6px #ccc;}
	div.feature {background: #fff; padding:20px; margin: 2px; text-align: center; min-height: 30px}
	div.feature a {font-size:22px; font-weight: bold;}
	div.dup-compare-area div.feature div.info {display:none; padding:10px 15px 5px 15px; font-style: italic; color: #555; font-size: 14px}
	div.dup-gopro-header {text-align: center; margin: 5px 0 15px 0; font-size:18px; line-height: 30px}
	div.dup-gopro-header b {font-size: 37px}
</style>

<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "1a44d92e-2a78-42c3-a32e-414f78f9f484"});</script> 

<div class="wrap dup-wrap">
	
    <?php duplicator_header(__("Go Pro!", 'wpduplicator')) ?>
    <hr size="1" />

    <div style="width:850px; margin:auto; margin-top: 20px">

        <div style="text-align:center; margin-bottom:35px;">
            <p style="font-weight:bold; font-size:58px; margin-bottom:0px;"><?php _e('Duplicator Pro Has Arrived!', 'wpduplicator') ?></p>
            <p style="font-style:italic;font-size:20px; margin-top:0px;"><?php _e('The simplicity of Duplicator combined with the power the professional requires.', 'wpduplicator') ?></p>
        </div>
        
        <!-- FREE-->
        <div class="dup-compare-area">
            <table class="dup-support-hlp-hdrs">
                <tr >
                    <td style="height:50px; text-align: center;">
                        <span style="display: inline-block; margin-top: 5px"><?php _e('Duplicator Free', 'wpduplicator') ?></span>
                    </td>
                </tr>
            </table>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Backup Files &amp; Database', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Compresses all your WordPress files and database into a compressed snapshot archive file.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Directory Filters', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Filter out the directories and file extensions you want to include/exclude in your in your archive file.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Database Table Filters', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Filter out only the database tables you want to include/exclude in your database creation script.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Migration Wizard', 'wpduplicator') ?></a>
				<div class="info"><?php _e('With just two files (archive &amp; installer.php) move your site to a new location.', 'wpduplicator') ?></div>
			</div>
			<div class="feature"><i class="fa fa-times fa-2x"></i></div>
			<div class="feature"><i class="fa fa-times fa-2x"></i></div>
			<div class="feature"><i class="fa fa-times fa-2x"></i></div>
                        <div class="feature"><i class="fa fa-times fa-2x"></i></div>
			
        </div> 

        <!-- PRO  -->
        <div class="dup-compare-area">
            <table class="dup-support-hlp-hdrs">
                <tr>
                    <td style="height:50px; text-align: center;">
                        <span style="display: inline-block; margin-top: 5px"><?php _e('Duplicator Pro', 'wpduplicator') ?></span>
                    </td>
                </tr>
            </table>

			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Backup Files &amp; Database', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Compresses all your WordPress files and database into a compressed snapshot archive file.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Directory Filters', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Filter out the directories and file extensions you want to include/exclude in your in your archive file.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Database Table Filters', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Filter out only the database tables you want to include/exclude in your database creation script.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Migration Wizard', 'wpduplicator') ?></a>
				<div class="info"><?php _e('With just two files (archive &amp; installer.php) move your site to a new location.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Scheduled Backups', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Automate the creation of your packages to run at various scheduled intervals.', 'wpduplicator') ?></div>
			</div>
                        <div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Dropbox Support', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Backup up your entire site to Dropbox.', 'wpduplicator') ?></div>
			</div>
                        <div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('FTP Support', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Backup up your entire site to an FTP server.', 'wpduplicator') ?></div>
			</div>
			<div class="feature">
				<a href="javascript:void(0)" class="dup-info-click"><?php _e('Customer Support', 'wpduplicator') ?></a>
				<div class="info"><?php _e('Server setups can be quite complex, with pro you get prompt help to get your site backed up and moved.', 'wpduplicator') ?></div>
			</div>
			
        </div>
        <br style="clear:both" />
        <p style="text-align:center">
            <a href="http://duplicatorpro.com" target="_blank" class="button button-primary button-large" style="text-align:center;margin-left:auto;margin-right:auto;box-shadow: 5px 5px 5px 0px #999; font-size: 20px; height: 59px;  background: #AB2C30;  border: none;  padding-top: 13px;  padding-left: 25px;  padding-right: 25px;">
                <?php _e('Check It Out!', 'wpduplicator') ?>
            </a>
            </p>
    </div>
</div><br/><br/><br/><br/>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$( "a.dup-info-click" ).click(function() {
			$(this).parent().find('.info').toggle();
		});
	});
</script>