<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <h4>Feedback List</h4>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rating</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feedback as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->rating }}</td>
                    <td>{{ $item->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
