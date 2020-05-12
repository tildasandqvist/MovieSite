<?php get_header();?>
<main>
<h1 class="genretitle"> <?php single_term_title();?></h1>


<div class="Kolumner">

    <div class="columns is-multiline">
            <?php while(have_posts() ){       
            the_post();?> 

        <div class="column is-3">

            <h2> <?php the_title();?> </h2>
            <img src="<?php echo get_field('film_bildikon')['url']; ?>" /> 
            
            <ul>
                <li class="card-info">
                    <i class="fas fa-star"></i> <?php 
                $id = get_the_id();
                $genre = get_the_terms($id, 'genre'); 
                $genreobjekt = $genre[0];
                $genrestring= $genreobjekt->slug;
                ?>    
                <a href="<?php echo get_term_link ($genrestring,'genre');?>"> <?php echo get_field('filmens_genre'); ?></a>
                </li>

                <li class="card-info">
                    <i class="far fa-hand-paper"></i>   
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



                <li class="card-info">
                    <i class="fas fa-video"></i> 
                <?php 
                $produktionsid = get_the_id();
                $produktiongenre = get_the_terms($produktionsid, 'produktionsbolag'); 
                if(  !empty( $produktiongenre[0]  )    ){               
                $produktionsobjekt = $produktiongenre[0];
                $produktionsstring= $produktionsobjekt->slug;
                }?>    
                <a href="<?php echo get_term_link ($produktionsstring,'produktionsbolag');?>"> <?php echo get_field('filmens_produktionsbolag') ?></a>

                </li>
            </ul>
             <?php the_excerpt()?> 
        </div>
        <?php }?>
</div>
</div>
</main>
<?php get_footer();?>