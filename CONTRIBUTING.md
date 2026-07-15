# Contributing

Thanks for helping improve Spry Breakdance Elements.

## Before starting

Read `AGENTS.md`, `docs/PROJECT.md`, the root README, and the changelog. Search existing issues and pull requests before duplicating work.

## Proposing a change

- Keep each pull request focused on one element, feature, or fix.
- Explain the user-facing behavior and why the change belongs in the shared plugin.
- Include reproduction steps for bugs and screenshots or a preview for visual changes when practical.
- Call out stored-property, markup, selector, or compatibility changes explicitly.

## Adding an element

1. Create the element in Element Studio and retain its generated directory name under `elements/`.
2. Follow the existing element file pattern and shared PHP namespace.
3. Use `swt-bde-<element-slug>` for the root class and `swt-<element-slug>__<part>` for internal classes so every element has a unique prefix.
4. Provide sensible default content and design settings.
5. Cover responsive, keyboard, touch, and reduced-motion behavior as applicable.
6. Document the element in `README.md` and add it under `[Unreleased]` in `CHANGELOG.md`.

## Quality checks

Run all checks available in your environment. At minimum, inspect PHP syntax, Twig/control-property alignment, CSS scoping, responsive behavior, interaction states, and ZIP layout. If a check cannot be run, state that clearly in the pull request.

## Releases

Do not change versions merely because a development commit was made. Version the plugin when preparing a distributable release, following the release policy in `docs/PROJECT.md`.
