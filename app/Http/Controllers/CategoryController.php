<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $view;
    public function __construct()
    {
        $this->view = [];
    }

    public function index(Category $category)
    {
        $this->view['listCate'] = $category->all();
        return view('category.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create', $this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
            ],
            [
                'name.required' => 'Trường tên không được bỏ trống',
                'name.string' => 'Tên bắt buộc là chuỗi',
                'name.max' => 'Trường tên không được vượt quá 255 ký tự',
            ]
        );
        //        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
