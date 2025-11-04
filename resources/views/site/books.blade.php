<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 40px;
            font-size: 2.5rem;
        }

        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .book-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .book-cover {
            width: 100%;
            height: 350px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }

        .book-info {
            padding: 20px;
        }

        .book-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .book-author {
            color: #666;
            margin-bottom: 10px;
        }

        .book-price {
            font-size: 1.5rem;
            color: #667eea;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Our Book Collection</h1>
        <div class="books-grid">

            @if ($books->isNotEmpty())
                @foreach ($books as $book)
                    <div class="book-card">
                        <div class="book-cover">📖</div>
                        <div class="book-info">
                            <div class="book-title">{{ $book->name }}</div>
                            <div class="book-author">by {{ $book->author }}</div>
                            <div class="book-price">{{ $book->page }} pages</div>
                        </div>
                    </div>
                @endforeach
            @else
                <div
                    style="text-align: center; padding: 60px 20px; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);">
                    <div style="font-size: 4rem; margin-bottom: 20px;">📚</div>
                    <h2 style="color: #333; margin-bottom: 10px;">No Books Found</h2>
                    <p style="color: #666; font-size: 1.1rem;">There are currently no books available in our collection.
                    </p>
                </div>
            @endif


        </div>
    </div>
</body>

</html>
