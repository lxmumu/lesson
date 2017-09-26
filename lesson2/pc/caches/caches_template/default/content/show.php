<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="com-container">
	<div class="cms-g">
		<div class="am-hide-sm-only am-u-md-3 am-u-lg-3">
			<div class="com-nav-left">
				<h1><em><?php @session_start(); echo $_SESSION['catname'];?></em><i>NEWS</i></h1>
				<?php if($top_parentid) { ?>
				<ul>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
				<?php } ?>
			</div>
		</div>
		<div class="am-u-sm-12 am-u-md-9 am-u-lg-9">
			<div class="com-nav-title">
				<a href="#doc-oc-demo1" class="font am-show-sm-only" data-am-offcanvas>&#xe68b;</a>
				<span>公司简介</span>
			</div>
			<div class="content"><?php echo $content;?></div>

			<div class="com-info-page">
				<a href="<?php echo $previous_page['url'];?>">上一篇</a><a href="<?php echo $next_page['url'];?>">下一篇</a>
			</div>
		</div>
	</div>
</div>
<?php include template("content","footer"); ?>
