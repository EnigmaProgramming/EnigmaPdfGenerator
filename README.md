# EnigmaPdfGenerator

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

### Portraits Formats

| Format        | Constant                 |
|---------------|--------------------------|
| A0            | PdfFormats::F_A0         |
| A10           | PdfFormats::F_A10        |
| B0            | PdfFormats::F_B0         |
| B10           | PdfFormats::F_B10        |
| C0            | PdfFormats::F_C0         |
| C10           | PdfFormats::F_C10        |
| 4A0           | PdfFormats::F_4A0        |
| 2A0           | PdfFormats::F_2A0        |
| RA0           | PdfFormats::F_RA0        |
| RA4           | PdfFormats::F_RA4        |
| SRA0          | PdfFormats::F_SRA0       |
| SRA4          | PdfFormats::F_SRA4       |
| LETTER        | PdfFormats::F_LETTER     |
| LEGAL         | PdfFormats::F_LEGAL      |
| EXECUTIVE     | PdfFormats::F_EXECUTIVE  |
| FOLIO         | PdfFormats::F_FOLIO      |
| DEMY          | PdfFormats::F_DEMY       |
| ROYAL         | PdfFormats::F_ROYAL      |
| A             | PdfFormats::F_A          |
| B             | PdfFormats::F_B          |
| LEDGER        | PdfFormats::F_LEDGER     |
| TABLOID       | PdfFormats::F_TABLOID    |

### Landscape Formats

- A0                       => PdfFormats::F_A0_LANDSCAPE
- A10                      => PdfFormats::F_A10_LANDSCAPE
- B0                       => PdfFormats::F_B0_LANDSCAPE
- B10                      => PdfFormats::F_B10_LANDSCAPE
- C0                       => PdfFormats::F_C0_LANDSCAPE
- C10                      => PdfFormats::F_C10_LANDSCAPE
- 4A0                      => PdfFormats::F_4A0_LANDSCAPE
- 2A0                      => PdfFormats::F_2A0_LANDSCAPE
- RA0                      => PdfFormats::F_RA0_LANDSCAPE
- RA4                      => PdfFormats::F_RA4_LANDSCAPE
- SRA0                     => PdfFormats::F_SRA0_LANDSCAPE
- SRA4                     => PdfFormats::F_SRA4_LANDSCAPE
- LETTER                   => PdfFormats::F_LETTER_LANDSCAPE
- LEGAL                    => PdfFormats::F_LEGAL_LANDSCAPE
- EXECUTIVE                => PdfFormats::F_EXECUTIVE_LANDSCAPE
- FOLIO                    => PdfFormats::F_FOLIO_LANDSCAPE
- DEMY                     => PdfFormats::F_DEMY_LANDSCAPE
- ROYAL                    => PdfFormats::F_ROYAL_LANDSCAPE
- A                        => PdfFormats::F_A_LANDSCAPE
- B                        => PdfFormats::F_B_LANDSCAPE
- LEDGER                   => PdfFormats::F_LEDGER_LANDSCAPE
- TABLOID                  => PdfFormats::F_TABLOID_LANDSCAPE

## Orientations

The system contains the 2 normal orientations for formatting.

- Portrait                 => PdfOrientation::O_Portrait
- LAndscape                => PdfOrientation::O_Landscape

the specific of those two are in the configs/orientations.php file.

## Fonts

The system contains multiple fonts and two base.

### Base

- Core                     => PdfFonts::CORE
- Unicode                  => PdfFonts::UNICODE

Those two can be used without specifying the font you want to use.

### List of Fonts

### Fonts Sans

Font Name => Class ConstantPdfFonts::

- Deja Vu Condensed        => PdfFonts::SANS_DEJAVUCONDENSED
- Sans                     => PdfFonts::SANS_SANS
- Sans Serif               => PdfFonts::SANS_SERIF
- Cursive                  => PdfFonts::SANS_CURSIVE
- Fantasy                  => PdfFonts::SANS_FANTASY
- Deja Vu                  => PdfFonts::SANS_DEJAVU
- Free                     => PdfFonts::SANS_FREESANS
- Liberation               => PdfFonts::SANS_LIBERATION
- Arial                    => PdfFonts::SANS_ARIAL
- Helvetica                => PdfFonts::SANS_HELVETICA
- Verdana                  => PdfFonts::SANS_VERDANA
- Geneva                   => PdfFonts::SANS_GENEVA
- Lucida                   => PdfFonts::SANS_LUCIDA
- Arial Narrow             => PdfFonts::SANS_ARIAL_NARROW
- Arial Black              => PdfFonts::SANS_ARIAL_BLACK
- Franklin                 => PdfFonts::SANS_FRANKLIN
- Franklin Gothic Book     => PdfFonts::SANS_FRANKLIN_GOTHIC_BOOK
- Tahoma                   => PdfFonts::SANS_TAHOMA
- Garuda                   => PdfFonts::SANS_GARUDA
- Calibri                  => PdfFonts::SANS_CALIBRI
- Trebuchet                => PdfFonts::SANS_TREBUCHET
- Lucida Grande            => PdfFonts::SANS_LUCIDA_GRANDE
- Microsoft Sans Serif     => PdfFonts::SANS_MICROSOFT_SANS_SERIF
- Trebuchet MS             => PdfFonts::SANS_TREBUCHETMS
- Lucida Sans Unicode      => PdfFonts::SANS_LUCIDASANSUNICODE
- Franklin Gothic Medium   => PdfFonts::SANS_FRANKLIN_GOTHIC_MEDIUM
- Albertus Medium          => PdfFonts::SANS_ALBERTUS_MEDIUM
- Xbriyaz                  => PdfFonts::SANS_XBRIYAZ
- Alba Super               => PdfFonts::SANS_ALBASUPER
- Quill Script             => PdfFonts::SANS_QUILL_SCRIPT
- Humanist 777             => PdfFonts::SANS_HUMANIST777
- Humanist 777 Black       => PdfFonts::SANS_HUMANIST777_BLACK
- Humanist 777 Light       => PdfFonts::SANS_HUMANIST777_LIGHT
- Futura                   => PdfFonts::SANS_FUTURA
- Hobo                     => PdfFonts::SANS_HOBO
- Segoe Print              => PdfFonts::SANS_SEGOE_PRINT

### Font SerifPdfFonts

- Deja Vu Condensed        => PdfFonts::SERIF_DEJAVU_CONDENSED
- Serif                    => PdfFonts::SERIF_SERIF
- Deja Vu Serif            => PdfFonts::SERIF_DEJAVU
- Free                     => PdfFonts::SERIF_FREE
- Liberation               => PdfFonts::SERIF_LIBERATION
- Times New Roman          => PdfFonts::SERIF_TIMES_NEW_ROMAN
- Times                    => PdfFonts::SERIF_TIMES
- Century School Book      => PdfFonts::SERIF_CENTURY_SCHOOL_BOOK
- Palatino Linotype        => PdfFonts::SERIF_PALATINO_LINOTYPE
- Century Gothic           => PdfFonts::SERIF_CENTURY_GOTHIC
- Bookman Old Style        => PdfFonts::SERIF_BOOKMAN_OLD_STYLE
- Bookman Antiqua          => PdfFonts::SERIF_BOOK_ANTIQUA
- Cyberbit                 => PdfFonts::SERIF_CYBERBIT
- Cambria                  => PdfFonts::SERIF_CAMBRIA
- Norasi                   => PdfFonts::SERIF_NORASI
- Charis                   => PdfFonts::SERIF_CHARIS
- Palatino                 => PdfFonts::SERIF_PALATINO
- Constantia               => PdfFonts::SERIF_CONSTANTIA
- Georgia                  => PdfFonts::SERIF_GEORGIA
- Albertus                 => PdfFonts::SERIF_ALBERTUS
- Xbzar                    => PdfFonts::SERIF_XBZAR
- Algerian                 => PdfFonts::SERIF_ALGERIAN
- Garamond                 => PdfFonts::SERIF_GARAMOND

### Font Mono

- Deja Vu Sans             => PdfFonts::MONO_DEJAVUSANS
- Mono                     => PdfFonts::MONO_MONO
- Monospace                => PdfFonts::MONO_MONOSPACE
- Free                     => PdfFonts::MONO_FREE
- Liberation               => PdfFonts::MONO_LIBERATION
- Courier                  => PdfFonts::MONO_COURIER
- Ocrb                     => PdfFonts::MONO_OCRB
- Ocr-b                    => PdfFonts::MONO_OCR_B
- Lucida Console           => PdfFonts::MONO_LUCIDA_CONSOLE
- Courier New              => PdfFonts::MONO_COURIER_NEW
- Monotype Corsiva         => PdfFonts::MONO_MONOTYPE_CORSIVA
