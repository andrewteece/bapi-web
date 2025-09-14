# BAPI Web

Professional web stack for BAPI. This repo hosts docs now and the codebase later (Next.js + Headless WP + Design System).

## Project Board
👉 Roadmap, sprints, and timeline: [BAPI – Web Dev Roadmap](https://github.com/users/andrewteece/projects/7)

## Docs
- [Milestones](docs/MILESTONES.md)
- [Project Color Key](docs/PROJECT-COLOR-KEY.md)
- [Onboarding](docs/ONBOARDING.md)
- [Website Audit](docs/WEBSITE-AUDIT.md)

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
nvm use 20       # or install nvm and run `nvm install 20` then `nvm use`

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
