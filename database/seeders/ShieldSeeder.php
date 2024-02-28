<?php

namespace Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"panel_user","guard_name":"web","permissions":[]},{"name":"super_admin","guard_name":"web","permissions":["view_blog::author","view_any_blog::author","create_blog::author","update_blog::author","restore_blog::author","restore_any_blog::author","replicate_blog::author","reorder_blog::author","delete_blog::author","delete_any_blog::author","force_delete_blog::author","force_delete_any_blog::author","view_blog::category","view_any_blog::category","create_blog::category","update_blog::category","restore_blog::category","restore_any_blog::category","replicate_blog::category","reorder_blog::category","delete_blog::category","delete_any_blog::category","force_delete_blog::category","force_delete_any_blog::category","view_blog::link","view_any_blog::link","create_blog::link","update_blog::link","restore_blog::link","restore_any_blog::link","replicate_blog::link","reorder_blog::link","delete_blog::link","delete_any_blog::link","force_delete_blog::link","force_delete_any_blog::link","view_blog::post","view_any_blog::post","create_blog::post","update_blog::post","restore_blog::post","restore_any_blog::post","replicate_blog::post","reorder_blog::post","delete_blog::post","delete_any_blog::post","force_delete_blog::post","force_delete_any_blog::post","view_brand","view_any_brand","create_brand","update_brand","restore_brand","restore_any_brand","replicate_brand","reorder_brand","delete_brand","delete_any_brand","force_delete_brand","force_delete_any_brand","view_category","view_any_category","create_category","update_category","restore_category","restore_any_category","replicate_category","reorder_category","delete_category","delete_any_category","force_delete_category","force_delete_any_category","view_product","view_any_product","create_product","update_product","restore_product","restore_any_product","replicate_product","reorder_product","delete_product","delete_any_product","force_delete_product","force_delete_any_product","view_shield::role","view_any_shield::role","create_shield::role","update_shield::role","delete_shield::role","delete_any_shield::role","view_shop::customer","view_any_shop::customer","create_shop::customer","update_shop::customer","restore_shop::customer","restore_any_shop::customer","replicate_shop::customer","reorder_shop::customer","delete_shop::customer","delete_any_shop::customer","force_delete_shop::customer","force_delete_any_shop::customer","view_shop::order","view_any_shop::order","create_shop::order","update_shop::order","restore_shop::order","restore_any_shop::order","replicate_shop::order","reorder_shop::order","delete_shop::order","delete_any_shop::order","force_delete_shop::order","force_delete_any_shop::order","page_Products","widget_StatsOverviewWidget","widget_OrdersChart","widget_CustomersChart","widget_LatestOrders"]}]';
        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            /** @var Model $roleModel */
            $roleModel = Utils::getRoleModel();
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = $roleModel::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (! blank($rolePlusPermission['permissions'])) {
                    $permissionModels = collect($rolePlusPermission['permissions'])
                        ->map(fn ($permission) => $permissionModel::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissionModels);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
