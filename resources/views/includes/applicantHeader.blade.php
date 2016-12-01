//TODO This Header is not prperly formated or cutomized. Just Copy pasted.
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{route('profile')}}">Profile</a></li>
    <li><a href="#!"> Purchase History</a></li>
    <li class="divider"></li>
    <li><a href="#!">Messeges</a></li>
    <li class="divider"></li>
    <li><a href="{{route('passwordResetForm')}}">Reset Password</a></li>

</ul>
<nav>
    <div class="nav-wrapper">
        <img href="{{URL::to('Welcome')}}" src="photos/logo.jpg" class="brand-logo" style="width:64px;height:64px;">
        <ul class="right hide-on-med-and-down">

            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('searchItem')}}">Search</a></li>
            <li><a href="{{route('UpdateOrder')}}">Udate Order</a></li>
            <li><a href="{{route('return')}}">Return Item</a></li>
            <li><a href="{{URL::to('aboutUs')}}">About Us</a></li>


            @if(Auth::check())
            <li><a href="{{route('signout')}}">Sign Out</a></li>
            @else
            <li><a href="{{url('signup')}}">Sign up</a></li>


            @endif

            <!-- Dropdown Trigger -->

            <li><a class="dropdown-button" href="" data-activates="dropdown1">My Account<i class="material-icons right"></i></a></li>
        </ul>
    </div>
</nav>