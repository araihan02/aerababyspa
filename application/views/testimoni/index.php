<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-2"><?= $titleview ?></h4>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backDropModal">
        <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Add New <?= $titleview ?>
    </button>
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
                                    data-bs-target="#t<?= $data->id ?>"><i class="bx bx-edit-alt"></i>
                                </button>
                                <a class="btn btn-danger"
                                    href="<?= base_url('Testimoni/deletetestimoni') . '/' . $data->id ?>"><i
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
        <form class="modal-content" action="<?= base_url('Testimoni'); ?>/addtestimoni" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Add <?= $titleview ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="namecustomer" class="form-label">Name Customer</label>
                        <input type="text" id="namecustomer" name="namecustomer" class="form-control"
                            placeholder="Enter name" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control other" name="description" id="description" required=""
                            placeholder="Enter the description"></textarea>
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
<div class="modal fade" id="t<?= $data->id ?>" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <form class="modal-content" action="<?= base_url('Testimoni/edittestimoni') . '/' . $data->id; ?>"
            method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="backDropModalTitle">Edit <?= $titleview ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="namecustomer" class="form-label">Name Customer</label>
                        <input type="text" id="namecustomer" name="namecustomer" class="form-control"
                            value="<?= $data->namecustomer ?>" placeholder="Enter name" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control other" name="description" id="description" required=""
                            placeholder="Enter the description"><?= $data->description ?></textarea>
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