<?php

namespace Database\Seeders;

use App\Enums\Module\ModuleStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Module
        DB::table('modules')->insert([
            [
                'id' => 1,
                'name' => 'Quản lý module',
                'description' => 'Quản lý module',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Quản lý quyền',
                'description' => 'Quản lý quyền',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Quản lý vai trò',
                'description' => 'Quản lý vai trò',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Quản lý admin',
                'description' => 'Quản lý admin',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Quản lý khách hàng',
                'description' => 'Quản lý khách hàng',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => "QUản lý chuyên mục",
                'description' => "Quản lý chuyên mục",
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'Quản lý bài viết',
                'description' => 'Quản lý bài viết',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'name' => 'Quản lý slider',
                'description' => 'Quản lý slider',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'name' => 'Quản lý danh mục',
                'description' => 'Quản lý danh mục',
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        //Permission
        DB::table('permissions')->insert([
            [
                'title' => 'Xem module',
                'name' => 'viewModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Tạo module',
                'name' => 'createModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Sửa module',
                'name' => 'editModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Xóa module',
                'name' => 'deleteModule',
                'guard_name' => 'admin',
                'module_id' => 1,
            ],
            [
                'title' => 'Xem quyền',
                'name' => 'viewPermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Tạo quyền',
                'name' => 'createPermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Sửa quyền',
                'name' => 'editPermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Xóa quyền',
                'name' => 'deletePermission',
                'guard_name' => 'admin',
                'module_id' => 2,
            ],
            [
                'title' => 'Xem vai trò',
                'name' => 'viewRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Tạo vai trò',
                'name' => 'createRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Sửa vai trò',
                'name' => 'editRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Xóa vai trò',
                'name' => 'deleteRole',
                'guard_name' => 'admin',
                'module_id' => 3,
            ],
            [
                'title' => 'Xem admin',
                'name' => 'viewAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Tạo admin',
                'name' => 'createAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Sửa admin',
                'name' => 'editAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Xóa admin',
                'name' => 'deleteAdmin',
                'guard_name' => 'admin',
                'module_id' => 4,
            ],
            [
                'title' => 'Xem khách hàng',
                'name' => 'viewCustomer',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Tạo khách hàng',
                'name' => 'createCustomer',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Sửa khách hàng',
                'name' => 'editCustomer',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Xóa khách hàng',
                'name' => 'deleteCustomer',
                'guard_name' => 'admin',
                'module_id' => 5,
            ],
            [
                'title' => 'Xem chuyên mục',
                'name' => 'viewCatalogue',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
            [
                'title' => 'Tạo chuyên mục',
                'name' => 'createCatalogue',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
            [
                'title' => 'Sửa chuyên mục',
                'name' => 'editCatalogue',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
            [
                'title' => 'Xóa chuyên mục',
                'name' => 'deleteCatalogue',
                'guard_name' => 'admin',
                'module_id' => 6,
            ],
            [
                'title' => 'Xem bài viết',
                'name' => 'viewPost',
                'guard_name' => 'admin',
                'module_id' => 7,
            ],
            [
                'title' => 'Tạo bài viết',
                'name' => 'createPost',
                'guard_name' => 'admin',
                'module_id' => 7,
            ],
            [
                'title' => 'Sửa bài viết',
                'name' => 'editPost',
                'guard_name' => 'admin',
                'module_id' => 7,
            ],
            [
                'title' => 'Xóa bài viết',
                'name' => 'deletePost',
                'guard_name' => 'admin',
                'module_id' => 7,
            ],
            [
                'title' => 'Xem slider',
                'name' => 'viewSlider',
                'guard_name' => 'admin',
                'module_id' => 8,
            ],
            [
                'title' => 'Tạo slider',
                'name' => 'createSlider',
                'guard_name' => 'admin',
                'module_id' => 8,
            ],
            [
                'title' => 'Sửa slider',
                'name' => 'editSlider',
                'guard_name' => 'admin',
                'module_id' => 8,
            ],
            [
                'title' => 'Xóa slider',
                'name' => 'deleteSlider',
                'guard_name' => 'admin',
                'module_id' => 8,
            ],
            [
                'title' => 'Xem danh mục',
                'name' => 'viewCategory',
                'guard_name' => 'admin',
                'module_id' => 9,
            ],
            [
                'title' => 'Tạo danh mục',
                'name' => 'createCategory',
                'guard_name' => 'admin',
                'module_id' => 9,
            ],
            [
                'title' => 'Sửa danh mục',
                'name' => 'editCategory',
                'guard_name' => 'admin',
                'module_id' => 9,
            ],
            [
                'title' => 'Xóa danh mục',
                'name' => 'deleteCategory',
                'guard_name' => 'admin',
                'module_id' => 9,
            ],
        ]);

        //Role
        DB::table('roles')->insert([
            [
                'id' => 1,
                'title' => 'Developer',
                'name' => 'developer',
                'guard_name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        //Role Permission
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],
            [
                'permission_id' => 2,
                'role_id' => 1,
            ],
            [
                'permission_id' => 3,
                'role_id' => 1,
            ],
            [
                'permission_id' => 4,
                'role_id' => 1,
            ],
            [
                'permission_id' => 5,
                'role_id' => 1,
            ],
            [
                'permission_id' => 6,
                'role_id' => 1,
            ],
            [
                'permission_id' => 7,
                'role_id' => 1,
            ],
            [
                'permission_id' => 8,
                'role_id' => 1,
            ],
            [
                'permission_id' => 9,
                'role_id' => 1,
            ],
            [
                'permission_id' => 10,
                'role_id' => 1,
            ],
            [
                'permission_id' => 11,
                'role_id' => 1,
            ],
            [
                'permission_id' => 12,
                'role_id' => 1,
            ],
            [
                'permission_id' => 13,
                'role_id' => 1,
            ],
            [
                'permission_id' => 14,
                'role_id' => 1,
            ],
            [
                'permission_id' => 15,
                'role_id' => 1,
            ],
            [
                'permission_id' => 16,
                'role_id' => 1,
            ],
            [
                'permission_id' => 17,
                'role_id' => 1,
            ],
            [
                'permission_id' => 18,
                'role_id' => 1,
            ],
            [
                'permission_id' => 19,
                'role_id' => 1,
            ],
            [
                'permission_id' => 20,
                'role_id' => 1,
            ],
            [
                'permission_id' => 21,
                'role_id' => 1,
            ],
            [
                'permission_id' => 22,
                'role_id' => 1,
            ],
            [
                'permission_id' => 23,
                'role_id' => 1,
            ],
            [
                'permission_id' => 24,
                'role_id' => 1,
            ],
            [
                'permission_id' => 25,
                'role_id' => 1,
            ],
            [
                'permission_id' => 26,
                'role_id' => 1,
            ],
            [
                'permission_id' => 27,
                'role_id' => 1,
            ],
            [
                'permission_id' => 28,
                'role_id' => 1,
            ],
            [
                'permission_id' => 29,
                'role_id' => 1,
            ],
            [
                'permission_id' => 30,
                'role_id' => 1,
            ],
            [
                'permission_id' => 31,
                'role_id' => 1,
            ],
            [
                'permission_id' => 32,
                'role_id' => 1,
            ],
            [
                'permission_id' => 33,
                'role_id' => 1,
            ],
            [
                'permission_id' => 34,
                'role_id' => 1,
            ],
            [
                'permission_id' => 35,
                'role_id' => 1,
            ],
            [
                'permission_id' => 36,
                'role_id' => 1,
            ]
        ]);

        //Admin
        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\Models\Admin',
                'model_id' => 1,
            ],
        ]);
    }
}
