<div class="container-fluid">
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded" style="background-color: rgba(255,255,255,0.95); box-shadow: 0px 3px 10px #888888;" id="sitenav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <a class="navbar-brand" href="#"><img src="/images/atgc_logo.png" height="40px;"></a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="#about">About Us</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#works">How it Works</a> </li>
                 <li class="nav-item"> <a class="nav-link" href="#contactus">Contact Us</a> </li>
            </ul>
            @component('components.share', ['size' => '25']) @endcomponent
        </div>
    </nav>
</div>