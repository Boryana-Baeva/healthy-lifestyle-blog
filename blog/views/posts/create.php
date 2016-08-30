<?php $this->title = 'Create New Post'; ?>

<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/create-post-style.css"/>
    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });

        tinymce.activeEditor.uploadImages(function(success) {
            document.forms[0].submit();
        });
    </script>
</head>
<body background="<?= APP_ROOT ?>/content/images/background.jpg">
<h1><?= htmlspecialchars($this->title) ?></h1>
<div class="create-block">

    <form method="post">
        <div id="title">Title:
            <input type="text" name="post_title" placeholder="Enter title"/></div>
        <div id="content">
            <textarea id="mytextarea" name="post_content" placeholder="Enter your text here..."></textarea></div>
        <div id="button"><input type="submit" value="Publish"/>
        <a href="<?= APP_ROOT ?>/posts">Cancel</a></div>
    </form>
</div>

</body> 