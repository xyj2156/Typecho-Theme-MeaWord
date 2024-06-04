<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('common/header.php'); ?>
<div class="post-loop">
    <div class="container">
        <div class="post-box">
            <div class="error-page m-auto" style="min-height: 50vh;">
                <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
                <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
                <form method="post">
                    <p><input type="text" name="s" class="text" autofocus /></p>
                    <p>
                        <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->need('common/footer.php'); ?>
