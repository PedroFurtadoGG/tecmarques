<?php
    /*
    Plugin Name:       Imóveis Express - Cervejas
    Plugin URI:        http://www.fastdone.com.br
    Description:       Gestão de Cervejas
    Version:           0.0.0
    Author:            Fastdone Produtora Digital
    GitHub Plugin URI: https://github.com/
    GitHub Branch:     final
    */

    /************************************************************
     * DEPENDENCIAS
     *************************************************************/

    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    require( ABSPATH . 'wp-content/plugins/iex-cerveja/fields.php' );

    /************************************************************
     * CHAMADA DAS FUNÇÕES
     *************************************************************/


    if (class_exists('acf')) {
        add_action( 'after_setup_theme',  array('iex_cerveja','install'));
    }else {
        deactivate_plugins( plugin_basename( __FILE__ ) );
        wp_die('Você precisa instalar o plugin: Imóveis Express - Base', 'Imóveis Express', array('back_link' => true));
    }


    /************************************************************
     * POST TYPE
     *************************************************************/


    class iex_cerveja {
        public static $nameExhibition = 'Cervejas';
        public static $nameVariable = 'Cerveja';

        public static function install(){

            # cria o post type
            iex_cpt(strtolower(self::$nameVariable), self::$nameExhibition, 'page', strtolower(self::$nameVariable), true, array('title','revisions', 'editor'), 'dashicons-format-status');

            /*************************
             * Template
             **************************/

            function cerveja_template_single($template) {
                global $post;
                if ($post->post_type == strtolower(self::$nameVariable)) {$template = dirname( __FILE__ ) . '/templates/single.php'; }
                return $template;
            }
            add_filter( 'single_template', 'cerveja_template_single' );

             /*************************
             * Taxonomies
             **************************/
             #categoria
             // iex_tax(strtolower(self::$nameVariable) . '-categorias', 'Categoria', 'Categorias', strtolower(self::$nameVariable), 1, 'categoria', 1);
             // wp_insert_term('Exemplo', strtolower(self::$nameVariable) . '-categoria');

            /*************************
             * Campo Título
             **************************/
            $temp = self::$nameVariable;

            function cerveja_changeTitle($title) {
                $screen = get_current_screen();
                if (strtolower('cerveja') == $screen->post_type) {
                    $title = 'Nome da cerveja';
                }
                return $title;
            }

            add_filter('enter_title_here', 'cerveja_changeTitle');

        }
    }