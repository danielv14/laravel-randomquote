<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Quote</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

  @yield('content')
  <script>
    window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
  </script>
  <script src="/js/app.js"></script>
</body>
</html>
