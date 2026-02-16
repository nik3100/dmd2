<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * URL Helper Functions
 */

/**
 * Retrieve base URL configured in the application.
 *
 * @return string
 */
function base_url_helper() {
    return defined('BASE_URL') ? BASE_URL : '/';
}

/**
 * Create a full URL based on the base URL and a path.
 *
 * @param string $path
 * @return string
 */
function full_url($path) {
    return base_url_helper() . ltrim($path, '/');
}

/**
 * Redirect to a given path.
 *
 * @param string $path
 */
function redirect_to($path) {
    header('Location: ' . full_url($path));
    exit;
}
