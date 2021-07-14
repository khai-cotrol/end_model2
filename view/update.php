<form action="" method="post" enctype="multipart/form-data">
    <?php if (!empty($products)){
    foreach ($products as $key=> $product): ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" value="<?php echo $product->getName() ?>" name="name" aria-describedby="nameHelp">
    </div>
    <div class="form-group">
        <label for="trademark">Trademark</label>
        <input type="text" class="form-control" value=" <?php echo $product->getTrademark() ?>" name="trademark">

    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" value="<?php echo $product->getPrice() ?>" name="price">

    </div>
    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" class="form-control" value="<?php echo $product->getAmount() ?>" name="amount">

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" value="<?php echo $product->getStatus() ?>" name="status">

        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" value="<?php echo $product->getColor() ?>" name="color">

        </div>
        <div>
            <label for="fileUpload" class="form-label">Image</label>
            <td><img src="view/uploads/<?php echo $product->getImg() ?>" style="width: 200px; height: 250px" alt="Đếu có ảnh"></td>
            <input type="file" name="fileUpload" id="fileUpload">
        </div>
        <?php endforeach;
        } ?>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="home.php?page=list&action=list" class="btn btn-danger">Cancel</a></form>