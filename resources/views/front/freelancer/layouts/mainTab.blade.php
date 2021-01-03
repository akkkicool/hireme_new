<li class="nav-item">
	<a class="nav-link {{$segment1=='freelancer-profile' ? 'active' : ''}}" href="{{ route('freelance_profile')}}">Profile</a>
</li>
<li class="nav-item">
	<a class="nav-link {{$segment1=='freelancer-portfolio' ? 'active' : ''}}" href="{{ route('freelancer_portfolio')}}">Portfolio</a>
</li>
<li class="nav-item">
	<a class="nav-link {{$segment1=='store-front' ? 'active' : ''}}" href="{{ route('store_front')}}">My Store Front</a>
</li>
<li class="nav-item">
	<a class="nav-link {{$segment1=='messages' ? 'active' : ''}}" href="my_freelancer_messages.html">Messages</a>
</li>
<li class="nav-item">
	<a class="nav-link {{$segment1=='reviews' ? 'active' : ''}}" href="my_freelancer_reviews.html">Reviews</a>
</li>
<li class="nav-item">
	<a class="nav-link {{$segment1=='freelancer-payments' ? 'active' : ''}}" href="my_freelancer_payments.html">Payment</a>
</li>