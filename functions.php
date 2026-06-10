<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function rrcwebsite_enqueue_styles() {
    wp_enqueue_style(
        'rrcwebsite-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'rrcwebsite_enqueue_styles');
function load_form_script() {

    wp_enqueue_script(
        'form-js',
        get_template_directory_uri() . '/js/form.js',
        array(),
        null,
        true
    );

    wp_localize_script('form-js', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'load_form_script');

add_action('wp_ajax_send_form', 'handle_form_submission');
add_action('wp_ajax_nopriv_send_form', 'handle_form_submission');

function handle_form_submission() {

    $type = $_POST['type'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $to = "riddhiraina.official@gmail.com"; // CHANGE THIS

    if ($type == "enquiry") {
        $subject = "New Enquiry Received";
    } elseif ($type == "complaint") {
        $subject = "New Complaint Received";
    } else {
        $subject = "New Contact Request";
    }

    $body = "Form Type: $type\n\n";
    $body .= "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    wp_mail($to, $subject, $body);

    echo "success";
    wp_die();
}