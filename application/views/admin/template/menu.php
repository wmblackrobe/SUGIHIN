
<?php 
foreach($themes->result_array() as $t)
{
?>
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/admin/img/photo-profilesmall.png" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">WMBLACKROBE</strong>
                             </span> <span class="text-muted text-xs block">Administrator </span>  </a>
                        
                    </div>
                    <div class="logo-element">
                    <img alt="image" style="width:20px;height:20px" src="<?php echo base_url(); ?>upload/logo/<?php echo $t['logo'];?>" />
                    </div> <?php }?>
                </li>
                <?php 
                foreach($menu_parent->result_array() as $d)
                {
                    if($d['flag'] == 'N')
                    {
                 ?>
                <li <?php 
                   if (isset($session) && $session == $d['menu_parent']) {
                    echo "class=active";
                    }
                    else
                    {
                        echo "";
                    }?>>
                    <a href="<?php echo site_url($d['url']) ; ?>"><i class="<?php echo $d['icon'];?>"></i> <span class="nav-label"><?php echo $d['menu_parent'];?></span></a>
                </li>
               <?php } else{ ?>
                <li <?php 
                   if (isset($session) && $session == $d['menu_parent']) {
                    echo "class=active";
                    }
                    else
                    {
                        echo "";
                    }?> >
                <a href="#"><i class="<?php echo $d['icon'];?>"></i> <span class="nav-label"><?php echo $d['menu_parent']; ?> </span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level collapse">
                <?php 
                foreach($menu_child->result_array() as $mc)
                {
                    if($mc['id_menu_parent'] == $d['id_menu_parent'])
                    {?>
                    <li <?php 
                   if (isset($session_child) && $session_child == $mc['menu_child']) {
                    echo "class=active";
                    }
                    else
                    {
                        echo "";
                    }?>>
                    <a href="<?php echo site_url($mc['url']) ; ?>"><span class="nav-label"><i class="<?php echo $mc['icon'];?>"></i> <?php echo $mc['menu_child']; ?></span> </a>
                    </li>
                 <?php } }?>   
                </ul>
            </li>
             <?php }  }?>
             

            </ul>
        </div>
    </nav>
    