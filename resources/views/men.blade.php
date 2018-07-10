<?php
    $images =App\Image::where('sex', 'M')->get()
    ?>
    @foreach($images as $image)
    <img src="{{url($image->img)}}">
    
    {!! Form::open(['route' => ['carts.store', $image->id], 'method' => 'store']) !!}
                        {!! Form::submit('カートに追加', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                    </div>
    @endforeach 
    
    {!! link_to_route('carts.index', 'カート一覧', null, ['class' => 'btn btn-lg btn-primary']) !!}