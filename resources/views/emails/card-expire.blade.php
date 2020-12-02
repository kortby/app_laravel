@component('mail::message')

Dear {{ $userName }},

<strong>Attention!</strong> Our records show that your credit card will expire in <strong>{{ $expirationDate->format('m/d/Y') }}</strong> Please update your credit card information to avoid interruptions in service.

@component('mail::button', ['url' => 'dream-singles.com'])
Update My Credit Card
@endcomponent

Thank you for being a valuable member of <a href="dream-singles.com">dream-singles.com</a>

Sincerely
<a href="dream-singles.com">dream-singles.com</a>

@component('mail::subcopy')
<h2 style="text-align:center;">Client Services</h2>
<a href="https://dream-singles.com/" style="display: inline-block;text-align: center;width: 120px; text-decoration:none;color:#333;">
<img src="https://picsum.photos/64" alt=""><br>
Contact Us
</a>
<a href="https://dream-singles.com/" style="display: inline-block;text-align: center;width: 125px; text-decoration:none;color:#333;">
<img src="https://picsum.photos/64" alt=""><br>
Call Us<br>
1(888)206-7057
</a>
<a href="https://dream-singles.com/" style="display: inline-block;text-align: center;width: 125px; text-decoration:none;color:#333;">
<img src="https://picsum.photos/64" alt=""><br>
Text Us<br>
1(214)206-7057
</a>
<a href="https://dream-singles.com/" style="display: inline-block;text-align: center;width: 120px; text-decoration:none;color:#333;">
<img src="https://picsum.photos/64" alt=""><br>
My Account
</a>

@endcomponent


@endcomponent