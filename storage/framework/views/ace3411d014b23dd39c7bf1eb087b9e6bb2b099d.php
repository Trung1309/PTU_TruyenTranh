<?php $__env->startSection('content'); ?>
<div class="row">
    <?php echo $__env->make('Admin.navDashboad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-md-10">
        <h1>Thêm truyện tranh tại đây</h1>
        <div class="content-dash">
            <div class="card-body">
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success col-md-6">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('stories.update',$story->storyID)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tên Sách</strong>
                                <input value="<?php echo e($story->storyName); ?>" type="text" name="storyName" class="form-control" placeholder="Nhập tên sách">
                            </div>

                            <div class="form-group">
                                <strong>Tác giả</strong>
                                <input  value="<?php echo e($story->storyAuthor); ?>" type="text" name="storyAuthor" class="form-control" placeholder="Nhập mô tả">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả</strong>
                                <input  value="<?php echo e($story->storyDesc); ?>" type="text" name="storyDesc" class="form-control" placeholder="Nhập tên tác giả">
                            </div>
                            <div class="form-group">
                                <strong>Nội dung</strong>
                                <textarea value=""  class="form-control" name="storyContent" id="" cols="30" rows="10" placeholder="Nhập nội dung"><?php echo e($story->storyContent); ?></textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Thể loại</strong><br>
                                <p>Thể loại hiện tại: <span style="color: red"><?php echo e($story->category->categoryName); ?></span></p>
                                <select name="categoryID" class="form-select" aria-label="Default select example">
                                    <option selected value="<?php echo e($story->categoryID); ?>"><?php echo e($story->category->categoryName); ?></option>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($cat->categoryID); ?>" ><?php echo e($cat->categoryName); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Hình ảnh</strong>
                                <input type="file" name="storyImage"  id="image-input" class="form-control" accept="image/*"  placeholder="tải lên">
                                <div class="image-display" style="display: flex">
                                    <div id="preview-container"  >
                                        <img id="image-preview" class="image-preview" >
                                        <p style="text-align: center">Ảnh mới</p>
                                    </div>

                                    <div  style="width: 200px; height: 300px; display: block; margin: 0px auto" >
                                        <img  style="width: 100%;height: 100%;object-fit: cover" src="<?php echo e(asset('uploads/' . $story->storyImage)); ?>" >
                                        <p style="text-align: center">Ảnh cũ</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Xác nhận</button>
                </form>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/Admin/edit.blade.php ENDPATH**/ ?>