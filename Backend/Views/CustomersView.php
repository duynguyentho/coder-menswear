<div class="col-md-12">
                        <div style="margin-bottom:5px;">
                            <a href="index.php?controller=customers&action=create" class="btn btn-primary">Add user</a>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">List User</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Tên</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th style="width:100px;"></th>
                                    </tr>
    <?php foreach($listRecord as $rows): ?>
    <tr>
        <td><?php echo $rows->name; ?></td>
        <td><?php echo $rows->phone;?></td>
        <td><?php echo $rows->email; ?></td>
        <td><?php echo $rows->address?></td>
        <td style="text-align:center;width:200px;">
            <a class="btn btn-info" href="index.php?controller=customers&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
            <a class="btn btn-danger" href="index.php?controller=customers&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                                        <a href="index.php?controller=customers&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                                        <?php endfor; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>