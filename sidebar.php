<div class="card">
    <div class="container">
        <h5>Hola Mundo</h5>
    </div>
    <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'blog_sidebar' ); ?>
    <?php else : ?>
        Time to add some widgets!
    <?php endif; ?>
</div>