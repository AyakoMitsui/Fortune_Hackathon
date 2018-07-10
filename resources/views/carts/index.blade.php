
@foreach ($carts as $cart)
<img src="{{url($cart->image)}}">
    <div>
        {!! Form::open(['route' => ['carts.discart', $cart->item_id], 'method' => 'delete']) !!}
        {!! Form::submit('Discard from Cart', ['class' => "btn btn-danger btn-lg"]) !!}
        {!! Form::close() !!}
    </div>
 @endforeach
                