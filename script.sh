#!/bin/bash

# Find all SVG files in subfolders
find . -type f -name "*.svg" -print0 | while IFS= read -r -d '' file; do
  # Get the directory and filename without extension
  dir=$(dirname "$file")
  filename=$(basename "$file" .svg)

  # Convert SVG to PNG using rsvg-convert
  rsvg-convert -o "$dir/$filename.png" "$file"

  # Optional: Remove the original SVG file
  # Uncomment the line below if you want to delete the SVG files after conversion
  # rm "$file"
done
