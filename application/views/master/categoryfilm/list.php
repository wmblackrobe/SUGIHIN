<div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?></h1>
    </div>
</div>

       <div class="ibox-content">
    
       <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example">
             <a href="<?php echo site_url('categoryfilm/form') ; ?>" class="btn btn-primary">Tambah</a>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Film</th>
                    <th>Category Film</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $n=0;
                foreach($categoryfilm->result_array() as $d)
                {
                $n++;?>
                <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $d['judul'];?>-<?php echo $d['tahun'];?></td>
                    <td><?php echo $d['jenis_film'];?></td>
                    <td> <a href="<?php echo site_url('categoryfilm/form/'.$d['id_sub_film']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('categoryfilm/hapus/'.$d['id_sub_film']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>
