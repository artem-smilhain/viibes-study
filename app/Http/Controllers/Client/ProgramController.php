<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Direction;
use App\Models\FAQ;
use App\Models\Group;
use App\Models\Page;
use App\Models\Program;
use Request;
use function view;

class ProgramController extends Controller
{
    public function index()
    {
        $specialities = Program::whereHas('academicDegree', function($q){
            if (Request::exists('degree')){
                $q->where('degree_index', Request::get('degree'));
            }
        })->orderBy('academic_degree_id')->paginate(10)->onEachSide(0)->withQueryString();
        $directions = Direction::orderBy('row_weight')->get();
        $faq = FAQ::$faq['admission'];
        $groups = Group::all();
        $cities = City::all();
        $content = Page::where('page', 'programs')->firstOrFail();
        $blog_categories = Category::all();
        $breadcrumbs = [
            'Специальности' => route('specialities')
        ];
        $content_text = [
            'heading' => $content->content_heading,
            'text' => $content->content_text,
            'img_src' =>  $content->content_img_src
        ];
        $tags = [
            'main' => ['title' => '#Все специальности', 'route' => 'specialities'],
            'groups' => [
                'directions' => ['object' => $directions, 'route' => 'specialities.show', 'current' => null],
            ]
        ];
        return view('client.pages.specialities.index', compact(['specialities', 'directions', 'faq', 'groups', 'cities', 'content_text', 'breadcrumbs', 'tags', 'blog_categories']));
    }
    public function show($slug)
    {
        $direction = Direction::where('slug', $slug)->firstOrFail();
        $specialities = Program::where('direction_id', $direction->id)
            ->whereHas('academicDegree', function($q){
                if (Request::exists('degree')){
                    $q->where('degree_index', Request::get('degree'));
                }})
            ->orWhere('direction_2_id', $direction->id)
            ->whereHas('academicDegree', function($q){
                if (Request::exists('degree')){
                    $q->where('degree_index', Request::get('degree'));
                }})
            ->orderBy('direction_2_id', 'ASC')->orderBy('academic_degree_id')->paginate(10)->onEachSide(0)->withQueryString();
        $directions = Direction::orderBy('row_weight')->get();
        $faq = FAQ::$faq['admission'];
        $groups = Group::all();
        $cities = City::all();
        $blog_categories = Category::all();
        $content_text = [
            'heading' => $direction->content_heading,
            'text' => $direction->content_text,
            'img_src' =>  $direction->content_img_src
        ];
        $breadcrumbs = [
            'Специальности' => route('specialities'),
            $direction->name => route('specialities.show', $direction->slug)
        ];
        $tags = [
            'main' => ['title' => '#Все специальности', 'route' => 'specialities'],
            'groups' => [
                'directions' => ['object' => $directions, 'route' => 'specialities.show', 'current' => $direction],
            ]
        ];
        return view('client.pages.specialities.index-by-direction', compact(['specialities', 'direction', 'directions', 'faq', 'groups', 'cities', 'content_text', 'breadcrumbs', 'tags', 'blog_categories']));
    }
}
