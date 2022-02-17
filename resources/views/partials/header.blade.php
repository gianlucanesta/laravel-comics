<header>
    <div class="header-top">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="header-menu">
        <div class="container space-between d-flex align-items-center">
            <div class="logo">
                <img src="{{ asset('images/dc-logo.png')}}" alt="Logo DC">
            </div>
    
            <nav>
                
                <ul class="menu-list">
                    <li>
                        <a class="{{ Request::route()->getName() === 'characters' ? 'current' : ''}}" href="{{ route('characters')}}">characters</a>
                    </li> 
                    <li>
                        <a  class="{{ Request::route()->getName() === 'homepage' || 'comic' ? 'current' : ''}}" href="{{ route('homepage')}}">comics</a>
                    </li>    
                    <li>
                        <a href="#">movies</a>
                    </li>    
                    <li>
                        <a href="#">tv</a>
                    </li>
                    <li>
                        <a href="#">games</a>
                    </li>    
                    <li>
                        <a href="#">collectibles</a>
                    </li>    
                    <li>
                        <a href="#">videos</a>
                    </li>    
                    <li>
                        <a href="#">fans</a>
                    </li>    
                    <li>
                        <a href="#">news</a>
                    </li>    
                    <li>
                        <a href="#">shop</a>
                    </li>                         
                </ul>
            </nav>
        </div>
    </div>

    <div class="header-jumbo">
        <div class="content">
            <img src="{{ asset('images/jumbotron.jpg')}}" alt="">
        </div>     
    </div>
    
</header>