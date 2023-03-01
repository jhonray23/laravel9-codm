@include('partials.header')
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
        <a href="/" class="navbar-brand"><img width="100%" height="30" src="{{ asset('storage/images/cod-logo.png') }}" alt="Logo"></a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <a href="#" class="nav-item nav-link">Messages</a>
                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
            </div>
        </div>
    </div>
</nav>
<main>
    <section>
        
        <div class="jumbotron jumbotron-fluid">
            <div class="html5-container">
                <video class="bg-video desktop" playsinline="" loop="" muted="" poster="https://www.callofduty.com/mobile/content/dam/atvi/callofduty/mobile/home/hero/codm-hero-still-desktop.jpg" __idm_id__="7348226">
                    <source src="https://www.callofduty.com/cdn/codm/videos/home/codm-hero-video-desktop.mp4" type="video/mp4">
                </video>
            </div>
            {{-- <img  class="img-fluid hero-img" src="{{ asset('storage/images/COD-Hub_Hero_S2_Desktop.jpg') }}" alt="" > --}}
   
        </div>


    </section>
</main>


<header>
    <div class="overlay"></div>
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="{{ asset('storage/images/codm-hero-video-desktop.mp4') }}" type="video/mp4">
    </video>
</header>


<section class="cod-gamemodes cod-mobile-section break">
    <div class="title-container">
        <h1>Game Modes</h1>
        <p>The thrill of Call of Duty on the go</p>
    </div>
    <div class="content-container">
        <div class="col-1 col">
            <div class="desktop-bg bg" style="background-image: url(\2f content\2f dam\2f atvi\2f callofduty\2fmobile\2fhome\2fgamemodes\2fmodes-battle-royale.jpg)"></div>
            <div class="mobile-bg bg" style="background-image: url(\2f content\2f dam\2f atvi\2f callofduty\2fmobile\2fhome\2fgamemodes\2fmodes-battle-royale.jpg);"></div>

            <div class="content">
                <h3>Battle Royale</h3>
                <p></p><p>Survive the 100-player experience&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p></p>
            </div>
        </div>
        <div class="col-2 col">
            <div class="desktop-bg bg" style="background-image: url(\2f content\2f dam\2f atvi\2f callofduty\2fmobile\2fhome\2fgamemodes\2fmodes-multiplayer.jpg);"></div>
            <div class="mobile-bg bg" style="background-image: url(\2f content\2f dam\2f atvi\2f callofduty\2fmobile\2fhome\2fgamemodes\2fmodes-multiplayer.jpg);"></div>
    
            <div class="content">
                <h3>Multiplayer</h3>
                <p></p><p>Traditional 5v5 team-based combat</p>
<p></p>
            </div>
        </div>
    </div>
</section>


@include('partials.footer')
