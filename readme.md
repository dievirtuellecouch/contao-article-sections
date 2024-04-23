# Contao Article Sections

This bundle adds fields to Contao’s content articles to support layout adjustments for editors.

## Configuration

Add the section configuration using `article_sections` namespace. Use the following keys to create options which can be used inside articles. Each article will get CSS classes which represent the specific settings.

- **Spaces**: Define the space between sections.
- **Backgrounds**: Define the background of the section.
- **Duo Backgrounds**: Define duo backgrounds, which inherit the background color of their predecessor.
- **Widths**: Define the box width of the section.

### Example configuration

```yaml
article_sections:
  spaces:
    none: 'No space'
    bottom: 'Bottom only'
  backgrounds:
    blank: 'Blank'
    blue-900: 'Blue 900'
    red-900: 'Red 900'
    green-900: 'Green 900'
  duo-backgrounds:
    duo-25: 'Duo until 25%'
  widths:
    900: '900'
    600: '600'
```
