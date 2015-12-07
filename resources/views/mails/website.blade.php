<style>
	.colored {
		padding: 10px;
		/*background-color: #515543;*/
	}
</style>
<h3>{{ ucwords($data['subject']) }}</h3>

<hr>
<strong>Name:</strong> {{ ucwords($data['name']) }}<br>
<strong>Email:</strong> {{ $data['email'] }}<br>
<strong>Phone:</strong> {{ $data['phone'] }}<br>
<strong>Message:</strong> <br> {!! nl2br(ucfirst($data['message']), false) !!}<br>