<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package woolworthsClone
 */

 get_header();
?>

<!-- <main id="primary" class="site-main"> -->

<?php /*
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
<header>
    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
</header>
<?php
			endif;

			/* Start the Loop */
		/* while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			/*	get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</main><!-- #main -->


*/
?>


<!-- Main Content -->
<main class="main">

    <!-- Accessories Section -->
    <section id="accessories" class="section ">
        <h2 class="section__title">Accessories</h2>
        <div class="section__product-grid">
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Watch" class="product-card__image">
                <h3 class="product-card__title">Smart Watch</h3>
                <p class="product-card__description">Stay connected with this sleek smartwatch.</p>
                <p class="product-card__price">Price: $199.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Backpack" class="product-card__image">
                <h3 class="product-card__title">Backpack</h3>
                <p class="product-card__description">Durable and stylish backpack for everyday use.</p>
                <p class="product-card__price">Price: $59.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <!-- Add more accessories products as needed -->
        </div>
    </section>
    <!-- Electronics Section -->
    <section id="electronics" class="section">
        <h2 class="section__title">Electronics</h2>
        <div class="section__product-grid">
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Laptop" class="product-card__image">
                <h3 class="product-card__title">Laptop</h3>
                <p class="product-card__description">High-performance laptop with the latest specs.</p>
                <p class="product-card__price">Price: $999.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Smartphone" class="product-card__image">
                <h3 class="product-card__title">Smartphone</h3>
                <p class="product-card__description">Latest smartphone with a high-resolution camera.</p>
                <p class="product-card__price">Price: $699.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Smartphone" class="product-card__image">
                <h3 class="product-card__title">Smartphone</h3>
                <p class="product-card__description">Latest smartphone with a high-resolution camera.</p>
                <p class="product-card__price">Price: $699.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <!-- Add more electronics products as needed -->
        </div>
    </section>

    <!-- Clothing Section -->
    <section id="clothing" class="section">
        <h2 class="section__title">Clothing</h2>
        <div class="section__product-grid">
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="T-Shirt" class="product-card__image">
                <h3 class="product-card__title">T-Shirt</h3>
                <p class="product-card__description">Comfortable and stylish t-shirt for everyday wear.</p>
                <p class="product-card__price">Price: $19.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Jeans" class="product-card__image">
                <h3 class="product-card__title">Jeans</h3>
                <p class="product-card__description">Classic denim jeans for a casual look.</p>
                <p class="product-card__price">Price: $49.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="T-Shirt" class="product-card__image">
                <h3 class="product-card__title">T-Shirt</h3>
                <p class="product-card__description">Comfortable and stylish t-shirt for everyday wear.</p>
                <p class="product-card__price">Price: $19.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Jeans" class="product-card__image">
                <h3 class="product-card__title">Jeans</h3>
                <p class="product-card__description">Classic denim jeans for a casual look.</p>
                <p class="product-card__price">Price: $49.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="T-Shirt" class="product-card__image">
                <h3 class="product-card__title">T-Shirt</h3>
                <p class="product-card__description">Comfortable and stylish t-shirt for everyday wear.</p>
                <p class="product-card__price">Price: $19.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Jeans" class="product-card__image">
                <h3 class="product-card__title">Jeans</h3>
                <p class="product-card__description">Classic denim jeans for a casual look.</p>
                <p class="product-card__price">Price: $49.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <!-- Add more clothing products as needed -->
        </div>
    </section>

    <!-- Home Decor Section -->
    <section id="home-decor" class="section">
        <h2 class="section__title">Home Decor</h2>
        <div class="section__product-grid">
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Lamp" class="product-card__image">
                <h3 class="product-card__title">Modern Lamp</h3>
                <p class="product-card__description">Elegant lamp to brighten up your living space.</p>
                <p class="product-card__price">Price: $39.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <article class="product-card">
                <img src="https://via.placeholder.com/300x200" alt="Rug" class="product-card__image">
                <h3 class="product-card__title">Decorative Rug</h3>
                <p class="product-card__description">Soft and stylish rug for your home.</p>
                <p class="product-card__price">Price: $89.99</p>
                <button class="product-card__button">Add to Cart</button>
            </article>
            <!-- Add more home decor products as needed -->
        </div>
    </section>


</main>

<?php
get_sidebar();
get_footer();