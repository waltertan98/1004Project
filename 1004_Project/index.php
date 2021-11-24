<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <?php
    include "header.php";
    ?>

    <body>
        <?php
        include "nav.inc.php";
        include "jheader.php";
        ?>
        
        
        <main class="container">
            <h3> Welcome to Pet Society </h3>
            Here in pet society we wish for all out pets to be adopted into a happy and warm family. and fun.
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Images/dogos.jpg" alt="Cute Dogs">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Woof.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Images/meows.jpg" alt="Cute Cats">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Meow.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Images/bunnies.jpg" alt="Cute Bunny">
                        <div class="carousel-caption d-none d-md-block">
                            <p>animal sound.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                        <article class="col-sx-6 col-sm-4">
                            <h3>Dogs</h3>
                            <figure>
                                <img class="img-thumbnail" src="Images/dogos.jpg" alt="cute dogs"
                                     title="View larger image..."/>
                                <figcaption>Cute Dogs</figcaption>
                            </figure>
                            <p>
                                Dogs are our beloved canine friends who would always stand by our side, why not adopt one today? 
                                come take take a look at our <a href ="dogs.php">dogs</a>.
                            </p>
                        </article>
                        <article class="col-sx-6 col-sm-4">
                            <h3>Cats</h3>
                            <figure>
                                <img class="img-thumbnail" src="Images/meows.jpg" alt="cute cats"
                                     title="View larger image..."/>
                                <figcaption>Cute Cats</figcaption>
                            </figure>
                            <p>
                                Cats, our fluffy feline companions, strong independent creatures that also show a loving side, why not adopt one today?
                                come take take a look at our <a href ="cats.php">cats</a>.
                            </p>
                        </article>
                        <article class="col-sx-6 col-sm-4">
                            <h3>Other Small animals</h3>
                            <figure>
                                <img class="img-thumbnail" src="Images/bunnies.jpg" alt="cute bunnies"
                                     title="View larger image..."/>
                                <figcaption>Small animals</figcaption>
                            </figure>
                            <p>
                                All our little friends, from bunnies to bird all so adorable, why not adopt one today?
                                come take take a look at our <a href ="smallanimal.php">other animals</a>.
                            </p>
                        </article>
                    </div>
        </main>

        <?php
        include "footer.inc.php";
        ?>

    </body>
</html>