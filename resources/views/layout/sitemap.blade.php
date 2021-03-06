<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc>http://www.markadracing.com/</loc>
      <lastmod>2019-08-31</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
        <loc>http://www.markadracing.com/news</loc>
        <lastmod>2019-08-31</lastmod>
        <changefreq>daily</changefreq>
        <priority>1</priority>
 </url>
 <url>
    <loc>http://www.markadracing.com/contact</loc>
    <lastmod>2019-08-31</lastmod>
    <changefreq>daily</changefreq>
    <priority>1</priority>
</url>
    @foreach ($AllPosts as $post)
        <url>
            <loc>http://www.markadracing.com/news/{{ $post->p_slug }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>