# Accessibility Checklist (WCAG 2.1 AA)

Use this checklist to verify compliance during the Website Audit.

---

## 1. Perceivable
- [ ] Images have descriptive alt text
- [ ] Text has sufficient color contrast (4.5:1 normal, 3:1 large text)
- [ ] Multimedia has captions and transcripts
- [ ] Content is adaptable (semantic HTML, ARIA landmarks)
- [ ] Content is not lost when zoomed up to 200%

## 2. Operable
- [ ] All interactive elements are keyboard accessible
- [ ] Focus states are visible and clear
- [ ] No keyboard traps (users can tab in/out of components)
- [ ] Page has skip navigation link or landmark structure
- [ ] Time limits (if any) can be adjusted or turned off

## 3. Understandable
- [ ] Page titles are unique and descriptive
- [ ] Form fields have associated labels
- [ ] Error messages are clear and specific
- [ ] Navigation is consistent across pages
- [ ] Language attribute set correctly in <html>

## 4. Robust
- [ ] HTML is valid (passes W3C validation)
- [ ] ARIA roles and attributes used correctly (no redundancy)
- [ ] Compatibility tested with screen readers (NVDA, VoiceOver, JAWS)
- [ ] Tested on multiple devices and browsers

---

## Notes
- Run automated checks with **axe DevTools**, **Lighthouse**, and **WAVE**.
- Complement with **manual testing** (keyboard nav, screen readers).
