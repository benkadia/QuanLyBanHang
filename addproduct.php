<div class="page-content">
    <div class="panel">
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="col-md-12">
                    <!-- Example Basic Form (Form grid) -->
                    <div class="example-wrap">
                        <h4 class="example-title">Thêm Sản Phẩm</h4>
                        <?= showmsg() ?>
                        <div class="example">
                            <form action="<?= href('product', 'addproductpost') ?>" autocomplete="off" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicFirstName">Tên Sản Phẩm</label>
                                        <input type="text" class="form-control" id="inputBasicFirstName" name="name" autocomplete="off" />
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicLastName">sku</label>
                                        <input type="text" class="form-control" id="inputBasicLastName" name="sku" autocomplete="off" />
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicLastName">Giá Tiền</label>
                                        <input type="text" class="form-control" id="inputBasicLastName" name="price" autocomplete="off" />
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicLastName">Số Lượng</label>
                                        <input type="text" class="form-control" id="inputBasicLastName" name="qty" autocomplete="off" />
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicLastName">Nội dung mô tả</label>
                                        <textarea class="form-control" name="content" id="content-product" rows="3">

                                        </textarea>
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicLastName">Hình Đại Diện</label>
                                        <input onclick="selectFileWithCKFinder('image-product')" type="text" class="form-control" id="image-product" name="image" autocomplete="off" />
                                    </div>

                                    <div class="form-group col-md-12 text-center">
                                        <label class="form-control-label" for="inputBasicLastName">Image Preview</label>
                                        <div>
                                            <img id="image-preview" src="<?= $product->image ?>" height="100" width="100" onerror="this.src='/adminbanhangbk/public/upload/images/no_image.jpg'" alt="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicLastName">Nhóm Hình</label>
                                        <textarea onclick="selectMultiFile('images-product')" class="form-control" name="images" id="images-product" rows="3"></textarea>
                                    </div>

                                    <div class="form-group col-md-12 text-center">
                                        <label class="form-control-label" for="inputBasicLastName">Images Preview</label>
                                        <div id="images-preview">
                                            <img src="" height="60" width="60" onerror="this.src='/adminbanhangbk/public/upload/images/no_image.jpg'" alt="">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="form-control-label" for="inputBasicLastName">Sản Phẩm thuộc:</label>
                                        <select class="form-control" name="category_id" id="">
                                            <?php
                                            foreach ($cats as $item) {
                                            ?>
                                                <option value="<?= $item->id ?>"><?= $item->name ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Chấp Nhận</button>
                                    <a href="?p=product" class="btn btn-danger">Bỏ Qua</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Example Basic Form (Form grid) -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let editor = CKEDITOR.replace('content-product');
</script>