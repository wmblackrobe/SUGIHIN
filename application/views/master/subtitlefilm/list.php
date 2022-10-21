<div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?></h1>
    </div>
</div>

       <div class="ibox-content">
    
       <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example">
             <a href="<?php echo site_url('subtitlefilm/form') ; ?>" class="btn btn-primary">Tambah</a>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Judul Film</th>
                    <th>Bahasa</th>
                    
                    <th>URL</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $n=0;
                foreach($subtitlefilm->result_array() as $d)
                {
                $n++;?>
                <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $d['judul'];?>-<?php echo $d['tahun'];?></td>
                    <td><?php echo $d['bahasa'];?></td>
                    <td><?php echo $d['url'];?></td>
                    <td> <a href="<?php echo site_url('subtitlefilm/form/'.$d['id_subtitle']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('subtitlefilm/hapus/'.$d['id_subtitle']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>
