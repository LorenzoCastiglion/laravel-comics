
<?php  

$links = config('comics.navbar');

?>
<header>
    <div class="container d-flex justify-content-center align-items-center">
        <a href="#">
            <img class="logo-dc" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </a>
        <nav>
            <ul class="ul-header d-flex">
                @foreach ($links as $link)
                <li class="{{Route::currentRouteName() == $link['url'] ? 'active' : ''}}"><a :href="{{$link['url']}}">{{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>


<style scoped lang="sccs">
    header{
    padding: 10px 0;
}
</style>

