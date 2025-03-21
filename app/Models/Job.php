<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

}
    /*
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
            ],[
                'id' => 4,
                'title' => 'Sales Manager',
                'salary' => 200000
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
*/
