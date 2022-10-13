<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'title' => 'DB Adminstrator',
            'inerval' => 'Internship',
            'requirements' => ''

        ]);
        $table->string('title');
        $table->string('inerval');
        $table->date('start_date');
        $table->date('end_date');
        // $table->text('description');
        $table->text('requirements');
        $table->foreignId('cate_id');
        $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
        $table->foreignId('company_id');
    }
}
