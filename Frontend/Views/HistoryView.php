<div style="margin-top:100px;" class="col-md-12">    
    <div class="panel panel-primary">
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:150px;">Ngày đặt</th>
                    <th style="width:150px;">Tổng tiền</th>                    
                    <th style="width:100px; text-align: center;">Trạng thái</th>
                </tr>
                <?php foreach($listRecord as $rows): ?>
                 <tr>
                     <td>
                        <?php 
                        $date = Date_create($rows->date);
                        echo Date_format($date, "d/m/Y");
                        ?>                            
                        </td>
                     <td><strong><?php echo number_format($rows->price); ?>$</strong></td>
                     <td style="text-align: center;">
                         <?php if($rows->status == 1): ?>
                            <span class="label label-primary">Đã giao hàng</span>
                         <?php else: ?>
                            <span class="label label-danger">Chưa giao hàng</span>
                         <?php endif; ?>
                         </td>
                     <td style="text-align:center;width:200px;">
                     <?php if($rows->status == 0):?>
            <a class="btn btn-danger" href="index.php?controller=account&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Hủy đơn hàng</a>
                     <?php endif;?>
            <a class="btn btn-success" href="index.php?controller=orders&action=detail&id=<?php echo $rows->id;?>">Thông tin</a>
        </td>
                 </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="index.php?controller=users&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>