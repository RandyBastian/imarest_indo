<link id="bootstrap-style" href="<?php echo base_url() ?>assets/admin/galeri/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/galeri/css/bootstrap-responsive.min.css" rel="stylesheet">
<link id="base-style" href="<?php echo base_url() ?>assets/admin/galeri/css/style.css" rel="stylesheet">
<link id="base-style-responsive" href="<?php echo base_url() ?>assets/admin/galeri/css/style-responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

<script type="text/javascript">
    function changepic(img_src, obj) {
        document["img_tag"].src = img_src;
        var thumbs = document.getElementsByName("thumb");
        for (var i = 0; i < thumbs.length; i++) {
            var tmp_id = "thumb_" + i;
            document.getElementById(tmp_id).setAttribute("class", "thumb");
        }
        document.getElementById(obj).setAttribute("class", "thumbclick");
        var ori_img = img_src.replace("thumb_", "");
        document.getElementById("detimglink").setAttribute("href", ori_img);
    }
</script>
<style type="text/css">
    .modal-open{overflow:hidden}
    .modal{display:none;overflow:hidden;position:fixed;top:60px;right:0;bottom:0;left:0;z-index:1050;-webkit-overflow-scrolling:touch;outline:0}
    .modal.fade .modal-dialog{-webkit-transform:translate(0, -25%);-ms-transform:translate(0, -25%);-o-transform:translate(0, -25%);transform:translate(0, -25%);-webkit-transition:-webkit-transform 0.3s ease-out;-o-transition:-o-transform 0.3s ease-out;transition:transform 0.3s ease-out}
    .modal.in .modal-dialog{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}
    .modal-open .modal{overflow-x:hidden;overflow-y:auto}
    .modal-dialog{position:relative;width:auto;margin:10px}
    .modal-content{position:relative;background-color:#1e1e1e;border:1px solid #131313;border:1px solid rgba(0,0,0,0.2);border-radius:6px;-webkit-box-shadow:0 3px 9px rgba(0,0,0,0.5);box-shadow:0 3px 9px rgba(0,0,0,0.5);-webkit-background-clip:padding-box;background-clip:padding-box;outline:0}
    .modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000} .modal-backdrop.fade{opacity:0;filter:alpha(opacity=0)}
    .modal-backdrop.in{opacity:.5;filter:alpha(opacity=50)}
    .modal-header{padding:15px;border-bottom:1px solid #e5e5e5;min-height:16.42857143px}
    .modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}
    .modal-body{position:relative;padding:15px}
    .modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}
    .modal-footer .btn+.btn{margin-left:5px;margin-bottom:0}
    .modal-footer .btn-group .btn+.btn{margin-left:-1px}
    .modal-footer .btn-block+.btn-block{margin-left:0}
    .modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}
    @media (min-width:768px){
    .modal-dialog{width:500px;margin:30px auto}
    .modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,0.5);box-shadow:0 5px 15px rgba(0,0,0,0.5)}
    .modal-sm{width:300px}}
    @media (min-width:992px){
    .modal-lg{width:900px}}

    /* untuk menghilangkan list style dan pointer pada img */
    ul {
        padding:0 0 0 0;
        margin:0 0 0 0;
    }
    ul li {
        list-style:none;
        margin-bottom:25px;
    }
    ul li img {
        cursor: pointer;
    }

    /* Untuk style next dan prev button */
    .controls{
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold; 
    }
    .next {
        float:right;
        text-align:right;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
    $('li img').on('click',function(){
    var src = $(this).attr('src');
    var img = '<img src="' + src + '" class="img-responsive"/>';

    //Show
    var index = $(this).parent('li').index();

    var html = '';
    html += img; 
    html += '<div style="height:25px;clear:both;display:block;">';
    html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
    html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
    html += '</div>';

    $('#KutubaruModal').modal();
    $('#KutubaruModal').on('shown.bs.modal', function(){
    $('#KutubaruModal .modal-body').html(html);

    //new code
    $('a.controls').trigger('click');
    })
    $('#KutubaruModal').on('hidden.bs.modal', function(){
    $('#KutubaruModal .modal-body').html('');
    }); 
    });
    })

    //button controls
    $(document).on('click', 'a.controls', function(){
    var index = $(this).attr('href');
    var src = $('ul.row li:nth-child('+ index +') img').attr('src'); 
    $('.modal-body img').attr('src', src);
    var newPrevIndex = parseInt(index) - 1; 
    var newNextIndex = parseInt(newPrevIndex) + 2; 
    if($(this).hasClass('previous')){ 
    $(this).attr('href', newPrevIndex); 
    $('a.next').attr('href', newNextIndex);
    }else{
    $(this).attr('href', newNextIndex); 
    $('a.previous').attr('href', newPrevIndex);
    }
    var total = $('ul.row li').length + 1;

    //hide next button
    if(total === newNextIndex){
    $('a.next').hide();
    }else{
    $('a.next').show()
    } 

    //hide previous button
    if(newPrevIndex === 0){
    $('a.previous').hide();
    }else{
    $('a.previous').show()
    }
    return false;
    });
</script>

<div id="container">
   <!--  <div id="col-lg-4">
        <?php if (isset($images[0])) { ?>
        <a href="<?php echo base_url().$dir['original'].$letak."/".$images[0]['original']; ?>" target="_blank" id="detimglink">
            <img class="imgdet" name="img_tag" src="<?php echo base_url().$dir['original'].$letak."/".$images[0]['original']; ?>" width="500"/>
        </a>
        <?php } ?>
    </div> -->
    <style>
        #coba { color: white; }
    </style>
    <!-- <div class="masonry-gallery"> -->
   
       

        <div class="clear"></div>

        
        <!-- Looping Array Image -->
        <?php foreach($images as $key => $img) { ?>
        
            <div>
                <a href="javascript:" onclick="changepic('<?php echo base_url().$dir['original'].$letak."/".$img['original']; ?>', 'thumb_<?php echo $key; ?>');">
                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"></li><img class="img-responsive" alt="Responsive Photo Galeri" name="thumb" id="thumb_<?php echo $key; ?>" src="<?php echo base_url().$dir['thumb'].$letak."/".$img['thumb']; ?>"/>
                </a>
            </div>
            <div class="dadel">
            <a class="adel" href="<?php echo site_url('admin/Upload/delete/'.$letak.'/'.$img['original'].'/'. $id); ?>">
                delete
            </a>
            </div>
        
        <?php } ?>
       
        <div class="clear"></div>

        <div class="bottom">
            <?php echo $total; ?> Image(s)
        </div>

        <div class="bottom">
            <?php echo $this->pagination->create_links(); ?>
        </div>
         <form enctype="multipart/form-data" id="fupload" method="post" action="<?php echo site_url('admin/Upload/hasilupload/' . $id); ?>">
            <input name="userfile" type="file" size="20"/>
            <input type="submit" name="btn_upload" value="Upload &uarr;" class="btnupload"/>
            <?php if (isset ($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
            <?php } ?>
        </form>
    

    <div class="clear"></div>

</div> <!-- end div container -->