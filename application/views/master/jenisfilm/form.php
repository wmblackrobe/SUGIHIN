<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulform) ? $judulform: 'Tambah Jenis Film' ;?></h1>
    </div>
</div>

<div class="ibox-content">
           <form action method="post" class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Jenis Film</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="jenis_film" name="jenis_film" value="<?php echo isset($satu['jenis_film']) ? $satu['jenis_film']: '' ;?>"> 
                </div>
                </div>
            
                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_jenis" value="<?php echo isset($satu['id_jenis']) ? $satu['id_jenis']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('jenisfilm');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
</div>






