# 0.1.1 review summary

Three reproducible issues from 0.1.0 were corrected using existing theme integration points:

1. **P2: wide Classic Editor tables widened the document.** Constrain a block scroll box in the WordPress adapter CSS; no change to original skin CSS or extra table JavaScript.
2. **P2: selected-reading totals retained a hardcoded 01 / 07.** Use the current published-post count, including the empty state.
3. **P2: reading-size keys collided across same-origin Multisite paths.** Scope the existing localStorage preference to the site's native home link.

Validation: all 27 skins at 320/390/820/1440, native WordPress routes and menu/widget saves, internal table scrolling, actual post totals, actual script execution with two supplied same-origin site-home contexts, plus package round trips. The key-isolation test is a bounded synthetic regression, not a claim of real production dual-site acceptance.

Known coverage limits: Chromium only; no physical-device, Safari/Firefox, full screen-reader or exhaustive third-party-plugin matrix. WPCS and Theme Check do not substitute for behavioral verification.
