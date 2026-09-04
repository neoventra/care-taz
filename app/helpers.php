<?php

if (! function_exists('versioned_asset')) {
    function versioned_asset(string $path): string
    {
        $file = public_path(ltrim($path, '/'));
        $version = is_file($file) ? (string) filemtime($file) : (string) time();

        return asset($path).'?v='.$version;
    }
}
