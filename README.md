# php_pdfgenerator

This project is a wrapper around the Mpdf project.

Thanks to the creators of Mpdf.

## Installation

You will have to run the composer install command from within the system folder.

once you have run the composer install command, you can just require the pdfBootstrap.php file into your main file.

## Examples

There's some examples in the examples folder with and without css.

## Formats

The system contains 44 formats, they are contained in the configs/formats.php file.  You can use them by calling the constant designating the format you want to use.

### List of supported Formats

- A0
- A10
- B0
- B10
- C0
- C10
- 4A0
- 2A0
- RA0
- RA4
- SRA0
- SRA4
- LETTER
- LEGAL
- EXECUTIVE
- FOLIO
- DEMY
- ROYAL
- A
- B
- LEDGER
- TABLOID

Note: all those formats are also available in landscaping orientation in the same file.

## Orientations

The system contains the 2 normal orientations for formatting.

- Portrait
- Landscape

the specific of those two are in the configs/orientations.php file.

## Fonts

The system contains multiple fonts and two base.

### Base

- Core
- Unicode

Those two can be used without specifying the font you want to use.

### List of Fonts

### Fonts Sans

- Deja Vu Condensed
- Sans
- Sans Serif
- Cursive
- Fantasy
- Deja Vu
- Free
- Liberation
- Arial
- Helvetica
- Verdana
- Geneva
- Lucida
- Arial Narrow
- Arial Black
- Franklin
- Franklin Gothic Book
- Tahoma
- Garuda
- Calibri
- Trebuchet
- Lucida Grande
- Microsoft Sans Serif
- Trebuchet MS
- Lucida Sans Unicode
- Franklin Gothic Medium
- Albertus Medium
- Xbriyaz
- Alba Super
- Quill Script
- Humanist 777
- Humanist 777 Black
- Humanist 777 Light
- Futura
- Hobo
- Segoe Print

### Font Serif

- Deja Vu Condensed
- Serif
- Deja Vu Serif
- Free
- Liberation
- Times New Roman
- Times
- Century School Book
- Palatino Linotype
- Century Gothic
- Bookman Old Style
- Bookman Antiqua
- Cyberbit
- Cambria
- Norasi
- Charis
- Palatino
- Constantia
- Georgia
- Albertus
- Xbzar
- Algerian
- Garamond

### Font Mono

- Deja Vu Sans
- Mono
- Monospace
- Free
- Liberation
- Courier
- Ocrb
- Ocr-b
- Lucida Console
- Courier New
- Monotype Corsiva
