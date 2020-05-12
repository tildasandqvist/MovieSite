<?php get_header();?> 
<main>
<div class="columns">
<div class="column is-one-third">
    <!-- Kategorier kolumner -->
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="infokolumn">
        <thead>
            <tr>
                <th> Genre </th>
                <th> <?php echo get_field('filmens_genre') ?> </th>
            </tr>
            <tr>
                <th> Ålder </th>
                <th> <?php echo get_field('filmens_aldersgrans') ?> </th>
            </tr>
            <tr>
                <th> Produktionsår </th>
                <th> <?php echo get_field('filmens_produktionsar') ?> </th>
            </tr>
            <tr>
                <th> produktionsbolag </th>
                <th> <?php echo get_field('filmens_produktionsbolag') ?> </th>
            </tr>
            <tr>
                <th> Premiärdatum</th>
                <th> <?php echo get_field('filmens_premiardatum') ?> </th>
            </tr>
            <tr>
                <th> Regissör </th>
                <th> <?php echo get_field('regissor') ?> </th>
            </tr>
        </thead>
    </table>
    

        <!-- Skådespelare Kolumn -->
        <?php while(have_rows('skadespelare_info')){ 
            the_row();?>
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth" id="infokolumn">
        
        <thead>
            <tr>
                <th> Skådespelare </th>
                <th> <?php echo get_sub_field('skadespelare') ?> </th>
            </tr>

            <tr>
                <th> Roll </th>
                <th> <?php echo get_sub_field('roll') ?> </th>
            </tr>

            <tr>
                <th> Ålder </th>
                <th> <?php echo get_sub_field('alder_') ?> </th>
            </tr>

            <tr>
                    <th> Nationalitet </th>
                <th> <?php echo get_sub_field('nationalitet_') ?> </th>
            </tr>
        </thead>
        
    </table>
    <?php } ?>
</div>

<div class="column" id="movie-page-info">
    <h2 class="movietitle"> <?php the_title();?> </h2>
    <img src="<?php echo get_field('videobild')['url']; ?>" />
    <div class="infotext"> 
        <p> <?php the_post(); the_content();?> </p>
        </div>
</div>
</div>
</main>
<?php get_footer();?>