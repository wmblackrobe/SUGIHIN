<div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?></h1>
    </div>
</div>

       <div class="ibox-content">
    
       <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example">
             <a href="<?php echo site_url('film/form') ; ?>" class="btn btn-primary">Tambah</a>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Judul Film</th>
                    <th>Director</th>
                    <th>Pemeran</th>
                    <th>Tahun</th>
                    <th>Negara</th>
                    <th>Deskripsi</th>
                    <th>Poster</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $n=0;
                foreach($film->result_array() as $d)
                {
                $n++;?>
                <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $d['judul_film'];?></td>
                    <td><?php echo $d['director'];?></td>
                    <td><?php echo $d['pemeran'];?></td>
                    <td><?php echo $d['tahun'];?></td>
                    <td><?php echo $d['nn'];?></td>
                    <td><?php echo $d['deskripsi'];?></td>
                    <td>  <img alt="image" class="img" style="width: 100px; height: 100px;" src="<?php echo base_url(); ?>upload/poster/<?php echo $d['poster'];?>" />    </td>
                    <td> <a href="<?php echo site_url('film/form/'.$d['id_film']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('film/hapus/'.$d['id_film']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>
