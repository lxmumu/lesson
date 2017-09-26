<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>
<div class="com-container">
    <?php if($catid=="45") { ?>
    <style type="text/css">
        html, body { margin: 0; padding: 0; }
        .iw_poi_title { color: #CC5522; font-size: 14px; font-weight: bold; overflow: hidden; padding-right: 13px; white-space: nowrap; }
        .iw_poi_content { font: 12px arial,sans-serif; overflow: visible; padding-top: 4px; white-space: -moz-pre-wrap; word-wrap: break-word; }
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
    <div class="com-container">
        <div class="cms-g">
            <div class="contact">
                <h1>
                    <em>CONTACT 联系我们</em>
                    <span>
                        <a href="#">联系我们</a>
                        <a href="#">在线客服</a>
                    </span>
                </h1>
                <div class="am-u-md-12 am-u-md-5 am-u-lg-5">
                    <div class="contact-left">
                        <h1>
                            <strong class="f-toe">大冶市云阿拉丁科技有限公司</strong>
                            <span class="f-toe">Daye Aladdin Technology Co., Ltd.</span>
                        </h1>
                        <ul>
                            <li><span>业务质询一：</span><a href="#">467843489</a></li>
                            <li><span>业务质询二：</span><a href="#">467843489</a></li>
                            <li><span>咨询电话：</span>0714-8878313</li>
                            <li><span>公司传真：</span>0714-8878313</li>
                            <li><span>地址：</span>大冶大道116金惠小区好太太总部2楼</li>
                            <li><span>邮编：</span>435100</li>
                            <li><span>网址：</span><a href="http://www.cssmoban.com">http://www.cssmoban.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-7 am-u-lg-7">
                    <div class="contact-right">
                        <div style="width:100%;height:400px;border:#ccc solid 1px;" id="dituContent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMarker();//向地图中添加marker
        }

        //创建地图函数：
        function createMap(){
            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
            var point = new BMap.Point(114.973751,30.107215);//定义一个中心点坐标
            map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
            window.map = map;//将map变量存储在全局
        }

        //地图事件设置函数：
        function setMapEvent(){
            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
            map.enableKeyboard();//启用键盘上下左右键移动地图
        }

        //地图控件添加函数：
        function addMapControl(){
            //向地图中添加缩放控件
            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(ctrl_nav);
            //向地图中添加缩略图控件
            var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
            map.addControl(ctrl_ove);
            //向地图中添加比例尺控件
            var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            map.addControl(ctrl_sca);
        }

        //标注点数组
        var markerArr = [{title:"好太太2楼总部",content:"金惠小区进去好太太2楼总部",point:"114.9738|30.107668",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
        ];
        //创建marker
        function addMarker(){
            for(var i=0;i<markerArr.length;i++){
                var json = markerArr[i];
                var p0 = json.point.split("|")[0];
                var p1 = json.point.split("|")[1];
                var point = new BMap.Point(p0,p1);
                var iconImg = createIcon(json.icon);
                var marker = new BMap.Marker(point,{icon:iconImg});
                var iw = createInfoWindow(i);
                var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                marker.setLabel(label);
                map.addOverlay(marker);
                label.setStyle({
                    borderColor:"#808080",
                    color:"#333",
                    cursor:"pointer"
                });

                (function(){
                    var index = i;
                    var _iw = createInfoWindow(i);
                    var _marker = marker;
                    _marker.addEventListener("click",function(){
                        this.openInfoWindow(_iw);
                    });
                    _iw.addEventListener("open",function(){
                        _marker.getLabel().hide();
                    })
                    _iw.addEventListener("close",function(){
                        _marker.getLabel().show();
                    })
                    label.addEventListener("click",function(){
                        _marker.openInfoWindow(_iw);
                    })
                    if(!!json.isOpen){
                        label.hide();
                        _marker.openInfoWindow(_iw);
                    }
                })()
            }
        }
        //创建InfoWindow
        function createInfoWindow(i){
            var json = markerArr[i];
            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
            return iw;
        }
        //创建一个Icon
        function createIcon(json){
            var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
            return icon;
        }

        initMap();//创建和初始化地图
    </script>


    <?php } elseif ($catid=="26") { ?>
        <div class="cms-g">
            <div class="am-hide-sm-only am-u-md-3 am-u-lg-3">
                <div class="com-nav-left">
                    <h1><em>产品中心</em><i>chanpinzhongxin</i></h1>
                    <ul class="content">
                        <?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
                        <li<?php if($catid==$cid) { ?> class="on"<?php } ?>><a
                            href="<?php echo $CATEGORYS[$cid]['url'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
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

                    </ul>
                </div>

                <div class="content">
                    <div class="FocusPic">
                        <div id="photo-slide">
                            <div class="changeDiv">
                                <h1>111</h1>
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=deeded4c83046fd97f7d9e1d600cde98&action=lists&catid=%24catid&num=9&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <ul class="photo-list picbig">
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li>
                                        <div class="img-wrap">
                                            <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],150,112);?>" width="150" height="112" alt="<?php echo $r['title'];?>"/></a>
                                        </div>
                                        <span style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],28);?></span>
                                    </li>
                                    <?php $n++;}unset($n); ?>
                                </ul>
                                <div id="pages" class="text-c"><?php echo $pages;?></div>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
            </div>

    <?php } else { ?>
    <div class="cms-g">
        <div class="am-hide-sm-only am-u-md-3 am-u-lg-3">
            <div class="com-nav-left">
                <?php $subCatid = reset(subcat($catid))[catid];?>
                <h1><em><?php @session_start(); echo $_SESSION['catname'];?></em><i>ABOUTS</i></h1>
                <ul class="content">
                    <?php $n=1;if(is_array($arrchild_arr)) foreach($arrchild_arr AS $cid) { ?>
                    <li<?php if($catid==$cid) { ?> class="on"<?php } ?>><a
                        href="<?php echo $CATEGORYS[$cid]['url'];?>"><?php echo $CATEGORYS[$cid]['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>

        <?php if($subCatid ) { ?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=66206408fb34d9dbf166e07d7dd89230&sql=select+%2A+from+page+where+catid%3D%24subCatid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from page where catid=$subCatid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="am-u-sm-12 am-u-md-9 am-u-lg-9">
            <div class="com-nav-title">
                <a href="#doc-oc-demo1" class="font am-show-sm-only" data-am-offcanvas>&#xe68b;</a>
                <span><?php echo $r['title'];?></span>
            </div>

            <div class="com-nav-content">
                <span><?php echo $r['content'];?></span>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php } else { ?>
            <div class="am-u-sm-12 am-u-md-9 am-u-lg-9">
                <div class="com-nav-title">
                    <a href="#doc-oc-demo1" class="font am-show-sm-only" data-am-offcanvas>&#xe68b;</a>
                    <span><?php echo $catname;?></span>
                </div>
            <div><?php echo $content;?></div>
        </div>
        <?php } ?>
    </div>
<?php } ?>
</div>
<?php include template("content","footer"); ?>

