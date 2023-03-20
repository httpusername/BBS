<?php

$title="添加子版块";
$template['css']=array('../css/public.css');
?>
<?php include '../components/header.php'?>

<div id="main">
	<div class="title" style="margin-bottom:20px;">添加子版块</div>
	<form method="post">
		<table class="au">
			<tr>
				<td>所属父版块</td>
				<td>
					<select name="father_module_id">
						<option value="0">======请选择一个父版块======</option>
						<option value='7'>NBA</option><option value='26'>军事资讯</option><option value='24'>CBA</option><option value='25'>测试</option>					</select>
				</td>
				<td>
					必须选择一个所属的父版块
				</td>
			</tr>
			<tr>
				<td>版块名称</td>
				<td><input name="module_name" type="text" /></td>
				<td>
					版块名称不得为空，最大不得超过66个字符
				</td>
			</tr>
			<tr>
				<td>版块简介</td>
				<td>
					<textarea name="info"></textarea>
				</td>
				<td>
					简介不得多于255个字符
				</td>
			</tr>
			<tr>
				<td>版主</td>
				<td>
					<select name="member_id">
						<option value="0">======请选择一个会员作为版主======</option>
						
					</select>
				</td>
				<td>
					你可以在这边选一个会员作为版主
				</td>
			</tr>
			<tr>
				<td>排序</td>
				<td><input name="sort" value="0" type="text" /></td>
				<td>
					填写一个数字即可
				</td>
			</tr>
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
	</form>
</div>
</body>
</html>