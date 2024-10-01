<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('created_at', 'DESC')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(StorePageRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('content_img_src')) {
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        Page::create($data);
        return redirect()->route('admin.pages.index');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->validated();
        if ($request->has('content_img_src')) {
            if ($page->content_img_src){
                \Storage::disk('public')->delete($page->content_img_src);
            }
            $data['content_img_src'] = $request->file('content_img_src')->store('content/images', 'public');
        }
        $page->update($data);
        return redirect()->route('admin.pages.index');
    }
}
