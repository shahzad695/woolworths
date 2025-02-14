<?php
/**
 * Template part for displaying the main navigation
 *
 * @package WoolworthsClone
 */

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit;
}

// Check if WooCommerce is active
$woocommerce_active = class_exists('WooCommerce');

// Get cart count and total safely
$cart_count = 0;
$cart_total = '$0.00';
if ($woocommerce_active && WC()->cart) {
    $cart_count = WC()->cart->get_cart_contents_count();
    $cart_total = WC()->cart->get_cart_total();
}
?>
<header class="navbar">
    <div class="navbar__main">
        <div class="container">
            <div class="navbar__logo">
                <?php the_custom_logo(); ?>
            </div>

            <div class="navbar__services">
                <select class="navbar__services-select" aria-label="<?php esc_attr_e('Select service', 'woolworthsclone'); ?>">
                    <option value=""><?php esc_html_e('Everyday & Other Services', 'woolworthsclone'); ?></option>
                    <option value="insurance"><?php esc_html_e('Insurance', 'woolworthsclone'); ?></option>
                    <option value="mobile"><?php esc_html_e('Mobile', 'woolworthsclone'); ?></option>
                    <option value="money"><?php esc_html_e('Money Services', 'woolworthsclone'); ?></option>
                </select>
            </div>

            <div class="navbar__search">
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" class="navbar__search-input"
                        placeholder="<?php esc_attr_e('Search products, recipes & ideas', 'woolworthsclone'); ?>" name="s"
                        value="<?php echo get_search_query(); ?>" />
                    <?php if ($woocommerce_active): ?>
                    <input type="hidden" name="post_type" value="product" />
                    <?php endif; ?>
                    <button type="submit" class="navbar__search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="navbar__actions">
                <a href="#" class="navbar__action-item">
                    <i class="fas fa-list"></i>
                    <div class="navbar__action-text">
                        <span class="navbar__action-label">Lists &</span>
                        <span class="navbar__action-title">Buy again</span>
                    </div>
                </a>

                <a href="<?php echo esc_url(wp_login_url()); ?>" class="navbar__action-item">
                    <i class="far fa-user"></i>
                    <div class="navbar__action-text">
                        <span class="navbar__action-label">Log in or Sign up</span>
                        <span class="navbar__action-title">My Account</span>
                    </div>
                </a>

                <a href="<?php echo $woocommerce_active ? esc_url(wc_get_cart_url()) : '#'; ?>" class="navbar__cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="navbar__cart-total"><?php echo esc_html($cart_total); ?></span>
                </a>
            </div>
        </div>
    </div>

    <nav class="navbar__categories">
        <div class="container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'navbar__menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </div>
    </nav>
</header>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Welcome to our online shop! Explore our wide range of products and enjoy a seamless shopping experience.">
    <title>Online Shop</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <h1 class="header__title">Online Shop</h1>
        <nav class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item"><a href="#electronics" class="header__nav-link">Electronics</a></li>
                <li class="header__nav-item"><a href="#clothing" class="header__nav-link">Clothing</a></li>
                <li class="header__nav-item"><a href="#home-decor" class="header__nav-link">Home Decor</a></li>
                <li class="header__nav-item"><a href="#accessories" class="header__nav-link">Accessories</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main">
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

        <!-- Accessories Section -->
        <section id="accessories" class="section">
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
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <p class="footer__copyright">&copy; 2023 Online Shop. All rights reserved.</p>
        <nav class="footer__nav">
            <ul class="footer__nav-list">
                <li class="footer__nav-item"><a href="#electronics" class="footer__nav-link">Electronics</a></li>
                <li class="footer__nav-item"><a href="#clothing" class="footer__nav-link">Clothing</a></li>
                <li class="footer__nav-item"><a href="#home-decor" class="footer__nav-link">Home Decor</a></li>
                <li class="footer__nav-item"><a href="#accessories" class="footer__nav-link">Accessories</a></li>
            </ul>
        </nav>
    </footer>
</body>

</html>