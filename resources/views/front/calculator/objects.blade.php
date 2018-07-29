@section('objects')
    <script type="text/javascript">
        var componentsObj = {
            net_price: '{{$calculator_components->net_price}}',
            net_price_color: '{{$calculator_components->net_price_color}}',
            colors: {
                @foreach($calculator_components->colors_group as $color)
                {{$color->id}} : {
                    name: '{{$color->color_name}}'
                },
                @endforeach
            },
            profiles: {
                @foreach($calculator_components->profiles_group as $profile)
                {{$profile->id}} : {
                    name: '{{$profile->component_name}}',
                    price: '{{$profile->price}}',
                    price_color: '{{$profile->price_color}}'
                },
                @endforeach
            },
            glass: {
                @foreach($calculator_components->double_glazed_windows_group as $glass)
                {{$glass->id}} : {
                    name: '{{$glass->component_name}}',
                    price: '{{$glass->price}}'
                },
                @endforeach
            },
            outflow: {
                @foreach($calculator_components->outflow_group as $outflow)
                {{$outflow->id}} : {
                    name: '{{$outflow->component_name}}',
                    price: '{{$outflow->price}}'
                },
                @endforeach
            },
            window_sill: {
                @foreach($calculator_components->window_sill_group as $window_sill)
                {{$window_sill->id}} : {
                    name: '{{$window_sill->component_name}}',
                    price: '{{$window_sill->price}}',
                    price_color: '{{$window_sill->price_color}}'
                },
                @endforeach
            },
            slope: {
                @foreach($calculator_components->slope_group as $slope)
                {{$slope->id}} : {
                    name: '{{$slope->component_name}}',
                    price: '{{$slope->price}}',
                    price_color: '{{$slope->price_color}}'
                },
                @endforeach
            },
        };


        var productsObj = {
            @foreach($calculator->product_categories_group as $category)
            @foreach($category->product_types_group as $product)
            {{$product->id}} : {
                name: '{{$product->type_name}}',
                imgUrl: '{{$product->img->link}}?{{$product->img->cache_index}}',
                imposts_count: '{{$product->imposts_count}}',
                flaps_count: '{{$product->flaps_count}}',
                furniture_price: '{{$product->furniture_price}}',
                furniture_price_color: '{{$product->furniture_price_color}}',
                parent_id: '{{$category->id}}'
            },
            @endforeach
            @endforeach
        };
    </script>
@endsection