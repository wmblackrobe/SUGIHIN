<div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?></h1>
    </div>
</div>

       <div class="ibox-content">
    
       <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example">
             <a href="<?php echo site_url('linkfilm/form') ; ?>" class="btn btn-primary">Tambah</a>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Judul Film</th>
                    <th>Nama Link</th>
                    <th>Asal Link</th>
                    <th>URL</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $n=0;
                foreach($linkfilm->result_array() as $d)
                {
                $n++;?>
                <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $d['judul'];?>-<?php echo $d['tahun'];?></td>
                    <td><?php echo $d['nama_link'];?></td>
                    <td><?php echo $d['asal_link'];?></td>
                    <td><?php echo $d['url'];?></td>
                    <td> <a href="<?php echo site_url('linkfilm/form/'.$d['id_link']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('linkfilm/hapus/'.$d['id_link']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>
