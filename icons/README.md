# Player Tagger Icons

This directory contains the PWA (Progressive Web App) icons for Player Tagger.

## Icon Files

All icons are generated from `player-tagger-base.jpeg` (1024x1024).

**Generated Icons:**
- `icon-72x72.png` - Small screens, older devices
- `icon-96x96.png` - Standard mobile icons
- `icon-128x128.png` - Desktop shortcuts
- `icon-144x144.png` - Windows tiles
- `icon-152x152.png` - Apple touch icon
- `icon-192x192.png` - Android home screen (minimum recommended)
- `icon-384x384.png` - Large Android icons
- `icon-512x512.png` - High-res displays, splash screens (recommended)

## Regenerating Icons

If you update `player-tagger-base.jpeg`, regenerate all sizes:

```bash
cd icons
./generate-icons.sh
```

Or manually with ImageMagick:

```bash
for SIZE in 72 96 128 144 152 192 384 512; do
  magick player-tagger-base.jpeg -resize ${SIZE}x${SIZE} -quality 95 icon-${SIZE}x${SIZE}.png
done
```

## Requirements

- Base image should be square (1024x1024 recommended)
- PNG format for generated icons
- Transparent background optional (solid color works fine)

## Usage

Icons are referenced in:
- `manifest.json` - PWA manifest
- `index.html` - Apple touch icons and favicon
