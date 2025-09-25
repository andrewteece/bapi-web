<?php
/**
 * BAPI Technical Product Page Template
 *
 * Custom WordPress template for technical product pages
 * Optimized for HVAC/Building automation products
 * Includes structured data for SEO and technical specifications
 *
 * Template Name: Technical Product Page
 */

get_header(); ?>

<div class="technical-product-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="product-<?php the_ID(); ?>" <?php post_class('technical-product'); ?>>

            <!-- Product Header with Technical Focus -->
            <header class="product-header">
                <div class="product-meta">
                    <span class="product-category"><?php echo get_field('product_category'); ?></span>
                    <span class="compliance-badges">
                        <?php if (get_field('nist_traceable')): ?>
                            <span class="badge nist">NIST Traceable</span>
                        <?php endif; ?>
                        <?php if (get_field('iso_certified')): ?>
                            <span class="badge iso">ISO Certified</span>
                        <?php endif; ?>
                    </span>
                </div>

                <h1 class="product-title"><?php the_title(); ?></h1>

                <div class="product-summary">
                    <?php echo get_field('technical_summary'); ?>
                </div>
            </header>

            <!-- Product Image Gallery with Technical Focus -->
            <section class="product-gallery">
                <div class="main-image">
                    <?php the_post_thumbnail('large', ['alt' => get_the_title() . ' Technical Specifications']); ?>
                </div>

                <!-- Technical Diagrams Gallery -->
                <?php
                $technical_images = get_field('technical_diagrams');
                if ($technical_images): ?>
                    <div class="technical-diagrams">
                        <h3>Technical Diagrams</h3>
                        <?php foreach ($technical_images as $image): ?>
                            <img src="<?php echo $image['sizes']['medium']; ?>"
                                 alt="<?php echo $image['alt']; ?>"
                                 class="technical-diagram">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>

            <!-- Technical Specifications Table -->
            <section class="technical-specifications">
                <h2>Technical Specifications</h2>

                <div class="spec-table-container">
                    <table class="specifications-table">
                        <tbody>
                            <?php if (get_field('measurement_range')): ?>
                                <tr>
                                    <td class="spec-label">Measurement Range</td>
                                    <td class="spec-value"><?php echo get_field('measurement_range'); ?></td>
                                </tr>
                            <?php endif; ?>

                            <?php if (get_field('accuracy')): ?>
                                <tr>
                                    <td class="spec-label">Accuracy</td>
                                    <td class="spec-value"><?php echo get_field('accuracy'); ?></td>
                                </tr>
                            <?php endif; ?>

                            <?php if (get_field('operating_temperature')): ?>
                                <tr>
                                    <td class="spec-label">Operating Temperature</td>
                                    <td class="spec-value"><?php echo get_field('operating_temperature'); ?></td>
                                </tr>
                            <?php endif; ?>

                            <?php if (get_field('communication_protocol')): ?>
                                <tr>
                                    <td class="spec-label">Communication Protocol</td>
                                    <td class="spec-value"><?php echo get_field('communication_protocol'); ?></td>
                                </tr>
                            <?php endif; ?>

                            <?php if (get_field('power_requirements')): ?>
                                <tr>
                                    <td class="spec-label">Power Requirements</td>
                                    <td class="spec-value"><?php echo get_field('power_requirements'); ?></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Marketing Benefits (Technical Translation) -->
            <section class="technical-benefits">
                <h2>Key Benefits</h2>

                <div class="benefits-grid">
                    <?php
                    $benefits = get_field('technical_benefits');
                    if ($benefits): ?>
                        <?php foreach ($benefits as $benefit): ?>
                            <div class="benefit-card">
                                <h3><?php echo $benefit['benefit_title']; ?></h3>
                                <p class="technical-explanation"><?php echo $benefit['technical_detail']; ?></p>
                                <p class="marketing-benefit"><?php echo $benefit['customer_benefit']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Application Examples -->
            <section class="applications">
                <h2>Typical Applications</h2>

                <div class="application-list">
                    <?php
                    $applications = get_field('typical_applications');
                    if ($applications): ?>
                        <ul class="applications-grid">
                            <?php foreach ($applications as $app): ?>
                                <li class="application-item">
                                    <strong><?php echo $app['application_name']; ?></strong>
                                    <p><?php echo $app['application_description']; ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Related Products -->
            <section class="related-products">
                <h2>Related Products</h2>

                <?php
                $related_products = get_field('related_products');
                if ($related_products): ?>
                    <div class="related-products-grid">
                        <?php foreach ($related_products as $product): ?>
                            <div class="related-product-card">
                                <a href="<?php echo get_permalink($product->ID); ?>">
                                    <?php echo get_the_post_thumbnail($product->ID, 'medium'); ?>
                                    <h4><?php echo get_the_title($product->ID); ?></h4>
                                    <p><?php echo get_field('product_summary', $product->ID); ?></p>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>

            <!-- Technical Resources -->
            <section class="technical-resources">
                <h2>Technical Resources</h2>

                <div class="resources-grid">
                    <!-- Application Notes -->
                    <?php
                    $app_notes = get_field('application_notes');
                    if ($app_notes): ?>
                        <div class="resource-category">
                            <h3>Application Notes</h3>
                            <?php foreach ($app_notes as $note): ?>
                                <a href="<?php echo $note['url']; ?>" class="resource-link" target="_blank">
                                    <span class="resource-title"><?php echo $note['title']; ?></span>
                                    <span class="resource-type">PDF</span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Installation Guides -->
                    <?php
                    $install_guides = get_field('installation_guides');
                    if ($install_guides): ?>
                        <div class="resource-category">
                            <h3>Installation Guides</h3>
                            <?php foreach ($install_guides as $guide): ?>
                                <a href="<?php echo $guide['url']; ?>" class="resource-link" target="_blank">
                                    <span class="resource-title"><?php echo $guide['title']; ?></span>
                                    <span class="resource-type">PDF</span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="product-cta">
                <div class="cta-content">
                    <h2>Need More Information?</h2>
                    <p>Our technical team can help you find the right solution for your application.</p>

                    <div class="cta-buttons">
                        <a href="/contact" class="btn btn-primary">Contact Technical Support</a>
                        <a href="tel:+16087354800" class="btn btn-secondary">Call: +1-608-735-4800</a>
                        <a href="/where-to-buy" class="btn btn-outline">Find a Distributor</a>
                    </div>
                </div>
            </section>

        </article>

        <!-- Structured Data for SEO -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "<?php echo get_the_title(); ?>",
            "description": "<?php echo get_field('technical_summary'); ?>",
            "manufacturer": {
                "@type": "Organization",
                "name": "Building Automation Products, Inc.",
                "url": "https://www.bapihvac.com"
            },
            "brand": {
                "@type": "Brand",
                "name": "BAPI"
            },
            "category": "<?php echo get_field('product_category'); ?>",
            "url": "<?php echo get_permalink(); ?>",
            "image": "<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>",
            "offers": {
                "@type": "Offer",
                "availability": "https://schema.org/InStock",
                "seller": {
                    "@type": "Organization",
                    "name": "Building Automation Products, Inc."
                }
            }
        }
        </script>

    <?php endwhile; endif; ?>
</div>

<style>
/* Technical Product Page Styles */
.technical-product-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

.product-header {
    border-bottom: 2px solid #e5e7eb;
    padding-bottom: 2rem;
    margin-bottom: 3rem;
}

.product-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.compliance-badges .badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 600;
    border-radius: 0.25rem;
    margin-left: 0.5rem;
}

.badge.nist {
    background-color: #10b981;
    color: white;
}

.badge.iso {
    background-color: #3b82f6;
    color: white;
}

.specifications-table {
    width: 100%;
    border-collapse: collapse;
    margin: 1rem 0;
}

.specifications-table td {
    padding: 0.75rem;
    border-bottom: 1px solid #e5e7eb;
}

.spec-label {
    font-weight: 600;
    width: 30%;
    background-color: #f9fafb;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.benefit-card {
    padding: 1.5rem;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
}

.technical-explanation {
    font-size: 0.875rem;
    color: #6b7280;
    margin: 0.5rem 0;
}

.marketing-benefit {
    font-weight: 600;
    color: #059669;
}

.related-products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.related-product-card {
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    overflow: hidden;
    transition: transform 0.2s;
}

.related-product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* Mobile Optimization for Field Technicians */
@media (max-width: 768px) {
    .technical-product-container {
        padding: 1rem;
    }

    .specifications-table {
        font-size: 0.875rem;
    }

    .benefits-grid {
        grid-template-columns: 1fr;
    }

    .product-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
}

/* Print Styles for Technical Documentation */
@media print {
    .product-cta,
    .related-products {
        display: none;
    }

    .specifications-table {
        break-inside: avoid;
    }
}
</style>

<?php get_footer(); ?>
