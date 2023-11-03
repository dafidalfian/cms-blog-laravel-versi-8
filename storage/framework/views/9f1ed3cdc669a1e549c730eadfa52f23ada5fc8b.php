
<?php $__env->startSection('title','- Postingan'); ?>
<?php $__env->startSection('isi'); ?>

<div class="row">
	<div class="col-12">
		<div class="card shadow card-primary">
			<div class="card-header d-flex justify-content-between align-items-center">
			    <div class="card-body">
			    	<a href="<?php echo e(url('dashboard/postingan/create')); ?>" class="btn btn-primary mb-2">Tambah</a>
			    	<a href="<?php echo e(url('dashboard/postingan/aksi/cetak_pdf')); ?>" target="_blank" class="btn btn-danger mb-2">Export PDF</a>
			    </div>
			    <form class="form-inline mb-2">
			      <input class="form-control" type="search" placeholder="Cari data">
			    </form>
			 </div>
			 <?php if(session('status')): ?>
					<div class="alert alert-success">
						<?php echo e(session('status')); ?>

					</div>
				<?php endif; ?>
				<?php if(session('hapus')): ?>
					<div class="alert alert-danger">
						Postingan : "<?php echo e(session('hapus')); ?>" berhasil di hapus.!! cek <a href="<?php echo e(url('dashboard/postingan/trash')); ?>"><b><u>Trash</u></b></a>
					</div>
				<?php endif; ?>
			<div class="card-body p-0" id="top-5-scroll" style="height: 50rem;">
				<div class="table table-responsive">
					<table class="table table-bordered table-hover">
						<thead bgcolor="lime">
							<tr>
								<th>#</th>
								<th>Judul</th>
								<th>Kategori</th>
								<th>Tag</th>
								<th>Author</th>
								<th>Thumbnail</th>
								<th style="text-align: center">Pilihan</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1 ?>
							<?php $__currentLoopData = $datapost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postingan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($i++); ?></td>
									<td><?php echo e($postingan->judul); ?></td>
									<td>
										<?php if($postingan->category): ?>
											<p><?php echo e($postingan->category->nama_kategori); ?></p>
										<?php elseif($postingan->category_id === null): ?>
											<p>Kategori tidak ada</p>
										<?php else: ?>
											<p>Kategori sudah dihapus</p>
										<?php endif; ?>
									</td>
									<td>
										<?php $__currentLoopData = $postingan->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<a href=""><span class="badge badge-success badge-xs mb-2"># <?php echo e($tag->nama_tag); ?></span></a>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</td>
									<td><a href="<?php echo e(url('dashboard/postingan/'.$postingan->users->nama)); ?>"><?php echo e(ucwords($postingan->users->nama)); ?></a></td>
									<td>
										<?php if($postingan->foto_postingan): ?>
											<center><img src="<?php echo e(asset('storage/'.$postingan->foto_postingan)); ?>" style="border:3px solid blue; border-radius: 10px; width:100px; height: 100px" class="mb-2 mt-2"></center>
										<?php else: ?> 
											<img src="<?php echo e(asset('storage/postingan_foto/not-thumb/
											no-photo.png')); ?>" style="border:3px solid blue; border-radius: 80%; width:100px; margin-left: auto; margin-right: auto; display: block;" class="mb-2 mt-2">
										<?php endif; ?>
									</td>
									<td>
										<form method="post" action="<?php echo e(url('dashboard/postingan/'.$postingan->id)); ?>">
											<?php echo csrf_field(); ?>
											<?php echo method_field('delete'); ?>
											<a href="<?php echo e(url('dashboard/postingan/edit/'.$postingan->id)); ?>" class="btn btn-warning btn-sm mb-1"><i class="fas fa-pen"></i></a>
											<button type="submit" onclick="return confirm('Apakah anda yakin menghapus?') " class="btn btn-danger btn-sm mb-1"><i class="fas fa-trash"></i></button>
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
<?php echo $__env->make('backend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cms-blog-laravel-versi-8\resources\views/dashboard/postingan/index.blade.php ENDPATH**/ ?>