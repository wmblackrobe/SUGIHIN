<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulform) ? $judulform: 'Tambah Negara' ;?></h1>
    </div>
</div>

<div class="ibox-content">
           <form action method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group"><label class="col-sm-2 control-label">Negara</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="negara" name="nama_negara" value="<?php echo isset($satu['nama_negara']) ? $satu['nama_negara']: '' ;?>"> 
                </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Bendera</label>
                <div class="col-sm-10"><input type="file" id="logo_bendera" class="form-control" name="logo_bendera"   required oninvalid="this.setCustomValidity('File tidak boleh kosong')" oninput="setCustomValidity('')"></div>
                </div>
                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_negara" value="<?php echo isset($satu['id_negara']) ? $satu['id_negara']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('negara');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
</div>






