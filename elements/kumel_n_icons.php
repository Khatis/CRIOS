<!-- Kumelys img -->
<section class="background-image-section">

  <div class="heading-container large-font">
    <h1><?php the_field('main_title', 101); ?></h1></div>

    <div class="small-text st1" >
      <p><?php the_field('main_subtitle', 101); ?></p></div>


      <div class="buttons">
        <button type="button" id="button1" name="button">Explore Template</button>
      </div>

      <div class="background-container">
  <img src="<?php the_field('background_image', 101); ?>" alt="oops">  </div>








      </section>



      <!-- Top icon offer -->
      <section class="po-kumel">
        <div class="container">

          <div class="small-text sm1pad">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inc</p>
          </div>

          <div class="heading-container large-font">
            <h2>Text</h2>
          </div>


          <?php
          $column_arguments = array(
            'post_type' => 'columns',
            'posts_per_page' => -1,
            'order' => 'ASC'
          );
          $columns = new WP_Query( $column_arguments );
          $show_columns = get_field('show_section_columns', 101);
          ?>

          <ol>
    <?php if( $columns->have_posts() ) : while( $columns->have_posts() ) : $columns->the_post(); ?>
            <li class="column">

              <a href="#" class="icon"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" ></a>
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p></li>
                <?php endwhile;endif; ?>

                  </ol>

                  <div class="buttons">
                    <button type="button" id="button2" name="button">Check Our Offer</button>
                  </div>

                </div>
              </section>
