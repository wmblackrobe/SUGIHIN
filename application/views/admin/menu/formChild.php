<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulchild) ? $judulchild: 'Tambah Menu Child' ;?></h1>
    </div>
</div>

    <div class="ibox-content">
           <form action method="post" class="form-horizontal">
           <div class="form-group"><label class="col-sm-2 control-label">Menu Utama</label>
                  <div class="col-sm-10" style="width:500px">
                  <select id="menuutama" name="id_menu_parent"  class="form-control m-b" >
                  <?php 
                  foreach($menuparent->result_array() as $m)
                  {?>


                    <option value="<?php echo $m['id_menu_parent'];?>"  
                    <?php 
                   if (isset($satu['id_menu_parent']) && $satu['id_menu_parent'] == $m['id_menu_parent']) {
                    echo "selected";
                    }
                    else
                    {
                        echo "";
                    }
                  ?>><?php echo $m['menu_parent'];?> </option> 
                   <?php }?>

                    </select>
                  </div>
                </div>


                <div class="form-group"><label class="col-sm-2 control-label">Menu</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="menuchild" name="menu_child" value="<?php echo isset($satu['menu_child']) ? $satu['menu_child'] : '' ;?>"> 
                  </div>
                  
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Url</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="url" name="url-mc" value="<?php echo isset($satu['url']) ? $satu['url']: '#' ;?>"> 
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

               
                

               

                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataidmenu" name="id_menu_child" value="<?php echo isset($satu['id_menu_child']) ? $satu['id_menu_child']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('menu');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
        
</div>






