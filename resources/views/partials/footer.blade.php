<footer>
    <div class="footer-top">

        <div class="container h-100 d-flex position-relative">

            <div class="col-1 h-100 mt-5">
                <h5>DC COMICS</h5>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
                <h5>SHOP</h5>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </div>
            <div class="col-1 h-100 mt-5">
                <h5>DC</h5>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </div>
            <div class=" col-1 h-100 mt-5">
                <h5>SITES</h5>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </div>
            <img class="dc-logo position-absolute end-0 top-0" src="../assets/img/dc-logo-bg.png" alt="Dc Logo">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container ms_space_between">
            <div class="button-container">
                <button> SIGN-UP NOW!</button>
            </div>
            <div class="followus-container mt-3 d-flex align-items-center">
                <h5 class="mb-3">FOLLOW US</h5>
                <ul>
                    @foreach ($icons as $icon)
                        <li class="d-block">
                        <a class="icon-container" href="{{$icon['href']}}">
                            <img src="{{Vite::asset($icon['path'])}}" alt="">
                        </a>
                    </li>
                    @endforeach 
                </ul>
            </div>
        </div>
    </div>
</footer>