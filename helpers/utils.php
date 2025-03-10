<?php

function formatUrl($url)
{
    return rtrim($url, '/');
}

function debug($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}