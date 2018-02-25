<?php /* Template Name: contribute  */ ?>




<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<main class="main contribute" role="main">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <hr class="hr--primary">
            <div class="row justify-content-md-center">
                <div class="col-lg-9 col-md-11">
                    <h1 class="pageHeading">Tell us your travel story!</h1>
                    <p>
                        Do you have a travel story to tell? Our online community would love to hear about it! We are looking for honest, first-person stories about a trip, vacation, backpacking adventure, car/train/plane ride, overnight visit, or long walk.
                    <p>

                    <hr>

                    <h4 class="text-center">Please email us your stories and photographs to:</h4>

                    <h5 class="text-center"><a href="mailto:roaminglovetravel@gmail.com">roaminglovetravel@gmail.com</a></h5>

                    <hr>


                    <p>Please include the following when submitting your story:</p>
                    <ul>
                        <li>Full Name</li>
                        <li>Website (if applicable)</li>
                        <li>Instagram (if you want this published)</li>
                        <li>Story title</li>
                        <li>Your story</li>
                        <li>Your photographs</li>
                    </ul>
                    <p>Guidelines to consider when submitting your travel story to Roaming Love:</p>
                    <ul>
                        <li>We want a first-hand account of your experiences</li>
                        <li>Please submit original content only - no blog posts that have already been posted on another site. </li>
                        <li>Please only submit photos that you own</li>
                        <li>Please caption photos (if applicable)</li>
                        <li>Please check grammar and spelling before sending your story to Roaming Love</li>
                    </ul>
                    <p>By submitting your story to us, you agree with our policies:</p>
                    <ul>
                        <li>You must own the content you are submitting</li>
                        <li>You will keep all rights to your media after submitting</li>
                        <li>Roaming Love has the right to edit your copy and omit photography</li>
                        <li>Roaming Love is not required to post your story after submission</li>
                        <li>Roaming Love does not pay for contributor posts</li>
                        <li>You are not an employee of Roaming Love after contributing posts</li>
                    </ul>
                    <p>&nbsp;</p>
                    <hr>
                    <p>
                        <h4 class="text-center">Thanks for sharing your stories with our community!</h4>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
