<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Article Create</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Create New Article</h1>
    <form class="" method="post" action="<?php echo DOMAIN . "/public/index.php?route=article&action=doCreate" ?>">
        <div class="">
            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="">
            <label class="form-label" for="summary">Summary</label>
            <input class="form-control" type="text" name="summary" id="summary">
        </div>
        <div class="">
            <label class="form-label" for="content">Content</label>
            <input class="form-control" type="text" name="content" id="content">
        </div>
        <div class="">
            <label class="form-label" for="category_id">Category</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="" selected disabled>None</option>
                <?php foreach ($categories as $category) { ?>
                    <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="">
            <label class="form-label" for="member_id">Member</label>
            <select class="form-control" name="member_id" id="member_id">
                <option value="" disabled selected>None</option>
                <?php foreach ($members as $member) { ?>
                    <option value="<?php echo $member->getId(); ?>"><?php echo $member->getForename() . " " . $member->getSurname(); ?></option>
                <?php } ?>
            </select></div>
        <div class="">
            <label class="form-label" for="image_id">Image</label>
            <select class="form-control" name="image_id" id="image_id">
                <option value="" disabled selected>None</option>
                <?php foreach ($images as $image) { ?>
                    <option value="<?php echo $image->getId(); ?>"><?php echo $image->getFile(); ?></option>
                <?php } ?>
            </select></div>
        <div class="">
            <label class="form-label">Publish</label>
            <div class="">
                <label for="">Yes</label>
                <input value="1" type="radio" name="publish">
                <label for="">No</label>
                <input value="0" type="radio" name="publish">
            </div>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>