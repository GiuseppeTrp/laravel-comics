<header>

    <nav>
    
        <div class="container">
                <img src="{{Vite::asset('/resources/views/images/dc-logo.png')}}" id="logo" alt="logo DC">


    
    
            <ul class="links">
                @foreach($linkNav as $link)
                    <li>
                        <a href="" class="text-dark " > {{$link}}
                    </a>
                        
                    </li>
                @endforeach
            </ul>
            <form class="form-inline">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                  </div>
                </div>
              </form>
                  
        </div>
    
    </nav>

    <div class="jumbo">
        
    </div>
    
</header>