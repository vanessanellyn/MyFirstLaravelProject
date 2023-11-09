<div>
  Hello I'm a blade template 
</div>

{{-- variable will only be displayed if it is set --}}
@isset($name) 
  <h1>Welcome, {{ $name }}</h1>
@endisset