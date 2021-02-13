@foreach ($errors->all() as $item)
    <div class="alert alert-danger">{{$item}}</div>
@endforeach
@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif