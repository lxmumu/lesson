<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="cms-g">
    <?php if($top_parentid ==48) { ?>
    <div class="am-hide-sm-only am-u-md-3 am-u-lg-3">
        <div class="com-nav-left">
            <h1><em><?php @session_start(); echo $_SESSION['catname'];?></em><i>chanpinzhongxin</i></h1>
            <?php if($top_parentid) { ?>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <?php } ?>
        </div>
    </div>
    <div class="am-u-sm-12 am-u-md-9 am-u-lg-9">
        <div class="com-nav-title">
            <a href="#doc-oc-demo1" class="font am-show-sm-only" data-am-offcanvas>&#xe68b;</a>
            <span>LED灯具</span>
        </div>
        <div class="com-nav-category">
            <ul>
                <li class="on"><span><a href="#">LED T8灯管</a></span></li>
                <li><span><a href="#">LED射灯</a></span></li>
                <li><span><a href="#">LED软光灯</a></span></li>
                <li><span><a href="#">LED泛光灯</a></span></li>
                <li><span><a href="#">LED洗墙灯</a></span></li>
            </ul>
        </div>
        <div class="content">
            <div class="FocusPic">
                <div id="photo-slide">
                    <div class="changeDiv">
                        <ul class="photo-li
                        st picbig">
                            <!--<?php var_dump($r);?>-->
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f8030ced4385b869c7b03a744380552&action=lists&catid=%24catid&num=4&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <div class="am-u-sm-6 am-u-md-4 am-u-lg-3">
                                <div class="product-list-item">
                                    <div class="product-list-item-bj">
                                        <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" /></a>
                                    </div>
                                    <div class="product-list-item-title">
                                        <a href="<?php echo $r['url'];?>" class="f-toe"><?php echo $r['title'];?></a>
                                    </div>
                                </div>
                            </div>
                            <?php $n++;}unset($n); ?>
                        </ul>
                        <div class="page-list">
                            <?php echo $pages;?>
                        </div>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php } else { ?>
    <div class="am-hide-sm-only am-u-md-3 am-u-lg-3">
        <div class="com-nav-left">
            <h1><em><?php @session_start(); echo $_SESSION['catname'];?></em><i>chanpinyingyong</i></h1>
            <?php if($top_parentid) { ?>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <?php } ?>
        </div>
    </div>
    <div class="am-u-sm-12 am-u-md-9 am-u-lg-9">
        <div class="com-nav-title">
            <a href="#doc-oc-demo1" class="font am-show-sm-only" data-am-offcanvas>&#xe68b;</a>
            <span>照明案例</span>
        </div>

        <div class="am-u-sm-12 am-u-md-9 am-u-lg-12">
            <div class="case-list">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=482c77d1d4087e7b54d530609afac7f3&action=lists&catid=%24top_parentid&num=4&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$top_parentid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$top_parentid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="am-u-sm-6 am-u-md-4 am-u-lg-3" >
                    <div class="case-list-item">
                        <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" style="width: 140px;height: 100px"/></a>
                        <span><?php echo $r['title'];?></span>
                    </div>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="page-list">
                <?php echo $pages;?>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php include template("content","footer"); ?>