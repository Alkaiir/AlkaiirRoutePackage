<?php
namespace Route;

function routing (string $currentRoute, $currentHttpMethod, string $prefix): Route
{
    return new Route($currentRoute, $currentHttpMethod, $prefix);
}