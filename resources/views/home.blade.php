@extends('layouts.app')

@section('content')
<div>
    <?php echo Auth::user(); ?>
    <img src={{ asset('/storage/images/DbFqB8I6clPGPjEaxUHDjvBqpN7qzn7HwAnxcewC.png') }} alt="photo">
</div>
@endsection
