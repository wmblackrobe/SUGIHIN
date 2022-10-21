<div class="row">
    <div class="col-md-12">
        <h1 align="center">Setting Themes</h1>
    </div>
</div>

<div class="ibox-content">
           <form action='<?php echo site_url('themes/formaction');?>'  enctype="multipart/form-data" method="post" class="form-horizontal">
            <?php 
foreach($themes->result_array() as $d)
{
?>



                <div class="form-group"><label class="col-sm-2 control-label">Nama Aplikasi</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_perpus" name="nama_app" value="<?php echo $d['nama_app']?>"> 
                </div>
                </div>
                
                <div class="form-group"><label class="col-sm-2 control-label">Version</label>
                <div class="col-sm-10"><input type="text" id="version" class="form-control" name="version"  value="<?php echo $d['version'] ;?>"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Logo</label>
                <div class="col-sm-10"><input type="file" id="logo" class="form-control" name="logo"   required oninvalid="this.setCustomValidity('File tidak boleh kosong')" oninput="setCustomValidity('')"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Logo Front</label>
                <div class="col-sm-10"><input type="file" id="logo" class="form-control" name="logo_front"   required oninvalid="this.setCustomValidity('File tidak boleh kosong')" oninput="setCustomValidity('')"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Disclaimer</label>
                <div class="col-sm-10">
                <textarea name="disclaimer" rows="10" cols="106">
                <?php echo $d['disclaimer'] ;?>
                </textarea> 

                
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_themes" value="<?php echo $d['id_themes'] ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="simpan" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('themes');?>" class="btn btn-danger">batal</a></div>
                </div>
            </form>
      <?php }  ?>
</div>






