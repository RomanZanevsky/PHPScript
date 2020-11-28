<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'site_url' => 'http://localhost:8080/'
        'name' => 'Simple PHP Website',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
