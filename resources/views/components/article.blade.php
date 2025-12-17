@props(['id', 'title', 'description'])

<article class="article">
    <a href="{{ route('articles.show', $id) }}">
        <h3>{{$title}}</h3>
    </a>
    <p>{{$description}}</p>
</article>