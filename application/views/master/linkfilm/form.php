<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulform) ? $judulform: 'Tambah Link Film' ;?></h1>
    </div>
</div>

<div class="ibox-content">
           <form action method="post" class="form-horizontal">

           <div class="form-group"><label class="col-sm-2 control-label">Film</label>
                  <div class="col-sm-10" style="width:500px">
                  <select id="id_film" name="id_film"  class="form-control m-b" >
                  <?php 
                  foreach($film->result_array() as $d)
                  {?>


                    <option value="<?php echo $d['id_film'];?>"  
                    <?php 
                   if (isset($satu['id_film']) && $satu['id_film'] == $d['id_film']) {
                    echo "selected";
                    }
                    else
                    {
                        echo "";
                    }
                  ?>><?php echo $d['judul_film'];?> - <?php echo $d['tahun'];?> </option> 
                   <?php }?>

                    </select>
                  </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Nama Link</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_link" name="nama_link" value="<?php echo isset($satu['nama_link']) ? $satu['nama_link']: '' ;?>"> 
                </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Asal Link</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="asal_link" name="asal_link" value="<?php echo isset($satu['asal_link']) ? $satu['asal_link']: '' ;?>"> 
                </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">URL</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="url" name="url" value="<?php echo isset($satu['url']) ? $satu['url']: '' ;?>"> 
                </div>
                </div>
            
                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_link" value="<?php echo isset($satu['id_link']) ? $satu['id_link']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('linkfilm');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
</div>






