<?php
/**
 * Plugin Name: Eventos Personalizados
 * Description: Plugin para gestionar eventos en WordPress.
 * Version: 1.0
 * Author: Orangel Barrera
 */

if (!defined('ABSPATH')) {
    exit;
}

function ep_registrar_eventos_cpt() {
    $labels = array(
        'name'               => 'Eventos',
        'singular_name'      => 'Evento',
        'menu_name'          => 'Eventos',
        'name_admin_bar'     => 'Evento',
        'add_new'            => 'Añadir Nuevo',
        'add_new_item'       => 'Añadir Nuevo Evento',
        'new_item'           => 'Nuevo Evento',
        'edit_item'          => 'Editar Evento',
        'view_item'          => 'Ver Evento',
        'all_items'          => 'Todos los Eventos',
        'search_items'       => 'Buscar Eventos',
        'not_found'          => 'No se encontraron eventos.',
        'not_found_in_trash' => 'No hay eventos en la papelera.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-calendar',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('events', $args);
}
add_action('init', 'ep_registrar_eventos_cpt');

?>