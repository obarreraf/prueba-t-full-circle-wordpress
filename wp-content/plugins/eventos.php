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

function ep_agregar_campos_eventos() {
    add_meta_box(
        'ep_evento_metabox',
        'Detalles del Evento',
        'ep_mostrar_campos_evento',
        'events',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'ep_agregar_campos_eventos');

function ep_mostrar_campos_evento($post) {
    $fecha = get_post_meta($post->ID, '_ep_fecha_evento', true);
    $ubicacion = get_post_meta($post->ID, '_ep_ubicacion_evento', true);

    wp_nonce_field('ep_guardar_evento', 'ep_evento_nonce');
    ?>
    <p>
        <label for="ep_fecha_evento">Fecha del evento:</label>
        <input type="date" id="ep_fecha_evento" name="ep_fecha_evento" value="<?php echo esc_attr($fecha); ?>" />
    </p>
    <p>
        <label for="ep_ubicacion_evento">Ubicación:</label>
        <input type="text" id="ep_ubicacion_evento" name="ep_ubicacion_evento" value="<?php echo esc_attr($ubicacion); ?>" />
    </p>
    <?php
}

?>