<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="pad_10tb">
	<div class="container">
		<div class="row">
			<div class="<?=(Theme::get('sidebar_position')!='none')?'col-xs-9':'col-xs-12'?> <?=(Theme::get('sidebar_position')=='left')?'pull-right':'pull-left'?>">
				<div class="page-header">
					<h3><?=__('Register')?></h3>
				</div>
				<div class="auth-page reg">
					<?=View::factory('pages/auth/register-form')?>
				</div>	
			</div>
			
			<?if(Theme::get('sidebar_position')!='none'):?>
	            <?=(Theme::get('sidebar_position')=='left')?View::fragment('sidebar_front','sidebar'):''?>
	            <?=(Theme::get('sidebar_position')=='right')?View::fragment('sidebar_front','sidebar'):''?>
	        <?endif?>
	    </div>
	</div>
</div>