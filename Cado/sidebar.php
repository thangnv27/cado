<div id="sidebar">
    <div class="newsletter">
        <h2>Cập nhật tin tức</h2>
        <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=cado-online', 'popupwindow', 'scrollbars=yes,width=550,height=520');
                        return true">
            <p><a href="http://feeds.feedburner.com/cado-online"><img src="http://feeds.feedburner.com/~fc/cado-online?bg=99CCFF&amp;fg=444444&amp;anim=1" height="26" width="88" style="border:0" alt="" /></a></p>
            <p><strong>Nhận tin mới qua email:</strong></p>
            <p><input type="text" style="width:180px" name="email" value="Địa chỉ email nhận bài viết" onfocus="if (this.value == this.defaultValue)
                                this.value = '';" onblur="if (this.value == '')
                                            this.value = this.defaultValue;" size="11" maxlength="100" type="text"/></p><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=1214096" name="url"/><input type="hidden" value="PHAMEN" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Đăng ký" /><p>Vui lòng mở mail để kích hoạt sau khi đăng ký!</p>
        </form>
    </div>

    <!--<div class="adsense"></div>-->

    <div class="widgetarea">
        <ul id="sidebarwidgeted">
<!--            <li id="categories-3" class="widget widget_categories"><h2 class="widgettitle">Danh mục bài viết</h2>
                <ul>
                    <?php
//                    wp_list_categories(array(
//                        'title_li' => '',
//                        'hide_empty' => 0
//                    ));
                    ?>
                </ul>
            </li>-->
            <?php if ( function_exists('dynamic_sidebar') ) { dynamic_sidebar('sidebar'); } ?>
        </ul>
    </div>

    <!-- begin l_sidebar -->

    <div id="l_sidebar">
        <ul id="l_sidebarwidgeted">
            <li id="links">
                <div class="tieude">Nên quan tâm</div>
                <ul>
                    <li><a href="<?php bloginfo('siteurl'); ?>/site?n=188bet" target="_blank">188Bet</a></li>
                    <li><a href="<?php bloginfo('siteurl'); ?>/site?n=bet365" title="Website cá độ online hàng đầu thế giới" target="_blank">Bet365</a></li>
                    <li><a href="<?php bloginfo('siteurl'); ?>/site?n=moneybookers" title="Hệ thống thanh toán tốt nhấ cho cá độ online" target="_blank">Moneybookers</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div id="r_sidebar">
        <ul id="r_sidebarwidgeted">
            <!--To define the 120x600 ad, go to your WP dashboard and go to Presentation -> Revolution Music Options and enter the ad code.-->
            <li id="ads">
                <div class="tieude">Đăng ký ngay</div>
                <div><?php echo stripslashes(get_option(SHORT_NAME . "_adRight")); ?></div>
            </li>
        </ul>
    </div>

    <!-- end r_sidebar -->	
</div>