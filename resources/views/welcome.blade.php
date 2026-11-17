<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="GET" action="/create-book">
        <input type="submit" value="+ Add New Book">
    </form>
    <br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Cover</th>
                <th>Title</th>
                <th>Writer</th>
                <th>Published Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td><img src="{{ asset('storage/' . $book->cover_path) }}" width="50" alt="Cover"></td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->writer }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>
                        <form method="GET" action="{{ route('edit-book', $book->id) }}" style="display:inline;">
                            <input type="submit" value="Edit">
                        </form>

                        <form method="POST" action="{{ route('destroy-book', $book->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>