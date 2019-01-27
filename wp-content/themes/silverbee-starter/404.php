<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Silverbee_Starter
 */

get_header(); ?>
    <article>
        <section id="error-404" class="page">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12">
                            <div class="error-header">
                                <h1 class="page-title">
                                    De pagina die je probeert de bereiken bestaat niet meer!
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-2 text-center">
                            <p class="e1">404</p>
                            <p class="e2">Pagina niet gevonden</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="e3">
                                Het kan zijn dat deze pagina is verwijderd, of er is een verkeerde url ingevoerd.
                                Wij raden je aan om terug te gaan naar de <a href="<?php echo get_home_url(); ?>">homepagina</a>.
                                Als je op zoek bent naar een bepaald onderwerp kan je gebruik maken van onderstaande
                                zoekbalk.
                            </p>
                            <div class="e4">
								<?php echo get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
<?php
get_footer();
