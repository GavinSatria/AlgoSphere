<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function insert()
    {
        $course = new Course;
        $course->title = 'Algorithm and Programming';
        $course->short_description = 'Introduction to Algorithm and Programming';
        $course->description = 'test';
        $course->outcomes = 'test2';
        $course->requirements = 'test3';
        $course->price = 12000;
        $course->thumbnail = 'a';
        $course->video_url ='a';

        $course -> save();
        dump($course);
    }

}
