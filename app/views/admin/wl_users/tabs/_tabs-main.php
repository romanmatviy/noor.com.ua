<div class="profile-left">
	<div>
		 <img class="img-responsive profile-img margin-bottom-20" id="photo" src="<?= ($user->photo)? IMG_PATH.'profile/'.$user->photo : SERVER_URL.'style/admin/images/user-'.$user->type.'.jpg'  ?>" alt="Фото" title="Фото" >
	</div>
</div>

<div class="profile-right">
	<div class="profile-info">
	    <div class="table-responsive">
	        <table class="table table-profile">
	            <thead>
	                <tr>
	                    <th></th>
	                    <th>
	                        <h4><?=$user->name?></h4>
	                    </th>
	                </tr>
	            </thead>
	            <tbody>
	                <tr class="highlight">
	                    <td class="field"></td>
	                    <td>
	                    	<?=$user->email?>
	                    	<?php if(($_SESSION['user']->admin && $user->type > 1) || $user->type > 2) { ?>
	                    		<a href="<?=SITE_URL?>admin/wl_users/login_as_user?id=<?=$user->id?>" class="btn btn-xs btn-success m-l-5"><i class="fa fa-sign-in"></i> Увійти як <strong><?=$user->name?></strong></a>
	                    	<?php }
	                    	if(!empty($user->info['phone'])) echo "<br>".$user->info['phone']; ?>
	                    </td>
	                </tr>
	            	<tr class="divider">
                        <td colspan="2"></td>
                    </tr>
                    <tr>
	                    <td class="field">Alias користувача</td>
	                    <td><a href="<?=SITE_URL?>profile/<?=$user->alias?>" target="_blank"><?=$user->alias?></a></td>
	                </tr>
	                <tr>
						<td class="field">Тип користувача</td>
						<td>
							<?php foreach ($types as $type) {
								if($type->id == $user->type) echo $type->title;
							} ?>
						</td>
					</tr>
		    		<tr>
						<td class="field">Статус акаунта</td>
						<td>
							<?php foreach ($status as $s) {
								if($s->id == $user->status) echo $s->title;
							} ?>
						</td>
					</tr>
		    		<tr>
						<td class="field">Дата останнього входу</td>
						<td><?=($user->last_login > 0)?date("d.m.Y H:i", $user->last_login):'Дані відсутні'?></td>
					</tr>
		    		<tr>
						<td class="field">Дата реєстрації</td>
						<td><?=date("d.m.Y H:i", $user->registered)?></td>
					</tr>
					<?php if(isset($user->s_newsletter)) { ?>
			    		<tr>
							<td class="field">Розсилка</td>
							<td><?=$user->s_newsletter ? 'Активна (листи отримує)' : 'Відключено (відмовився від отримання новин)'?></td>
						</tr>
					<?php } if(!empty($user->info)) foreach($user->info as $key => $value) {
						if($key == 'phone') continue; ?>
						<tr>
		                    <td class="field"><?= $key ?></td>
		                    <td><?= $value ?></td>
		                </tr>
					<?php } ?>
	            </tbody>
	        </table>
	    </div>
	</div>
</div>