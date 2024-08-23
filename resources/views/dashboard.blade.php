@if(session()->has('email'))
{{session()->get('email')}}
<h1>Welcome to the dashboard</h1>
<a href="{{ url('logout') }}">Logout</a>
@else
<script>
    window.location.href = "{{ url('/') }}";
</script>
@endif
