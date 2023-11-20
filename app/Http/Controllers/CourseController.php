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

    public function insert_ui()
    {
        $course = new Course;
        $course->title = 'UI/UX Design';
        $course->short_description = 'Basic User Interface and User Experience Design';
        $course->description = 'This course aims to familiarize students with the concepts of creating user-friendly and visually appealing interfaces.
        Participants will delve into the fundamentals of both User Interface (UI) and User Experience (UX) design with the help of a beginner friendly design tool: Figma.';
        $course->outcomes = 'Master Figma Proficiency, Understand Design Principles, Create Interactive Prototypes, Consistency with Components, Collaborative Design Techniques';
        $course->requirements = 'No prior UI/UX design experience required. Basic computer skills and familiarity with digital platforms.';
        $course->price = 24000;
        $course->thumbnail = 'a';
        $course->video_url ='a';

        $course -> save();
        dump($course);
    }

    public function algo_intro()
    {
        return view ('/sections/algo_intro');
    }
    public function variable()
    {
        return view ('/sections/variable');
    }
    public function array()
    {
        return view ('/sections/array');
    }
    public function operator()
    {
        return view ('/sections/operator');
    }
    public function loop()
    {
        return view ('/sections/loop');
    }
    public function conditional()
    {
        return view ('/sections/conditional');
    }
    public function function()
    {
        return view ('/sections/function');
    }
    public function algo_example()
    {
        return view ('/sections/algo_example');
    }
    public function input()
    {
        return view ('/sections/input');
    }

    public function ui_intro()
    {
        return view ('/sections/ui_intro');
    }
    public function figma()
    {
        return view ('/sections/figma');
    }
    public function prototype()
    {
        return view ('/sections/prototype');
    }
    public function design()
    {
        return view ('/sections/design');
    }
}
