<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <form method="POST" action="{{ route('update-book', $book->id) }}">
        @csrf
        @method('PUT')
        
        <h1>Edit Book Form</h1>
        
        <div>Book Title</div>
        <input type="text" name="title" value="{{ $book->title }}" required>
        
        <div>Writer Name</div>
        <input type="text" name="writer" value="{{ $book->writer }}" required>
        
        <div>Year</div>
        <input type="number" name="published_year" value="{{ $book->published_year }}" required>
        
        <div>Book Cover</div>
        <input type="file" name="cover_path">
        
        <br><br>
        <button type="submit">Update</button>
        <a href="/">Cancel</a>
    </form>
</body>
</html>