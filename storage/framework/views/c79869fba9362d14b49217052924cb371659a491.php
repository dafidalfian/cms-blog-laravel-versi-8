
<?php $__env->startSection('title','SuperAkun'); ?>
<?php $__env->startSection('isi'); ?>
<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
			<a href="<?php echo e(url('dashboard/my/akun/tambah_akun')); ?>" class="btn btn-primary mb-3">Tambah SuperUser</a>
			<?php if(session('status')): ?>
				<div class="alert alert-success">
					<?php echo e(session('status')); ?>

				</div>
			<?php endif; ?>

			<h4>Perhatian !</h4>
			<ul type="disc">
				<li>Pastikan login dengan akun anda sendiri.</li>
				<li>Anda tidak bisa menghapus akun yang lain,</li>
				<li>Karena saat anda login dengan akun anda otomatis akun yang lain terkunci.</li>
			</ul>
				<div class="table table-responsive">
					<table class="table table-bordered">
						<thead class="table-primary">
							<tr>
								<th>ID No</th>
								<th>Foto</th>
								<th>Status</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Email</th>
								<th>Type Akun</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $datasuperuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($loop->iteration); ?></td>
								<td>
									<img src="<?php echo e(asset('storage/'.$indata->foto_pengguna)); ?>" style="width: 100px; height: 100px;" class="card-img-top bg-secondary m-1">
								</td>
								<td>
									<?php if($indata->email_verified_at == true): ?>
									<span class="badge badge-success"><i class="fas fa-check"></i> Verify</span>
									<?php else: ?>
									<span class="badge badge-danger"><i class="fas fa-times"></i> Not Verify</span>
									<?php endif; ?>
								</td>
								<td><?php echo e($indata->nama); ?></td>
								<td><?php echo e($indata->username); ?></td>
								<td><?php echo e($indata->email); ?></td>
								<td>
									<span class="badge badge-success"><?php echo e($indata->tipe_akun); ?></span>
								</td>
								<td>
									<?php if(auth()->check() && auth()->user()->id == $indata->id): ?>
										<form method="post" action="<?php echo e(url('dashboard/my/akun/'.$indata->id)); ?>">
											<?php echo csrf_field(); ?>
											<?php echo method_field('delete'); ?>
											<a href="<?php echo e(url('dashboard/my/akun/'.$indata->id)); ?>/edit" class="btn btn-primary btn-sm">edit</a>
											<button type="submit" class="btn btn-danger btn-sm">hapus</button>
										</form>
									<?php else: ?>
										<h1 class="text-center"><i class="fa fa-user-lock fa-lg" style="color: #e2a808;"></i></h1>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>						
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('file_css'); ?>
<style type="text/css">
	.card-img-top {
  border: 3px solid #007bff;
}

</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cms-blog-laravel-versi-8\resources\views/dashboard/akun/index.blade.php ENDPATH**/ ?>