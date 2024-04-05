<?php
namespace Route;

function routing ($currentHttpMethod, string $currentRoute, array $action): Route
{
    return new Route($currentRoute, $currentHttpMethod, $action);
}