<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Post</title>
    
    <!-- jquery -->
    <script type="text/javascript" src="/app/src/jquery-3.7.1.min.js"></script>

    <!-- bootstrap5 -->
    <link rel="stylesheet" href="/app/src/bootstrap5.min.css" />
    <script type="text/javascript" src="/app/src/bootstrap5.bundle.min.js"></script>

    <!-- summernote-->
    <link href="/app/src/summernote-0.9.0-dist/summernote-lite.min.css" rel="stylesheet">
    <script src="/app/src/summernote-0.9.0-dist/summernote-lite.min.js"></script>

  </head>
  <body>

    <!-- editor -->
    <div id="summernote"></div>

    <!-- init summernote -->
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 5',
        tabsize: 2,
        height: 100
      });
    </script>
    
  </body>
</html>