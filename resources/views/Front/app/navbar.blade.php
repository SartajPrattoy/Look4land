<nav class="navbar navbar-default navbar-trans navbar-expand-xl fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="{{ route('home') }}">Look4Land<span class="color-b"></span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">@lang('app.categories')</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        @foreach($categories as $category)
                            <li>
                                <a class="dropdown-item" href="{{ route('estates', ['c' => [$category->id]]) }}">
                                    {{ $category->name() }} <span class="badge bg-light text-dark">{{ $category->estates_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">@lang('app.locations')</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        @foreach($locations as $location)
                            <li>
                                <a class="dropdown-item" href="{{ route('estates', ['l' => [$location->id]]) }}">
                                    {{ $location->name() }} <span class="badge bg-light text-dark">{{ $location->estates_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('estates')}}">@lang('app.estates')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('message') }}">@lang('app.contact_us')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pro') }}">@lang('app.pro')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">@lang('app.lang')</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li>
                            {{-- <a class="dropdown-item" href="{{ route('language', 'tm') }}"></a>
                            <a class="dropdown-item" href="{{ route('language', 'ru') }}"></a> --}}
                            <a class="dropdown-item" href="{{ route('language', 'en') }}">English</a>
                        </li>
                    </ul>
                </li>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown">
                            <li>
                                <form class="px-4 py-3" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="loginUsername" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="loginUsername" name="username" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="loginPassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="#">Forgot password?</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
</nav>


