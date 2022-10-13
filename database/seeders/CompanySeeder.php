<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create(
            [
                'title' => 'TeknoKeys',
                'logo' => '1664304969.png',
                'email' => 'TeknoKeys@gmail.com',
                'link' => 'https:faceboock/TeknoKeys',
                'location_id' => 1,

            ],

        );
        Company::create(
            [
                'title' => 'HighTech',
                'logo' => '1664627339.png',
                'email' => 'HighTech@gmail.com',
                'link' => 'https:faceboock/HighTech',
                'location_id' => 2,

            ],

        );
        Company::create(
            [
                'title' => 'ProSite Yemen',
                'logo' => '1664644388.png',
                'email' => 'ProSite@gmail.com',
                'link' => 'https:faceboock/ProSite',
                'location_id' => 1,

            ],

        );
        Company::create(
            [
                'title' => 'Yemen solution',
                'logo' => '1664304969.png',
                'email' => 'yemsolution@gmail.com',
                'link' => 'https:faceboock/yemsolution',
                'location_id' => 3,

            ],

        );
        Company::create(
            [
                'title' => 'infoTech',
                'logo' => '1664644388.png',
                'email' => 'infoTech@gmail.com',
                'link' => 'https:faceboock/infoTech',
                'location_id' => 3,

            ],

        );
        Company::create(
            [
                'title' => 'Yemen solution',
                'logo' => '1664304969.png',
                'email' => 'yemsolution@gmail.com',
                'link' => 'https:faceboock/yemsolution',
                'location_id' => 3,

            ],

        );
        Company::create(
            [
                'title' => 'infoTech',
                'logo' => '1664644388.png',
                'email' => 'infoTech@gmail.com',
                'link' => 'https:faceboock/infoTech',
                'location_id' => 3,

            ],

        );
    }
}
