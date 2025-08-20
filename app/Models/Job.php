<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function getJobs(): array
    {
        return [
            ['id' => 1, 'title' => 'Software Engineer', 'description' => 'Develop and maintain software applications.', 'salary' => '$80,000 - $100,000'],
            ['id' => 2, 'title' => 'Project Manager', 'description' => 'Oversee projects from inception to completion.', 'salary' => '$70,000 - $90,000'],
            ['id' => 3, 'title' => 'UX Designer', 'description' => 'Design user-friendly interfaces and experiences.', 'salary' => '$60,000 - $80,000']
        ];
    }

    public static function getJobById(int $id): array
    {
        $job = Arr::first(static::getJobs(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404, 'Job not found');
        }
        return $job;
    }
}
