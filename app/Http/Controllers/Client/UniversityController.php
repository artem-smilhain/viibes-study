<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Models\AcademicDegree;
use App\Models\Category;
use App\Models\City;
use App\Models\Direction;
use App\Models\Faculty;
use App\Models\FAQ;
use App\Models\Group;
use App\Models\Page;
use App\Models\Program;
use App\Models\University;
use function abort;
use function view;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::orderBy('row_weight', 'asc')->paginate(8);
        $groups = Group::all();
        $cities = City::all();
        $directions = Direction::all();
        $blog_categories = Category::all();
        $faq = FAQ::$faq['admission'];
        $breadcrumbs = [
            'Университеты' => route('universities')
        ];
        $tags = [
            'main' => ['title' => '#Все университеты', 'route' => 'universities'],
            'groups' => [
                'groups' => ['object' => $groups, 'route' => 'universities.index-by-category', 'current' => null],
                'cities' => ['object' => $cities, 'route' => 'universities.index-by-city', 'current' => null],
            ]
        ];
        $content = Page::where('page', 'universities')->firstOrFail();
        $content_text = [
            'heading' => $content->content_heading,
            'text' => $content->content_text,
            'img_src' =>  $content->content_img_src
        ];
        $sidebar_posts = (new PostController())->get_sidebar_posts();
        return view('client.pages.universities.index', compact('universities', 'groups', 'cities', 'faq', 'directions', 'breadcrumbs', 'tags', 'content_text', 'sidebar_posts', 'blog_categories'));
    }
    public function indexByCategory($slug)
    {
        $category = Group::where('slug', $slug)->firstOrFail();
        $universities = $category->universities()->orderBy('row_weight', 'asc')->paginate(6);
        $groups = Group::all();
        $cities = City::all();
        $directions = Direction::all();
        $blog_categories = Category::all();
        $faq = FAQ::$faq['admission'];
        $content_text = [
            'heading' => $category->content_heading,
            'text' => $category->content_text,
            'img_src' =>  $category->content_img_src
        ];
        $breadcrumbs = [
            'Категории университетов' => route('university-categories'),
            $category->name => route('universities.index-by-category', $category->slug)
        ];
        $tags = [
            'main' => ['title' => '#Все университеты', 'route' => 'universities'],
            'groups' => [
                'groups' => ['object' => $groups, 'route' => 'universities.index-by-category', 'current' => $category],
                'cities' => ['object' => $cities, 'route' => 'universities.index-by-city', 'current' => null],
            ]
        ];
        return view('client.pages.universities.index-by-category', compact('category', 'universities', 'groups', 'cities', 'faq', 'directions', 'content_text', 'tags', 'breadcrumbs', 'blog_categories'));
    }
    public function indexByCity($city_slug)
    {
        $city = City::where('slug', $city_slug)->firstOrFail();
        $universities = $city->universities()->orderBy('row_weight', 'asc')->paginate(6);
        $groups = Group::all();
        $cities = City::all();
        $directions = Direction::all();
        $blog_categories = Category::all();
        $faq = FAQ::$faq['admission'];
        $content_text = [
            'heading' => $city->content_heading,
            'text' => $city->content_text,
            'img_src' =>  $city->content_img_src
        ];
        $tags = [
            'main' => ['title' => '#Все университеты', 'route' => 'universities'],
            'groups' => [
                'groups' => ['object' => $groups, 'route' => 'universities.index-by-category', 'current' => null],
                'cities' => ['object' => $cities, 'route' => 'universities.index-by-city', 'current' => $city],
            ]
        ];
        $breadcrumbs = [
            'Университеты' => route('universities'),
            $city->name => route('universities.index-by-city', $city->slug)
        ];
        return view('client.pages.universities.index-by-city', compact('city', 'universities', 'groups', 'cities', 'faq', 'directions', 'content_text', 'tags', 'breadcrumbs', 'blog_categories'));
    }
    public function show($city_slug, $slug)
    {
        $university = University::where('slug', $slug)->firstOrFail();
        //колхоз с фотками на первое время
        $university_abbreviation = $university->abbreviation_sk;
        $photos_count = University::$photos_count[$university_abbreviation];
        //
        $categories = $university->groups;
        $city = $university->city;
        $faq = FAQ::$faq['admission'];
        $directions = Direction::all();
        $groups = Group::all();
        $cities = City::all();
        $blog_categories = Category::all();
        $content_text = [
            'heading' => $university->content_heading,
            'text' => $university->content_text,
            'img_src' =>  $university->content_img_src
        ];
        $breadcrumbs = [
            'Университеты' => route('universities'),
            $city->name => route('universities.index-by-city', $city->slug),
            $university->name => route('universities.show', [$university->city->slug, $university->slug])
        ];
        $tags = [
            'groups' => [
                'categories' => ['object' => $categories, 'route' => 'universities.index-by-category', 'current' => null],
                'cities' => ['object' => [$city], 'route' => 'universities.index-by-city', 'current' => null],
            ]
        ];
        if ($city && $city->slug == $city_slug) {
            $pictures = $university->pictures;
            $faculties = $university->faculties;
            $academic_degrees = [];
            $programs_count = [];
            $faculties_count = count($faculties);
            foreach ($faculties as $faculty) {
                if (str_contains(mb_strtolower($faculty->name), 'без факультета')){
                    $faculties_count--;
                }
                $programs = $faculty->programs;
                foreach ($programs as $program) {
                    if(!isset($academic_degrees[$faculty->id][$program->academic_degree_id])) {
                        $academic_degrees[$faculty->id][$program->academic_degree_id]['academic_degree'] = $program->academicDegree;
                    }
                    if (array_key_exists($program->academicDegree->degree_title, $programs_count)){
                        $programs_count[$program->academicDegree->degree_title]++;
                    }
                    else{
                        $programs_count[$program->academicDegree->degree_title] = 1;
                    }
                    $academic_degrees[$faculty->id][$program->academic_degree_id]['programs'][] = $program;
                }
            }
            return view('client.pages.universities.show',
                compact('university', 'categories', 'city', 'pictures',
                                                     'faculties', 'academic_degrees', 'faq', 'photos_count', 'directions', 'content_text',
                                                     'groups', 'cities', 'breadcrumbs', 'tags', 'blog_categories', 'programs_count',
                                                     'faculties_count'));
        }
        return abort(404);
    }
    public function faculty($city_slug, $slug, $faculty_slug)
    {
        $city = City::where('slug', $city_slug)->firstOrFail();
        $university = University::where('slug', $slug)->where('city_id', $city->id)->firstOrFail();
        $faculty = Faculty::where('slug', $faculty_slug)->where('university_id', $university->id)->firstOrFail();
        $programs = $faculty->programs;
        $faq = FAQ::$faq['admission'];
        $academic_degrees = [];
        foreach ($programs as $program) {
            if(!isset($academic_degrees[$program->academic_degree_id])) {
                $academic_degrees[$program->academic_degree_id]['academic_degree'] = $program->academicDegree;
            }
            $academic_degrees[$program->academic_degree_id]['programs'][] = $program;
        }
        $breadcrumbs = [
            'Университеты' => route('universities'),
            $city->name => route('universities.index-by-city', $city->slug),
            $university->name => route('universities.show', [$university->city->slug, $university->slug]),
            $faculty->name => route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug])
        ];
        $tags = [
            'groups' => [
                'categories' => ['object' => $university->groups, 'route' => 'universities.index-by-category', 'current' => null],
                'cities' => ['object' => [$city], 'route' => 'universities.index-by-city', 'current' => null],
            ]
        ];
        return view('client.pages.universities.faculty', compact('city', 'university', 'faculty', 'academic_degrees', 'faq', 'breadcrumbs', 'tags'));
    }
    public function degree($city_slug, $slug, $faculty_slug, $degree_slug){
        $city = City::where('slug', $city_slug)->firstOrFail();
        $university = University::where('slug', $slug)->where('city_id', $city->id)->firstOrFail();
        $faculty = Faculty::where('slug', $faculty_slug)->where('university_id', $university->id)->firstOrFail();
        $degree = AcademicDegree::where('slug', $degree_slug)->firstOrFail();
        $programs = Program::where('faculty_id', $faculty->id)->where('academic_degree_id', $degree->id)->get();
        $faq = FAQ::$faq['admission'];
        $breadcrumbs = [
            'Университеты' => route('universities'),
            $city->name => route('universities.index-by-city', $city->slug),
            $university->name => route('universities.show', [$university->city->slug, $university->slug]),
            $faculty->name => route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]),
            $degree->degree_title => route('universities.degree', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $degree->slug])
        ];
        $tags = [
            'groups' => [
                'categories' => ['object' => $university->groups, 'route' => 'universities.index-by-category', 'current' => null],
                'cities' => ['object' => [$city], 'route' => 'universities.index-by-city', 'current' => null],
            ]
        ];
        return view('client.pages.universities.degree', compact('programs', 'degree', 'faculty', 'university', 'city', 'faq', 'breadcrumbs', 'tags'));
    }
    public function speciality($city_slug, $slug, $faculty_slug, $degree_slug, $speciality_slug)
    {
        $city = City::where('slug', $city_slug)->firstOrFail();
        $university = University::where('slug', $slug)->where('city_id', $city->id)->firstOrFail();
        $faculty = Faculty::where('slug', $faculty_slug)->where('university_id', $university->id)->firstOrFail();
        $academic_degree = AcademicDegree::where('slug', $degree_slug)->firstOrFail();
        $speciality = Program::where('slug', $speciality_slug)
            ->where('faculty_id', $faculty->id)
            ->where('academic_degree_id', $academic_degree->id)
            ->firstOrFail();
        $faq = FAQ::$faq['admission'];
        $breadcrumbs = [
            'Университеты' => route('universities'),
            $city->name => route('universities.index-by-city', $city->slug),
            $university->name => route('universities.show', [$university->city->slug, $university->slug]),
            $faculty->name => route('universities.faculty', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug]),
            $speciality->academicDegree->degree_title => route('universities.degree', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $speciality->academicDegree->slug]),
            $speciality->name => route('universities.speciality', ['city_slug' => $city->slug, 'slug' => $university->slug, 'faculty_slug' => $faculty->slug, 'degree_slug' => $speciality->academicDegree->slug, 'speciality_slug' => $speciality->slug])
        ];
        $tags = [
            'groups' => [
                'direction' => ['object' => [$speciality->direction], 'route' => 'specialities.show', 'current' => null],
                'groups' => ['object' => $university->groups, 'route' => 'universities.index-by-category', 'current' => null],
                'city' => ['object' => [$city], 'route' => 'universities.index-by-city', 'current' => null],
            ]
        ];
        if (!empty($speciality->direction_2)){
            $tags['groups']['direction_2'] = ['object' => [$speciality->direction_2], 'route' => 'specialities.show', 'current' => null];
        }
        return view('client.pages.universities.speciality', compact('city', 'university', 'faculty', 'speciality', 'faq', 'breadcrumbs', 'tags'));
    }
    public function categories()
    {
        $groups = Group::all();
        $cities = City::all();
        $directions = Direction::all();
        $blog_categories = Category::all();
        $content = Page::where('page', 'university-categories')->firstOrFail();
        $breadcrumbs = [
            'Университеты Словакии по направлениям' => route('university-categories')
        ];
        $faq = FAQ::$faq['admission'];
        return view('client.pages.universities.categories', compact('groups', 'cities', 'faq', 'content', 'breadcrumbs', 'directions', 'blog_categories'));
    }
}
