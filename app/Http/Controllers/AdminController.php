<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoryModel;
use App\Models\CategoryModel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $story = StoryModel::paginate(10);
        return view('Admin.dashboard',compact('story'))->with('i',(request()->input('page',1)-1)*10);
    }


    public function showFormAddBook()
    {
        //
        $category = CategoryModel::paginate(10);
        return view('Admin.add',compact('category'));
    }

    public function storeBook(Request $request)
    {
        $request->validate([
            'storyName' => 'required',
            'storyContent' => 'required',
            'storyAuthor' => 'required',
            'storyDesc' => 'required',
            'categoryID' => 'required|exists:category_models,categoryID',
            'storyImage' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        // Xử lý upload ảnh
        if ($request->hasFile('storyImage')) {
            $image = $request->file('storyImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
        }

        $story = new StoryModel([
            'storyName' => $request->input('storyName'),
            'storyContent' => $request->input('storyContent'),
            'storyAuthor' => $request->input('storyAuthor'),
            'storyDesc' => $request->input('storyDesc'),
            'storyImage' => isset($imageName) ? $imageName : null,
            'categoryID' => $request->input('categoryID'),
        ]);

        $story->save();

        return redirect()->route('admin.book.add')->with('success', 'Đã thêm thành công.');
    }



    public function showFormEditBook()
    {
        //
        return view('Admin.edit');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteBook(StoryModel $story)
    {
        //
        $story->delete();
        return redirect()->route('admin.dashboad.index')->with('success','Xoá thành công sách');

        
    }


}
