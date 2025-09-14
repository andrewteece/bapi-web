# Contributing Guidelines

Thank you for your interest in contributing to **BAPI Web**!
These guidelines ensure consistency and high-quality contributions.

See [CONTRIBUTING.md](CONTRIBUTING.md) for branch, commit, and PR guidelines.

---

## 📂 Branching Strategy

- **Main branch** = always stable, deployable
- Use feature branches for all work:
  - `feat/*` → new features
  - `fix/*` → bug fixes
  - `chore/*` → maintenance, config, CI/CD
  - `docs/*` → documentation changes
  - `research/*` → time-boxed spikes or investigations

Example: `feat/header-navigation`

---

## 📝 Commit Messages

Follow **Conventional Commits**:

- `feat:` → new feature
- `fix:` → bug fix
- `chore:` → tooling/config changes
- `docs:` → documentation-only changes
- `refactor:` → code changes that aren’t fixes or features
- `test:` → adding or updating tests

Example:

```
feat: add responsive header navigation
```

---

## 🔀 Pull Requests

- Link your PR to a **Project issue/epic** when possible
- Use the PR template provided in `.github/PULL_REQUEST_TEMPLATE.md`
- Checklist before marking **Ready for review**:
  - [ ] Branch up to date with `main`
  - [ ] Linting & formatting pass (`pnpm lint`)
  - [ ] Tests pass (`pnpm test`)
  - [ ] Documentation updated (if applicable)

---

## 🧪 Code Quality

- Code must pass ESLint and Prettier checks
- Follow project coding standards (TypeScript strict mode, Tailwind conventions, etc.)
- Keep functions small and focused
- Ensure accessibility (WCAG 2.2) and responsive design

---

## 📖 Documentation

- Update `README.md` and `docs/*` if your change affects setup, workflows, or developer standards
- Use clear headings, bullet points, and code blocks

---

## 🚀 Deployment

- All merges to `main` should be deployable
- CI/CD workflows will run tests, builds, and (later) deployments automatically

---

## 🙌 Notes

These guidelines may evolve as the project grows. Suggestions welcome!
