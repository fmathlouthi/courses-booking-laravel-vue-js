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
                'title' => 'coupon_create',
            ],
            [
                'id'    => 18,
                'title' => 'coupon_edit',
            ],
            [
                'id'    => 19,
                'title' => 'coupon_show',
            ],
            [
                'id'    => 20,
                'title' => 'coupon_delete',
            ],
            [
                'id'    => 21,
                'title' => 'coupon_access',
            ],
            [
                'id'    => 22,
                'title' => 'course_order_create',
            ],
            [
                'id'    => 23,
                'title' => 'course_order_edit',
            ],
            [
                'id'    => 24,
                'title' => 'course_order_show',
            ],
            [
                'id'    => 25,
                'title' => 'course_order_delete',
            ],
            [
                'id'    => 26,
                'title' => 'course_order_access',
            ],
            [
                'id'    => 27,
                'title' => 'university_course_access',
            ],
            [
                'id'    => 28,
                'title' => 'language_create',
            ],
            [
                'id'    => 29,
                'title' => 'language_edit',
            ],
            [
                'id'    => 30,
                'title' => 'language_show',
            ],
            [
                'id'    => 31,
                'title' => 'language_delete',
            ],
            [
                'id'    => 32,
                'title' => 'language_access',
            ],
            [
                'id'    => 33,
                'title' => 'availability_create',
            ],
            [
                'id'    => 34,
                'title' => 'availability_edit',
            ],
            [
                'id'    => 35,
                'title' => 'availability_show',
            ],
            [
                'id'    => 36,
                'title' => 'availability_delete',
            ],
            [
                'id'    => 37,
                'title' => 'availability_access',
            ],
            [
                'id'    => 38,
                'title' => 'country_create',
            ],
            [
                'id'    => 39,
                'title' => 'country_edit',
            ],
            [
                'id'    => 40,
                'title' => 'country_show',
            ],
            [
                'id'    => 41,
                'title' => 'country_delete',
            ],
            [
                'id'    => 42,
                'title' => 'country_access',
            ],
            [
                'id'    => 43,
                'title' => 'city_create',
            ],
            [
                'id'    => 44,
                'title' => 'city_edit',
            ],
            [
                'id'    => 45,
                'title' => 'city_show',
            ],
            [
                'id'    => 46,
                'title' => 'city_delete',
            ],
            [
                'id'    => 47,
                'title' => 'city_access',
            ],
            [
                'id'    => 48,
                'title' => 'extra_create',
            ],
            [
                'id'    => 49,
                'title' => 'extra_edit',
            ],
            [
                'id'    => 50,
                'title' => 'extra_show',
            ],
            [
                'id'    => 51,
                'title' => 'extra_delete',
            ],
            [
                'id'    => 52,
                'title' => 'extra_access',
            ],
            [
                'id'    => 53,
                'title' => 'globale_data_access',
            ],
            [
                'id'    => 54,
                'title' => 'accommodation_create',
            ],
            [
                'id'    => 55,
                'title' => 'accommodation_edit',
            ],
            [
                'id'    => 56,
                'title' => 'accommodation_show',
            ],
            [
                'id'    => 57,
                'title' => 'accommodation_delete',
            ],
            [
                'id'    => 58,
                'title' => 'accommodation_access',
            ],
            [
                'id'    => 59,
                'title' => 'univercity_course_create',
            ],
            [
                'id'    => 60,
                'title' => 'univercity_course_edit',
            ],
            [
                'id'    => 61,
                'title' => 'univercity_course_show',
            ],
            [
                'id'    => 62,
                'title' => 'univercity_course_delete',
            ],
            [
                'id'    => 63,
                'title' => 'univercity_course_access',
            ],
            [
                'id'    => 64,
                'title' => 'feature_create',
            ],
            [
                'id'    => 65,
                'title' => 'feature_edit',
            ],
            [
                'id'    => 66,
                'title' => 'feature_show',
            ],
            [
                'id'    => 67,
                'title' => 'feature_delete',
            ],
            [
                'id'    => 68,
                'title' => 'feature_access',
            ],
            [
                'id'    => 69,
                'title' => 'weekly_course_create',
            ],
            [
                'id'    => 70,
                'title' => 'weekly_course_edit',
            ],
            [
                'id'    => 71,
                'title' => 'weekly_course_show',
            ],
            [
                'id'    => 72,
                'title' => 'weekly_course_delete',
            ],
            [
                'id'    => 73,
                'title' => 'weekly_course_access',
            ],
            [
                'id'    => 74,
                'title' => 'semester_course_create',
            ],
            [
                'id'    => 75,
                'title' => 'semester_course_edit',
            ],
            [
                'id'    => 76,
                'title' => 'semester_course_show',
            ],
            [
                'id'    => 77,
                'title' => 'semester_course_delete',
            ],
            [
                'id'    => 78,
                'title' => 'semester_course_access',
            ],
            [
                'id'    => 79,
                'title' => 'semester_course_variante_create',
            ],
            [
                'id'    => 80,
                'title' => 'semester_course_variante_edit',
            ],
            [
                'id'    => 81,
                'title' => 'semester_course_variante_show',
            ],
            [
                'id'    => 82,
                'title' => 'semester_course_variante_delete',
            ],
            [
                'id'    => 83,
                'title' => 'semester_course_variante_access',
            ],
            [
                'id'    => 84,
                'title' => 'accommodations_section_access',
            ],
            [
                'id'    => 85,
                'title' => 'weekly_accommodation_create',
            ],
            [
                'id'    => 86,
                'title' => 'weekly_accommodation_edit',
            ],
            [
                'id'    => 87,
                'title' => 'weekly_accommodation_show',
            ],
            [
                'id'    => 88,
                'title' => 'weekly_accommodation_delete',
            ],
            [
                'id'    => 89,
                'title' => 'weekly_accommodation_access',
            ],
            [
                'id'    => 90,
                'title' => 'semester_accommodation_create',
            ],
            [
                'id'    => 91,
                'title' => 'semester_accommodation_edit',
            ],
            [
                'id'    => 92,
                'title' => 'semester_accommodation_show',
            ],
            [
                'id'    => 93,
                'title' => 'semester_accommodation_delete',
            ],
            [
                'id'    => 94,
                'title' => 'semester_accommodation_access',
            ],
            [
                'id'    => 95,
                'title' => 'semester_accomm_variante_create',
            ],
            [
                'id'    => 96,
                'title' => 'semester_accomm_variante_edit',
            ],
            [
                'id'    => 97,
                'title' => 'semester_accomm_variante_show',
            ],
            [
                'id'    => 98,
                'title' => 'semester_accomm_variante_delete',
            ],
            [
                'id'    => 99,
                'title' => 'semester_accomm_variante_access',
            ],
            [
                'id'    => 100,
                'title' => 'pathway_program_access',
            ],
            [
                'id'    => 101,
                'title' => 'pathway_university_create',
            ],
            [
                'id'    => 102,
                'title' => 'pathway_university_edit',
            ],
            [
                'id'    => 103,
                'title' => 'pathway_university_show',
            ],
            [
                'id'    => 104,
                'title' => 'pathway_university_delete',
            ],
            [
                'id'    => 105,
                'title' => 'pathway_university_access',
            ],
            [
                'id'    => 106,
                'title' => 'pathway_create',
            ],
            [
                'id'    => 107,
                'title' => 'pathway_edit',
            ],
            [
                'id'    => 108,
                'title' => 'pathway_show',
            ],
            [
                'id'    => 109,
                'title' => 'pathway_delete',
            ],
            [
                'id'    => 110,
                'title' => 'pathway_access',
            ],
            [
                'id'    => 111,
                'title' => 'universities_program_access',
            ],
            [
                'id'    => 112,
                'title' => 'university_subject_create',
            ],
            [
                'id'    => 113,
                'title' => 'university_subject_edit',
            ],
            [
                'id'    => 114,
                'title' => 'university_subject_show',
            ],
            [
                'id'    => 115,
                'title' => 'university_subject_delete',
            ],
            [
                'id'    => 116,
                'title' => 'university_subject_access',
            ],
            [
                'id'    => 117,
                'title' => 'subject_program_create',
            ],
            [
                'id'    => 118,
                'title' => 'subject_program_edit',
            ],
            [
                'id'    => 119,
                'title' => 'subject_program_show',
            ],
            [
                'id'    => 120,
                'title' => 'subject_program_delete',
            ],
            [
                'id'    => 121,
                'title' => 'subject_program_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
