<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=blogs&action=create" class="btn btn-primary">Add blogs</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List blogs</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Photo</th>
                    <th>title</th>                    

                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($listRecord as $rows): ?>
                <tr>
                    <td>
<?php if($rows->photo != "" && file_exists('../Assets/Upload/Blogs/'.$rows->photo)): ?>
<img src="../Assets/Upload/Blogs/<?php echo $rows->photo; ?>" style="width:100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->title; ?></td>        
                    <td style="text-align:center;display:flex;">
                        <a class="btn btn-info" href="index.php?controller=blogs&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="index.php?controller=blogs&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
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
                    <a href="index.php?controller=blogs&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>