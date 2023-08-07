<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<div class="w-100 d-flex justify-content-between border-bottom py-2">
	<h3>Albums</h3>
	<a class="btn btn-flat btn-light border" href="../" >Home</a>
</div>
<div class="row row-cols-4 row-cols-md-3 row-cols-sm-1 row-cols-lg-4 py-2">
	<?php 
		$qry = $conn->query("SELECT * FROM album_list  order by `name` asc ");
		while($row = $qry->fetch_assoc()):
			$img = array();
			$imgs = $conn->query("SELECT * FROM `images` where album_id = '{$row['id']}' and delete_f = 0 order by unix_timestamp(date_updated) desc, unix_timestamp(date_created) desc limit 3");
			while ($irow = $imgs->fetch_assoc()){
				$img[] = $irow['path_name'];
			}
	?>
	<div class="col p-2 item">
		<a href="./?page=albums/images&id=<?php echo $row['id'] ?>" class="album-item">
			<div class='album-view'>
				<?php 
					foreach($img as $path):
				?>
					<img src="<?php echo validate_image('../private_html/private_a/includes/gallery/'.$path) ?>" class="img-thumbnail img-fluid album-banner" alt="img" loading="lazy">	
				<?php endforeach; ?>
				<?php if(count($img) == 0): ?>
					<img src="../private_html/private_a/includes/gallery/uploads/no-image-available.png" class="img-thumbnail img-fluid album-banner" alt="img1" loading="lazy">	
				<?php endif; ?>
			</div>
			<div class="w-100 d-flex justify-content-between">
				<span class="text-dark"><b><?php echo $row['name'] ?></b></span>
				<div  class="dropleft">
					
				</div>
			</div>
		</a>
	</div>
	<?php endwhile; ?>
</div>
<div class="row">
    <div class="w-100 p-2 text-center" id="nData" style="display:none"><b>No Album Listed</b></div>
</div>
<script>
	$(document).ready(function(){
		if($('.album-view').length <= 0){
            $('#nData').show('slow')
        }else{
            $('#nData').hide('slow')
        }
		$('#add-new').click(function(){
			uni_modal("<i class='fa fa-plus'></i> Create New Album", "albums/manage_album.php")
		})
		$('.edit_album').click(function(){
			uni_modal("<i class='fa fa-edit'></i> Rename Album", "albums/manage_album.php?id="
		+$(this).attr('data-id'))
		})
		$('.delete_album').click(function(){
			_conf("Are you sure to delete this Album ?","delete_album",[$(this).attr('data-id')])
		})
		$('.album-item').closest('.item').hover(function(){
			$(this).css({
				'background':'#005aff29',
				'border-radius':'5px'
			})
		})
		$('.album-item').closest('.item').mouseleave(function(){
			$(this).css({
				'background':'none',
				'border-radius':'5px'
			})
		})
	})
	function delete_album($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_album",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>