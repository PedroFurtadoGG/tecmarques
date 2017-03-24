<?php

global $gPackOll;
    /*
    Plugin Name:       Pacote OLL
    Plugin URI:        http://www.orlandolacerda.com
    Description:       Este pacote incluí uma série de recursos padrões, e nativos desenvolvidos pelo desenvolvedor Orlando Lacerda.</p>
    Version:           1.0.0
    Author:            Orlando Lacerda
    GitHub Plugin URI: https://github.com/fastdone/oll
    GitHub Branch:     oll

    Developer: Orlando Lacerda 
    Site: www.orlandollacerda.com
    */
    //DEFAULT CONFIGS
    define('FS_METHOD', 'direct');
    $filePHP = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')+ 1);
    $assetsFolder = plugins_url('resources/assets', __FILE__);
    //> Check Config Files
    if(!file_exists(dirname(__FILE__) . '/config.ini')){
        deactivate_plugins(plugin_basename( __FILE__ ));
        packOll_message('Impossível ativar. <br/>*O arquivo de configuração não existe!', 'error');
        return false;
    }

    //> LOAD CONFIGS
    $pathResources = dirname(__FILE__) . '/resources/';
    $configurations = parse_ini_file(dirname(__FILE__) . '/config.ini', true);

    //> FORCE URL
    if(isset($configurations['license']['forceurl']) && strpos($configurations['license']['forceurl'], 'http://') !== false){
        
        #variables

        #urls
        $oldUrl = get_site_url();
        if($oldUrl !== $configurations['license']['forceurl']){
            if(substr($configurations['license']['forceurl'],-1) == '/'){
                $configurations['license']['forceurl'] = substr($configurations['license']['forceurl'], 0, -1);
            }
            $wpdb->query("UPDATE {$wpdb->prefix}posts SET guid = replace(guid, '{$oldUrl}', '{$configurations['license']['forceurl']}')");
            $wpdb->query("UPDATE {$wpdb->prefix}posts SET post_content = replace(post_content, '{$oldUrl}', '{$configurations['license']['forceurl']}')");
            $wpdb->query("UPDATE {$wpdb->prefix}postmeta SET meta_value = replace(meta_value, '{$oldUrl}', '{$configurations['license']['forceurl']}')");
        }

        define('WP_HOME', $configurations['license']['forceurl']);
        define('WP_SITEURL', $configurations['license']['forceurl']);

    }

    //> ADJUST BUSINESS
    add_action('init', function() use($configurations){
        acf_add_options_page(array(
            'page_title'    => $configurations['license']['name'],
            'menu_title'    => $configurations['license']['menu'],
            'menu_slug'    =>  'packoll-options',
            'capability'    => 'edit_posts',
            'icon_url'      => $configurations['license']['menu_icon'],
            'redirect'      => false
        ));

        wp_enqueue_script( 'script-pack-oll', plugins_url('resources/assets/js/pack-oll.js', __FILE__), array('jquery'));
        wp_localize_script( "script-pack-oll", "packoll", $configurations['license']['name']);

    });


    //> VALIDATE ALL PLUGINS
    foreach($configurations['resources']['plugin'] AS $plugin){
         if (!file_exists($pathResources . $plugin . '.php')) {
            deactivate_plugins(plugin_basename( __FILE__ ));
            packOll_message("Impossível ativar. <br/>*O plugin ( <em>{$plugin}</em> ) não foi encontrado no diretório de recursos do pacote", 'error');
            return false;
        }
    }

    //> ACTIVE ALL PLUGINS
    foreach($configurations['resources']['plugin'] AS $plugin)
        require($pathResources . $plugin. '.php');

    //> SHOW ACF
    if(!isset($_GET['oll_admin']) && !isset($_COOKIE['oll_admin'])){

        add_filter('acf/settings/show_admin', '__return_false');//toplevel_page_gf_edit_forms
        add_action('init', function(){
            wp_localize_script( "script-pack-oll", "gravity_form", 'yes');
        });
    }

    //>>>>>>>>>>>
    if(isset($_GET['oll_admin']) && !isset($_COOKIE['oll_admin']))
        setcookie('oll_admin', 'active', time() + (60 * 30));



    foreach($configurations AS $key => $read){

        ///////////[START - CUSTOM TYPES]/////
        ///////////[START - CUSTOM TYPES]/////
        if(strpos($key, 'posttype:') !== false){
            $name = strtolower(iex_noSpecialChars(str_replace('posttype:','', $key)));
            $label = null;
            $icon = null;
            $taxonomies = Array();
            $supports = Array('title', 'revisions', 'editor');
            foreach($read AS $key => $item)
                $$key = $item;

            #posttype
            add_action('init', function() use($name, $label, $supports, $icon){
                iex_cpt($name, $label, 'page', strtolower($name), true, $supports, $icon);
            });


            #taxonomies
            foreach($taxonomies AS $tax){
                $terms = null;
                $pos = strpos($tax, ']');
                if($pos !== false && strpos($tax, '.')){
                    $terms = explode('.', substr($tax, $pos + 1));
                }

                if($pos !== false){
                    $tax = substr($tax, 1, $pos - 1);
                }

                $tax_name = $name . '-' . strtolower(iex_noSpecialChars($tax, false));
                add_action('init', function() use($tax_name, $tax, $name){
                    iex_tax($tax_name, $tax, $tax, $name, 1, iex_noSpecialChars($tax, false), 1);
                });


                #TERMS
                if(isset($terms) && count($terms) > 0){
                    foreach($terms AS $term){
                        add_action('init', function() use($term, $tax_name){
                            wp_insert_term($term, $tax_name);
                        });
                    }
                }
            }   
        }
        ///////////[END - CUSTOM TYPES]-----
        ///////////[END - CUSTOM TYPES]-----

        ///////////[START - MENUS]/////
        ///////////[START - MENUS]/////
        if($key === 'menutheme' && isset($read['item']) && count($read['item']) > 0){
            foreach($read['item'] AS $mRead)
                register_nav_menu(strtolower(iex_noSpecialChars($mRead, false)), $mRead);
        }
        ///////////[END - MENUS]-----
        ///////////[END - MENUS]-----

    }

    //>THUMBNAIL
    if($configurations['license']['thumbnail'])
        add_theme_support( 'post-thumbnails' );

    //> message success
    if(@$_GET['activate'] == 'true')
        packOll_message("Licenciado para: <strong>{$configurations['license']['name']}</strong>");

    ####
    # MESSAGE 
    ####
    function packOll_message($text, $type = 'updated') {
        echo "<div class='{$type}'><h3 style='margin-bottom: 0px;'>Pacote OLL</h3> <p>{$text}</p></div>";
    }

    ####
    # TIMTHUMB
    ####
    function oll_image($src, $argsTimthumb){
        //http://localhost/cda_wp/wp-content/plugins/pack-oll/resources/timthumb/timthumb.php?src=
        $timthumb = plugin_dir_url( __FILE__ ) . 'resources/timthumb/timthumb.php';
        $args = http_build_query($argsTimthumb);
        return $timthumb . "?src={$src}&{$args}";
    }
