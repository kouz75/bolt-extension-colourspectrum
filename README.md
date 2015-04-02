# ColourSpectrum Extension for Bolt CMS

Adds an advanced (eyedropper, presets etc.) colourpicker field type powered by [Spectrum](http://bgrins.github.io/spectrum/)

![Example](screenshot1.png)

## Usage

contenttypes.yml:
```
color:
    type: colourspectrum
```

## Options and Examples

All [Spectrum options](https://bgrins.github.io/spectrum/#options) are available via an options key in your content type config:
```
color:
    type: colourspectrum
    options:
        color: "yellow"
        showInput: true
        showButtons: false
```
![Example2](screenshot2.png)

```
color:
    label: "Select a colour"
    type: colourspectrum
    options:
        showInput: true
        showButtons: false
        showPalette: true
        palette: [ ['black', 'white', 'aquamarine'] ]
```
![Example3](screenshot3.png)

```
color:
    label: "Select a colour"
    type: colourspectrum
    options:
        showInput: true
        showButtons: false
        showInitial: true
        showPalette: true
        allowEmpty: true
```
![Example4](screenshot4.png)
