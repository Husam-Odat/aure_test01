<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .post {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .post img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .post h2 {
            margin: 0;
        }

        .post a {
            text-decoration: none;
            color: blue;
        }

        .meta {
            font-size: 14px;
            color: gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>All Blog Posts </h1>

        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->image_url }}</h2>
                @if ($post->image)
                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}"
                        style="width: 300px; height: 200px; object-fit: cover;">
                @endif

                <h2>
                    {{-- <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> --}}
                </h2>
                <p class="meta">
                    By {{ $post->author->name ?? 'Unknown' }} |
                    {{ $post->published_at ? $post->published_at->format('F j, Y') : 'Unpublished' }} |
                    {{ $post->reading_time }}
                </p>
                <p>{{ Str::limit(strip_tags($post->content), 150) }}</p>
            </div>
        @endforeach

        <p><a href="/">Back to home</a></p>
    </div>
</body>

</html>