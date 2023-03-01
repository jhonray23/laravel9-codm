@include('partials.header')
@include('components.nav')
<main>
    <section>
        <header>
            <div class="overlay"></div>
            <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="{{ asset('storage/images/codm-hero-video-desktop.mp4') }}" type="video/mp4">
            </video>
        </header> 
    </section>
</main>

<div class="">
    <section class="cod-gamemodes cod-mobile-section break">
        <div class="title-container">
            <h1>Game Modes</h1>
            <p>The thrill of Call of Duty on the go</p>
        </div>
        <div class="content-container">

            <div class="col-md-6 col-md-push-6 col-sm-12 col">
                <div class="desktop-bg bg">
                    <img width="100%" height="100%" src="{{ asset('storage/images/cod-br.png') }}" alt="Logo">
                </div>
                <div class="content">
                    <h3>Battle Royale</h3>
                    <p>
                    </p>
                    <p>Survive the 100-player experience&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <p></p>
                </div>
            </div>
            <div class="col-md-6 col-md-push-6 col-sm-12  col">
                <div class="desktop-bg bg">
                    <img width="100%" height="100%" src="{{ asset('storage/images/cod-br.png') }}" alt="Logo">
                </div>
                <div class="content">
                    <h3>Multiplayer</h3>
                    <p>
                    </p>
                    <p>Traditional 5v5 team-based combat</p>
                    <p></p>
                </div>
            </div>


        </div>
    </section>
    <section class="cod-multiplayer-maps cod-mobile-section break">
        <div class="title-container">
            <h1>Classic Multiplayer Maps</h1>
            <p>
            </p>
            <p>Fight across fan-favorite maps from Call of Duty history&nbsp;</p>
            <p></p>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide col-sm" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/images/Map-New-Saga.jfif') }}" class="d-block w-100" alt="...">
              
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/Map-Rust.jfif') }}" class="d-block w-100" alt="...">
              
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/Map-Highrise.jfif') }}" class="d-block w-100" alt="...">
               
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

</div>


@include('partials.footer')
