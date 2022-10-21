<div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?></h1>
    </div>
</div>

       <div class="ibox-content">
    
       <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example">
             <a href="<?php echo site_url('negara/form') ; ?>" class="btn btn-primary">Tambah</a>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Negara</th>
                    <th>Bendera</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $n=0;
                foreach($negara->result_array() as $d)
                {
                $n++;?>
                <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $d['nama_negara'];?></td>
                    <td>
                    <img alt="image" class="img" style="width: 100px; height: 100px;" src="<?php echo base_url(); ?>upload/bendera/<?php echo $d['logo_bendera'];?>" />    
                    </td>
                    <td> <a href="<?php echo site_url('negara/form/'.$d['id_negara']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('negara/hapus/'.$d['id_negara']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>
