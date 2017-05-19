<!DOCTYPE html>

<html lang="en">
<head>


</head>
<body style="background-color:lightblue;">


<ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            {!! Form::open(array(
        'route' => 'game.store',
        'class' => 'form',
        'novalidate' => 'novalidate',
        'files' => true)
             ) !!}}
            <div class="form-group">
                {!! Form::label('Your picture') !!}
                {!! Form::file('image', null) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Upload picture!') !!}
            </div>
            {!! Form::close() !!}
        </li>
    @endif
</ul>


</body>
</html>