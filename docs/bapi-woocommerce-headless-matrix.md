# BAPI WooCommerce → Headless Compatibility Matrix

This matrix helps us evaluate each active WooCommerce plugin/extension for headless readiness with **Next.js + WPGraphQL + Woo Store API + REST** and **HPOS**.

## Legend

- **Criticality:** 🚫 = removeable / nice-to-have · 🟨 = useful / replaceable · 🟥 = mission-critical  
- **Headless Readiness:** ✅ native support · ⚠️ partial (needs REST/adapter) · ❌ none (custom work)  
- **APIs:** GQL = WPGraphQL / WPGraphQL Woo · Store = Woo Store API (cart/checkout) · REST = Woo REST API  
- **Status:** ⏳ planned · 🔧 in progress · ✅ done · 🧪 testing · 🔁 needs recheck

---

## 1) Extension Compatibility

> Fill one row per active plugin. Keep “Notes” short; link to a GitHub issue for deep dives.

| Plugin / Extension | Purpose | Criticality | Data Surface (what the frontend needs) | API(s) Needed (GQL / Store / REST) | HPOS Compatible | Headless Readiness | Required Actions | Owner | Status | Notes |
|---|---|---:|---|---|:---:|:---:|---|---|:---:|---|
| WooCommerce (core) | Core commerce engine | 🟥 | Products, prices, inventory, cart/checkout, orders | GQL, Store, REST | ✅ | ✅ | Enable HPOS, confirm Store API endpoints, set CORS rules | | 🧪 | |
|  |  |  |  |  |  |  |  |  |  |  |

---

## 2) Product & Catalog Coverage (GraphQL)

| Capability | Available via GraphQL? | Workaround (if not) | Action |
|---|:---:|---|---|
| Simple products (price, stock, images, categories) | ✅ | — | — |
| Variations (attributes, availability, pricing) | ✅ | — | — |
| Faceted filters (attributes, price ranges) | ⚠️ | Derive on server; precompute facets | Define server adapter |
| Related / upsells / cross-sells | ⚠️ | REST fallback if needed | Confirm exposure & shape |
| Coupons metadata (for PDP hints) | ❌ | Use Store API at cart time | Don’t surface on PDP |

---

## 3) Cart & Checkout (Store API)

| Flow Step | Store API Endpoint(s) | Session/Cookie Handling | Gateway Notes | Action |
|---|---|---|---|---|
| Create / read cart | `/wc/store/v1/cart` | Forward customer session cookie via Next.js Route Handler | — | Implement server proxy |
| Apply coupon / remove | `/wc/store/v1/cart/apply-coupon` | Same as above | — | Validate coupon rules |
| Shipping rates | `/wc/store/v1/cart` (shipping_rates) | Same | Carrier plugin must expose rates | Confirm plugin support |
| Taxes | Included in cart totals | Same | — | Compare with legacy totals |
| Checkout → order | `/wc/store/v1/checkout` | Same | Gateway must support headless redirect/tokenization | Verify gateway docs |

---

## 4) Back-Office / Admin (REST)

| Operation | API | Frequency | Security Notes | Action |
|---|---|:---:|---|---|
| Revalidate ISR on product changes | WP Webhook → Next.js revalidate | Event-based | Sign webhook, IP allowlist | Add revalidate endpoint |
| Order exports / ERP sync | REST `/wp-json/wc/v3/orders` | Batch | Least-privilege keys, rotate | Define scoped API key |
| Inventory sync | REST or GraphQL mutation | Near-real-time | Same | Confirm plugin conflicts |

---

## 5) SEO & URL Parity

- **Slug parity:** PDP `/product/[slug]` mirrors Woo product slug.  
- **Category parity:** `/category/[slug]` mirrors product_cat terms.  
- **Canonicals:** Emit canonical to headless URL.  
- **Sitemaps:** `next-sitemap` for products/categories; include `lastmod`.  
- **Redirects:** 301 any legacy paths that change; maintain query params for tracking as needed.

**Actions**
- [ ] Export current product/category URL list  
- [ ] Map to Next.js routes  
- [ ] Generate redirects config  
- [ ] Validate structured data (Product, Offer, Breadcrumb)

---

## 6) Risk Register (Headless Migration)

| Risk | Impact | Likelihood | Mitigation | Owner | Status |
|---|---|:---:|:---:|---|:---:|
| Payment gateway not Store-API compatible | Checkout blocker | ⬆️ | Confirm vendor docs; fallback REST/hosted pay |  | ⏳ |
| HPOS plugin incompatibility | Order/admin breakage | ⬆️ | Stage HPOS toggle; test suite; vendor tickets |  | ⏳ |
| Faceted search mismatch | UX/SEO regressions | ➖ | Server-computed facets; cache |  | ⏳ |

---

## 7) Decision Log

- **API strategy:** GraphQL for reads; Store API for cart/checkout; REST for admin ops.  
- **Rendering:** ISR for PDP/PLP; dynamic for cart/checkout.  
- **Auth:** Customer session cookie forwarded via server routes only.

---

## 8) Action Tracker (Checklist)

- [ ] Export full plugin list and complete Section 1  
- [ ] Validate HPOS compatibility (stage, then enable)  
- [ ] Prototype GraphQL PDP/PLP in Next.js (App Router)  
- [ ] Implement server proxies for Store API + session cookie  
- [ ] Confirm gateway headless path; run test transactions  
- [ ] Ship sitemap + canonicals; run SEO crawl diff
