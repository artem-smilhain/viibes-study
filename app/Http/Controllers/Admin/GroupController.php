<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use App\Http\Controllers\Controller;
use App\services\GroupService;


class GroupController extends Controller
{
    public $service;

    public function __construct(GroupService $groupService)
    {
        $this->service = $groupService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::orderBy('name_sk')->get();
        return view('admin.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('content_img_src')) {
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $group = Group::create($data);
        return redirect()->route('admin.groups.show', $group);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('admin.groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $data = $request->validated();
        if ($request->has('content_img_src')) {
            if ($group->content_img_src){
                \Storage::disk('public')->delete($group->content_img_src);
            }
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $group->update($data);
        return redirect()->route('admin.groups.show', $group);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        if ($group->content_img_src){
            \Storage::disk('public')->delete($group->content_img_src);
        }
        return redirect()->route('admin.groups.index');
    }
}
