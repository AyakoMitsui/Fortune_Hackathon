<?php
    $items =App\Item::where('sex', 'M')->get()
    ?>
    @foreach($items as $item)
    <img src="{{url($item->image)}}">
    
    {!! Form::open(['route' => ['carts.store', $item->id], 'method' => 'store']) !!}
                        {!! Form::submit('カートに追加', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
                    </div>
    @endforeach 
    
    {!! link_to_route('carts.index', 'カート一覧', null, ['class' => 'btn btn-lg btn-primary']) !!}