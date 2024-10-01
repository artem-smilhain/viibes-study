<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreDirectionRequest;
use App\Http\Requests\UpdateDirectionRequest;
use App\Models\Direction;
use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\University;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directions = Direction::orderBy('row_weight', 'ASC')->get();
        $universities = University::all();
        return view('admin.directions.index', compact('directions', 'universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.directions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDirectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirectionRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('content_img_src')) {
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $direction = Direction::create($data);
        return redirect()->route('admin.directions.show', $direction);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function show(Direction $direction)
    {
        return view('admin.directions.show', compact('direction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function edit(Direction $direction)
    {
        return view('admin.directions.edit', compact('direction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDirectionRequest  $request
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirectionRequest $request, Direction $direction)
    {
        $data = $request->validated();
        if ($request->has('content_img_src')) {
            if ($direction->content_img_src){
                \Storage::disk('public')->delete($direction->content_img_src);
            }
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $direction->update($data);
        return redirect()->route('admin.directions.show', $direction);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direction $direction)
    {
        if ($direction->content_img_src){
            \Storage::disk('public')->delete($direction->content_img_src);
        }
        $direction->delete();
        return redirect()->route('admin.directions.index');
    }

    public function searchByUniversity(Request $request)
    {
        if (empty($request['university'])){
            return redirect(route('admin.directions.index'));
        }
        $university = University::where('id', $request['university'])->firstOrFail();
        $directions = [];
        foreach ($university->faculties as $faculty){
            foreach ($faculty->programs as $program){
                if (!in_array($program->direction, $directions)){
                    array_push($directions, $program->direction);
                }
                if (!empty($program->direction_2)){
                    if (!in_array($program->direction_2, $directions)){
                        array_push($directions, $program->direction_2);
                    }
                }
            }
        }
        $universities = University::all();
        return view('admin.directions.index', compact('directions', 'university', 'universities'));
    }
}
