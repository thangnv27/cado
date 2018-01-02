<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die('Vui lòng không tải trực tiếp trang này. Xin cám ơn!');

if (post_password_required()) {
    echo '<p class="nocomments">Vui lòng nhập mật mã để xem bình luận.</p>';
    return;
}
?>

<div class="comments">
    <h4>Comments</h4>
    &#65279;
    <!-- You can start editing here. -->

    <div id="commentblock">
        <?php if (have_comments()) : ?>
        <p id="comments"><b><?php comments_number('No Comments', 'One Comments', '% Comment for "' .  get_the_title() . '"'); ?></b></p>

            <ol class="commentlist">
                <?php wp_list_comments('callback=custom_comments'); ?>
            </ol>
            <div class="comment-nav">
                <div class="alignleft"><?php previous_comments_link() ?></div>
                <div class="alignright"><?php next_comments_link() ?></div>
            </div>
            <?php else : // this is displayed if there are no comments so far ?>

            <?php if (comments_open()) : ?>
                <!-- If comments are open, but there are no comments. -->
            <?php else : // comments are closed ?>
                <!-- If comments are closed. -->
                <p class="nocomments">Bình luận đã được đóng.</p>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (comments_open()) : ?>
            <p id="respond"><b>Nếu có ý kiến, xin vui lòng viết ra...</b></p>

            <form id="commentform" method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
                <p><label for="name">Tên (phải có)</label><br>
                    <input type="text" tabindex="1" size="50" value="" id="name" name="author"></p>
                <p><label for="email">Email (phải có)</label><br>
                    <input type="text" tabindex="2" size="50" value="" id="email" name="email"></p>
                <p><label for="url">Website</label><br>
                    <input type="text" tabindex="3" size="50" value="" id="url" name="url"></p>
    <!--<p><small><strong>XHTML:</strong> You can use these tags: &lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </small></p>-->
                <p><label for="words">Ý kiến của bạn</label><br><textarea tabindex="4" rows="10" cols="40" id="words" name="comment"></textarea></p>
                <p><input type="submit" value="Submit Comment" tabindex="5" id="submit" name="submit">
                    <!--<input type="hidden" value="4" name="comment_post_ID">-->
                    <?php comment_id_fields(); ?>
                    <?php do_action('comment_form', $post->ID); ?>
                </p>
    <!--            <script type="text/javascript">
                    & lt; !--
                            refJS = escape(document[ 'referrer' ]);
                    document.write("&lt;input type='hidden' name='refJS' value='" + refJS + "'&gt;");
                    // --&gt;
                </script><input type="hidden" value="http%3A//www.cado-online.com/" name="refJS">
                <p style="display: none;"><input type="hidden" value="f4581e202b" name="akismet_comment_nonce" id="akismet_comment_nonce"></p>-->
                
<!--                <p class="subscribe-to-comments" style="clear: both;">
                    <input type="checkbox" style="width: auto;" value="subscribe" id="subscribe" name="subscribe">
                    <label for="subscribe">Thông báo cho tôi các comment tiếp theo vào email</label>
                </p>-->
            </form>
        <?php endif; // if you delete this the sky will fall on your head ?>
    </div>			
</div>