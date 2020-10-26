
<div>
<?php foreach($listRecord as $rows): ?>
<div class="row" style="margin-top: 100px;display:block;">
	<div class="col-lg-3"><img src="../Assets/Upload/Blogs/<?php echo $rows->photo; ?>" class="img-thumbnail"></div>
	<div class="col-lg-9">
		<h4 style="padding:0px; margin:0px;"><a href="index.php?controller=blogs&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->title; ?></a></h4>
		<div></div>
	</div>
</div>
<?php endforeach; ?>
<ul class="pagination">
	<li class="page-item disabled"><a href="#" class="page-link">Page</a></li>
	<?php for($i = 1; $i <= $numPage; $i++): ?>
	<li class="page-item"><a href="index.php?controller=blogs&action=read&id=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
	<?php endfor; ?>
</ul>
</div>
