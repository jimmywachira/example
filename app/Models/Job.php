<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => 120000
            ],
            [
                'id' => 2,
                'title' => 'Project Manager',
                'salary' => 150000
            ],
            [
                'id' => 3,
                'title' => 'Marketing Intern',
                'salary' => 50000
            ]
        ];
    }

    public static function find(int $id):array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        #dd($job);
        if(!$job){
            abort(404);
        }
        return $job;
    }
}