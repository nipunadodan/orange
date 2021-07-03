<?php

declare(strict_types=1);

function pre(mixed $vat): void
{
    echo '<pre>';
    print_r($vat);
    echo '</pre>';
}

function url(string $url): string
{
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
    $url = trim($url, "'");
    $url = iconv('utf-8', 'us-ascii//TRANSLIT', $url);
    $url = strtolower($url);
    return preg_replace('~[^-a-z0-9_]+~', '', $url);
}
