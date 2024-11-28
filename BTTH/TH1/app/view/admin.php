<?php include 'header.php'; ?>
<main>
    <main>
        <div class="container">
            <button id="btnAddProduct" class="add-btn">Thêm mới loại hoa</button>
            <div id="addModal" class="modal">
                <div class="modal-content">
                    <h2>Thêm hoa mới</h2>
                    <span class="close" data-close-modal="addModal">CLOSE</span>
                    <form method="POST" action="index.php?action=CRUD">
                        <input type="hidden" name="action" value="add">
                        <input type="text" name="ten" placeholder="Tên loại hoa" required>
                        <input type="text" name="moTa" placeholder="Mô tả loại hoa" required>
                        <button type="submit">Thêm mới</button>
                    </form>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Tên loại hoa</th>
                        <th>Mô tả loại hoa</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($flowers as $flower): ?>
                    <tr>
                        <td><?= $flower['ten'] ?></td>
                        <td><?= $flower['moTa'] ?></td>
                        <td>
                            <button class="editProductBtn" data-id="<?= $flower['id'] ?>"
                                data-name="<?= $flower['ten'] ?>" data-price="<?= $flower['moTa'] ?>">✏️</button>
                        </td>
                        <td>
                            <button class="deleteProductBtn" data-id="<?= $flower['id'] ?>">🗑️</button>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div id="editProductModal" class="modal">
            <div class="modal-content">
                <span class="close" data-close-modal="editProductModal">CLOSE</span>
                <h2>Sửa sản phẩm</h2>
                <form method="POST" id="editProductForm" action="index.php?action=CRUD">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="id" id="editProductId">
                    <input type="text" name="ten" id="editProductName" required>
                    <input type="text" name="moTa" id="editProductPrice" required>
                    <button type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
        <div id="deleteProductModal" class="modal">
            <div class="modal-content">
                <span class="close" data-close-modal="deleteProductModal">CLOSE</span>
                <h2>Xóa sản phẩm</h2>
                <form method="POST" id="deleteProductForm" action="index.php?action=CRUD">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" id="deleteProductId">
                    <p>Bạn có chắc chắn muốn xóa sản phẩm này không?</p>
                    <button type="submit">Xóa</button>
                </form>
            </div>
        </div>
    </main>
</main>
<?php include 'footer.php'; ?>