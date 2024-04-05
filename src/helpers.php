<?php
namespace Route;

function routing ($currentHttpMethod, string $currentRoute, array $action, string $prefix): Route
{
    return new Route($currentRoute, $currentHttpMethod, $prefix);
}