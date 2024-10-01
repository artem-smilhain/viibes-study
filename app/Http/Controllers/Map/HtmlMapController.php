<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Direction;
use App\Models\Group;
use App\Models\University;
use Illuminate\Http\Request;
use function view;

class HtmlMapController extends Controller
{
    public function index(Request $request)
    {
        $universities = University::orderBy('row_weight', 'asc')->get();
        $directions = Direction::all();
        $groups = Group::all();
        $categories = Category::all();
        $cities = City::all();
        $breadcrumbs = [
            'Карта сайта VIIBES Study' => route('html-map'),
        ];
        $tags_universities = [
            'groups' => [
                'groups' => ['object' => $groups, 'route' => 'universities.index-by-category', 'current' => null],
                'cities' => ['object' => $cities, 'route' => 'universities.index-by-city', 'current' => null],
            ]
        ];
        $tags_programs = [
            'groups' => [
                'directions' => ['object' => $directions, 'route' => 'specialities.show', 'current' => null],
            ]
        ];
        $tags_blog = [
            'groups' => [
                'categories' => ['object' => $categories, 'route' => 'blog.index-by-category', 'current' => null],
            ]
        ];
        return view('maps.map', compact(['universities', 'directions', 'groups', 'breadcrumbs', 'tags_universities', 'tags_programs', 'tags_blog']));
    }
}
