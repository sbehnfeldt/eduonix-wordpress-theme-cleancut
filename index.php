<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>♦

<body>
<nav class="navbar navbar-default navbar-fixed-top" style="padding-top: 3rem;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse navbar-ex1-collapse">
            <?php wp_nav_menu( [
                'theme_location' => 'primary',
                'depth'          => 2,
                'container'      => false,
                'menu_class'     => 'nav navbar-nav navbar-right',
                'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
                'walker'         => new wp_bootstrap_navwalker()
            ] ); ?>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<section class="row showcase">
    <div class="container">
        <div class="col-md-12">
            <div class="showcase-content">
                <h1>CleanCut Theme</h1>
                <p class="lead">Custom Wordpress Them By You</p>
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i>Facebook</a>
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i>Twitter</a>
                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i>LinkedIn</a>
            </div>
        </div>
    </div>
</section>

<section class="section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 animated animate__fadeInLeft">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Lorem ipsum dolor sit:</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quis, quos.
                    Adipisci aspernatur maxime mollitia saepe sed? Beatae consequatur cumque, distinctio ea
                    fugiat ipsa libero possimus, praesentium quas quisquam voluptatem?</p>
            </div>

            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img src="img/pic1.jpg" alt="" class="img-responsive img-circle animate__fadeInRight">
            </div>
        </div>
    </div>
</section>

<section class="section-b">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6 animate__fadeInRight">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Sed in justo odio</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet dolorem
                    excepturi facere fuga hic, necessitatibus possimus reiciendis repellat sapiente? Atque
                    cupiditate eos hic illum laudantium minima, officia tempore voluptate.</p>
            </div>
            <div class="col-lg-5 col-sm-pull-6 col-sm-6">
                <img src="img/pic2.jpg" alt="" class="img-responsive img-circle animate__fadeInLeft">
            </div>
        </div>
    </div>
</section>

<section class="section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 animate__fadeInLeft">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Mauris sed auctor eros</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deserunt
                    doloribus exercitationem in iure minima porro quaerat quidem quis veritatis? A dolor dolore,
                    est harum iste magni omnis quia sunt!</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img src="img/pic3.jpg" alt="" class="img-responsive img-circle animate__fadeInRight">
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <div class="container">
        <div class="row col-lg-6">
            <h2>Follow Us On Social Media:</h2>
        </div>
        <div class="col-lg-6">
            <ul class="list-inline banner-social-buttons">
                <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i><span
                            class="network-name">Twitter</span></a></li>
                <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i><span
                            class="network-name">Github</span></a></li>
                <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i><span
                            class="network-name">LinkedIn</span></a></li>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>