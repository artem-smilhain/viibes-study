<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreHomeworkRequest;
use App\Http\Requests\UpdateHomeworkRequest;
use App\Models\Homework;
use App\Http\Controllers\Controller;
use App\Models\Lesson;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Homework::orderBy('date_created_at')->paginate(20);
        return view('admin.homeworks.index', compact('homeworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lessons = Lesson::orderBy('name')->get();
        return view('admin.homeworks.create', compact( 'lessons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeworkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeworkRequest $request)
    {
        $data = $request->validated();
        $homework = Homework::create($data);
        return redirect()->route('admin.homeworks.show', $homework);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $homework)
    {
        return view('admin.homeworks.show', compact('homework'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        $lessons = Lesson::orderBy('name')->get();
        return view('admin.homeworks.edit', compact('homework', 'lessons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeworkRequest  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeworkRequest $request, Homework $homework)
    {
        $data = $request->validated();
        $homework->update($data);
        return redirect()->route('admin.homeworks.show', $homework);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
        $homework->delete();
        return redirect()->route('admin.homeworks.index');
    }
}
