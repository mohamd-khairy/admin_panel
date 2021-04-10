<?php


function title($key = '')
{
    return str_replace('_', ' ', ucwords($key, '_'));
}
