

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container">
        <?php if(session('loginError')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(session('loginError')); ?>

            </div>
        <?php endif; ?>
        <div class="login-form">
            <form class="bg-light">
                <h2 style="text-align: center;">Đăng nhập vào PTU</h2>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                </div>


                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Đăng nhập</button>


                <div class="row">
                    <a href="<?php echo e(route('custom.register.form')); ?>" class="col-md-6"> Đăng kí </a>
                    <div class="col-md-6">
                        <a href="<?php echo e(route('custom.forgot.form')); ?>" class="" style="text-align: right !important;"> Quên mật khẩu ?</a>
                    </div>
                </div>
                <a href="" class="btn btn-google btn-user btn-block " style="background: #e74c3c; color: #fff;"><i class="fa-brands fa-google" style="color: #fafafa;"></i>  Google</a>
                <a href="" class="btn btn-google btn-user btn-block " style="background: #3498db; color: #fff;"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i>  Facebook</a>
              </form>
        </div>
      </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PTU_TruyenTranh\resources\views/login.blade.php ENDPATH**/ ?>