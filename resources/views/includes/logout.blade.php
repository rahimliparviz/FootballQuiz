<a class="logout" href="{{route('logout')}}">
    <button>
        @php
            $logout="Logout";
                if(isset($_COOKIE['locale'])) {
                    if ($_COOKIE['locale'] == "az"){
                    $logout = "Çıxış";
                    }
                }
        @endphp
        {{  $logout}}
    </button>
</a>
