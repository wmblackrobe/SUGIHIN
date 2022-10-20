<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulform) ? $judulform: 'Tambah Menu Utama' ;?></h1>
    </div>
</div>

    <div class="ibox-content">
           <form action method="post" class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Menu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="menu" name="menu_parent" value="<?php echo isset($satu['menu_parent']) ? $satu['menu_parent'] : '' ;?>"> 
                  </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Url</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="url" name="url" value="<?php echo isset($satu['url']) ? $satu['url']: '#' ;?>"> 
                  </div>
                </div>
                
                <div class="form-group"><label class="col-sm-2 control-label">Icon</label>
                  <div class="col-sm-10" style="width:500px">
                  <select id="icon" name="icon"  class="form-control m-b" >
                  <?php 
                  foreach($icondata->result_array() as $d)
                  {?>


                    <option value="<?php echo $d['icon'];?>"  
                    <?php 
                   if (isset($satu['icon']) && $satu['icon'] == $d['icon']) {
                    echo "selected";
                    }
                    else
                    {
                        echo "";
                    }
                  ?>><i style="font-size:24px" class="<?php echo $d['code'];?>"></i><?php echo $d['icon'];?> </option> 
                   <?php }?>

                    </select>
                  </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Bercabang</label>
                  <div class="col-sm-10">
              
              
                   <input type="checkbox" id="Y" name="flag" value="Y" 
                   <?php 
                   if (isset($satu['flag']) && $satu['flag'] == "Y") {
                    echo "checked";
                    }
                    else
                    {
                        echo "";
                    }
                  ?>  ><label for="Y"> Ya</label><br>
                   <input type="checkbox" id="N" name="flag" value="N" <?php 
                   if (isset($satu['flag']) && $satu['flag'] == "N") {
                    echo "checked";
                    }
                    else
                    {
                        echo "";
                    }
                  ?>><label for="N"> Tidak</label><br>


                   

                  </div>
                </div>
                

                <div class="form-group"><label class="col-sm-2 control-label">Urutan</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="urutan" name="urutan" value="<?php echo isset($satu['urutan']) ? $satu['urutan']: '' ;?>"> 
                  </div>
                </div>

                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_menu_parent" value="<?php echo isset($satu['id_menu_parent']) ? $satu['id_menu_parent']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('menu');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
        
</div>






