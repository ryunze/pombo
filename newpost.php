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

    <?php include_once('app/components/navbar.php') ?>

    <div class="container">
        <div class="d-flex align-items-center mb-3">
            <button id="btn-save" class="btn btn-primary ms-auto">
                <span class="spinner-border spinner-border-sm d-none" id="btn-save-spiner" aria-hidden="true"></span>
                <span>Save</span>
            </button>
        </div>
        <form>
            <div class="mb-3">
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <!-- summernote editor -->
            <div id="summernote"></div>
        </form>

    </div>


    <!-- init summernote -->
    <script>
        $(document).ready(function () {

            $('#summernote').summernote({
                placeholder: 'Write your story..',
                tabsize: 2,
                height: 225
            });

            $('#btn-save').click(function () {

                const title = $('#title').val();
                const content = $('#summernote').summernote('code');

                const data = {
                    title: title,
                    content: content
                }

                $.ajax({
                    url: '/api/post.php',
                    method: 'post',
                    data: JSON.stringify(data),
                    success: (res) => {
                        console.log(res)
                    },
                    error: () => {
                        console.error('ERR')
                    }
                });

            });

        });
    </script>

</body>

</html>