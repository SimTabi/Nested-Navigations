<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nested Navigations</title>
    <link rel="stylesheet" href="theme/css/demo.css">
    <link rel="stylesheet" href="theme/css/nestable.css">
</head>
<body>

    <h1>Nested Navigations</h1>
    <ul id="nav">
        <li><a href="<?php echo BASE_URL; ?>?page=list">List Menus</a></li>
        <li><a href="<?php echo BASE_URL; ?>?page=create">Create New Menu</a></li>
    </ul>

    <ol class="breadcrumb">
        <li><a href="<?php echo BASE_URL; ?>">Nested Navigations</a></li>
        <li><a href="<?php echo BASE_URL; ?>?page=list">Edit Menu</a></li>
        <li class="current"><a href="#"><?php echo $menu['name']; ?></a></li>
    </ol>

    <div id="content">

        <form action="#" method="post">
            <div>
                <label for="">Menu Name</label>
                <input type="text" name="name" id="menuName" value="<?php echo $menu['name']; ?>" />
            </div>
            <div style="margin-top: 10px;">
                <label for="">Add New Link to Menu</label>
                <input type="text" placeholder="Anchor" id="anchor" />
                <input type="text" placeholder="URL" id="url" />
            </div>

            <input type="hidden" name="id" id="id" value='<?php echo $menu['id']; ?>' />
            <input type="hidden" name="structure" id="structure" value='<?php echo $menu['structure']; ?>' />
            <div style="margin-top: 5px;">
                <button type="button" id="addNode">Add Link to Menu</button>
                <button type="button" id="saveMenu">Save Menu</button>
            </div>
        </form>

        <div class="dd">
            <ol class="dd-list">

            </ol>
        </div>

        <code id="output"></code>
    </div>


    <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script src="vendor/jquery/jquery.nestable.js"></script>
    <script>
        baseUrl = '<?php echo BASE_URL; ?>';
    </script>
    <script src="theme/js/main.js"></script>

    <script>
        obj = $('#structure').val();
        $.each(JSON.parse(obj), function (index, item) {
            $('.dd > ol').append(build(item));
        });
    </script>

</body>
</html>