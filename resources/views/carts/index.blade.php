@foreach ($carts as $cart)
    <?php $image = $cart->img; ?>
            <div>
                <p>{!! nl2br(e($cart->img)) !!}</p>
            </div>
            <div>
                @if(Auth::user()->is_carting($cart->image_id))
                     {!! Form::open(['route' => ['carts.discardcart', $cart->image_id], 'method' => 'delete']) !!}
                     {!! Form::submit('Discard from Cart', ['class' => "btn btn-danger btn-xs"]) !!}
                     {!! Form::close() !!}
                
                @else
                {!! Form::open(['route' => ['carts.addcart', $cart->image_id], 'method' => 'store']) !!}
                        {!! Form::submit('Add to Cart', ['class' => 'btn btn-primary btn-xs']) !!}
                        {!! Form::close() !!}
                    @endif
            <div>
                </div>
        </div>
    </li>
@endforeach
        </div>
    </div>
@endsection