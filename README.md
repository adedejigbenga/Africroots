# Africroots — Former & New Design

## former-design/
The current live site's active theme ("Pro" by Themeco) — top-level scaffolding files only
(`header.php`, `footer.php`, `functions.php`, `style.css`, etc.). The vendor's bundled
Cornerstone page-builder framework is intentionally excluded (thousands of files, commercial
license). Note: the actual homepage layout/content is stored in the WordPress database as
Cornerstone builder data, not in these files — this folder captures the theme scaffolding only,
not a pixel snapshot of the current design.

## new-design/
- `africroots-child/` — the new child theme (Template: pro) implementing the redesigned
  homepage: hero, shop-by-category grid, "Our Story" section, brand block, and footer with
  real contact info. Activate in wp-admin and assign the "Home Redesign" page template to go live.
- `artifact-preview.html` — a self-contained, multi-page static mockup (Home, Shop, About,
  Size Guide, Contact, My Account, Cart, and legal pages) used for design review. Open directly
  in any browser.
