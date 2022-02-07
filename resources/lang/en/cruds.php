<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'coupon' => [
        'title'          => 'Coupons',
        'title_singular' => 'Coupon',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'owner'             => 'Owner',
            'owner_helper'      => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'count'             => 'Count',
            'count_helper'      => ' ',
            'expired_at'        => 'Expired At',
            'expired_at_helper' => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
        ],
    ],
    'courseOrder' => [
        'title'          => 'Course Order',
        'title_singular' => 'Course Order',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'order_number'          => 'Order Number',
            'order_number_helper'   => ' ',
            'client'                => 'Client',
            'client_helper'         => ' ',
            'sub_total'             => 'Sub Total',
            'sub_total_helper'      => ' ',
            'coupon'                => 'Coupon',
            'coupon_helper'         => ' ',
            'total_amount'          => 'Total Amount',
            'total_amount_helper'   => ' ',
            'payment_method'        => 'Payment Method',
            'payment_method_helper' => ' ',
            'payment_status'        => 'Payment Status',
            'payment_status_helper' => ' ',
            'status'                => 'Status',
            'status_helper'         => ' ',
            'first_name'            => 'First Name',
            'first_name_helper'     => ' ',
            'last_name'             => 'Last Name',
            'last_name_helper'      => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'country'               => 'Country',
            'country_helper'        => ' ',
            'post_code'             => 'Post Code',
            'post_code_helper'      => ' ',
            'address_1'             => 'Address 1',
            'address_1_helper'      => ' ',
            'address_2'             => 'Address 2',
            'address_2_helper'      => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'owner'                 => 'Owner',
            'owner_helper'          => ' ',
            'course'                => 'Course',
            'course_helper'         => ' ',
            'extra'                 => 'Extra',
            'extra_helper'          => ' ',
            'accommodation'         => 'Accommodation',
            'accommodation_helper'  => ' ',
            'start_date'            => 'Start Date',
            'start_date_helper'     => ' ',
        ],
    ],
    'universityCourse' => [
        'title'          => 'University Course',
        'title_singular' => 'University Course',
    ],
    'language' => [
        'title'          => 'Language',
        'title_singular' => 'Language',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'availability' => [
        'title'          => 'Availability',
        'title_singular' => 'Availability',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'country' => [
        'title'          => 'Country',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'code'              => 'Code',
            'code_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'city' => [
        'title'          => 'City',
        'title_singular' => 'City',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'extra' => [
        'title'          => 'Extra',
        'title_singular' => 'Extra',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'owner'              => 'Owner',
            'owner_helper'       => ' ',
        ],
    ],
    'globaleData' => [
        'title'          => 'Globale Data',
        'title_singular' => 'Globale Data',
    ],
    'accommodation' => [
        'title'          => 'Accommodation',
        'title_singular' => 'Accommodation',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'owner'              => 'Owner',
            'owner_helper'       => ' ',
        ],
    ],
    'univercityCourse' => [
        'title'          => 'Univercity Course',
        'title_singular' => 'Univercity Course',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'description'           => 'Description',
            'description_helper'    => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'language'              => 'Language',
            'language_helper'       => ' ',
            'availability'          => 'Availability',
            'availability_helper'   => ' ',
            'extra'                 => 'Extra',
            'extra_helper'          => ' ',
            'accommodation'         => 'Accommodation',
            'accommodation_helper'  => ' ',
            'twitter_link'          => 'Twitter Link',
            'twitter_link_helper'   => ' ',
            'instagram_link'        => 'Instagram Link',
            'instagram_link_helper' => ' ',
            'facebook_link'         => 'Facebook Link',
            'facebook_link_helper'  => ' ',
            'photos'                => 'Photos',
            'photos_helper'         => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'owner'                 => 'Owner',
            'owner_helper'          => ' ',
            'features'              => 'Features',
            'features_helper'       => ' ',
        ],
    ],
    'feature' => [
        'title'          => 'Feature',
        'title_singular' => 'Feature',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'weeklyCourse' => [
        'title'          => 'Weekly Course',
        'title_singular' => 'Weekly Course',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'university'         => 'University',
            'university_helper'  => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'owner'              => 'Owner',
            'owner_helper'       => ' ',
        ],
    ],
    'semesterCourse' => [
        'title'          => 'Semester Course',
        'title_singular' => 'Semester Course',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'university'         => 'University',
            'university_helper'  => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'owner'              => 'Owner',
            'owner_helper'       => ' ',
        ],
    ],
    'semesterCourseVariante' => [
        'title'          => 'Semester Course Variantes',
        'title_singular' => 'Semester Course Variante',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'starting_date'          => 'Starting Date',
            'starting_date_helper'   => ' ',
            'price'                  => 'Price',
            'price_helper'           => ' ',
            'semester_course'        => 'Semester Course',
            'semester_course_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'owner'                  => 'Owner',
            'owner_helper'           => ' ',
        ],
    ],
    'accommodationsSection' => [
        'title'          => 'Accommodations Section',
        'title_singular' => 'Accommodations Section',
    ],
    'weeklyAccommodation' => [
        'title'          => 'Weekly Accommodation',
        'title_singular' => 'Weekly Accommodation',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'description'           => 'Description',
            'description_helper'    => ' ',
            'price'                 => 'Price',
            'price_helper'          => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'availability'          => 'Availability',
            'availability_helper'   => ' ',
            'features'              => 'Features',
            'features_helper'       => ' ',
            'photos'                => 'Photos',
            'photos_helper'         => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'owner'                 => 'Owner',
            'owner_helper'          => ' ',
        ],
    ],
    'semesterAccommodation' => [
        'title'          => 'Semester Accommodation',
        'title_singular' => 'Semester Accommodation',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'city'               => 'City',
            'city_helper'        => ' ',
            'features'           => 'Features',
            'features_helper'    => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'owner'              => 'Owner',
            'owner_helper'       => ' ',
        ],
    ],
    'semesterAccommVariante' => [
        'title'          => 'Semester Accomm Variantes',
        'title_singular' => 'Semester Accomm Variante',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'starting_date'                 => 'Starting Date',
            'starting_date_helper'          => ' ',
            'price'                         => 'Price',
            'price_helper'                  => ' ',
            'semester_accommodation'        => 'Semester Accommodation',
            'semester_accommodation_helper' => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
            'owner'                         => 'Owner',
            'owner_helper'                  => ' ',
        ],
    ],
    'pathwayProgram' => [
        'title'          => 'Pathway Program',
        'title_singular' => 'Pathway Program',
    ],
    'pathwayUniversity' => [
        'title'          => 'Pathway University',
        'title_singular' => 'Pathway University',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'facebook_link'         => 'Facebook Link',
            'facebook_link_helper'  => 'add the facebook url page',
            'instagram_link'        => 'Instagram Link',
            'instagram_link_helper' => 'add the instagram page link',
            'twitter_link'          => 'Twitter Link',
            'twitter_link_helper'   => 'add the twitter page link',
            'description'           => 'Description',
            'description_helper'    => 'add the university description',
            'pathbrochure'          => 'Pathbrochure',
            'pathbrochure_helper'   => 'upload your file',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'photos'                => 'Photos',
            'photos_helper'         => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'owner'                 => 'Owner',
            'owner_helper'          => ' ',
        ],
    ],
    'pathway' => [
        'title'          => 'Pathways list',
        'title_singular' => 'Pathways list',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'name'                       => 'Name',
            'name_helper'                => ' ',
            'description'                => 'Description',
            'description_helper'         => ' ',
            'progression_program'        => 'Progression Program',
            'progression_program_helper' => ' ',
            'price'                      => 'Price',
            'price_helper'               => ' ',
            'university'                 => 'University',
            'university_helper'          => ' ',
            'type'                       => 'Type',
            'type_helper'                => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
            'owner'                      => 'Owner',
            'owner_helper'               => ' ',
        ],
    ],
    'universitiesProgram' => [
        'title'          => 'Universities Programs',
        'title_singular' => 'Universities Program',
    ],
    'universitySubject' => [
        'title'          => 'University Subject',
        'title_singular' => 'University Subject',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'facebook_link'         => 'Facebook Link',
            'facebook_link_helper'  => ' ',
            'instagram_link'        => 'Instagram Link',
            'instagram_link_helper' => ' ',
            'twitter_link'          => 'Twitter Link',
            'twitter_link_helper'   => ' ',
            'description'           => 'Description',
            'description_helper'    => ' ',
            'pathbrochure'          => 'Pathbrochure',
            'pathbrochure_helper'   => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'photos'                => 'Photos',
            'photos_helper'         => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'type'                  => 'Type',
            'type_helper'           => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'owner'                 => 'Owner',
            'owner_helper'          => ' ',
        ],
    ],
    'subjectProgram' => [
        'title'          => 'Subject Programs',
        'title_singular' => 'Subject Program',
        'fields'         => [
            'id'                                       => 'ID',
            'id_helper'                                => ' ',
            'name'                                     => 'Name',
            'name_helper'                              => ' ',
            'entry_requirements'                       => 'Entry Requirements',
            'entry_requirements_helper'                => ' ',
            'months_of_entry'                          => 'Months Of Entry',
            'months_of_entry_helper'                   => ' ',
            'course_content'                           => 'Course Content',
            'course_content_helper'                    => ' ',
            'fees_and_funding'                         => 'Fees And Funding',
            'fees_and_funding_helper'                  => ' ',
            'qualification_and_course_duration'        => 'Qualification And Course Duration',
            'qualification_and_course_duration_helper' => ' ',
            'university'                               => 'University',
            'university_helper'                        => ' ',
            'created_at'                               => 'Created at',
            'created_at_helper'                        => ' ',
            'updated_at'                               => 'Updated at',
            'updated_at_helper'                        => ' ',
            'deleted_at'                               => 'Deleted at',
            'deleted_at_helper'                        => ' ',
            'owner'                                    => 'Owner',
            'owner_helper'                             => ' ',
        ],
    ],
];