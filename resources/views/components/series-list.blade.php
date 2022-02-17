<section class="series-list">
    
    <div class="container">
        <div class="current-series">CURRENT SERIES</div>
                    
        <div class="series">

            @foreach ($comics_array as $serie)
            {{-- {{ dd($serie)}} --}}
            
            {{-- Single serie --}}
            <div class="serie">
                <a href="{{ route('comic', ['id' => $serie['id']])}}">
                    <div class="square-img">
                        <img src="{{$serie['thumb']}}" alt="{{$serie['title']}}">
                    </div>
                    <h4>{{$serie['title']}}</h4>
                </a>
            </div>
            {{-- End Single serie --}}
            @endforeach
            
            <div class="load-more">LOAD MORE</div>  
        </div>

                
    </div>
</section>