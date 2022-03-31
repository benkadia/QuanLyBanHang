<div class="page-content">
    <!-- Panel Basic -->
    <div class="panel">
        <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Quản Lý Sản Phẩm(<?= count($rs) ?>)</h3>
            <?= showmsg() ?>

        </header>
        <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá Tiền</th>
                        <th>Số Lượng</th>
                        <th>Hình Sản Phẩm</th>
                        <th>Thuộc Danh Mục</th>
                        <th>Status</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($rs) {
                        foreach ($rs as $row) {
                    ?>
                            <tr>
                                <td><?= $row->name ?></td>
                                <td><?= $row->price ?></td>
                                <td><?= $row->qty ?></td>
                                <td>
                                    <img src="<?= $row->image ?>" onerror="this.src = 'public/upload/images/no_avatar.jpg';" class="img-fluid" alt="" height="60" width="60">
                                </td>
                                <td><?= $row->nameCat ?></td>
                                <td>
                                    <?php
                                    echo $row->pStatus == 1 ?
                                        '<span class="badge badge-success">Đang Hiện</span>'
                                        : '<span class="badge badge-dark">Đang Ẩn</span>'
                                    ?>
                                </td>
                                <td class="actions">
                                    <a href='<?= href('product', 'editproduct', ['id' => $row->id]) ?>' class='btn btn-sm btn-icon btn-pure btn-default on-default edit-row'>
                                        <i class='icon wb-edit' aria-hidden='true'></i>
                                    </a>
                                    <a onclick='return confirm("Are you sure?")' href='<?= href('product', 'delproduct', ['id' => $row->id]) ?>' class='btn btn-sm btn-icon btn-pure btn-default on-default remove-row'>
                                        <i class='icon wb-trash' aria-hidden='true'></i>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Panel Basic -->

</div>