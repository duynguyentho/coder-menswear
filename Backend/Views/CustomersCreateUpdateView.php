<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm khách hàng</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên khách hàng</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số điện thoại</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name)?$record->phone:""; ?>" name="phone" class="form-control" required>
                </div>
            </div>
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="email" value="<?php echo isset($record->email)?$record->email:""; ?>" name="email" class="form-control" required>
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
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div> 