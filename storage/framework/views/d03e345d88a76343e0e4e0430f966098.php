<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Pasien</div>
                    <div class="card-body">
                        <h3>Data pasien</h3>
                        <div class="row mb-3 mt-3">
                            <div class="col-md-6">
                                <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Pasien</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->no_pasien); ?></td>
                                        
                                            <td> <?php echo e($item->nama); ?></td>
                                            <td> <?php echo e($item->jenis_kelamin); ?></td>
                                            <td><?php echo e($item->umur); ?></td>
                                            <td><?php echo e($item->foto); ?></td>
                                            <td><?php echo e($item->alamat); ?></td> 
                                            <td>
                                    
                                            <button type="button" class="btn btn-warning">Edit</button>
                                            <button type="button" class="btn btn-danger">Remove</button>

                        
                                           
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo $pasien->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => 'Data Pasien'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\klinikapp\resources\views/pasien_index.blade.php ENDPATH**/ ?>