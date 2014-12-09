
<aside class="right-side">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Imagenes</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <hr>
    <section>
        <button class="btn bg-purple btn-flat margin btnNuevaFoto">Agregar foto</button>
    </section>
    <hr>
	<section class="content">
        <div>
            <h2 style="text-align:center">Vestidos</h2><br>
            <?php foreach($imagenes as $key => $value):?>
                <a href="<?=base_url().$value->url?>" data-lightbox="vestidos" data-title="<?=$value->nombre?>"><img src="<?=base_url().$value->url?>" class="img-gallery" data-writeH="1"></a>
            <?php endforeach?>
<!--             <a href="<?=base_url()?>img/pictures/con_001.jpg" data-lightbox="vestidos" data-title="Título de la imagen 001"><img src="<?=base_url()?>img/pictures/con_001.jpg" class="img-gallery" data-writeH="1"></a>
            <a href="<?=base_url()?>img/pictures/ves_01.jpg" data-lightbox="vestidos" data-title="Título de la imagen 001"><img src="<?=base_url()?>img/pictures/ves_01.jpg" class="img-gallery" data-writeH="1"></a>
            <a href="<?=base_url()?>img/pictures/ves_02.jpg" data-lightbox="vestidos" data-title="Título de la imagen 001"><img src="<?=base_url()?>img/pictures/ves_02.jpg" class="img-gallery"data-writeH="1"></a> -->
        </div>
   </section>
	<!-- </div> -->
</aside>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?=base_url();?>js/plugins/lightbox/lightbox.min.js" type="text/javascript"></script>

    <script>
  
    </script>