<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    //
    public function index(){
        $category = CategoryModel::paginate(10);
        return view('Admin.addCategory',compact('category'))->with('i',(request()->input('page',1)-1)*10);
    }

    public function store(Request $request){
        // CategoryModel::create($request->all());
        // return redirect()->route('category.index')->with('thongbao','Thêm Sách thành công');


        $request->validate([
            'categoryName' => 'required',
        ]);

        $category = new CategoryModel([
            'categoryName' => $request->input('categoryName'),
        ]);

        // CategoryModel::create([
        //     'categoryID' => $request->categoryID,
        //     'categoryName' => $request->categoryName,
        // ]);

        if ($category->save()) {
            return redirect()->route('category.index')->with('success', 'Đã thêm thành công.');
        } else {
            return redirect()->route('category.index')->with('error', 'Có lỗi xảy ra khi thêm thể loại.');
        }
    }



    public function edit(CategoryModel $category)
    {
        //
        return view('Admin.editCategory',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryModel $category)
    {
        //
        $category->update($request->all());
        return redirect()->route('category.index')->with('success','Cập nhật thành công thông tin thể loại');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryModel $category)
    {
        //
        $category->delete();
        return redirect()->route('category.index')->with('success','Xoá thành công sách');
    }
}
