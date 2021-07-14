<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="trademark">Trademark</label>
            <input type="text" class="form-control" name="trademark">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" name="amount">
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" name="color">
            </div>
            <div>
                <label for="" class="form-label">Image</label>
                <input type="file" name="fileUpload" id="fileUpload">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            <a href="home.php?page=list&action=list" class="btn btn-danger">Cancel</a>
    </form>
</div>