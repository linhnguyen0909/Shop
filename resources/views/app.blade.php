<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @php $locale = session()->get('locale'); @endphp
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @switch($locale)
                @case('fr')
                <img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French
                @break
                @case('ge')
                <img src="{{asset('img/ge.png')}}" width="30px" height="20x"> German
                @break
                @case('vn')
                <img src="{{asset('img/vn.png')}}" width="30px" height="20x"> Spanish
                @break
                @case('in')
                <img src="{{asset('img/in.png')}}" width="30px" height="20x"> Hindi
                @break
                @case('pk')
                <img src="{{asset('img/pk.png')}}" width="30px" height="20x"> Urdu
                @break
                @default
                <img src="{{asset('img/us.png')}}" width="30px" height="20x"> English
            @endswitch
            <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.png')}}" width="30px" height="20x"> English</a>
            <a class="dropdown-item" href="lang/fr"><img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French</a>
            <a class="dropdown-item" href="lang/ge"><img src="{{asset('img/ge.png')}}" width="30px" height="20x"> German</a>
            <a class="dropdown-item" href="lang/es"><img src="{{asset('img/vn.png')}}" width="30px" height="20x"> Spanish</a>
            <a class="dropdown-item" href="lang/in"><img src="{{asset('img/in.png')}}" width="30px" height="20x"> Hindi</a>
            <a class="dropdown-item" href="lang/pk"><img src="{{asset('img/pk.png')}}" width="30px" height="20x"> Urdu</a>
        </div>
    </li>
</ul>
