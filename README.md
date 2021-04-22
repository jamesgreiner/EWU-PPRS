# EWU-PPRS
Management tool for the Eastern Washington University Palouse Prairie Restoration Site

Users, Roles and Permissions - Initial Setup
-------------------------------------------------------------------------------------------
php artisan make:migration create_permission_role_pivot_table --create=permission_role
php artisan make:migration create_role_user_pivot_table --create=role_user
add navigation link for users pages
	location navigation-menu-blade
add route into web.php
edit http/kernel.php make authGate globle
add path \App\Http\Middleware\AuthGates::class, to The application's route middleware groups