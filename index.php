<?php get_header();?> 
<div class="Kolumner">

<?php
    $movies = new WP_Query([
    'post_type' => 'film'
    ]);

    while( $movies -> have_posts() ){
    $movies -> the_post(); ?>
        
        <div class="column is-3">
            <h2 class="titlemoviefirst"> <?php the_title();?> </h2>
    <a href="<?php the_permalink(); ?>">
        <?php 
        $size = [330, 420];
        $bildid = get_field('film_bildikon')['id'];
        echo wp_get_attachment_image ($bildid, $size); ?>
    </a>


    <ul>
        <li class="card-info">
            <i class="fas fa-star"></i>
                <?php 
                $id = get_the_id();
                $genre = get_the_terms($id, 'genre'); // Todo krånglar om de ej finns genre. Lägg if runt.
                $genreobjekt = $genre[0];
                $genrestring= $genreobjekt->slug;
                ?>    
                <a href="<?php echo get_term_link ($genrestring,'genre');?>"> <?php echo get_field('filmens_genre'); ?></a>
        </li>


        <li class="card-info"> <i class="far fa-hand-paper"></i>
                <?php 
                $ageid = get_the_id();
                $agegenre = get_the_terms($ageid, 'agelimit'); 
                
            if(  !empty( $agegenre[0]  )    ){               
                $ageobjekt = $agegenre[0];
                $agestring= $ageobjekt->slug;
                }
                ?>    
                <a href="<?php echo get_term_link ($agestring,'agelimit');?>"> <?php echo get_field('filmens_aldersgrans'); ?></a>
        </li>


        <li class="card-info"> <i class="fas fa-video"></i>
                <?php 
                $produktionsid = get_the_id();
                $produktiongenre = get_the_terms($produktionsid, 'produktionsbolag'); 
                
                if(  !empty( $produktiongenre[0]  )    ){               // Behöver ha en if-loop 
                $produktionsobjekt = $produktiongenre[0];
                $produktionsstring= $produktionsobjekt->slug;
                }
                ?>    
                <a href="<?php echo get_term_link ($produktionsstring,'produktionsbolag');?>"> <?php echo get_field('filmens_produktionsbolag') ?></a>
        </li>
    </ul>
    <?php the_excerpt()?>
    </div>
    <?php } ?>
</div>
<?php get_footer();?>