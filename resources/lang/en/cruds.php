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
    'service' => [
        'title'          => 'Service',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'employee' => [
        'title'          => 'Employee',
        'title_singular' => 'Employee',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'names'                  => 'Names',
            'names_helper'           => ' ',
            'title'                  => 'Title(Employee Position)',
            'title_helper'           => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'phone'                  => 'Employee Phone',
            'phone_helper'           => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'profile_picture'        => 'Profile Picture',
            'profile_picture_helper' => ' ',
        ],
    ],
    'appointment' => [
        'title'          => 'Appointment',
        'title_singular' => 'Appointment',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'employee'           => 'Employee',
            'employee_helper'    => ' ',
            'names'              => 'Names',
            'names_helper'       => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'mobile'             => 'Mobile Number',
            'mobile_helper'      => ' ',
            'start_time'         => 'Start Time',
            'start_time_helper'  => ' ',
            'finish_time'        => 'Finish Time',
            'finish_time_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'notes'              => 'Notes',
            'notes_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],

];
