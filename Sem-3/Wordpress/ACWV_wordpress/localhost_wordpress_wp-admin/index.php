<?php 
get_header();
$path = get_template_directory_uri(); 
?>
<div class="jumbotron text-center">
	<div class="d-inline">
        <img src="<?= $path .'/images/theme_3_logo.jpg' ?>" class="v8" alt="Logo">&nbsp&nbsp
    </div>
    <h1 class="d-inline"><?= bloginfo('name'); ?></h1>
	<p><?= bloginfo('description'); ?></p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-9 v1" style="border-radius: 10px;">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
            ?>
            <div>
			    <h4><?= the_title(); ?></h4>
                <div class="row">
                    <div class="col-md-4">
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('post-thumbnails', ["class" => "img-fluid"]);
                        }else{
                            echo '<img src="" class="rounded img-fluid" alt="Cinque Terre">'; //src='. $path .'/images/sun.jpg"
                        }
                        ?>    
                    </div>
                    <div class="col-md-8 v2">
                        <p class="small text-muted"><?= the_category(" "); ?> | <?= the_tags(""); ?></p>
                        <p><?= the_excerpt(); ?></p>
                        <a href="<?= the_permalink(); ?>"><button type="button" class="btn btn-outline-success">Lear more</button></a>
                        <p><?= the_date(); ?> | By <?php the_author(); ?></p>
                    </div>
                </div>
                <hr class="my-4 bg-dark">
            </div>
            <?php
                }
            }
            ?>
        </div>
        <?= sidebar_v(); ?>
    </div>
</div>
<?php get_footer() ?>