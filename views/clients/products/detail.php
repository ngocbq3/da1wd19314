<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="container mt-5">
    <div class="row">
        <!-- Hình ảnh sản phẩm -->
        <div class="col-md-6">
            <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="img-fluid rounded">
        </div>
        <!-- Thông tin sản phẩm -->
        <div class="col-md-6">
            <h1 class="display-5"><?= $product['name'] ?></h1>
            <p class="text-muted">Trạng thái:
                <?php if ($product['quantity'] > 0) : ?>
                    <span class="badge bg-success">Còn hàng</span>
                <?php else : ?>
                    <span class="badge bg-danger">Hết hàng</span>
                <?php endif ?>
                <!-- Thay đổi theo trạng thái -->
            </p>
            <h3 class="text-danger">Giá: <?= number_format($product['price']) ?> VNĐ</h3>
            <p><strong>Số lượng còn:</strong> <?= $product['quantity'] ?></p>
            <p class="mt-4">
                <strong>Mô tả sản phẩm:</strong><br>
                <?= $product['description'] ?>
            </p>
            <!-- Nút thêm vào giỏ hàng -->
            <div class="mt-4">
                <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>" class="btn btn-primary btn-lg">
                    <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                </a>
            </div>
        </div>
    </div>
    <!-- Thêm phần mô tả chi tiết nếu cần -->
    <div class="row mt-5">
        <div class="col">
            <h2>Mô tả chi tiết</h2>
            <p>
                <?= $product['description'] ?>
            </p>
        </div>
    </div>
</div>

<?php include_once ROOT_DIR . "views/clients/footer.php" ?>