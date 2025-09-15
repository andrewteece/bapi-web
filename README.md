# BAPI Web

Professional web stack for BAPI. This repo hosts docs now and the codebase later (Next.js + Headless WP + Design System).

## Project Board

👉 Roadmap, sprints, and timeline: [BAPI – Web Dev Roadmap](https://github.com/users/andrewteece/projects/7)

## Docs

- [Overview](docs/OVERVIEW.md)
- [Roadmap](docs/ROADMAP.md)
- [Milestones](docs/MILESTONES.md)
- [Project Color Key](docs/PROJECT-COLOR-KEY.md)
- [Onboarding](docs/ONBOARDING.md)

### Audits

- [Website Audit Overview](docs/audits/website/README.md)
  - [Accessibility & Best Practices](docs/audits/website/website-accessibility-best-practices.md)
  - [Accessibility Checklist](docs/audits/website/accessibility-checklist.md)
  - [Technical SEO Audit](docs/audits/website/website-seo-audit.md)
  - [SEO Checklist](docs/audits/website/seo-checklist.md)
  - [Performance Audit](docs/audits/website/website-performance-audit.md)
  - [Performance Checklist](docs/audits/website/performance-checklist.md)
  - [Exports (raw reports)](docs/audits/website/exports/)

## Planned Tech

- Next.js, TypeScript, Tailwind, shadcn/ui
- Headless WordPress (WPGraphQL)
- Vercel + GitHub Actions

## Getting Started

### Requirements

- **Node.js 20.x** (repo includes `.nvmrc` with `20`)
- Git

> Tip: If you use **nvm**, run `nvm use` in the repo to auto-select Node 20.

---

### Package Manager

We recommend **pnpm** for speed and monorepo readiness. Node 20 ships with **Corepack**, so you don’t need a global install.

#### Use pnpm (recommended)

```bash
# ensure Node 20 is active
nvm use 20

# enable pnpm via Corepack (Node 20+)
corepack enable
corepack prepare pnpm@latest --activate

# install dependencies (after the app is initialized)
pnpm install

# start dev server (after the app is initialized)
pnpm dev
```

#### Or use npm

```bash
nvm use 20
npm install
npm run dev
```

---

### Notes

- If `corepack` isn’t found, run `npm i -g corepack` once.
- If you don’t use nvm, install Node 20 from nodejs.org or with Volta, then skip the `nvm` commands.
- The repo is currently docs-first; once the Next.js app is initialized, `install` and `dev` scripts will be available.

## Contributing

- Branches: `feat/*`, `fix/*`, `chore/*`, `docs/*`, `research/*`
- Conventional Commits (e.g., `feat: add header nav`)
- Open a PR → CI must pass → review → squash & merge

See [CONTRIBUTING.md](CONTRIBUTING.md) for branch, commit, and PR guidelines.
