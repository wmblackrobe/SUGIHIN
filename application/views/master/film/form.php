<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulform) ? $judulform: 'Tambah Film' ;?></h1>
    </div>
</div>

<div class="ibox-content">
           <form action method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group"><label class="col-sm-2 control-label">Judul Film</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_film" name="judul_film" value="<?php echo isset($satu['judul_film']) ? $satu['judul_film']: '' ;?>"> 
                </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Director</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="director" name="director" value="<?php echo isset($satu['director']) ? $satu['director']: '' ;?>"> 
                </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Pemeran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="pemeran" name="pemeran" value="<?php echo isset($satu['pemeran']) ? $satu['pemeran']: '' ;?>"> 
                </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo isset($satu['tahun']) ? $satu['tahun']: '' ;?>"> 
                </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Negara</label>
                  <div class="col-sm-10" style="width:500px">
                  <select id="negara" name="id_negara"  class="form-control m-b" >
                  <?php 
                  foreach($negaradata->result_array() as $d)
                  {?>


                    <option value="<?php echo $d['id_negara'];?>"  
                    <?php 
                   if (isset($satu['id_negara']) && $satu['id_negara'] == $d['id_negara']) {
                    echo "selected";
                    }
                    else
                    {
                        echo "";
                    }
                  ?>>    <?php echo $d['nama_negara'];?> </option> 
                   <?php }?>

                    </select>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Deskripsi</label>
                <div class="col-sm-10">
                <textarea name="deskripsi" rows="10" cols="106">
                <?php echo isset($satu['deskripsi']) ? $satu['deskripsi']: '' ;?>
                </textarea> 
                </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Poster</label>
                <div class="col-sm-10"><input type="file" id="poster" class="form-control" name="poster"   required oninvalid="this.setCustomValidity('File tidak boleh kosong')" oninput="setCustomValidity('')"></div>
                </div>

               
               
                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_film" value="<?php echo isset($satu['id_film']) ? $satu['id_film']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('film');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
</div>






