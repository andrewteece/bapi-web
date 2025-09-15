# Performance Checklist

## Core Web Vitals
- [ ] LCP ≤ 2.5s on mobile & desktop
- [ ] INP ≤ 200ms
- [ ] CLS ≤ 0.1

## Images
- [ ] Use modern formats (AVIF/WebP)
- [ ] Lazy loading for offscreen images
- [ ] Responsive sizes (srcset)
- [ ] Compression enabled

## Network
- [ ] Minified CSS/JS
- [ ] Bundle splitting (JS)
- [ ] Critical CSS inlined
- [ ] Caching headers correct (static assets long TTL)
- [ ] GZIP or Brotli enabled

## Third Parties
- [ ] Inventory of scripts with load impact
- [ ] Async/defer where possible
- [ ] Remove unused scripts

## Delivery
- [ ] HTTP/2 or HTTP/3 enabled
- [ ] CDN used for global distribution
- [ ] TTFB under 200ms (target)

