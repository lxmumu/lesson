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
                    <li <?php if($catid==$r[catid]) { ?> class="on" <?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <?php } ?>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-9 am-u-lg-9">
            <div class="com-nav-title">
                <a href="#doc-oc-demo1" class="font am-show-sm-only" data-am-offcanvas>&#xe68b;</a>

                <span>公司新闻</span>
            </div>
            <div class="new-list">
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f15e6a5ca486b10108ea74d42cfa5f43&action=lists&catid=%24catid&num=2&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><?php echo date('Y-m-d H:i:s',$v[inputtime]);?><a href="<?php echo $v['url'];?>"  <?php echo title_style($v[style]);?>><span><?php echo $v['title'];?></span></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="page-list">
                <?php echo $pages;?>
            </div>
        </div>
    </div>
    <?php include template("content","footer"); ?>
</body>
</html>