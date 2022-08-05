<?php 
	if($_SESSION['language'] && isset($lang)) { 
		$where['alias'] = $_SESSION['alias']->id;
		$where['content'] = -$group->id;
		$where['language'] = $lang;
		$ntkd = $this->db->getAllDataById('wl_ntkd', $where);
		$lang_text_1 = ", '{$lang}'";
		$lang_text_2 = "-{$lang}";
	} else {
		$lang_text_1 = "";
		$lang_text_2 = "-lang";
	}
?>

<label class="col-md-2 control-label">Назва сторінки:</label>
<div class="col-md-4">
    <input type="text" onChange="save('name', this <?=$lang_text_1?>)" value="<?=$ntkd->name?>" class="form-control">
</div>
<button type="button" class="btn btn-info" onclick="showEditTKD('<?=$lang?>')">Редагувати title, keywords, description</button>
<div class="row m-t-5" id="tkd<?=$lang_text_2?>" style="display:none">
	<div class="col-md-12">
		<label class="col-md-2 control-label">title:</label>
		<div class="col-md-4">
            <input type="text" onChange="save('title', this <?=$lang_text_1?>)" value="<?=$ntkd->title?>" class="form-control">
        </div>
        <label class="col-md-2 control-label">keywords:</label>
		<div class="col-md-4">
            <input type="text" onChange="save('keywords', this <?=$lang_text_1?>)" value="<?=$ntkd->keywords?>" class="form-control">
        </div>
        <label class="col-md-2 control-label m-t-5">description:</label>
		<div class="col-md-10 m-t-5">
            <textarea onChange="save('description', this <?=$lang_text_1?>)"><?=$ntkd->description?></textarea>
        </div>
	</div>
</div>

<br>
<label class="control-label">Короткий опис:</label><br>
<textarea onChange="save('list', this <?=$lang_text_1?>)"><?=$ntkd->list?></textarea>

<style type="text/css">
	textarea{
		width: 100%;
		height: 100px;
	}
</style>