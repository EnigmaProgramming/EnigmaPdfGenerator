<?php

// this file will contain the configurations for the pdf parser as global values.
// the values are set to the default then commented, to activate a specific config, just remove the comment and set the value to the one you want to use.

#region Constructor Configurations
define("pdf_mode","utf-8");
define("pdf_default_font_size","");
define("pdf_default_font","");
define("pdf_margin_left",15);
define("pdf_margin_right",15);
define("pdf_margin_top",16);
define("pdf_margin_bottom",16);
define("pdf_margin_header",9);
define("pdf_margin_footer",9);
define("pdf_DusplayMode",'fullpage');
#endregion

#region Paging
//define("pdf_mirrorMargins",0);
//define("pdf_forcePortraitMargins",false);
//define("pdf_displayDefaultOrientation",false);
//define("pdf_autoPageBreak",true);
//define("pdf_setAutoTopMargin",false);
//define("pdf_setAutoBottomMargin",false);
//define("pdf_autoMarginPadding",2);
//define("pdf_margBuffer",2);
//define("pdf_printers_info",false);
//define("pdf_bleedMargin",5);"
//define("pdf_crossMarkMargin",5);
//define("pdf_cropMarkMargin",8);
//define("pdf_nonPrintMargin",8);
//define("pdf_defaultPagebreakType",'cloneall');
#endregion

#region Page Numbering
//define("pdf_aliasNbPg","{nb}");
//define("pdf_aliasNbPgGp","{nbpg}");
//define("pdf_pagenumPrefix","");
//define("pdf_pagenumSuffix","");
//define("pdf_nbpgPrefix","");
//define("pdf_nbpgSuffix","");
//define("pdf_defaultPageNumStyle","1");
#endregion

#region Fonts, Languages and Charcter Sets
//define("pdf_percentSubset",30);
//define("pdf_useKerning",false);
//define("pdf_maxTTFFilesize",2000);
//define("pdf_allow_charset_conversion",true);
//define("pdf_charset_in",null);
//define("pdf_biDirectional",false);
//define("pdf_useAdobeCJK",true);
//define("pdf_autoScriptToLang",false);
//define("pdf_autoLangToFont",false);
//define("pdf_baseScript",1);
//define("pdf_autoArabic",false);
//define("pdf_autoVietnamese",false);
//define("pdf_falseBoldWeight",5);
//define("pdf_smCapsScale",0.75);
//define("pdf_smCapsStretch",115);
//define("pdf_backupSubsFont",array('dejavusanscondensed'));
//define("pdf_backupSIPFont",'');
#endregion

#region Configuration
//define("pdf_repackageTTF",false);
//define("pdf_useSubstitutions",false);
//define("pdf_collapseBlockMargins",true);
//define("pdf_dpi",96);
//define("pdf_enableImports",false);
//define("pdf_allow_output__buffering",false);
//define("pdf_allow_html_optional_endtags",true);
//define("pdf_ignore_invalid_utf8",false);
//define("pdf_text_input_as_HTML",false);
//define("pdf_progressBar",false);
//define("pdf_progbar_heading","mPDF file progress");
//define("pdf_progbar_altHTML","");
//define("pdf_incrementFPR1 [1-4]",10,20,30,50);
#endregion

#region Debugging
//define("pdf_debug",false);
//define("pdf_debugfonts",false);
//define("pdf_showImageErrors",false);
#endregion

#region PDF/A1-b, PDF/X-1a Colorspaces
//define("pdf_PDFA",false);
//define("pdf_PDFAauto",false);
//define("pdf_PDFX",false);
//define("pdf_PDFXauto",false);
//define("pdf_ICCProfile","");
//define("pdf_restrictColorSpace",0);
#endregion

#region Annotations
//define("pdf_title2annots",false);
//define("pdf_annotMargin",null);
//define("pdf_annotOpacity",0.5);
#endregion

#region Bookmarks (Outlines)
//define("pdf_anchor2Bookmark",0);
//define("pdf_h2bookmarks",array());
//define("pdf_h2toc",array());
#endregion

#region Css & Styles
//define("pdf_CSSselectMedia","print");
#endregion

#region Page Headers & Footers
//define("pdf_defaultfooterfontstyle","BI");
//define("pdf_defaultfooterline",1);
//define("pdf_defaultheaderfontsize",8);
//define("pdf_defaultheaderfontstyle","BI");
//define("pdf_defaultheaderline",1);
//define("pdf_footer_line_spacing",0.25);
//define("pdf_header_line_spacing",0.25);
//define("pdf_forcePortraitHeaders",false);
#endregion

#region Tables
//define("pdf_simpleTables",false);
//define("pdf_packTableData",false);
//define("pdf_tableMinSizePriority",false);
//define("pdf_ignore_table_percents",false);
//define("pdf_ignore_table_widths",false);
//define("pdf_keep_table_proportions",false);
//define("pdf_shrink_tables_to_fit",1.4);
//define("pdf_table_error_report",false);
//define("pdf_table_error_report_param","");
//define("pdf_use_kwt",false);
//define("pdf_iterationCounter",false);
//define("pdf_decimal_align",array());
#endregion

#region Images
//define("pdf_img_dpi",96);
#endregion

#region Text Spacing & Justification
//define("pdf_normalLineheight",1.33);
//define("pdf_useFixedNormalLineHeight",false);
//define("pdf_useFixedTextBaseline",false);
//define("pdf_adjustFontDescLineheight",1.14);
//define("pdf_jSmaxChar",2);
//define("pdf_jSmaxWordLast",2);
//define("pdf_jSmaxCharLast",1);
//define("pdf_jSWord",0.4);
//define("pdf_allowCJKorphans",true);
//define("pdf_allowCJKoverflow",false);
//define("pdf_CJKforceend",false);
//define("pdf_tabSpaces",8);
//define("pdf_justifyB4br",false);
#endregion

#region Hyphenation
//define("pdf_SHYlang","en");
#endregion

#region Columns
//define("pdf_keepColumns",false);
//define("pdf_max_colH_correction",1.15);
#endregion

#region Lists
//define("pdf_list_auto_mode","browser");
//define("pdf_list_indent_default","40px");
//define("pdf_list_indent_default_mpdf","0em");
//define("pdf_list_marker_offset","5.5pt");
//define("pdf_list_symbol_size","3.6pt");
//define("pdf_list_indent_first_level",0);
//define("pdf_list_number_suffix",".");
#endregion

#region Watermarks
//define("pdf_showWatermarkImage",null);
//define("pdf_showWatermarkText",null);
//define("pdf_watermark_font","");
//define("pdf_watermarkImageAlpha",0.2);
//define("pdf_watermarkImgAlphaBlend","Normal");
//define("pdf_watermarkImgBehind",false);
//define("pdf_watermarkTextAlpha",0.2);
#endregion

#region Borders
//define("pdf_autoPadding",false);
#endregion

#region Bookmarks
//define("pdf_autoPadding",false);
//define("bookmarkStyles",array());
#endregion