<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 5</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="/app/src/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="/app/src/bootstrap5.min.css" />
    <script type="text/javascript" src="/app/src/bootstrap5.bundle.min.js"></script>

    <!-- include summernote css/js-->
    <link href="/app/src/summernote-0.9.0-dist/summernote-lite.min.css" rel="stylesheet">
    <script src="/app/src/summernote-0.9.0-dist/summernote-lite.min.js"></script>

  </head>
  <body>
    <div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 100
      });
    </script>
  </body>
</html>