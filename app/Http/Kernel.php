

protected $routeMiddleware = [
    // Otros middleware...
    'role.redirect' => \App\Http\Middleware\RoleRedirect::class,
    'checkDepartment' => \App\Http\Middleware\CheckDepartmentAccess::class,
    'redirectBasedOnDepartment' => \App\Http\Middleware\RedirectBasedOnDepartment::class,
];
