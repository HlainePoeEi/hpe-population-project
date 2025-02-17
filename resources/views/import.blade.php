<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSV Import</title>
    <script>
        // Auto-hide the alert after 3 seconds
        function hideAlert() {
            setTimeout(() => {
                let alertBox = document.getElementById('success-alert');
                if (alertBox) {
                    alertBox.style.display = 'none';
                }
            }, 3000);
        }
    </script>
    <style>
        .alert {
            padding: 10px;
            background-color: green;
            color: white;
            margin-bottom: 15px;
            display: inline-block;
            border-radius: 5px;
        }
    </style>
</head>
<body onload="hideAlert()">
    <h2>Import CSV File</h2>

    <!-- Success message -->
    @if(session('success'))
        <div id="success-alert" class="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">CSV Upload</label>
        <input type="file" name="file" id="file" accept=".csv">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
