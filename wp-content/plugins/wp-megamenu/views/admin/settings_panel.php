<div class="wrap wpmm-wrap">
    <form method="post" action="options.php">
        <?php settings_fields( 'wpmm_options' ); ?>

        <div id="wpmm-tabs" class="wpmm-settings-panel wpmm-main-setting-panel">

            <div class="wpmm-tabs-content wpmm-main-setting-content">
                <div id="tabs-1">
                    <table class="form-table wpmm-option-table wpmm-main-setting-table">
                        <caption><?php _e('WP Mega Menu Settings', 'wp-megamenu'); ?> </caption>

                      <!--  <tr class=" wpmm-field-group">
                            <th>
                                <?php /*_e('Theme Locations to Use Mega Menu', 'wp-megamenu'); */?>
                            </th>

                            <td>
                                <?php
/*                                $auto_intergration_menu = get_wpmm_option('auto_intergration_menu');
                                $get_menus = wpmm_get_theme_location();
                                foreach ($get_menus as $key => $value){
                                    $checked = '';
                                    if (count($auto_intergration_menu)) {
                                        if (in_array($key, $auto_intergration_menu)) {
                                            $checked = ' checked ';
                                        }
                                    }
                                    echo "<label> <input type='checkbox' name='wpmm_options[auto_intergration_menu][]' value='{$key}' {$checked} > {$value} </label> <br />";
                                }
                                */?>
                            </td>
                        </tr>

                        -->

                        <tr class="wpmm-field wpmm-field-group">
                            <th>
                                <?php _e('Disable Mega Menu on Mobile', 'wp-megamenu'); ?>
                            </th>
                            <td>
                                <?php
                                $disable_wpmm_on_mobile = get_wpmm_option('disable_wpmm_on_mobile');
                                ?>
                                <label> <input type='checkbox' name='wpmm_options[disable_wpmm_on_mobile]' value='true' <?php checked($disable_wpmm_on_mobile, 'true') ?> > <span class="field-description"> <?php _e('Disable the Mega Menu for mobile devices.', 'wp-megamenu'); ?> </span>
                                </label>
                            </td>
                        </tr>

                        <tr class="wpmm-field wpmm-field-group">
                            <th>
                                <?php _e('CSS Output Location', 'wp-megamenu'); ?>
                            </th>
                            <td>
                                <?php
                                $css_output_location = get_wpmm_option('css_output_location');
                                ?>

                                <select name="wpmm_options[css_output_location]">
                                    <option value="filesystem" <?php selected($css_output_location, 'filesystem'); ?> ><?php _e('File System', 'wp-megamenu'); ?></option>
                                    <option value="head" <?php selected($css_output_location, 'head'); ?> ><?php _e(htmlentities('In <head>'), 'wp-megamenu'); ?></option>
                                </select>

                                <p class="field-description"><?php _e('The place where the compiled CSS of this menu themes will be stored.', 'wp-megamenu'); ?></p>
                            </td>
                        </tr>

                        <tr class="wpmm-field wpmm-field-group">
                            <th>
                                <?php _e('Menu Container Tag', 'wp-megamenu'); ?>
                            </th>

                            <td>
                                <?php $container_tag = get_wpmm_option('container_tag'); ?>
                                <label>
                                    <input type="radio" name="wpmm_options[container_tag]" value="nav" <?php checked
                                    ($container_tag, 'nav')
                                    ?> /> <?php echo htmlentities('<nav>'); ?>
                                </label>

                                <br />

                                <label>
                                    <input type="radio" name="wpmm_options[container_tag]" value="div" <?php checked($container_tag, 'div')
                                    ?> /><?php echo htmlentities('<div>'); ?>
                                </label>

                                <p class="field-description"><?php _e('It will wrap the menu with this tag. It’s better to use div tag for non-HTML5 websites.', 'wp-megamenu'); ?></p>

                            </td>
                        </tr>



                        <tr class="wpmm-field wpmm-field-group">
                            <th>
                                <?php _e('Load font-awesome css in theme', 'wp-megamenu'); ?>
                            </th>

                            <td>
                                <?php $enable_font_awesome = get_wpmm_option('enable_font_awesome');
                                if (empty($enable_font_awesome)){
                                    $enable_font_awesome = 'enable';
                                }
                                ?>
                                <label>
                                    <input type="radio" name="wpmm_options[enable_font_awesome]" value="enable" <?php
                                    checked($enable_font_awesome, 'enable')
                                    ?> /> <?php _e('Load Font-awesome Icon css'); ?>
                                </label>

                                <br />

                                <label>
                                    <input type="radio" name="wpmm_options[enable_font_awesome]" value="disable" <?php
                                    checked($enable_font_awesome, 'disable')
                                    ?> /> <?php _e('Disable Font-awesome Icon css'); ?>
                                </label>

                                <p class="field-description"><?php _e('If your theme already supports Font-awesome icon css, then unload this form here.', 'wp-megamenu'); ?></p>

                            </td>
                        </tr>

                        <tr class="wpmm-field wpmm-field-group">
                            <th>
                                <?php _e('Responsive Breakpoint', 'wp-megamenu'); ?>
                            </th>
                            <td>
                                <?php
                                $responsive_breakpoint = get_wpmm_option('responsive_breakpoint');
                                if( ! $responsive_breakpoint){
                                    $responsive_breakpoint = '767px';
                                }
                                ?>
                                <input type="text" name="wpmm_options[responsive_breakpoint]" value="<?php echo $responsive_breakpoint; ?>" required="required" placeholder="<?php _e('Responsive Breakpoint', 'wp-megamenu');
                                ?>" />
                                <p class="field-description"><?php _e('Set the width at which the menu turns into a mobile menu. 0px will indicate to disable responsive menu. Default value is 767px.', 'wp-megamenu'); ?></p>
                            </td>
                        </tr>

                    </table>
                </div>

            </div>

            <div class="clear"></div>
        </div>


        <div class="wpmm-form-submit-button submit-btn-wrap submit-btn-main-settings btn-theme-setting-wrap">
            <?php submit_button(); ?>
        </div>

    </form>
</div>


<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $( function() {
        $( "#slider" ).slider();
    } );
</script>
HHH
-->