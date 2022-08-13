<footer class="footer">
    <div style="background-color: #e9e8e8; height: 250px;">
        <a href="https://developress.io/" target="_blank">DeveloPress</a>
  
<?php $policy_page = get_option( 'wp_page_for_privacy_policy' ); ?>

<?php if($policy_page): ?>
    <a href="<?php echo esc_url(get_permalink($policy_page)) ?>" target="_blank"><?php echo esc_html(get_the_title($policy_page)); ?></a>
<?php endif; ?>
</div>
</footer>

<?php
wp_footer();
?>
</body>
</html>
