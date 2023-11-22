<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoryModel;
use App\Models\CategoryModel;

class StoryController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = CategoryModel::paginate();
        return view('Admin.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        return redirect()->route('stories.create')->with('success', 'Đã thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(StoryModel $story)
    {
        //
        $category = CategoryModel::all();
        return view('Admin.edit',compact('story','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoryModel $story)
    {
        $request->validate([
            'storyName' => 'required',
            'storyContent' => 'required',
            'storyAuthor' => 'required',
            'storyDesc' => 'required',
            'categoryID' => 'required|exists:category_models,categoryID',
            'storyImage' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('storyImage')) {
            $image = $request->file('storyImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            // Xóa ảnh cũ nếu tồn tại
            if ($story->storyImage) {
                unlink(public_path('uploads/' . $story->storyImage));
            }

            $story->update([
                'storyName' => $request->input('storyName'),
                'storyContent' => $request->input('storyContent'),
                'storyAuthor' => $request->input('storyAuthor'),
                'storyDesc' => $request->input('storyDesc'),
                'categoryID' => $request->input('categoryID'),
                'storyImage' => $imageName, // Cập nhật tên mới của ảnh
            ]);
        } else {
            // Nếu không có file ảnh mới, chỉ cập nhật các trường khác
            $story->update($request->except('storyImage'));
        }

        return redirect()->route('stories.index')->with('success', 'Cập nhật thành công thông tin thể loại');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoryModel $story)
    {
        // Xóa ảnh nếu tồn tại
        if ($story->storyImage) {
            unlink(public_path('uploads/' .$story->storyImage));
        }
        $story->delete();
        return redirect()->route('stories.index')->with('success', 'Đã xóa thành công.');
    }
}
