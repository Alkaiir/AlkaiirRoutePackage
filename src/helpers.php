<?php
namespace Route;

function routing ($currentHttpMethod, string $currentRoute, array $action): Route
{
    return new Route($currentRoute, $currentHttpMethod, $action);
}

function middleware ($currentHttpMethod, string $currentRoute, array $action): Middleware
{
    return new Middleware($currentRoute, $currentHttpMethod, $action);
}