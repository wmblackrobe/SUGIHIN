<div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?> Utama</h1>
    </div>
</div>

       <div class="ibox-content">

      
       <div class="table-responsive">
       <a href="<?php echo site_url('menu/form') ; ?>" class="btn btn-primary">Tambah</a>
          <table class="table table-striped table-bordered table-hover dataTables-example">
            
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Icon</th>
                    <th>Bercabang</th>
                    <th>Url</th>
                    <th>Urutan</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $n=0;
                foreach($semua->result_array() as $d)
                {
                $n++;?>
                <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $d['menu_parent'];?></td>
                    <td><?php echo $d['icon'];?></td>
                    <td><?php  
                    if($d['flag'] == 'Y') 
                    {echo 'Ya'; } 
                    else
                    {echo 'Tidak';}  
                    ?></td>
                    <td><?php echo $d['url'];?></td>
                    <td><?php echo $d['urutan'];?></td>
                    <td> <a href="<?php echo site_url('menu/form/'.$d['id_menu_parent']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('menu/hapus/'.$d['id_menu_parent']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>





        <div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?> Bercabang</h1>
    </div>
</div>

       <div class="ibox-content">

       <?php echo isset($alert) ? $alert : '' ; ?>
       <div class="table-responsive">
       <a href="<?php echo site_url('menu/formChild') ; ?>" class="btn btn-primary">Tambah Cabang</a>
          <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Menu Utama</th>
                    <th>Icon</th>
                    <th>Url</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=0;
                foreach($menu_child->result_array() as $p)
                {
                $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $p['menu_child'];?></td>
                    <td><?php echo $p['mp'];?></td>
                    <td><?php echo $p['icon'];?></td>
                    <td><?php echo $p['url'];?></td>
                    <td> <a href="<?php echo site_url('menu/formChild/'.$p['id_menu_child']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('menu/hapusChild/'.$p['id_menu_child']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>
