-- ADDING ICONS--
1. Use an existing icon as a template
2. Keep the SVG viewbox, width, and height the same
3. When the new icon is ready, clean it using svgomg (below)
4. When adding new icons, include them in the list under: shortcodes/gcm_icon.php -> gcm_get_icon_list()

-- CLEANING --
Each icon has been cleaned up by SVGOMG:
SVGO's Missing GUI
https://jakearchibald.github.io/svgomg/

-- COLORS --
Each icon is in its default purple color.
The following three colors are supported:
stroke = 9069AC
fill = E6C8FF
fill (light) = FAF4FF

All three colors will be swapped out based on gcm_get_icon_colors() if a different color is used, such as blue or black.

Both of the fill colors are be removed when using the icon type "flat".