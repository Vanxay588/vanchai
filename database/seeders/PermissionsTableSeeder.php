<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'home_create',
            ],
            [
                'id'    => 18,
                'title' => 'home_edit',
            ],
            [
                'id'    => 19,
                'title' => 'home_show',
            ],
            [
                'id'    => 20,
                'title' => 'home_delete',
            ],
            [
                'id'    => 21,
                'title' => 'home_access',
            ],
            [
                'id'    => 22,
                'title' => 'annoucement_create',
            ],
            [
                'id'    => 23,
                'title' => 'annoucement_edit',
            ],
            [
                'id'    => 24,
                'title' => 'annoucement_show',
            ],
            [
                'id'    => 25,
                'title' => 'annoucement_delete',
            ],
            [
                'id'    => 26,
                'title' => 'annoucement_access',
            ],
            [
                'id'    => 27,
                'title' => 'policy_management_access',
            ],
            [
                'id'    => 28,
                'title' => 'policy_category_create',
            ],
            [
                'id'    => 29,
                'title' => 'policy_category_edit',
            ],
            [
                'id'    => 30,
                'title' => 'policy_category_show',
            ],
            [
                'id'    => 31,
                'title' => 'policy_category_delete',
            ],
            [
                'id'    => 32,
                'title' => 'policy_category_access',
            ],
            [
                'id'    => 33,
                'title' => 'policy_create',
            ],
            [
                'id'    => 34,
                'title' => 'policy_edit',
            ],
            [
                'id'    => 35,
                'title' => 'policy_show',
            ],
            [
                'id'    => 36,
                'title' => 'policy_delete',
            ],
            [
                'id'    => 37,
                'title' => 'policy_access',
            ],
            [
                'id'    => 38,
                'title' => 'download_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'download_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'download_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'download_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'download_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'download_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'download_create',
            ],
            [
                'id'    => 45,
                'title' => 'download_edit',
            ],
            [
                'id'    => 46,
                'title' => 'download_show',
            ],
            [
                'id'    => 47,
                'title' => 'download_delete',
            ],
            [
                'id'    => 48,
                'title' => 'download_access',
            ],
            [
                'id'    => 49,
                'title' => 'examination_result_create',
            ],
            [
                'id'    => 50,
                'title' => 'examination_result_edit',
            ],
            [
                'id'    => 51,
                'title' => 'examination_result_show',
            ],
            [
                'id'    => 52,
                'title' => 'examination_result_delete',
            ],
            [
                'id'    => 53,
                'title' => 'examination_result_access',
            ],
            [
                'id'    => 54,
                'title' => 'statistic_management_access',
            ],
            [
                'id'    => 55,
                'title' => 'statistic_category_create',
            ],
            [
                'id'    => 56,
                'title' => 'statistic_category_edit',
            ],
            [
                'id'    => 57,
                'title' => 'statistic_category_show',
            ],
            [
                'id'    => 58,
                'title' => 'statistic_category_delete',
            ],
            [
                'id'    => 59,
                'title' => 'statistic_category_access',
            ],
            [
                'id'    => 60,
                'title' => 'statistic_create',
            ],
            [
                'id'    => 61,
                'title' => 'statistic_edit',
            ],
            [
                'id'    => 62,
                'title' => 'statistic_show',
            ],
            [
                'id'    => 63,
                'title' => 'statistic_delete',
            ],
            [
                'id'    => 64,
                'title' => 'statistic_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
