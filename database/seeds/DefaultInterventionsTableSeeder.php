<?php

/**
 * Seeds interventions table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class DefaultInterventionsTableSeeder extends \Illuminate\Database\Seeder {

    /**
     * Seeds table.
     */
    public function run() {

        $interventions = [
            [
                'name' => 'Drenaj',
                'price' => 10.00
            ], [
                'name' => 'Test',
                'price' => 159.99
            ], [
                'name' => 'John',
                'price' => 5555.33
            ], [
                'name' => 'Doe',
                'price' => 99999.99
            ]
        ];

        foreach ($interventions as $intervention) {
            \App\DefaultIntervention::create($intervention);
        }
    }

}