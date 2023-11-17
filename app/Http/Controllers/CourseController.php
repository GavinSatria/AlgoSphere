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
        $course->description = 'This course is meant for Middle to High School students with no prior knowledge in Computer Science.
                                This course aims to introduce basic Computer Science topics to students who might be considering Computer Science as their major, but are intimidated by the complex syntaxes and terms.
                                ';
        $course->outcomes = 'Introduction to Algorithm and Programming, C Standard Library, Variables and Data Types, Standard Input and Output Operations, Arithmetic Operators, Conditional Statements, Looping Statements, Arrays';
        $course->requirements = 'Basic Computer Skills, Mathematical Fundamentals';
        $course->price = 20000;
        $course->thumbnail = 'a';
        $course->video_url ='a';

        $course -> save();
        dump($course);
    }

}
