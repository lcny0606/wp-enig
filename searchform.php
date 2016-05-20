<div class="input-group" style="width:200px;">
	 <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>"> 	
		<input type="text" class="form-control"  name="s" id="s" placeholder="<?php _e( "搜索", 'weblizar' ); ?>" />
		<span class="input-group-btn">
		<button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
		</span>
	 </form> 
</div>