<?php

/**
 * Seeds roles table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class RolesTableSeeder extends \Illuminate\Database\Seeder {

    /**
     * Seeds table.
     */
    public function run() {
        
        // Generate admin role
        $admin = new \App\Role();
        $admin->name = 'admin';
        $admin->display_name = 'Application admin';
        $admin->description = 'User is the application admin';
        $admin->save();
        
        // Generate user role
        $dentist = new \App\Role();
        $dentist->name = 'dentist';
        $dentist->display_name = 'Dentist';
        $dentist->description = 'User is a dentist';
        $dentist->save();
    }

}