<header>
    <div class="container d-flex justify-content-center align-items-center">
        <a href="#">
            <img class="logo-dc" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </a>
        <nav>
            <ul class="ul-header d-flex   ">
                <li>
                    <a class="nav-link {{Route::currentRouteName() == 'characters' ? 'active' : ''}}" href="{{route('characters')}}">
                         characters
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">
                        comics
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('movies')}}">
                         movies
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{route('tv')}}">
                        tv
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'games' ? 'active' : ''}}" href="{{route('games')}}">
                         games
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">
                         collectibles
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'videos' ? 'active' : ''}}" href="{{route('videos')}}">
                         videos
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'fans' ? 'active' : ''}}" href="{{route('fans')}}">
                         fans
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'news' ? 'active' : ''}}" href="{{route('news')}}">
                         news
                     </a> 
                 </li>
                 <li>
                    <a class="nav-link {{Route::currentRouteName() == 'shop' ? 'active' : ''}}" href="{{route('shop')}}">
                         shop
                     </a> 
                 </li>
            </ul>
        </nav>
    </div>
</header>


<style scoped lang="sccs">
    header{
    padding: 10px 0;
}
</style>

