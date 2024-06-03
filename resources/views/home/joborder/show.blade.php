<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Banner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .button-container {
            position: fixed;
            bottom: 57.8px; /* 20px + 37.8px */
            right: 20px;
        }

        .daftar-button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            text-decoration: none;
        }

        .daftar-button i {
            margin-right: 8px;
        }

        .center-content {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="row">
    <div class="offset-2 col-md-8">
        <a href="/joborder/"><i class="fas fa-arrow-left my-5"></i></a>
        <div class="center-content">
            <h4><b>{{ $bannerjob->title }}</b></h4>
            <p id="created-at" data-created-at="{{ $bannerjob->created_at }}">Dibuat Pada </p>
        </div>
        <img src="/{{ $bannerjob->cover }}" width="100%" alt="">
        <div class="py-3">
            <p>{!! $bannerjob->body !!}</p>
        </div>
    </div>
</div>

<div class="button-container">
    <a href="/pendaftaran" class="daftar-button">
        <i class="fas fa-file-alt"></i>
        Daftar
    </a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var createdAtElement = document.getElementById('created-at');
        var createdAt = createdAtElement.getAttribute('data-created-at');
        
        // Parse the created_at date string into a Date object
        var createdAtDate = new Date(createdAt);

        // Format the date into a more readable format (date, month, and year)
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        var formattedDate = createdAtDate.toLocaleDateString('id-ID', options);

        // Update the element with the formatted date
        createdAtElement.textContent = 'Dibuat Pada : ' + formattedDate;
    });
</script>

</body>
</html>
