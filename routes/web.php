<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'title' => 'Welcome to Our Website',
        'description' => 'This is the homepage where you can find the latest updates and news.'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services', [
        'services' => [
            'Web Development',
            'App Development',
            'SEO Services',
            'Digital Marketing'
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::getJobs()
    ]);
});



Route::get('/jobs/{id}', function ($id) {

    $job = Job::getJobById($id);

    return view('job-detail', ['job' => $job]);

});