@section('meta')
    <title>{{!empty($title) ? $title : $spare.' - Kali.kz'}}</title>
    <meta name="description" content="{{$description}}" />
    <meta name="keywords" content="{{$keywords}}" />
@endsection