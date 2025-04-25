<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package veryqueertoronto
 */

get_header();
?>

	<main id="primary" class="site-main">
        <h1 class="screen-reader-text">VQT Events – Very Queer Toronto Events – Queer events in Toronto</h1>
        <div class="matchmaking-modal">
            <div class="mm-modal-button-wrapper">
                <img class="animate__animated animate__zoomInUp animate__delay-2s" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent-small.png" alt="Cartoon KT holding a red heart" width="110" height="110" loading="lazy" />
                <span>
                    <span class="mm-intro">
                        <span class="speech animate__animated animate__jackInTheBox animate__delay-3s">
                            Are you serious about finding a partner?
                            <div class="button-wrapper">
                                <span></span>
                                <div class="animate__animated animate__fadeIn animate__delay-4s">
                                    <button aria-label="open the modal Matchmaking" class="mm-modal-button" aria-controls="mm-modal" aria-expanded="false">Yes</button>
                                </div>
                            </div>
                        </span>
                    </span>
                </span>
            </div>
            <div id="mmModal" class="mm-modal" aria-hidden="true">
                <div id="mmOverlay" class="overlay"></div>
                <button class="mm-modal-button-close" aria-controls="mm-modal" aria-label="Close the modal Matchmaking">
                    <svg width="30" height="30" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125" x="0px" y="0px"><path d="m64.14,50l23.66-23.66c3.91-3.91,3.91-10.24,0-14.14-3.91-3.9-10.24-3.9-14.14,0l-23.66,23.66L26.34,12.19c-3.91-3.91-10.24-3.91-14.14,0-3.9,3.91-3.9,10.24,0,14.14l23.66,23.66-23.66,23.66c-3.91,3.91-3.91,10.24,0,14.14,3.91,3.9,10.24,3.9,14.14,0l23.66-23.66,23.66,23.66c3.91,3.91,10.24,3.91,14.14,0,3.9-3.91,3.9-10.24,0-14.14l-23.66-23.66Z" stroke-width="0"/></svg>
                    <span class="screen-reader-text">Close the modal Matchmaking</span>
                </button>
                        
                <div class="image-and-form">
                    <img loading="lazy" class="modal-kt kt-mobile" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent-small.png" alt="Cartoon KT holding a red heart" width="110" height="110" />
                    <img loading="lazy" class="modal-kt kt-desktop" src="<?php echo get_template_directory_uri(); ?>/images/KT-heart-transparent-large.png" alt="Cartoon KT holding a red heart" width="200" height="202" /> 
                    <?php echo do_shortcode("[acfe_form name='matchmaking']"); ?> 
                    <div class="form-right"></div>
                </div>
            </div>
        </div>
        <section class="three-columns">

            <?php
            $leftColumn = get_field('left_column');
            
            if( $leftColumn ): ?>

            <div class="one-column bg-image left-column">
                <?php 
                    $leftBg = $leftColumn['background_image'];
                    echo wp_get_attachment_image( $leftBg['id'], array('639', '876'), "" );
                ?>

                <h2>
                    <a href="<?php echo esc_url( $leftColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $leftColumn['link']['target'] ); ?>">
                       <?php echo esc_html( $leftColumn['link']['title'] ); ?>
                    </a>
                </h2>

            </div>
            <?php endif; ?>
            <div class="event-column one-column">
                <section>
                    <h2>Community Events</h2>

                    <?php
                        $today = date( 'Ymd' );
                        $eventsquery = new WP_Query( array( 
                            'post_type' => 'event',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'meta_key'  => 'event_date',
                            'orderby'   => 'meta_value_num',
                            'order'     => 'ASC', 
                            'meta_query' => array(
                                array(
                                    'key'     => 'event_date',
                                    'compare' => '>=',
                                    'value'   => $today,
                                ),
                            ),
                        ) );
                    ?>

                    <div class="animate__animated animate__fadeIn animate__delay-2s splide desktop-scroll">
                        <button class="splide__toggle pause" type="button">
                            <svg
                                class="splide__toggle__pause"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path d="m2 1v22h7v-22zm13 0v22h7v-22z"/>
                            </svg>
                            <svg
                            class="splide__toggle__play"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path d="m22 12-20 11v-22l10 5.5z"/>
                        </svg>
                        </button>
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php
                                while ( $eventsquery->have_posts() ) :
                                    $eventsquery->the_post();
                                    $vqtEvent = get_field('vqt_event');
                                ?>
                                <li class="splide__slide"> 
                                    <a class="event-card <?php if($vqtEvent): ?>vqt-event<?php endif; ?>" href="<?php echo esc_html( get_field('event_link') ); ?>" target="_blank">
                                        <?php
                                            if( get_field('vqt_event') ) {
                                                echo '<span class="capsule">VQT Event</span>';
                                            }
                                        ?>
                                        <span class="event-meta">
                                            <span><?php echo esc_html( get_field('event_date') ); ?></span>
                                            <span>
                                                <?php echo esc_html( get_field('event_time') ); ?>
                                                <?php if( get_field('event_end_time') ): ?>
                                                     - <?php echo esc_html( get_field('event_end_time') ); ?>
                                                <?php endif; ?>  
                                            </span>
                                        </span>
                                        <h3><?php echo esc_html( get_field('event_title') ); ?></h3>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>    
                            </ul>
                        </div>
                    </div>

                    <ul class="events-desktop-reduced-motion list-no-style">
                        <?php
                        while ( $eventsquery->have_posts() ) :
                            $eventsquery->the_post();
                            $vqtEvent = get_field('vqt_event');
                        ?>
                        <li class=""> 
                            <a class="event-card <?php if($vqtEvent): ?>vqt-event<?php endif; ?>" href="<?php echo esc_html( get_field('event_link') ); ?>" target="_blank">
                                <?php
                                    if( get_field('vqt_event') ) {
                                        echo '<span class="capsule">VQT Event</span>';
                                    }
                                ?>
                                <span class="event-meta">
                                    <span><?php echo esc_html( get_field('event_date') ); ?></span>
                                    <span>
                                        <?php echo esc_html( get_field('event_time') ); ?>
                                        <?php if( get_field('event_end_time') ): ?>
                                                - <?php echo esc_html( get_field('event_end_time') ); ?>
                                        <?php endif; ?>  
                                    </span>
                                </span>
                                <h3><?php echo esc_html( get_field('event_title') ); ?></h3>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>    
                    </ul>

                    <ul class="events-mobile list-no-style">
                        <?php
                        while ( $eventsquery->have_posts() ) :
                            $eventsquery->the_post();
                            $vqtEvent = get_field('vqt_event');
                        ?>
                        <li class=""> 
                            <a class="event-card <?php if($vqtEvent): ?>vqt-event<?php endif; ?>" href="<?php echo esc_html( get_field('event_link') ); ?>" target="_blank">
                                <?php
                                    if( get_field('vqt_event') ) {
                                        echo '<span class="capsule">VQT Event</span>';
                                    }
                                ?>
                                <span class="event-meta">
                                    <span><?php echo esc_html( get_field('event_date') ); ?></span>
                                    <span>
                                        <?php echo esc_html( get_field('event_time') ); ?>
                                        <?php if( get_field('event_end_time') ): ?>
                                                - <?php echo esc_html( get_field('event_end_time') ); ?>
                                        <?php endif; ?>  
                                    </span>
                                </span>
                                <h3><?php echo esc_html( get_field('event_title') ); ?></h3>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>    
                    </ul>

                    <div class="button-center button-mobile">
                        <a class="button button-reverse button-se" href="/submit-an-event">Event Submissions</a>
                    </div>
                </section>
            </div>
            <?php
            $rightColumn = get_field('right_column');
            
            if( $rightColumn ): ?>

            <div class="bg-image one-column right-column">
                <?php 
                    $rightBg = $rightColumn['background_image'];
                    echo wp_get_attachment_image( $rightBg['id'], array('639', '876'), "" );
                ?>

                <h2>
                    <a href="<?php echo esc_url( $rightColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $rightColumn['link']['target'] ); ?>">
                        <?php echo esc_html( $rightColumn['link']['title'] ); ?>
                    </a>
                </h2>

            </div>
            <?php endif; ?>
        </section>

        <section class="mobile-cards-section">
            <div class="mobile-cards splide">
                <div class="splide__track">
                    <ul class="mobile-cards-wrapper splide__list">
                        <?php 
                        if( $leftColumn ): ?>
                        <li class="splide__slide">
                            <a class="mobile-card " href="<?php echo esc_url( $leftColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $leftColumn['link']['target'] ); ?>">   
                                <?php echo wp_get_attachment_image( $leftBg['id'], array('300', '300'), "" ); ?>
                                <div class="title-wrapper">
                                    <h2><?php echo esc_html( $leftColumn['link']['title'] ); ?></h2>
                                </div>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php 
                        if( $rightColumn ): ?>
                            <li class="splide__slide">
                                <a class="mobile-card" href="<?php echo esc_url( $rightColumn['link']['url'] ); ?>" target="<?php echo esc_attr( $rightColumn['link']['target'] ); ?>">
                                        
                                    <?php echo wp_get_attachment_image( $rightBg['id'], array('300', '300'), "" );  ?>
                                    <div class="title-wrapper">
                                        <h2><?php  echo esc_html( $rightColumn['link']['title'] ); ?></h2>
                                    </div>
                                </a>
                            </li>
                        <?php endif; ?>

                        <li class="splide__slide">
                            <a class="mobile-card" href="/submit-an-event">
                                <img class="" src="<?php echo get_template_directory_uri(); ?>/images/crowd.jpg" alt="Crowd at a concert" width="300" height="300" loading="lazy" />
                                <div class="title-wrapper">
                                    <h2>Promote Your Event</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="button-center button-desktop">
            <a class="button button-reverse button-se" href="/submit-an-event">Event Submissions</a>
        </div>

        <?php $about = get_field('about_section');  ?>

        <section class="about-section">
            <div class="about-wrapper">
                <div class="about-row">

                <div class="gallery">
                    <?php if($about['image_left']): ?>	
                         <?php echo wp_get_attachment_image( $about['image_left']['ID'], array('600', '500'), "" ); ?>	
                    <?php endif; ?>


                    <?php if($about['image_right']): ?>	
                         <?php echo wp_get_attachment_image( $about['image_right']['ID'], array('600', '500'), "" ); ?>	
                    <?php endif; ?>

                    <?php if($about['image_bottom']): ?>	
                         <?php echo wp_get_attachment_image( $about['image_bottom']['ID'], array('600', '500'), "" ); ?>	
                    <?php endif; ?>
                </div>


                    <div class="about-text">
                        <div class="about-text-wrapper">
                            <div class="about-header">
                                <?php if($about['heading']): ?>		
                                        <h2><?php echo esc_html( $about['heading'] ); ?></h2>
                                <?php endif; ?>

                                <?php if($about['profile_picture']): ?>
                                    <div class="profile-picture">		
                                        <?php echo wp_get_attachment_image( $about['profile_picture']['ID'], array('200', '200'), "" ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                          
                            <?php if($about['paragraphs_one']): ?>		
                                    <p><?php echo $about['paragraphs_one']; ?></p>
                            <?php endif; ?>

                             <div class="image-mobile">
                                <?php if($about['image_left']): ?>	
                                    <?php echo wp_get_attachment_image( $about['image_left']['ID'], array('600', '500'), "" ); ?>	
                                <?php endif; ?>
                        
                                <?php if($about['image_right']): ?>	
                                    <?php echo wp_get_attachment_image( $about['image_right']['ID'], array('600', '500'), "" ); ?>	
                                <?php endif; ?>
                            </div>

                            <?php if($about['paragraphs_two']): ?>		
                                <p><?php echo $about['paragraphs_two']; ?></p>
                            <?php endif; ?>

                            <div class="image-mobile bottom">
                                <?php if($about['image_bottom']): ?>	
                                    <?php echo wp_get_attachment_image( $about['image_bottom']['ID'], array('600', '500'), "" ); ?>	
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>

        <section class="wrapper blocks">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page-front' );

            endwhile; // End of the loop.
            ?>
        </section>

        <?php if( have_rows('testimonials') ): ?>
            <section class="testimonials-section">
                <div class="wrapper">
                    <h2>Testimonials</h2>
                    <div class="testimonials splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php while( have_rows('testimonials') ): the_row(); 
                                    $testimonialImage = get_sub_field('image');
                                ?>
                                <li class="splide__slide testimonial">
                                    <div class="testimonial-wrapper">
                                        <?php echo wp_get_attachment_image( $testimonialImage['ID'], array('200', '200'), "" ); ?>
                                        <div>
                                            <svg aria-hidden="true" focusable="false" fill="#ffffff" class="start" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 30" x="0px" y="0px"><path d="m21.301 4c.411 0 .699.313.699.663 0 .248-.145.515-.497.702-1.788.948-3.858 4.226-3.858 6.248 3.016-.092 4.326 2.582 4.326 4.258 0 2.007-1.738 4.129-4.308 4.129-3.24 0-4.83-2.547-4.83-5.307 0-5.98 6.834-10.693 8.468-10.693zm-10.833 0c.41 0 .699.313.699.663 0 .248-.145.515-.497.702-1.788.948-3.858 4.226-3.858 6.248 3.016-.092 4.326 2.582 4.326 4.258 0 2.007-1.739 4.129-4.308 4.129-3.241 0-4.83-2.547-4.83-5.307 0-5.98 6.833-10.693 8.468-10.693z" fill-rule="nonzero"/></svg>
                                            <p><?php  echo acf_esc_html( get_sub_field('quote') ); ?></p>
                                            <svg aria-hidden="true" focusable="false"  fill="#ffffff" class="end" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 30" x="0px" y="0px"><path d="m21.301 4c.411 0 .699.313.699.663 0 .248-.145.515-.497.702-1.788.948-3.858 4.226-3.858 6.248 3.016-.092 4.326 2.582 4.326 4.258 0 2.007-1.738 4.129-4.308 4.129-3.24 0-4.83-2.547-4.83-5.307 0-5.98 6.834-10.693 8.468-10.693zm-10.833 0c.41 0 .699.313.699.663 0 .248-.145.515-.497.702-1.788.948-3.858 4.226-3.858 6.248 3.016-.092 4.326 2.582 4.326 4.258 0 2.007-1.739 4.129-4.308 4.129-3.241 0-4.83-2.547-4.83-5.307 0-5.98 6.833-10.693 8.468-10.693z" fill-rule="nonzero"/></svg>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?> 
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
	</main>

<?php
get_sidebar();
get_footer();
