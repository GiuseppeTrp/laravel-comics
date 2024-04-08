<footer>
    

    <div class="footer-top">
        <div class="container d-flex justify-between align-items-center h-100 ">
            <div class="links d-flex flex-column flex-wrap  gap-1 align-content-start h-100 py-2 px-0">
                @foreach($footerLinks as $currentFooterList)
                <div class="link-list">
                    <h4 class="text-uppercase fs-6 mb-1">{{ $currentFooterList['title'] }}</h4>
                    <ul class=" p-0 text-light list-unstyled ">
                        @foreach($currentFooterList['list'] as $currentLink)
                        <li class="  m-1 text-light">{{ $currentLink }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
                <div class=" big-logo d-flex justify-content-center">
                    <img src="{{Vite::asset('/resources/views/images/dc-logo-bg.png')}}"  alt="logo DC">
            
            
                </div>
            </div>
            

        </div>
    </div>

    <div class="footer-bottom py-2 px-0">
        <div class="container d-flex justify-between align-items-center h-100">
            <div class="cta">
                <button class="btn py-2 px-3 fs-1 fw-bold text-uppercase">Sign-up now!</button>
            </div>

          
        </div>
        <div class="social-links d-flex align-items-center justify-content-end p-3 ">
            <strong class="text-uppercase fs-6 m-3 ">Follow Us</strong>
            <ul class=" d-flex align-items-end justify-content-end gap-3 me-5 list-unstyled">
                @foreach($socials as $social)
                    <li>
                        <img src="{{Vite::asset("resources/views/images/{$social['icon']}")}}" alt="{{ $social['name'] }}">
                    </li>
                @endforeach
            </ul>
        </div>
        
    </div>
    
</footer>
