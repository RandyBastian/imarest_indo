<div class="content-wrapper">
    <div class="container" >

        <section class="content">
         <!-- Looping Array Image -->
        
            <ul class="row first">
                <?php foreach($images as $key => $img) { ?>
                <li><img id="thumb_<?php echo $key; ?>" src="<?php echo base_url().$dir['thumb'].$letak."/".$img['thumb']; ?>"/>
                    <div>
                        <a href="<?php echo site_url('admin/Upload/delete/'.$letak.'/'.$img['original'].'/'. $id); ?>">
                           <button class="btn btn-warning">delete</button>
                        </a>
                    </div>     
                </li>
                <?php } ?>
            </ul>
            <div class="bottom">
                <?php echo $total; ?> Image(s)
            </div>

        
            <form enctype="multipart/form-data" id="fupload" method="post" action="<?php echo site_url('admin/Upload/hasilupload/' . $id); ?>">
                <div class="form-group">
                    <input name="userfile" type="file" size="20"/>
                </div>
                <div >
                    <input type="submit" name="btn_upload" value="Upload &uarr;" class="btn btn-info"/>
                    <?php if (isset ($error)) { ?>
                        <div class="error"><?php echo $error; ?></div>
                    <?php } ?>
                </div>  
            </form>                  
 
        </section> 
   </div>
</div>