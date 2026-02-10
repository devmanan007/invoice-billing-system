<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ---- PERMISSIONS ----
        $permissions = [
            // Clients
            'clients.view',
            'clients.create',
            'clients.edit',
            'clients.delete',

            // Products
            'products.view',
            'products.create',
            'products.edit',
            'products.delete',

            // Invoices
            'invoices.view',
            'invoices.create',
            'invoices.edit',
            'invoices.delete',
            'invoices.mark_paid',

            // Reports
            'reports.view',

            // Users
            'users.manage',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // ---- ROLES ----
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $accountant = Role::firstOrCreate(['name' => 'accountant']);
        $staff = Role::firstOrCreate(['name' => 'staff']);
        $viewer = Role::firstOrCreate(['name' => 'viewer']);

        // ---- ASSIGN PERMISSIONS ----
        $admin->givePermissionTo(Permission::all());

        $accountant->givePermissionTo([
            'clients.view',
            'products.view',
            'invoices.view',
            'invoices.create',
            'invoices.edit',
            'invoices.mark_paid',
            'reports.view',
        ]);

        $staff->givePermissionTo([
            'clients.view',
            'products.view',
            'invoices.view',
            'invoices.create',
        ]);

        $viewer->givePermissionTo([
            'clients.view',
            'invoices.view',
            'reports.view',
        ]);
    }
}
