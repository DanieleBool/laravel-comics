<main class="dark">
    <section class="container">
        <h2>Current series</h2>
        <div class="box">
            @foreach($cards as $card)  
            <div class="card">
                <img src="{{$card['thumb']}}" :alt="card.series">
                <h3>{{$card['title']}}</h3>
            </div>
            @endforeach
        </div>
        <div class="load">
            <button>load more</button>
        </div>
    </section>
</main>