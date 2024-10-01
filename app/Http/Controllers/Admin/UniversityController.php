<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUniversityPictureRequest;
use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityPictureRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\City;
use App\Models\Group;
use App\Models\University;
use App\Http\Controllers\Controller;
use App\Models\UniversityPicture;
use App\services\UniversityService;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public $service;

    public function __construct(UniversityService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = University::orderBy('row_weight', 'ASC')->get();
        return view('admin.universities.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::orderBy('name_sk')->get();
        $groups = Group::orderBy('name')->get();
        return view('admin.universities.create', compact('cities', 'groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUniversityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUniversityRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo_src')) {
            $data['logo_src'] = $request->file('logo_src')->store('universities/logos', 'public');
        } else {
            $data['logo_src'] = '';
        }
        if ($request->hasFile('thumbnail_src')) {
            $data['thumbnail_src'] = $request->file('thumbnail_src')->store('universities/thumbnails', 'public');
        } else {
            $data['thumbnail_src'] = '';
        }
        if ($request->hasFile('content_img_src')) {
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $university = University::create($data);
        $groups_ids = array_keys($request->input('group') ?? []);
        $university->groups()->attach($groups_ids);
        return redirect()->route('admin.universities.show', $university);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show(University $university)
    {
        return view('admin.universities.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit(University $university)
    {
        $cities = City::orderBy('name_sk')->get();
        $groups = Group::orderBy('name')->get();
        $university_groups = $university->groups->modelKeys();
        return view('admin.universities.edit', compact('university', 'cities', 'groups', 'university_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUniversityRequest  $request
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUniversityRequest $request, University $university)
    {
        $data = $request->validated();
        if ($request->has('content_img_src')) {
            if ($university->content_img_src){
                \Storage::disk('public')->delete($university->content_img_src);
            }
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $this->service->updateFiles($request, $university, $data);
        $university->update($data);
        $this->service->updatePictures($request, $university);
        $groups_ids = array_keys($request->input('group') ?? []);
        $university->groups()->sync($groups_ids);
        return redirect()->route('admin.universities.show', $university);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy(University $university)
    {
        if ($university->content_img_src){
            \Storage::disk('public')->delete($university->content_img_src);
        }
        $this->service->delete($university);
        return redirect()->route('admin.universities.index');
    }
    public function pictures(University $university)
    {
        $pictures = $university->pictures;
        return view('admin.universities.pictures.index', compact('university', 'pictures'));
    }

    public function deletePicture(Request $request, University $university)
    {
        if ($request->has('filename')) {
            $picture = University\Picture::where('image_src', $request->input('filename'))->where('university_id', $university->id)->first();
            if ($picture) {
                $picture->delete();
                \Storage::disk('public')->delete($picture->image_src);
            }
        }
    }
}
