<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('store-book') }}">
        @csrf
        <h1>Book Form</h1>
        <div>Book Title</div>
        <input type="text" name="title">
        <div>Writer Name</div>
        <input type="text" name="writer">
        <div>Year</div>
        <input type="number" name="published_year">
        <div>Book Cover</div>
        <input type="file" name="cover_path">
        <br><br>
        <button type="submit">Submit</button>



    </form>
    
</body>
</html>