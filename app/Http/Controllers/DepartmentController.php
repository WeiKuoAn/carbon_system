<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //

    public function index()
    {
        // dd(123);
        return view('departments.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 驗證輸入資料
        $validated = $request->validate([
            'name' => 'required|string|max:50',

        ]);

        // 儲存資料
        $department = Department::create($validated);

        // 重定向到客戶列表頁面或其他適當位置
        return redirect()->route('departments.index')->with('success', '成功新增');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }    
}
