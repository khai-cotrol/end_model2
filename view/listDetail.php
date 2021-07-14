<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Customer Name</th>
            <th scope="col">phone</th>
            <th scope="col">address</th>
            <th scope="col">Product Name</th>
            <th scope="col">color</th>
            <th scope="col">quantity Order</th>
            <th scope="col">Price Each</th>
            <th scope="col">Shipped Date</th>
            <th scope="col">Note</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach ($result as $key=> $product ) :?>
                <tr>
                    <th scope="row"><?php echo $product->id ?></th>
                    <td><?php echo $product->customerName ?>"</td>
                    <td><?php echo $product->phone ?></td>
                    <td><?php echo $product->address ?></td>
                    <td><?php echo $product->product_name  ?></td>
                    <td><?php echo $product->color ?></td>
                    <td><?php echo $product->quantityOrder ?></td>
                    <td><?php echo $product->priceEach ?></td>
                    <td><?php echo $product->shippedDate ?></td>
                    <td><?php echo $product->note ?></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

