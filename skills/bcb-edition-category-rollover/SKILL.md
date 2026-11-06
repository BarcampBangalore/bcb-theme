---
name: bcb-edition-category-rollover
description: Roll the BarCamp Bangalore WordPress theme to a new event edition after its category hierarchy has been created in wp-admin. Use when updating event, session-track, or Techlash category IDs; do not use for ordinary event-copy changes.
---

# BCB edition category rollover

The WordPress category hierarchy is created in wp-admin; the theme must then be given the resulting numeric category IDs. Category slugs and parent relationships are for WordPress organization and URLs. The theme queries by ID.

## Gather IDs in wp-admin

Create the new edition parent category, then create these eight children beneath it, in the intended order:

1. Technology
2. Design
3. Mobile & Web
4. Bangalore & Lifestyle
5. Scaling & Infrastructure
6. Entrepreneurship
7. Rest of the world
8. Techlash

For every category, its ID is the value of `tag_ID` in its wp-admin Edit URL. Confirm the name-to-ID mapping rather than assuming the IDs are consecutive or were created in this order.

Use unique, event-prefixed child slugs (for example, `bcb-2026-winter-technology`); WordPress does not inherit a parent slug.

## Configure the session-submission form

After creating the categories, update the WPUF form so submitters can choose the new edition's child tracks:

1. Open `https://barcampbangalore.com/wp-admin/admin.php?page=wpuf-post-forms&id=6246&action=edit`.
2. Select the **Category** dropdown field, then go to **Field Options** → **Advanced**.
3. Set **Selection Type** to **Child of** and set **Selection Terms** to the newly created edition parent category.
4. Save the form and refresh the page.
5. Open **Settings** → **General** and add the newly created parent category ID.
6. Save the form again.

## Update the theme

Edit `data/event.json` only for the category mapping:

- `event.category_id`: the new edition parent category.
- `sessions.tracks[*].category_id`: the seven track IDs, in the order above.
- `techlash.category_id`: the Techlash child ID.

Keep track names, icons, and ordering unless a separate request changes them. Do not add these IDs back into PHP: `functions.php`, `page-sessions.php`, `page-techlash.php`, and `author.php` read the configuration through `bcb_cfg` / `bcb_cfg_list`.

If the repository has since changed, search for the old IDs and `category_id` before editing so all active configuration is updated without modifying historical references or unrelated archive categories.

## Validate and hand off

Validate the configuration and diff:

```sh
node -e 'JSON.parse(require("fs").readFileSync("data/event.json", "utf8")); console.log("event.json: valid JSON")'
git diff --check
git diff -- data/event.json
```

Report the final parent, track, and Techlash IDs. Do not commit, push, or open a PR unless explicitly requested. When committing, stage only `data/event.json` unless the requested work includes other files.
