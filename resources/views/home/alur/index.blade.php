<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .point-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f7f9fc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .point {
            margin-bottom: 20px;
            border: 1px solid #b0c5e0;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .title {
            font-weight: bold;
            margin-bottom: 10px;
            cursor: pointer;
            color: #169348;
            display: flex;
            align-items: center;
        }

        .desc {
            margin-left: 20px;
            display: none;
            color: #333;
        }

        .icon {
            margin-right: 5px;
        }

        .open-book-icon {
            font-size: 24px;
        }

        /* Animasi fadeIn */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <script>
        function toggleDescription(element) {
            var answer = element.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        }
    </script>
</head>

<body>
    <div class="point-container fade-in">
        <h1 style="text-align: center;">Alur Menjadi CPMI Pada PT.Karyatama Mitra Sejati Banyumas</h1>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> Langkah 1
            </div>
            <div class="desc">
               Penjelasan langkah 1
            </div>
        </div>

        <div class="point">
            <div class="title" onclick="toggleDescription(this)">
                <span class="icon open-book-icon">📖</span> Langkah 2
            </div>
            <div class="desc">
                Penjelasan langkah 2
            </div>
        </div>

        <!-- Tambahkan langkah lainnya di sini -->

    </div>
</body>

</html>
