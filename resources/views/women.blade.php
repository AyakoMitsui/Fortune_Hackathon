<?php
    $images =App\Image::where('sex', 'W')->get()
    ?>
    @foreach($images as $image)
    <img src="{{url($image->img)}}">
    {!! Form::open(['route' => ['women.store', $image->id], 'method' => 'store']) !!}
                        {!! Form::submit('カートに追加', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                    </div>
    @endforeach