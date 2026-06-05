#!/bin/bash

# Icon Generator for Player Tagger PWA
# Requires ImageMagick or similar tool to convert SVG to PNG

# Check if convert (ImageMagick) is available
if ! command -v convert &> /dev/null; then
    echo "ImageMagick not found. Installing instructions:"
    echo ""
    echo "macOS:   brew install imagemagick"
    echo "Ubuntu:  sudo apt-get install imagemagick"
    echo "Windows: Download from https://imagemagick.org/script/download.php"
    echo ""
    echo "Alternatively, use an online converter:"
    echo "1. Go to https://cloudconvert.com/svg-to-png"
    echo "2. Upload icons/icon-template.svg"
    echo "3. Convert to the following sizes and save in icons/ folder:"
    echo "   - 72x72, 96x96, 128x128, 144x144, 152x152, 192x192, 384x384, 512x512"
    exit 1
fi

# Define sizes
SIZES=(72 96 128 144 152 192 384 512)

echo "Generating PWA icons from SVG template..."

# Generate each size
for SIZE in "${SIZES[@]}"; do
    OUTPUT="icon-${SIZE}x${SIZE}.png"
    echo "Creating ${OUTPUT}..."
    convert -background none -resize ${SIZE}x${SIZE} icon-template.svg ${OUTPUT}
done

echo ""
echo "✓ Icons generated successfully!"
echo "Icons created: ${SIZES[@]/#/icon-}"
echo ""
echo "To verify, run: ls -lh icon-*.png"
