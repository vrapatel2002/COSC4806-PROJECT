<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in</h1>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-sm-auto">
        <form action="/search/movie" method="post" >
        <fieldset>
            <div class="form-group"> 
                <input required type="text" class="form-control" name="search" placeholder="Type moviename">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </fieldset>
        </form> 
    </div>

<!-- <div class="row">
    <div class="col-sm-auto">
		<form action="/search/movie" method="post" >
		<fieldset>
			<div class="form-group"> 
				<input required type="text" class="form-control" name="search" placeholder="Type moviename">
			</div>
		    <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
		</form> 
	</div> -->
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
