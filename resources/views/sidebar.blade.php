<div class="content-left col-md-4">
    <div class="sidebar">
        <div class="part-title">Thể Loại</div>
        <ul>
            @foreach($allCategories as $category)
                <li><a href="{{ route('category.show', $category->categoryID) }}">{{ $category->categoryName }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
