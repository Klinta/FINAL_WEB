<?php
    $title = 'Herbalism';
?>
@include('layouts/header')

    <div class="wrapper">
        <!-- --top container -->
        <section class="top-container">
            <header class="showcase">
                <h1>
                    The perfect starting place for the aspiring home herbalist or anyone
                    who simply wants to play in the kitchen.
                </h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://scstylecaster.files.wordpress.com/2016/03/herbalist-2.png" alt="First slide"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://scstylecaster.files.wordpress.com/2016/03/herbalist.png" alt="Second slide"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://scstylecaster.files.wordpress.com/2016/03/herbalist-2.png" alt="Third slide"/>
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
            </header>
            <div class="top-box top-box-a">
                <h4>Get Your Herbal Remedy Kit Now</h4>
                <p class="price">99.99 EUR</p>
                <a href="" class="btn">Buy Now</a>
            </div>
            <div class="top-box top-box-b">
                <h4>Get Your Pro Herbal Remedy Kit Now</h4>
                <p class="price">199.99 EUR</p>
                <a href="" class="btn">Buy Now</a>
            </div>
        </section>
        <!-- 3 kastes ar ikonam -->
        <section class="boxes">
            <div class="box">
                <i class="fas fa-mortar-pestle fa-4x"></i>
                <h3>Studies</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequatur, animi.
                </p>
            </div>
            <div class="box">
                <i class="fas fa-globe fa-4x"></i>
                <h3>Coverage</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequatur, animi.
                </p>
            </div>
            <div class="box">
                <i class="far fa-smile fa-4x"></i>
                <h3>Support</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequatur, animi.
                </p>
            </div>
        </section>
        <!-- Raksts par augiem -->
        <section class="info">
            <img src="https://images.glaciermedia.ca/polopoly_fs/1.2421262.1478106999!/fileImage/httpImage/image.jpg_gen/derivatives/landscape_804/herbalism.jpg" alt="Herbs"/>
            <div>
                <h2>Herbalism or Dark Angels</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam ab
                    consequatur perferendis suscipit obcaecati aperiam pariatur odit
                    atque repudiandae, ducimus porro numquam et nostrum error magni aut
                    eveniet doloremque excepturi cupiditate similique voluptates ex? Ab
                    ratione inventore provident totam eligendi deleniti quas nobis,
                    vitae, cupiditate rem maxime autem est quo.
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </section>



@include('layouts/footer')

