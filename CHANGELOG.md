# Changelog

All notable changes to this project will be documented in this file.

The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), and this project uses [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.1] - 2026-07-15

### Changed

- Replaced the Flip Box's separate radius and shadow controls with Breakdance's built-in `EssentialElements\borders` preset for borders, radius, and box shadow.
- Adopted the Element Studio-generated `Flip_Box` directory and `FlipBox` class naming so future saves update one canonical element instead of creating a duplicate directory.
- Declared the element's current Breakdance availability using the generated `availableIn()` method.

### Fixed

- Replaced the deprecated argumentless `get_class()` call with `self::class` for PHP 8.3 compatibility.
- Removed a stale CSS reference to the old card-radius control after adopting the Borders preset.

## [1.0.0] - 2026-07-15

### Added

- Initial shared Breakdance elements plugin.
- Responsive and accessible Flip Box element.
- Customizable content, colors, sizing, typography, button, and flip motion.
- Hover, focus, touch-friendly, and reduced-motion behavior.
