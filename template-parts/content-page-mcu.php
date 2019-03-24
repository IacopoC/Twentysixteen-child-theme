<?php
/**
 * The template used for displaying page content mcu
 *
 */

include_once get_stylesheet_directory() . '/includes/imdb-main-class.php';

$imdb_main = new ImdbMain;

$ironman1 = $imdb_main->movieTitle('Iron Man');
$ironman2 = $imdb_main->movieTitle('Iron Man 2');
$ironman3 = $imdb_main->movieTitle('Iron Man 3');

$thor1 = $imdb_main->movieTitle('thor');
$thor2 = $imdb_main->movieTitle('thor: the dark world');
$thor3 = $imdb_main->movieTitle('thor: ragnarok');

$captainamerica1 = $imdb_main->movieTitle('captain america: the first avenger');
$captainamerica2 = $imdb_main->movieTitle('captain america: the winter soldier');
$civilwar = $imdb_main->movieTitle('captain america: civil war');

$drstrange = $imdb_main->movieTitle('Doctor Strange');
$blackpanther = $imdb_main->movieTitle('Black Panther');
$captainmarvel = $imdb_main->movieTitle('Captain Marvel');

$guardianofthegalaxy1 = $imdb_main->movieTitle('Guardians of the Galaxy');
$guardianofthegalaxy2 = $imdb_main->movieTitle('Guardians of the Galaxy vol.2');

$antman1 = $imdb_main->movieTitle('Ant-Man');
$antman2 = $imdb_main->movieTitle('Ant-Man and the Wasp');

$avengers1 = $imdb_main->movieTitle('The Avengers');
$avengers2 = $imdb_main->movieTitle('Avengers: Age of Ultron');
$avengers3 = $imdb_main->movieTitle('Avengers: Infinity War');
$avengers4 = $imdb_main->movieTitle('Avengers: Endgame');


$spiderman1 = $imdb_main->movieTitle('Spider Man: Homecoming');
$spiderman2 = $imdb_main->movieTitle('Spider Man: Far from Home');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <?php twentysixteen_post_thumbnail(); ?>

    <div class="entry-content">
        <?php the_content(); ?>

        <h2>Ironman</h2>
        <div class="container-movies-3">
            <div class="item">
                <img src="<?php echo $ironman1->Poster; ?>" alt="<?php echo $ironman1->Title; ?>">
                <h3 class="titolo-film"><?php echo $ironman1->Title; ?></h3>
                <p><strong><?php echo $ironman1->Director; ?> - <?php echo $ironman1->Year; ?> <?php echo $ironman1->Country; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $ironman2->Poster; ?>" alt="<?php echo $ironman2->Title; ?>">
                <h3 class="titolo-film"><?php echo $ironman2->Title; ?></h3>
                <p><strong><?php echo $ironman2->Director; ?> - <?php echo $ironman2->Year; ?> <?php echo $ironman1->Country; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $ironman3->Poster; ?>" alt="<?php echo $ironman3->Title; ?>">
                <h3 class="titolo-film"><?php echo $ironman3->Title; ?></h3>
                <p><strong><?php echo $ironman3->Director; ?> - <?php echo $ironman3->Year; ?> <?php echo $ironman3->Country; ?></strong></p>

            </div>
        </div>

    <div class="scrollme">
         <h2>Thor</h2>
        <div class="container-movies-3 animateme"
             data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
            <div class="item">
                <img src="<?php echo $thor1->Poster; ?>" alt="<?php echo $thor1->Title; ?>">
                <h3 class="titolo-film"><?php echo $thor1->Title; ?></h3>
                <p><strong><?php echo $thor1->Director; ?> - <?php echo $thor1->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $thor2->Poster; ?>" alt="<?php echo $thor2->Title; ?>">
                <h3 class="titolo-film"><?php echo $thor2->Title; ?></h3>
                <p><strong><?php echo $thor2->Director; ?> - <?php echo $thor2->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $thor3->Poster; ?>" alt="<?php echo $thor3->Title; ?>">
                <h3 class="titolo-film"><?php echo $thor3->Title; ?></h3>
                <p><strong><?php echo $thor3->Director; ?> - <?php echo $thor3->Year; ?></strong></p>

            </div>
            <div class="item">
            </div>
        </div>
    </div>

    <div class="scrollme">
        <h2>Captain America</h2>
        <div class="container-movies-3 animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
            <div class="item">
                <img src="<?php echo $captainamerica1->Poster; ?>" alt="<?php echo $captainamerica1->Title; ?>">
                <h3 class="titolo-film"><?php echo $captainamerica1->Title; ?></h3>
                <p><strong><?php echo $captainamerica1->Director; ?> - <?php echo $captainamerica1->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $captainamerica2->Poster; ?>" alt="<?php echo $captainamerica2->Title; ?>">
                <h3 class="titolo-film"><?php echo $captainamerica2->Title; ?></h3>
                <p><strong><?php echo $captainamerica2->Director; ?> - <?php echo $captainamerica2->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $civilwar->Poster; ?>" alt="<?php echo $civilwar->Title; ?>">
                <h3 class="titolo-film"><?php echo $civilwar->Title; ?></h3>
                <p><strong><?php echo $civilwar->Director; ?> - <?php echo $civilwar->Year; ?></strong></p>

            </div>
        </div>
        </div>

    <div class="scrollme">
        <h2>Guardiani della Galassia</h2>
        <div class="container-movies-3 animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
            <div class="item">
                <img src="<?php echo $guardianofthegalaxy1->Poster; ?>" alt="<?php echo $guardianofthegalaxy1->Title; ?>">
                <h3 class="titolo-film"><?php echo $guardianofthegalaxy1->Title; ?></h3>
                <p><strong><?php echo $guardianofthegalaxy1->Director; ?> - <?php echo $guardianofthegalaxy1->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $guardianofthegalaxy2->Poster; ?>" alt="<?php echo $guardianofthegalaxy2->Title; ?>">
                <h3 class="titolo-film"><?php echo $guardianofthegalaxy2->Title; ?></h3>
                <p><strong><?php echo $guardianofthegalaxy2->Director; ?> - <?php echo $guardianofthegalaxy2->Year; ?></strong></p>

            </div>
            <div class="item">
            </div>
        </div>
        </div>

    <div class="scrollme">
        <h2>Dr Strange / Black Panther / Captain Marvel</h2>
        <div class="container-movies-3 animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
            <div class="item">
                <img src="<?php echo $drstrange->Poster; ?>" alt="<?php echo $drstrange->Title; ?>">
                <h3 class="titolo-film"><?php echo $drstrange->Title; ?></h3>
                <p><strong><?php echo $drstrange->Director; ?> - <?php echo $drstrange->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $blackpanther->Poster; ?>" alt="<?php echo $blackpanther->Title; ?>">
                <h3 class="titolo-film"><?php echo $blackpanther->Title; ?></h3>
                <p><strong><?php echo $drstrange->Director; ?> - <?php echo $blackpanther->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $captainmarvel->Poster; ?>" alt="<?php echo $captainmarvel->Title; ?>">
                <h3 class="titolo-film"><?php echo $captainmarvel->Title; ?></h3>
                <p><strong><?php echo $captainmarvel->Director; ?> - <?php echo $captainmarvel->Year; ?></strong></p>

            </div>
        </div>
        </div>

    <div class="scrollme">
        <h2>Ant Man</h2>
        <div class="container-movies-3 animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
            <div class="item">
                <img src="<?php echo $antman1->Poster; ?>" alt="<?php echo $antman1->Title; ?>">
                <h3 class="titolo-film"><?php echo $antman1->Title; ?></h3>
                <p><strong><?php echo $antman1->Director; ?> - <?php echo $antman1->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $antman2->Poster; ?>" alt="<?php echo $antman2->Title; ?>">
                <h3 class="titolo-film"><?php echo $antman2->Title; ?></h3>
                <p><strong><?php echo $antman2->Director; ?> - <?php echo $antman2->Year; ?></strong></p>

            </div>
            <div class="item">
            </div>
        </div>
        </div>

    <div class="scrollme">
        <h2>Avengers</h2>
        <div class="container-movies-4 animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
            <div class="item">
                <img src="<?php echo $avengers1->Poster; ?>" alt="<?php echo $avengers1->Title; ?>">
                <h3 class="titolo-film"><?php echo $avengers1->Title; ?></h3>
                <p><strong><?php echo $avengers1->Director; ?> - <?php echo $avengers1->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $avengers2->Poster; ?>" alt="<?php echo $avengers2->Title; ?>">
                <h3 class="titolo-film"><?php echo $avengers2->Title; ?></h3>
                <p><strong><?php echo $avengers2->Director; ?> - <?php echo $avengers2->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $avengers3->Poster; ?>" alt="<?php echo $avengers3->Title; ?>">
                <h3 class="titolo-film"><?php echo $avengers3->Title; ?></h3>
                <p><strong><?php echo $avengers3->Director; ?> - <?php echo $avengers3->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $avengers4->Poster; ?>" alt="<?php echo $avengers4->Title; ?>">
                <h3 class="titolo-film"><?php echo $avengers4->Title; ?></h3>
                <p><strong><?php echo $avengers4->Director; ?> - <?php echo $avengers4->Year; ?></strong></p>

            </div>
        </div>
        </div>

    <div class="scrollme">
        <h2>Spider-man</h2>
        <div class="container-movies-3 animateme" data-from="1" data-when="enter" data-to="0" data-opacity="0" easing="easein" data-translatex="200">
            <div class="item">
                <img src="<?php echo $spiderman1->Poster; ?>" alt="<?php echo $spiderman1->Title; ?>">
                <h3 class="titolo-film"><?php echo $spiderman1->Title; ?></h3>
                <p><strong><?php echo $spiderman1->Director; ?> - <?php echo $spiderman1->Year; ?></strong></p>

            </div>
            <div class="item">
                <img src="<?php echo $spiderman2->Poster; ?>" alt="<?php echo $spiderman2->Title; ?>">
                <h3 class="titolo-film"><?php echo $spiderman2->Title; ?></h3>
                <p><strong><?php echo $spiderman2->Director; ?> - <?php echo $spiderman2->Year; ?></strong></p>

            </div>
            <div class="item">
            </div>
        </div>
        </div>
        <?php
        wp_link_pages( array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
            'separator'   => '<span class="screen-reader-text">, </span>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <?php
    edit_post_link(
        sprintf(
        /* translators: %s: Name of current post */
            __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
            get_the_title()
        ),
        '<footer class="entry-footer"><span class="edit-link">',
        '</span></footer><!-- .entry-footer -->'
    );
    ?>

</article><!-- #post-## -->
