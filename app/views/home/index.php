<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Article</h1>
    <a href="<?php echo DOMAIN . "/public/index.php?route=article&action=create"; ?>" class="btn btn-info">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th class="text-center" scope="col">#</th>
            <th class="text-center">Title</th>
            <th class="text-center">Summary</th>
            <th class="text-center">Content</th>
            <th class="text-center" colspan="2">Action</th>
            <!--            <td >Created</td>-->
            <!--            <td >Category_id</td>-->
            <!--            <td >Member_id</td>-->
            <!--            <td >Image_id</td>-->
            <!--            <td >Published</td>-->
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($datas as $data) { ?>
            <tr>
                <th scope="row"><?php echo $data->getId() ?></th>
                <td><?php echo $data->getTitle() ?></td>
                <td><?php echo $data->getSummary() ?></td>
                <td><?php echo $data->getContent() ?></td>
                <td class=""><a href="" class="btn btn-warning">Edit</a>
                </td>
                <form action="<?php echo DOMAIN . "/public/index.php?route=article&action=delete"?>" method="post">
                    <input name="id" type="text"  hidden  value="<?php echo $data->getId()?>">
                    <td class="">
                        <button class="btn btn-danger" onclick="if (confirm('Are you sure want to delete?'))">Delete</button>
                    </td>
                </form>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>