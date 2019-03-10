@section('rating')

<div class="contacts-info__rating-wrap">
    <div class="contacts-info__rating rating">
        <span class="rating__please js_rating_text">Пожалуйста, оцените наш материал:</span>
        <div class="rating__stars-wrap js_rating_proprietor" data-entity="{{$block_name}}" data-id="{{$block_id}}">
            <ul class="rating__default">
                <li class="rating__current-rating js_current_rating" style="width:{{$rating['percent']}}%;">{{$rating['middle']}}</li>
                <li class="rating__star">
                    <a class="rating__star-link js_set_rating" data-rating="1" title="1/5" style="width:20%;z-index:6" rel="nofollow">1</a>
                </li>
                <li class="rating__star">
                    <a class="rating__star-link js_set_rating" data-rating="2" title="2/5" style="width:40%;z-index:5" rel="nofollow">2</a>
                </li>
                <li class="rating__star">
                    <a class="rating__star-link js_set_rating" data-rating="3" title="3/5" style="width:60%;z-index:4" rel="nofollow">3</a>
                </li>
                <li class="rating__star">
                    <a class="rating__star-link js_set_rating" data-rating="4" title="4/5" style="width:80%;z-index:3" rel="nofollow">4</a>
                </li>
                <li class="rating__star">
                    <a class="rating__star-link js_set_rating" data-rating="5" title="5/5" style="width:100%;z-index:2" rel="nofollow">5</a>
                </li>
            </ul>
            <div class="rating__total-votes js_rating_result" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                <meta itemprop="ratingValue" content="{{$rating['middle']}}">Текущий рейтинг — {{$rating['middle']}}
                <meta itemprop="bestRating" content="5">
                <meta itemprop="ratingCount" content="{{$rating['count']}}"> ({{$rating['count']}} человек)
            </div>
        </div>
    </div>
</div>

@endsection