<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/{$name}.php";
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}
