<h1><a href="/profile/en">English</a></h1>
<h1><a href="/profile/hi">Hindi</a></h1>
<h1><a href="/profile/ko">korian</a></h1>


<h1>{{__('profile.welcome', ['name' => 'dayle'])}}</h1>
<a href="">{{__('profile.list')}}</a>
<a href="">{{__('profile.about')}}</a>
<a href="">{{__('profile.contact')}}</a>
<br>

{{ trans_choice('There is one apple|There are many apples', 2) }}<br>
{{ trans_choice('profile.apples',21) }}<br><br>
{{ trans_choice('profile.minutes_ago', 1, ['value' => 5]) }}
<br>
