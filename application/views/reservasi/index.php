<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-2"><?= $titleview ?></h4>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
        <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Add New <?= $titleview ?>
    </button> -->
    <br><br>
    <div class="card">
        <h5 class="card-header"><?= $titleview ?> List</h5>
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
                                    <td><?= $data->$key ?></td>
                                <?php } ?>
                                <td>
                                    <button class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#r<?= $data->reservasicode ?>"><i class="bx bx-edit-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- modal edit -->
<?php foreach ($lists as $data) { ?>
    <div class="modal fade" id="r<?= $data->reservasicode ?>" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <form class="modal-content" action="<?= base_url('Reservasi/editreservasi') . '/' . $data->reservasicode; ?>"
                method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Edit <?= $titleview ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="productcode" class="form-label">Product Code</label>
                            <select class="myselect2 form-control" name="productcode" id="productcode">
                                <?php foreach ($product as $pd) { ?>
                                    <option value="<?= $pd->productcode ?>"
                                        <?= $pd->productcode == $data->productcode  ? 'selected' : '' ?>>
                                        <?= $pd->name . ' - [ ' . $pd->name ?>]
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="datefix" class="form-label">Date Fix</label>
                            <input type="date" id="datefix" name="datefix" class="form-control"
                                value="<?= $data->datefix ?>" placeholder="Enter date fix" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="myselect2 form-control" name="status" id="status">
                                <option value="1" <?= $data->status == '1' ? 'selected' : '' ?>>Visit
                                </option>
                                <option value="0" <?= $data->status == '0' ? 'selected' : '' ?>>Cancel
                                </option>
                            </select>
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
<?php } ?>