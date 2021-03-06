<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://www.kali.kz/</loc>
        <changefreq>weekly</changefreq>
        <priority>1</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/products</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/guarantee</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/windows-price</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/balconies-price</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/sale</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/components</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/services</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/contacts</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/blog</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@foreach($products->products_list_1_group as $item)
    <url>
        <loc>https://www.kali.kz/products/{{$item->slug}}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach
@foreach($products->products_list_2_group as $item)
    <url>
        <loc>https://www.kali.kz/products/{{$item->slug}}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach
@foreach($products->other_products_list_group as $item)
    <url>
        <loc>https://www.kali.kz/products/{{$item->slug}}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach
@foreach($components->components_categories_group as $item)
    <url>
        <loc>https://www.kali.kz/components/{{$item->slug}}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach
@foreach($blog->posts_group as $item)
    <url>
        <loc>https://www.kali.kz/blog/{{$item->slug}}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
@endforeach
    <url>
        <loc>https://www.kali.kz/about</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
@foreach($components->components_categories_group as $category)
@foreach($category->components_list_group as $item)
    <url>
        <loc>https://www.kali.kz/components/{{$category->slug}}/{{$item->slug}}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
@endforeach
@endforeach
    <url>
        <loc>https://www.kali.kz/calculator</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/pay</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>https://www.kali.kz/sitemap</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
</urlset>
