<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-2"><?= $titleview ?></h4>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
        <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Add New Product
    </button>
    <br><br>
    <div class="card">
        <h5 class="card-header">Product List</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap" style="height:<?= count($lists) < 4 ? '300px' : 'auto' ?>">
                <table class="table table-striped table-hover table-bordered datatablenoorder">
                    <thead>
                        <tr>
                            <?php foreach ($lists_title as $title) { ?>
                                <th><?= $title ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($lists as $data) { ?>
                            <tr>
                                <?php foreach ($lists_key as $key) { ?>
                                    <?php if ($key == 'flag') { ?>
                                        <td><span
                                                class="badge bg-label-<?= $data->$key == 1 ? 'success' : 'danger' ?> me-1"><?= $data->$key == 1 ? 'Active' : 'Non Active' ?></span>
                                        </td>
                                    <?php } else { ?>
                                        <td><?= $data->$key ?></td>
                                <?php }
                                } ?>
                                <td>
                                    <button class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#<?= $data->productcode ?>"><i class="bx bx-edit-alt"></i>
                                    </button>
                                    <a class="btn btn-danger"
                                        href="<?= base_url('Product/deleteproduct') . '/' . $data->productcode ?>"><i
                                            class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- modal add -->
<div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <form class="modal-content" action="<?= base_url('Product'); ?>/addproduct" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name"
                            required />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control other" name="description" id="description" required=""
                            placeholder="Enter the description"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="category" class="form-label">Category</label>
                        <!-- <input type="text" id="key" name="key" class="form-control" placeholder="Enter Key" /> -->
                        <select class="myselect2 form-control" name="category" id="category">
                            <option value="TRIT">[TRIT] - Tritment</option>
                            <option value="MERCH">[MERCH] - Merchandise</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" id="price" name="price" class="form-control" placeholder="Enter price" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
<!-- modal edit -->
<?php foreach ($lists as $data) { ?>
    <div class="modal fade" id="<?= $data->productcode ?>" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <form class="modal-content" action="<?= base_url('Product/editproduct') . '/' . $data->productcode; ?>"
                method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?= $data->name ?>"
                                placeholder="Enter Name" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control other" name="description" id="description" required=""
                                placeholder="Enter the description"><?= $data->description ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="category" class="form-label">Category</label>
                            <!-- <input type="text" id="key" name="key" class="form-control" placeholder="Enter Key" /> -->
                            <select class="myselect2-<?= $data->productcode ?> form-control" name="category" id="category">
                                <option value="TRIT" <?= $data->description == 'TRIT' ? 'selected' : '' ?>>[TRIT] - Tritment
                                </option>
                                <option value="MERCH" <?= $data->description == 'MERCH' ? 'selected' : '' ?>>[MERCH] -
                                    Merchandise
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" id="price" name="price" class="form-control" value="<?= $data->price ?>"
                                placeholder="Enter price" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.myselect2-<?= $data->productcode ?>').select2({
                theme: "bootstrap-5",
                dropdownParent: $("#<?= $data->productcode ?>")
            });
        });
    </script>
<?php } ?>

<script>
    $(document).ready(function() {
        $('.myselect2').select2({
            theme: "bootstrap-5",
            dropdownParent: $("#backDropModal")
        });
    });
</script>