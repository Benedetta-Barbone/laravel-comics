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
                Characters
            </li>
            <li>
                Comics
            </li>
            <li>
               Movies
            </li>
            <li>
                TV
            </li>
            <li>
                Videos
            </li>
            <li>
                Games
            </li>
            <li>
                News
            </li>            
        </ul>
        <ul>           
            <h1>SHOP</h1> 
            <li>
                Shop DC
            </li>
            <li>
                Shop DC collectibles
            </li>
        </ul>
        <ul>           
            <h1>DC</h1> 
            <li>
                Terms of Use
            </li>
            <li>
                Privacy policy (new)
            </li>
                        <li>
                Ad Choices
            </li>
            <li>Advertising
            </li>
                        <li>
               Jobs
            </li>
            <li>
                Subscriptions
            </li>
            <li>
                Talent Workshops
            </li>
            <li>
                CPSC Certificates
            </li>
                        <li>
                Ratings
            </li>
            <li>
                Shop Help
            </li>
                        <li>
                COntact Us
            </li>
        </ul>
        <ul>           
            <h1>SITES</h1> 
            <li>
               Dc
            </li>
            <li>
                MAD Magazine
            </li>
            <li>
                Dc Kids
            </li>
            <li>
                DC Universe
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