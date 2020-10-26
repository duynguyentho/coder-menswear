<div style="margin-top:100px;" class="col-md-12">  
    <div class=" panel-primary">
        <div class="panel-body">
            <?php
                include_once "Models/AccountModel.php";
                $obj = new AccountModel(); 
                $cus_id = $_SESSION["customerId"];
                $record = $obj->modelGetAccount($cus_id);
            ?>
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên khách hàng</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo $record->name;?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số điện thoại</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo $record->phone; ?>" name="phone" class="form-control" required>
                </div>
            </div>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="email" value="<?php echo $record->email; ?>" name="email" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Địa chỉ</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->email)?$record->address:""; ?>" name="address" class="form-control" required>
                </div>
            </div>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10">
                    <input type="password" class="form-control" name="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?>>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Thay đổi" class="btn btn-success">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div> 
<style>
    .col-md-2{
        font-size:15px;
    }
    input{
        margin-left: 0;
        height: 40px;
        width: 200px;
    }
</style>