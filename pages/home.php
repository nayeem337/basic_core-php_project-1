<?php include 'header.php'; ?>

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" height="280">
                        <div class="card-body">
                            <h4><?php echo $product['name']; ?></h4>
                            <h5>Tk. <?php echo $product['price']; ?></h5>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $product['id']; ?>" class="btn  btn-outline-success">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>