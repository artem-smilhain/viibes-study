<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\services\CityService;
use Illuminate\Support\Facades\Request;

class CityController extends Controller
{
    public $service;
    public function __construct(CityService $cityService)
    {
        $this->service = $cityService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy('row_weight', 'ASC')->get();
        return view('admin.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('name_sk')->get();
        $posts = Post::orderBy('title')->get();
        return view('admin.cities.create', compact('countries', 'posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCityRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('content_img_src')) {
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $city = City::create($data);
        return redirect()->route('admin.cities.show', $city);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('admin.cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $countries = Country::orderBy('name_sk')->get();
        $posts = Post::orderBy('title')->get();
        return view('admin.cities.edit', compact('city', 'countries', 'posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCityRequest  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        $data = $request->validated();
        if ($request->has('content_img_src')) {
            if ($city->content_img_src){
                \Storage::disk('public')->delete($city->content_img_src);
            }
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $city->update($data);
        return redirect()->route('admin.cities.show', $city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        if ($city->content_img_src){
            \Storage::disk('public')->delete($city->content_img_src);
        }
        $this->service->delete($city);
        return redirect()->route('admin.cities.index');
    }
}
