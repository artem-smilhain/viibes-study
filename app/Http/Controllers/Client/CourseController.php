<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\FAQ;
use App\Models\Review;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $reviews = Review::take(9)->orderBy('row_weight', 'asc')->get();
        $faq = FAQ::$faq['course'];
        $program = Course::$program;
        $breadcrumbs = [
            'Курсы словацкого' => route('courses')
        ];
        return view('client.pages.courses', compact(['reviews', 'faq', 'program', 'breadcrumbs']));
    }
}
