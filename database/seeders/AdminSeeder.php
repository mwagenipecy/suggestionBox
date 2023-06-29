<?php

namespace Database\Seeders;

use App\Models\collages;
use App\Models\courses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create the collage name

        collages::create([ 'id'=>1, 'collage_name'=>"coict", 'collage_location'=>"kijitonyama-science"]);
        collages::create(['id'=>2,'collage_name'=>"soaf", 'collage_location'=>"UDSM  main campus"]);
        collages::create(['id'=>3,'collage_name'=>"soed", 'collage_location'=>"UDSM  main campus"]);
        collages::create(['id'=>4,'collage_name'=>"coet", 'collage_location'=>"UDSM  main campus"]);
        collages::create(['id'=>5,'collage_name'=>"sjmc", 'collage_location'=>"UDSM  main campus"]);
        collages::create(['id'=>6,'collage_name'=>"coict1", 'collage_location'=>"UDSM  main campus"]);
        collages::create(['id'=>7,'collage_name'=>"coict2", 'collage_location'=>"kijitonyama-science"]);
        collages::create(['id'=>8,'collage_name'=>"coict3", 'collage_location'=>"kijitonyama-science"]);



        //create the courses courser
        courses::create(['id'=>1,'course_name'=>'ceit','collage_id'=>1]);
        courses::create(['id'=>2,'course_name'=>'telecommunication engineering ','collage_id'=>1]);
        courses::create(['id'=>3,'course_name'=>'computer science','collage_id'=>1]);
        courses::create(['id'=>4,'course_name'=>'industrial engineering ','collage_id'=>4]);
        courses::create(['id'=>5,'course_name'=>'BIT','collage_id'=>1]);
        courses::create(['id'=>6,'course_name'=>'chemical industrial','collage_id'=>4]);
        courses::create(['id'=>7,'course_name'=>'agriculture engineering ','collage_id'=>2]);
        courses::create(['id'=>8,'course_name'=>'ceit','collage_id'=>8]);
        courses::create(['id'=>9,'course_name'=>'ceit','collage_id'=>7]);

    }
}
