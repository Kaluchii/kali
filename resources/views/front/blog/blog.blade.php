@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $blog->seo_title, 'description' => $blog->seo_description, 'keywords' => $blog->seo_keywords, 'spare' => $blog->title])
    @include('front.rating', ['block_name' => 'blog', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/blog" itemprop="item" class="hide"><span itemprop="name">{{$blog->title}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$blog->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="blog">
        <h1 class="blog__title">{{$blog->title}}</h1>
        <ul class="blog__posts-list">
            @foreach($blog->posts_group as $item)
                <li class="blog__posts-item">
                    <a href="/blog/{{ $item->slug }}" class="blog__item-container">
                        <div class="blog__item-preview-wrap">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="blog__item-preview">
                        </div>
                        <p class="blog__item-text">{{$item->post_name}}</p>
                        <p class="blog__item-pub-date">{{date('d/m/Y', $item->updated_at)}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @include('front.seo-text', ['seotext' => $blog->seotext])
@endsection
