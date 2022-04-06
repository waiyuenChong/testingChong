<?php
$attributes = array('class' => 'add_agent', 'id' => 'add_agent_form', "onsubmit" => "loader()", 'autocomplete' => "off");
echo form_open_multipart('voucher/ruby', $attributes);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="">Voucher ID</label>
                            <input class="form-control" type="text" id="voucher_id" name="voucher_id">
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">User ID</label>
                                <input class="form-control" type="text" id="user_id" name="user_id">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">User Name</label>
                                <input class="form-control" type="text" id="user_name" name="user_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="">Voucher Type</label>
                                <select id="voucher_type" name="voucher_type">
                                    <option value='Cash Voucher'>Cash Voucher</option>
                                    <option value='Rebate Voucher'>Rebate Voucher</option>
                                    <option value='Discount Voucher'>Disount Voucher</option>
                                </select>

                            </div>
                        </div>
                        <div class="row mb-5    ">
                            <div class="col-12">
                                <label for="">Voucher Quantity (max 3)</label>
                                <select id="voucher_quantity" name="voucher_quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                            <div class="row mb-5">
                                <div class="col-12">
                                    <label for="">Leave Type</label>
                                    <select name="leave_type_id" id="leave_type_id">
                                        <?php foreach ($respone1 as $key => $value) { ?>
                                            <option value="<?= $value->id?>"> <?= $value->name?></option>
                                        <?php }
                                        ?>
                                    </select>

                                </div>
                            </div>  


                        </div>
                        <div class="row mt-5 justify-content-end">
                            <div class="col-3 text-end pe-0">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <div class="row mt-5 justify-content-end">
                                    <div class="col-3 text-end pe-0">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="col">
        <div class="card">
            <div class="card-block">
                <div class="table-responsive">
                    <table id="zero-configuration_<?= $k ?>" class="display table nowrap table-striped table-hover" style="width:100%">
                        <thead>

                            <tr>
                                <th><?= 'Voucher ID' ?></th>
                                <th><?= 'User ID' ?></th>
                                <th><?= 'User Name' ?></th>
                                <th><?= 'Voucher Type' ?></th>
                                <th><?= 'Voucher Quantity' ?></th>
                                <th><?= 'Leave Type' ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($response as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $value->id ?></td>
                                    <td><?= $value->user_id ?></td>
                                    <td><?= $value->user_name ?></td>
                                    <td><?= $value->voucher_type ?></td>
                                    <td><?= $value->voucher_quantity ?></td>
                                    <td><?= $value->leave_type_id ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>