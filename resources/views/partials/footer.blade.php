<footer id="app-footer">
   <section class="azzurra">
    <div>
        @foreach ($options as $option)
        <ul >            
            <li>
                <img src="{{vite::asset( $option['img']) }}" alt="" class="logo">
                    {{ $option['title']}}               
            </li>
        </ul>
        @endforeach
    </div>
   </section>
   <section class="info">
    <div>
        <ul>           
            <h1>DC COMICS</h1> 
            <li>
                link
            </li>
            <h1>SHOP</h1>
            <li>
                link
            </li>
        </ul>
        <ul>           
            <h1>DC</h1> 
            <li>
                link
            </li>
        </ul>
        <ul>           
            <h1>SITES</h1> 
            <li>
                link
            </li>
            <li>
                link
            </li>
        </ul>
    </div>
   </section>
   <section class="follow">
        <div>
            <button>SIGN-UP NOW!</button>
            <ul>
                <h1>FOLLOW US </h1>
                <li>
                    link
                </li>            
                <li>
                    link
                </li>
            </ul>
        </div>
   </section>
</footer>