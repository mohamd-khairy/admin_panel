<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        $pages = Page::with('parentPage')->orderBy('parent', 'asc')->orderBy('order', 'asc')->paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request)
    {
        $page = Page::find($request->id);
        $page->update($request->all());
        return redirect(route('admin.get_pages'))->with('message', __('admin.success_edit'));
    }

    public function store(Request $request)
    {
        Page::create($request->all());
        return back()->with('message',__('admin.success_add'));
    }

    public function delete($id)
    {
        $page = Page::find($id);
        $page->delete();
        return back()->with('message', __('admin.success_delete'));
    }
}
