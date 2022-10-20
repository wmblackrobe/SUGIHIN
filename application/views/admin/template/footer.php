<?php 
foreach($themes->result_array() as $t)
{
?>
<div class="footer">
                    <div class="pull-right">
                       Version <strong><?php echo $t['version'];?></strong> 
                    </div>
                    <div>
                        <strong>Copyright</strong> <?php echo $t['nama_app'];?> &copy; 2022
                    </div>
                </div>

        </div>
<?php } ?>