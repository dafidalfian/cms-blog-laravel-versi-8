
<?php $__env->startSection('title','Data User'); ?>
<?php $__env->startSection('isi'); ?>
<div class="row">
	<div class="col">
		<div class="card shadow">
			<div class="card-body">
			<a href="<?php echo e(url('dashboard/user/create')); ?>" class="btn btn-primary mb-3">Tambah User</a>

			<!-- Jika berhasil -->
			<?php if(session('success')): ?>
				<div class="alert alert-success">
					<?php echo e(session('success')); ?>

				</div>
			<?php endif; ?>
			<!-- Jika di hapus -->
			<?php if(session('hapus')): ?>
				<div class="alert alert-success">
					<?php echo e(session('hapus')); ?>

				</div>
			<?php endif; ?>
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
							<?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($hasil->id); ?></td>
									<td>
										<img src="<?php echo e(asset('storage/'.$hasil->foto_pengguna)); ?>" class="card-img-top bg-secondary m-1" style="width: 100px; height: 100px;">
									</td>
									<td>
										<?php if($hasil->email_verified_at == true): ?>
											<span class="badge badge-success"><i class="fas fa-check"></i> Verifikasi</span>
										<?php else: ?>
											<span class="badge badge-danger"><i class="fas fa-times"></i> Belum Verifikasi</span>
										<?php endif; ?>
									</td>
									<td><?php echo e($hasil->nama); ?></td>
									<td><?php echo e($hasil->username); ?></td>
									<td><?php echo e($hasil->email); ?></td>
									<td>
										<?php if($hasil->tipe_akun =='superuser'): ?>
											<span class="badge badge-success">SuperUser</span>
										<?php elseif($hasil->tipe_akun =='admin'): ?>
											<span class="badge badge-warning">Admin</span>
										<?php else: ?>
											<span class="badge badge-secondary">Karyawan</span>
										<?php endif; ?>
									</td>
									<td>
									<form method="post" action="<?php echo e(url('dashboard/user/'.$hasil->id)); ?>">
										<?php echo csrf_field(); ?>
										<?php echo method_field('delete'); ?>
										<a href="/dashboard/user/<?php echo e($hasil->id); ?>/edit" class="btn btn-primary">edit</a>
										<button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger">hapus</button>
									</form>
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
<?php echo $__env->make('backend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cms-blog-laravel-versi-8\resources\views/dashboard/user/index.blade.php ENDPATH**/ ?>