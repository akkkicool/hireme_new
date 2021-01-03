<li class="nav-item">
	<a class="nav-link {{$segment1=='customer-profile' ? 'active' : ''}}" href="{{ route('customer_profile')}}">Profile</a>
</li>

<li class="nav-item">
	<a class="nav-link {{$segment1=='messages' ? 'active' : ''}}" href="my_freelancer_messages.html">Messages</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="my_customer_appointments.html">Appointments</a>
</li>
<li class="nav-item">
	<a class="nav-link {{$segment1=='reviews' ? 'active' : ''}}" href="my_freelancer_reviews.html">Reviews</a>
</li>
<li class="nav-item">
	<a class="nav-link {{$segment1=='freelancer-payments' ? 'active' : ''}}" href="my_freelancer_payments.html">Payment</a>
</li>

	