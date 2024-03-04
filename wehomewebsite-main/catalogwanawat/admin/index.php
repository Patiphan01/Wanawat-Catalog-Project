<?php include('../connection/connection.php')?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"> 

	<?php include('include/head.php')?>	
	<?php include('include/script.php')?>
		
	<?php if(isset($_SESSION['user_login']) && !empty($_SESSION['user_login'])):?>	
	<body class ="app">
		<?php include('include/header.php')?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			
				
				<?php 
					if (!isset($_GET['page']) && empty($_GET['page'])) {
						include('dashboard/index.php');
					} elseif (isset($_GET['page']) && $_GET['page']  == 'about') {
						include('about/index.php');
					}elseif (isset($_GET['page']) && $_GET['page']  == 'product') {
						if(isset($_GET['function']) && $_GET['function'] == 'add'){
							include('product/insert.php');
							
						}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
								include('product/Edit.php');	
						
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
								include('product/delete.php');	
						}else{
						
						include('product/index.php');
					}
					}elseif (isset($_GET['page']) && $_GET['page']  == 'producttype') {
						if(isset($_GET['function']) && $_GET['function'] == 'add'){
							include('producttype/insert.php');
							
						}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
								include('producttype/Edit.php');	
						
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
								include('producttype/delete.php');	
						}else{

						include('producttype/index.php');
						}
					}elseif (isset($_GET['page']) && $_GET['page']  == 'admin') {

						if(isset($_GET['function']) && $_GET['function'] == 'add'){
							include('admin/insert.php');
							
						}elseif(isset($_GET['function']) && $_GET['function'] == 'update'){
								include('admin/Edit.php');	
						}elseif(isset($_GET['function']) && $_GET['function'] == 'resetpass'){
									include('admin/resetpass.php');
						}elseif(isset($_GET['function']) && $_GET['function'] == 'delete'){
								include('admin/delete.php');	
						}else{

						
						include('admin/index.php');
					}

					}elseif(isset($_GET['page']) && $_GET['page'] == 'logout'){
						include('logout/index.php');
					}
					elseif(isset($_GET['page']) && $_GET['page'] == 'changnewpass'){
					include('changnewpass/index.php');
					}
				?>
				

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    

		
		
	    
    </div><!--//app-wrapper-->    	
	
	</body>
	
	<?php else :?>
			<?php include('login/index.php')?>
	<?php endif ;?>
	<?php include('include/footer.php')?>
	    <!--//app-footer-->
</html> 

<?php include('include/footer.php')?>
	    <!--//app-footer-->
