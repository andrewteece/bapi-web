# BAPI WordPress Source Code – Setup Plan

_Last updated: Oct 7, 2025_

---

## 1. Goals
- Bring the WordPress source under source control (GitHub private repo).
- Establish environment parity (local / staging / production).
- Prepare for modernization (Composer, Docker, CI/CD, headless readiness).
- Ensure security, traceability, and reproducibility from day one.

---

## 2. Phase 0 – Intake & Backup
**Owner:** IT + Web Team  
**Duration:** 1 day

- Take full site backup (files, database, uploads) before modifications.
- Document environment: PHP, MySQL, active theme, plugins, cron jobs.
- Identify custom code (theme, plugins, mu-plugins).
- Confirm access: SSH/SFTP, DB, CDN, GA4, GTM, Search Console.

---

## 3. Phase 1 – Repo Initialization
**Owner:** Web Dev  
**Duration:** 1 day

- Create private GitHub repo: `BAPIDigital/bapi-wp-code`.
- Copy custom code: theme, plugins, mu-plugins, config samples.
- Add `.gitignore` to exclude core, uploads, cache, secrets.
- Add `README.md`, `docs/LOCAL_SETUP.md`, and sample `.env`.
- Initial commit and enable branch protection with PR review.

---

## 4. Phase 2 – Local Development Environment
**Owner:** Web Dev + IT  
**Duration:** 1–2 days

### Option A – Dockerized stack (preferred)
- Use `docker-compose.yml` with php-fpm, nginx, and mysql containers.
- Include `mailhog` for local email capture.
- Mount `/wp-content` as a volume for real-time dev parity.

### Option B – Local LAMP/WAMP/LocalWP
- For marketing or content staff needing preview builds.

✅ Use `.env`-based configuration and local domain (e.g., `bapi.local`).

---

## 5. Phase 3 – Dependencies & Build Tooling
**Owner:** Web Dev  
**Duration:** 1 day

- Add Composer + WPackagist for dependency management.
- Add npm for theme assets (Vite, Tailwind, ESLint, Prettier).
- Add `.nvmrc` (Node 22), `.editorconfig`, CI lint checks, and optional Husky hooks.

---

## 6. Phase 4 – Staging Environment Setup
**Owner:** IT + Web Dev  
**Duration:** 1 day

- Provision staging domain (e.g., `staging.bapi.local`).
- Deploy via git pull or CI rsync workflow.
- Separate database and uploads from production.
- Protect staging behind VPN or basic auth.

---

## 7. Phase 5 – Baseline Audit & CI Integration
**Owner:** Web Dev  
**Duration:** 2 days

- Run initial Lighthouse, WPScan, and SEO audits.
- Capture Core Web Vitals baseline.
- Add GitHub Actions for PHP linting, theme build, and optional deploy to staging.

---

## 8. Phase 6 – Access & Documentation
**Owner:** All Stakeholders  
**Duration:** Ongoing

- Grant GitHub team access (Write/Read).
- Add documentation: `DEPLOYMENT.md`, `ENVIRONMENT.md`, `BACKUPS.md`.
- Schedule weekly repo sync and monthly dependency audit.

---

## 9. Outputs
- Private GitHub repo (clean, reproducible).  
- Dockerized or LocalWP environment ready.  
- Staging instance connected to repo for QA.  
- CI checks and secure deployment workflow.  
- Documentation for IT and Marketing teams.

---

## 10. Next Steps After Setup
1. Run full site audit (10-day plan).  
2. Implement quick performance and security wins.  
3. Draft Headless Migration Roadmap (Next.js + WPGraphQL).  
4. Document release workflow (dev → staging → prod).

---

© 2025 Building Automation Products Inc. – Internal Use Only
