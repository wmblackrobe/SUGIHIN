<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulform) ? $judulform: 'Tambah Category Film' ;?></h1>
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

                <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-10" style="width:500px">
                  <select id="id_jenis" name="id_jenis"  class="form-control m-b" >
                  <?php 
                  foreach($jenisfilm->result_array() as $j)
                  {?>


                    <option value="<?php echo $j['id_jenis'];?>"  
                    <?php 
                   if (isset($satu['id_jenis']) && $satu['id_jenis'] == $j['id_jenis']) {
                    echo "selected";
                    }
                    else
                    {
                        echo "";
                    }
                  ?>><?php echo $j['jenis_film'];?> </option> 
                   <?php }?>

                    </select>
                  </div>
                </div>
            
                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_sub_film" value="<?php echo isset($satu['id_sub_film']) ? $satu['id_sub_film']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('categoryfilm');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
</div>






