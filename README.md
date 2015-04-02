# [WIP] ColourSpectrum Extension for Bolt CMS

Adds an advanced (eyedropper, presets etc.) colourpicker field type powered by [Spectrum](http://bgrins.github.io/spectrum/)

## Usage

contenttypes.yml:
```
color:
    type: colourspectrum
```

## Options

All [Spectrum options](https://bgrins.github.io/spectrum/#options) are available via an options key in your content type config:
```
color:
    type: colourspectrum
    options:
        color: "yellow",
        showInput: true,
        showButtons: false
```
