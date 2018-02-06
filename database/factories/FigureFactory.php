<?php

use Carbon\Carbon;
use App\Models\Figure;
use Faker\Generator as Faker;

$factory->define(Figure::class, function (Faker $faker) {
    return [
        'prefix_title'  =>  "Prof. Dr. H.",
        'first_name'    =>  'Dadang',
        'last_name'     =>  'Konelo',
        'suffix_title'  =>  'SH',
        'occupation'    =>  'Pemimpin Dunia',
        'dob'           =>  Carbon::now(),
        'pob'           =>  'Kota Bandung',
        'gender'        =>  'Male',
        'bio'           =>  'Dadang Konelo Adalah Seorang Pemimpin Dunia, Dan dia adalah seorang baikers, orang yang berusaha menjadi orang baik.'
    ];
});
