<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $studentId = 5;
$round = 65;
    return view('pages.welcom',
    ['id' => $studentId,
            'round'=> $round
        ]);
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/students', function () {
    $students =[
        [
            'id' => 1,
            'name' => 'Ahasan Habib Roxy',
            'address' => "Mirpur DOHS"
        ],
        [
            'id' => 2,
            'name' => 'ai Rahan',
            'address' => " DOHS"
        ],
        [
            'id' => 3,
            'name' => 'Sohel Rana',
            'address' => "Mirpur DOHS"
        ]
    ];
    return view('pages.students.index', [
    'students' =>$students]);
});



Route::get('/students/{id}', function ($id) {
    $students = [
        [
            'id' => 1,
            'name' => 'Ahasan Habib Roxy',
            'address' => "Mirpur DOHS"
        ],
        [
            'id' => 2,
            'name' => 'Ai Rahan',
            'address' => "DOHS"
        ],
        [
            'id' => 3,
            'name' => 'Sohel Rana',
            'address' => "Mirpur DOHS"
        ]
    ];

    // ID অনুযায়ী student বের করো
    $student = collect($students)->firstWhere('id', (int) $id);

    // if (!$student) {
    //     abort(404, 'Student not found');
    // }

    return view('pages.students.show', compact('student'));
});

