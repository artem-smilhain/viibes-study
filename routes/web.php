<?php

use App\Http\Controllers\Admin\AcademicDegreeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DirectionController;
use App\Http\Controllers\Admin\FacultyController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HomeworkController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostPhotosController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\ProgramsInfosController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Admin\RelativeController;
use \App\Http\Controllers\Admin\StatusController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\User\PaymentController;
use App\Http\Controllers\Admin\User\SpecialityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function() {



    /*Route::get('/set-cookie', function () { //тест для получения параметров FB из cookie
        $cookie = Cookie::make('_fbc', 'fb.1.1698454903898.IwAR09ugvu_t8NLyuAAmvE-a_a_-DreUOYI_4w0DJLvAh4Syiujuu3WUA8VuY', 30);
        $cookie_2 = Cookie::make('_fbp', 'fb.1.1698454903898.1965226991', 30);
        return response('Cookie Set')->cookie($cookie)->cookie($cookie_2);
    });*/

    //домашняя страница HomeController
    Route::get('/', [App\Http\Controllers\Client\HomeController::class, 'index'])->name('home');
    Route::get('/belarus', [App\Http\Controllers\Client\HomeController::class, 'belarus'])->name('belarus');
    Route::get('/ukraine', [App\Http\Controllers\Client\HomeController::class, 'ukraine'])->name('ukraine');


    //услуги и стоимость ServiceController
    Route::get('/uslugi-i-stoimost', [App\Http\Controllers\Client\ServiceController::class, 'index'])->name('services');
    Route::get('/uslugi-i-stoimost/standard', [App\Http\Controllers\Client\ServiceController::class, 'standard'])->name('services.standard');
    Route::get('/uslugi-i-stoimost/comfort', [App\Http\Controllers\Client\ServiceController::class, 'comfort'])->name('services.comfort');
    //университеты UniversityController
    Route::get('/universitety-slovakii', [App\Http\Controllers\Client\UniversityController::class, 'index'])->name('universities');
    Route::get('/universitety-slovakii/{city_slug}', [App\Http\Controllers\Client\UniversityController::class, 'indexByCity'])->name('universities.index-by-city');
    Route::get('/universitety-slovakii/{city_slug}/{slug}', [App\Http\Controllers\Client\UniversityController::class, 'show'])->name('universities.show');
    Route::get('/universitety-slovakii/{city_slug}/{slug}/{faculty_slug}', [App\Http\Controllers\Client\UniversityController::class, 'faculty'])->name('universities.faculty');
    Route::get('/universitety-slovakii/{city_slug}/{slug}/{faculty_slug}/{degree_slug}', [App\Http\Controllers\Client\UniversityController::class, 'degree'])->name('universities.degree');
    Route::get('/universitety-slovakii/{city_slug}/{slug}/{faculty_slug}/{degree_slug}/{speciality_slug}', [App\Http\Controllers\Client\UniversityController::class, 'speciality'])->name('universities.speciality');
    Route::get('/kategorii-universitetov-slovakii', [App\Http\Controllers\Client\UniversityController::class, 'categories'])->name('university-categories');
    Route::get('/kategorii-universitetov-slovakii/{slug}', [App\Http\Controllers\Client\UniversityController::class, 'indexByCategory'])->name('universities.index-by-category');
    //специальности ProgramController
    Route::get('/specialnosti-i-napravlenia', [App\Http\Controllers\Client\ProgramController::class, 'index'])->name('specialities');
    Route::get('/specialnosti-i-napravlenia/{slug}', [App\Http\Controllers\Client\ProgramController::class, 'show'])->name('specialities.show');
    //курсы
    Route::get('/kursy-slovackogo-yazyka', [App\Http\Controllers\Client\CourseController::class, 'index'])->name('courses');
    //контакты
    Route::get('/kontakty', [App\Http\Controllers\Client\ContactController::class, 'index'])->name('contacts');
    //thank-you-page
    Route::get('/thank-you', function () { return view('client.pages.thank-you.lead'); })->name('thank-you');
    //сохранить заявку
    Route::post('/lead/store', [App\Http\Controllers\Client\LeadController::class, 'store'])->name('lead.store');
    //reviews
    Route::get('/otzyvy-o-postuplenii-v-slovakiyu', [App\Http\Controllers\Client\ReviewController::class, 'index'])->name('reviews');
    //webinar
    Route::get('/webinar', [App\Http\Controllers\Client\WebinarController::class, 'index'])->name('webinar');
    //Route::get('/webinar', function () { return view('client.webinar'); })->name('webinar');
    //thank-you-page webinar
    Route::get('/thank-you-for-registration', function () { return view('client.pages.thank-you.webinar'); })->name('thank-you-webinar');
    //HTML map
    Route::get('/karta-sajta', [\App\Http\Controllers\Map\HtmlMapController::class, 'index'])->name('html-map');
    //Sitemap xml
    Route::get('/sitemap.xml', [\App\Http\Controllers\Map\SiteMapController::class, 'index'])->name('xml-map');
    //faq page
    Route::get('/faq', [App\Http\Controllers\Client\FaqController::class, 'index'])->name('faq');
    // інформація по спеціальностям для клієнтів
    Route::get('/programs/{program_slug}', [App\Http\Controllers\Client\ProgramsInfosController::class, 'show'])->name('programs-infos.show');

    Route::get('/blog', [App\Http\Controllers\Client\PostController::class, 'index'])->name('blog');
    Route::get('/blog/{category_slug}', [App\Http\Controllers\Client\PostController::class, 'indexByCategory'])->name('blog.index-by-category');
    Route::get('/blog/{category_slug}/{slug}', [App\Http\Controllers\Client\PostController::class, 'show'])->name('blog.show');


    //auth
    Auth::routes([
        'register' => false,    // Registration Routes...
        'reset' => false,       // Password Reset Routes...
        'verify' => false,      // Email Verification Routes...
    ]);

    Route::group(['prefix' => 'my', 'as' => 'client.', 'middleware' => ['auth', 'role:enrollee'],],
        function () {
            Route::get('/', function () {
                return view('applicant.pages.index');
            })->name('index');
            Route::get('/programs', function () {
                return view('applicant.pages.programs');
            })->name('programs');
            Route::get('/services', function () {
                return view('applicant.pages.services');
            })->name('services');
            Route::get('/documents', function () {
                return view('applicant.pages.documents');
            })->name('documents');
            Route::get('/documents/add', function () {
                return view('applicant.pages.add-document');
            })->name('add-document');
            Route::get('/data', function () {
                return view('applicant.pages.data');
            })->name('data');
            Route::get('/data/applicant', function () {
                return view('applicant.pages.data-applicant');
            })->name('data-applicant');
            Route::get('/data/parent', function () {
                return view('applicant.pages.data-parent');
            })->name('data-parent');
        }
    );

    Route::group(['prefix' => 'enrollee', 'as' => 'enrollee.', 'middleware' => ['auth', 'role:enrollee'],],
        function () {
            Route::get('/', [App\Http\Controllers\EnrolleeController::class, 'index'])->name('index');
            Route::get('/programs', [App\Http\Controllers\EnrolleeController::class, 'programs'])->name('programs');
            Route::get('/services', [App\Http\Controllers\EnrolleeController::class, 'services'])->name('services');
            Route::get('/documents', [App\Http\Controllers\EnrolleeController::class, 'documents'])->name('documents');
            Route::get('/documents/add', function () {
                return view('applicant.pages.add-document');
            })->name('add-document');
            Route::get('/data', [App\Http\Controllers\EnrolleeController::class, 'data'])->name('data');
            Route::get('/data/applicant', [App\Http\Controllers\EnrolleeController::class, 'dataApplicant'])->name('data-applicant');
            Route::patch('/data/applicant', [\App\Http\Controllers\EnrolleeController::class, 'updateDataApplicant'])->name('update.data-applicant');
            Route::get('/data/parent', [App\Http\Controllers\EnrolleeController::class, 'dataParent'])->name('data-parent');
            Route::patch('/data/parent', [\App\Http\Controllers\EnrolleeController::class, 'updateDataParent'])->name('update.data-parent');
        }
    );


    //admin
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin'],],
        function () {
            Route::get('index', function () { return view('admin.index'); })->name('index');
            Route::resource('clients', ClientController::class);
            Route::resource('users', UserController::class);
            Route::get('users/{user}/services/create', [\App\Http\Controllers\Admin\User\ServiceController::class, 'create'])->name('users.services.create');
            Route::post('users/{user}/services', [\App\Http\Controllers\Admin\User\ServiceController::class, 'store'])->name('users.services.store');
            Route::delete('users/{user}/services/{service}/destroy', [\App\Http\Controllers\Admin\User\ServiceController::class, 'destroy'])->name('users.services.destroy');
            Route::get('users/{user}/payments', [PaymentController::class, 'index'])->name('users.payments');
            Route::get('users/{user}/payments/{service}/create', [PaymentController::class, 'create'])->name('users.payments.create');
            Route::post('users/{user}/payments', [PaymentController::class, 'store'])->name('users.payments.store');
            Route::get('users/{user}/payments/{payment}/edit', [PaymentController::class, 'edit'])->name('users.payments.edit');
            Route::patch('users/{user}/payments/{payment}/edit', [PaymentController::class, 'update'])->name('users.payments.update');
            Route::delete('users/{user}/payments/{payment}/destroy', [PaymentController::class, 'destroy'])->name('users.payments.destroy');
            Route::get('users/{user}/specialities', [SpecialityController::class, 'index'])->name('users.specialities');
            Route::get('users/{user}/specialities/create', [SpecialityController::class, 'create'])->name('users.specialities.create');
            Route::post('users/{user}/specialities', [SpecialityController::class, 'store'])->name('users.specialities.store');
//            Route::get('users/{user}/specialities/{speciality}/edit', [SpecialityController::class, 'edit'])->name('users.specialities.edit');
//            Route::patch('users/{user}/specialities/{speciality}/edit', [SpecialityController::class, 'update'])->name('users.specialities.update');
            Route::delete('users/{user}/specialities/{program}/destroy', [SpecialityController::class, 'destroy'])->name('users.specialities.destroy');
            Route::post('users/{user}/specialities/{program}/statuses', [SpecialityController::class, 'storeStatus'])->name('users.specialities.statuses.store');
            Route::delete('users/{user}/specialities/{program}/statuses/{status}/destroy', [SpecialityController::class, 'destroyProgramStatus'])->name('users.specialities.statuses.destroy');
            Route::get('users/{user}/documents', [UserController::class, 'index'])->name('users.documents');
            Route::post('users/{user}/documents', [UserController::class, 'store'])->name('users.documents.store');
            Route::get('users/{user}/documents/{document}/edit', [UserController::class, 'edit'])->name('users.documents.edit');
            Route::patch('users/{user}/documents/{document}/edit', [UserController::class, 'update'])->name('users.documents.update');
            Route::delete('users/{user}/documents/{document}/destroy', [UserController::class, 'destroy'])->name('users.documents.destroy');
            Route::get('users/{user}/messages', [UserController::class, 'index'])->name('users.messages');
            Route::post('users/{user}/messages', [UserController::class, 'store'])->name('users.messages.store');
            Route::get('users/{user}/messages/{message}/edit', [UserController::class, 'edit'])->name('users.messages.edit');
            Route::patch('users/{user}/messages/{message}/edit', [UserController::class, 'update'])->name('users.messages.update');
            Route::delete('users/{user}/messages/{message}/destroy', [UserController::class, 'destroy'])->name('users.messages.destroy');
            Route::resource('countries', CountryController::class);
            Route::resource('cities', CityController::class);
            Route::resource('courses', CourseController::class);
            Route::resource('universities', UniversityController::class);
            Route::resource('faculties', FacultyController::class);
            Route::resource('groups', GroupController::class);
            Route::resource('programs', ProgramController::class);
            Route::resource('services', ServiceController::class);
            Route::resource('lessons', LessonController::class);
            Route::resource('homeworks', HomeworkController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('posts', PostController::class);
            Route::resource('reviews', ReviewController::class);
            Route::resource('academic-degrees', AcademicDegreeController::class);
            Route::resource('directions', DirectionController::class);
            Route::get('/directions/search/by-university', [DirectionController::class, 'searchByUniversity'])->name('direction.search-by-university');
            Route::resource('leads', LeadController::class);
            Route::resource('settings', SettingController::class);
            Route::post('university/{university}/pictures', [UniversityController::class, 'storePictures'])->name('university.pictures.store');
            Route::post('university/{university}/pictures/delete', [UniversityController::class, 'deletePicture'])->name('university.pictures.delete');
            Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
            Route::post('/tmp-upload', [UploadController::class, 'tmpUpload'])->name('tmp-upload');
            Route::post('/diploma/delete', [UploadController::class, 'diplomaDelete'])->name('diploma-delete');
            Route::resource('program-info', ProgramsInfosController::class, [
                'only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']
            ]);
            Route::resource('post-photos', PostPhotosController::class, [
                'only' => ['index', 'store', 'destroy']
            ]);
            Route::resource('pages', PageController::class, [
                'only' => ['index', 'create', 'store', 'edit', 'update']
            ]);
            Route::get('/programs/direction/{direction}', [ProgramController::class, 'indexByDirection'])->name('programs.index-by-direction');
            Route::get('/programs/search/by-term', [ProgramController::class, 'searchByTerm'])->name('programs.search-by-term');
            Route::get('/programs/search/by-description', [ProgramController::class, 'searchByDescription'])->name('programs.search-by-description');
            Route::get('/programs/autocomplete/by-name', [ProgramController::class, 'autocompleteByName'])->name('programs.autocomplete-by-name');

            Route::get('/program-info/index-by-university', [ProgramsInfosController::class, 'indexByUniversity'])->name('programs.index-by-university');
            Route::resource('relatives', RelativeController::class);
            Route::resource('statuses', StatusController::class);
            /*Route::group(['prefix' => 'post-photos'], function () {
                Route::get('/', [App\Http\Controllers\Admin\PostPhotosController::class, 'index'])->name('post-photos.index');
                Route::post('/store', [App\Http\Controllers\Admin\PostPhotosController::class, 'store'])->name('post-photos.store');
                Route::delete('/destroy/{image}', [App\Http\Controllers\Admin\PostPhotosController::class, 'destroy'])->name('post-photos.destroy');
            });*/
            //информация по специальностям для клиентов
            /*Route::group(['prefix' => 'programs-infos'], function () {
                Route::get('/', [App\Http\Controllers\Admin\ProgramsInfosController::class, 'index'])->name('programs-infos.index');
                Route::get('/create', [App\Http\Controllers\Admin\ProgramsInfosController::class, 'create'])->name('programs-infos.create');
                Route::post('/store', [App\Http\Controllers\Admin\ProgramsInfosController::class, 'store'])->name('programs-infos.store');
                Route::get('/edit/{program_info}', [App\Http\Controllers\Admin\ProgramsInfosController::class, 'edit'])->name('programs-infos.edit');
                Route::patch('/update/{program-info}', [App\Http\Controllers\Admin\ProgramsInfosController::class, 'update'])->name('programs-infos.update');
                Route::delete('/destroy/{program_info}', [App\Http\Controllers\Admin\ProgramsInfosController::class, 'destroy'])->name('programs-infos.destroy');
            });*/

            /*Route::resource('programs-infos', 'ProgramsInfosController')->names([
                'index' => 'programs-infos.index',
                'create' => 'programs-infos.create',
                'store' => 'programs-infos.store',
                'edit' => 'programs-infos.edit',
                'update' => 'programs-infos.update',
                'destroy' => 'programs-infos.destroy',
            ]);*/
        }
    );

});
