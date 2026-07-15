# Project Context

## Purpose

Spry Breakdance Elements is Spry Web Tech's public, shareable collection of custom Breakdance elements. One WordPress plugin should be installable across future client projects, allowing the collection to grow without installing a separate plugin for each element.

## Repository and package identity

- Repository: `sprywebtech/spry-breakdance-elements`
- Plugin name: `Spry Breakdance Elements`
- Plugin directory and ZIP root: `spry-breakdance-elements`
- PHP namespace: `SpryWebTechBreakdanceElements`
- Text domain: `spry-breakdance-elements`
- License: GPL-2.0-or-later
- Default branch: `main`

These identifiers should remain stable. Changing them can create duplicate plugins, missing elements, or upgrade problems on existing sites.

## Current architecture

`plugin.php` registers `elements/` as the shared Breakdance Element Studio save location. Breakdance discovers valid element directories beneath it. Each element owns its PHP definition, Twig markup, generated CSS template, and baseline CSS.

Current element:

- `elements/Flip_Box/` — responsive two-sided content card with configurable content, appearance, button, direction, duration, and perspective. It supports pointer hover, keyboard focus, touch-oriented focus behavior, and reduced motion without custom JavaScript.

## Product principles

1. One plugin, many independent elements.
2. Useful defaults with client-adjustable Breakdance controls.
3. Responsive by container and viewport, not by one demo layout.
4. Accessible interactions and semantic output from the start.
5. Minimal runtime weight and no unnecessary dependencies.
6. Backward-compatible updates for elements already used on client sites.
7. Public code that is understandable, documented, and reusable.

## Element naming convention

Every element has a unique kebab-case slug that namespaces its front-end identifiers:

- Breakdance root class: `swt-bde-<element-slug>`
- Internal BEM classes: `swt-<element-slug>__<part>`

For example, Flip Box uses `swt-bde-flip-box` and `swt-flip-box__stage`. A future Testimonial Slider would use `swt-bde-testimonial-slider`, `swt-testimonial-slider__slide`, and `swt-testimonial-slider__controls`.

Use the same element slug in element-specific JavaScript identifiers, data attributes, hooks, and CSS custom properties when those are needed. Do not share a generic CSS prefix between different elements.

## Durable decisions

- The repository and plugin are public and intended to be shareable.
- New elements are added to this plugin rather than shipped as separate plugins.
- GitHub is the source of truth for current project context and code.
- Semantic Versioning and `CHANGELOG.md` communicate releases.
- Future work should normally use focused branches and draft pull requests.
- A distributable ZIP contains the plugin directory as its single top-level folder.
- Automatic WordPress updates from GitHub are not enabled. Treat that as a separate future feature requiring an explicit design and security decision.
- Element Studio-generated directory names are canonical. Never retain a former directory beside a newly generated directory when both register the same class.

## Compatibility policy

No formal minimum WordPress, PHP, or Breakdance versions have been declared yet. Do not invent them. When compatibility is tested and adopted, record the exact versions here and update plugin metadata and the README together.

Favor currently documented Breakdance Element Studio APIs. Before changing registration or control APIs, confirm the current official format and assess existing-site impact.

## Release policy

- Keep upcoming user-visible changes under `[Unreleased]`.
- Choose the next version using Semantic Versioning.
- On release, move entries into a dated version section and update `plugin.php`.
- Validate PHP, templates, CSS behavior, editor behavior when possible, and ZIP integrity.
- Create tags, GitHub releases, or client deployments only when explicitly requested.

## Known project gaps

- Formal supported-version matrix has not been established.
- Automated tests and a representative WordPress/Breakdance test environment are not yet included.
- Automated GitHub release packaging and plugin update delivery are not configured.

These are roadmap items, not permission to add infrastructure without approval.

## Maintaining this document

Update this file when a decision affects multiple elements or future work: compatibility, packaging, shared architecture, release process, naming, dependencies, licensing, or support policy. Keep implementation details in code and short-lived tasks in GitHub issues.
