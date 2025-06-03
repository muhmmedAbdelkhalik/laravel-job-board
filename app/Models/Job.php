<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
            [
                'title' => 'Software Engineer',
                'salary' => '2000$'
            ],
            [
                'title' => 'Software Engineer',
                'salary' => '2000$'
            ]
        ];
    }
}
