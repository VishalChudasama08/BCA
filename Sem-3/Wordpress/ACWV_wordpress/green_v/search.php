
<?php 
get_header();
?>
<div class="container">
       <div class="row">
            <div class="col-md-12 border border-dark p-3 font-weight-bold text-danger mb-3">
                Search Result For : <?= get_search_query(); ?>
            </div>
       </div>
</div>
<?php get_footer(); ?>