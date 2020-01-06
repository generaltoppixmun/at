<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = '31u2db';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html data-scrapbook-source="https://avstrol.godaddysites.com/" data-scrapbook-create="20200106144639636" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>avstrol</title><meta name="author" content="avstrol"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://avstrol.appspot.com/">
<meta property="og:site_name" content="avstrol">
<meta property="og:title" content="High-Quality, Beautiful Photography">
<meta property="og:description" content="See through a different lens!">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/zG2oqV">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="avstrol">
<meta name="twitter:description" content="High-Quality, Beautiful Photography">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/zG2oqV">
<meta name="twitter:image:alt" content="avstrol">
<meta name="theme-color" content="#515f34">




<style type="text/css">/*
This license can also be found at this permalink: https://www.fontsquirrel.com/license/league-spartan

Copyright (c) September 22 2014, Micah Rich micah@micahrich.com, with Reserved Font Name: "League Spartan".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
@import url("league-spartan.css");
@import url("");</style>
<link rel="stylesheet" href="styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="styles-1.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: Helvetica, arial, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { overflow-wrap: break-word; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { line-height: 1.2; }
.x .c2-c { margin-left: 0px; }
.x .c2-d { margin-right: 0px; }
.x .c2-e { margin-top: 0px; }
.x .c2-f { margin-bottom: 0px; }
.x .c2-g { max-width: 100%; }
.x .c2-h { font-family: "League Spartan", arial, helvetica, sans-serif; }
.x .c2-i { color: rgb(247, 247, 247); }
.x .c2-j { font-size: 22px; }
.x .c2-k { font-weight: 400; }
.x .c2-p { display: inline-block; }
.x .c2-q { width: 100%; }
.x .c2-r { letter-spacing: 0.071em; }
.x .c2-s { text-transform: uppercase; }
.x .c2-t { padding-top: 16px; }
.x .c2-u { padding-bottom: 16px; }
.x .c2-v { padding-left: 32px; }
.x .c2-w { padding-right: 32px; }
.x .c2-x { background-color: rgb(81, 95, 52); }
.x .c2-y { border-style: none; }
.x .c2-z { text-align: center; }
.x .c2-10 { text-decoration: none; }
.x .c2-11 { cursor: pointer; }
.x .c2-12 { border-radius: 4px; }
.x .c2-13 { margin-top: 24px; }
.x .c2-14 { margin-bottom: 24px; }
.x .c2-15 { color: rgb(255, 255, 255); }
.x .c2-16 { font-weight: 700; }
.x .c2-17 { text-shadow: none; }
.x .c2-18 { font-size: 14px; }
.x .c2-19:hover { background-color: rgb(92, 108, 60); }
.x .c2-1a:focus { outline: currentcolor none medium; }
.x .c2-1b:active { background-color: rgb(60, 70, 37); }
.x .c2-1h { display: flex; }
.x .c2-1i { box-sizing: border-box; }
.x .c2-1j { flex-direction: row; }
.x .c2-1k { flex-wrap: wrap; }
.x .c2-1l { margin-right: -12px; }
.x .c2-1m { margin-left: -12px; }
.x .c2-1r { flex-grow: 1; }
.x .c2-1s { flex-shrink: 1; }
.x .c2-1t { flex-basis: 0%; }
.x .c2-1u { padding-top: 0px; }
.x .c2-1v { padding-right: 12px; }
.x .c2-1w { padding-bottom: 0px; }
.x .c2-1x { padding-left: 12px; }
.x .c2-28 { line-height: 1.5; }
.x .c2-29 { margin-bottom: 16px; }
.x .c2-2a { flex-direction: column; }
.x .c2-2b { justify-content: center; }
.x .c2-2c { align-items: center; }
.x .c2-2i { position: relative; }
.x .c2-2j { background-color: rgba(22, 22, 22, 0); }
.x .c2-2k { border-color: rgb(255, 255, 255); }
.x .c2-2l { border-top-width: 1px; }
.x .c2-2m { border-right-width: 1px; }
.x .c2-2n { border-bottom-width: 1px; }
.x .c2-2o { border-left-width: 1px; }
.x .c2-2p { border-style: solid; }
.x .c2-2q { padding-top: 23px; }
.x .c2-2r { padding-bottom: 7px; }
.x .c2-2s { padding-left: 16px; }
.x .c2-2t { padding-right: 16px; }
.x .c2-2u::placeholder { color: inherit; }
.x .c2-2v:focus + label { font-size: 12px; }
.x .c2-2w:focus + label { top: 8px; }
.x .c2-2x:focus + label { color: rgb(255, 255, 255); }
.x .c2-2y:not([value=""]) + label { font-size: 12px; }
.x .c2-2z:not([value=""]) + label { top: 8px; }
.x .c2-30:not([value=""]) + label { color: rgb(255, 255, 255); }
.x .c2-31::-webkit-input-placeholder { color: inherit; }
.x .c2-33 { position: absolute; }
.x .c2-34 { top: 33%; }
.x .c2-35 { left: 16px; }
.x .c2-36 { transition: all 0.15s ease 0s; }
.x .c2-37 { pointer-events: none; }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-n{padding-top:40px}}@media (max-width: 767px){.x .c1-o{padding-bottom:40px}}@media (max-width: 767px){.x .c1-2d{width:100%}}@media (max-width: 767px){.x .c1-46{margin-top:0}}@media (max-width: 767px){.x .c1-47{margin-right:auto}}@media (max-width: 767px){.x .c1-48{margin-bottom:0}}@media (max-width: 767px){.x .c1-49{margin-left:auto}}@media (max-width: 767px){.x .c1-5r > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-5s  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-89{display:flex}}@media (max-width: 767px){.x .c1-8a{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="styles-2.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-l { font-size: 22px; }
}
@media (min-width: 768px) {
  .x .c2-1c { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-1d { font-size: 14px; }
}
@media (min-width: 768px) {
  .x .c2-1n { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1o { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1p { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-1q { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-1y { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-1z { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-20 { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-21 { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-22 { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-23 { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-24 { padding-left: 24px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="styles-3.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-m { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-1e { font-size: 14px; }
}
@media (min-width: 1024px) {
  .x .c2-25 { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-26 { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-27 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2d { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-2e { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-2f { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-2g { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-2h { margin-bottom: 0px; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-32 { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-3t { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-4c { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c1-57 { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c1-5f { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-n { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c2-1f { font-size: 14px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-33 { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-3u { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-4d { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c1-58 { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c1-5g { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-o { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c2-1g { font-size: 16px; }
}</style>
<style type="text/css">.page-inner { background-color: rgb(0, 0, 0); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-league-spartan" context="[object Object]"><div id="layout-8473-ac-0-e-4158-42-d-1-8-a-41-2-e-801-f-10-f-0-f-8" class="layout layout-layout layout-layout-layout-13 locale-en-US lang-en"><div data-ux="Page" id="page-8816" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="13d374dc-f31c-4c2a-878f-11bf4af2267a" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" id="header_parallax8819" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux" style="position: relative; top: 0px;"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg8820" role="img" data-guac-image="loaded" data-ux="HeaderMediaFillBackground" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" overlay="category" treatment="Fill" data-ht="Fill" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-q c1-r c1-s c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-d c1-12 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht" style="background-image: linear-gradient(rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%), url(&quot;cr=w_1380,h_540,a_cc.webp&quot;); opacity: 1;"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-4 c1-b c1-c c1-d c1-14 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-15 c1-4 c1-16 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-17 c1-16 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-p c1-15 c1-18 c1-19 c1-16 c1-b c1-c c1-d c1-1a c1-1b c1-1c c1-1d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1e c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-1l c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-w c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-1x c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1y c1-1z c1-20 c1-1i c1-21 c1-22 c1-23 c1-24 c1-v c1-25 c1-26 c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2b c1-2c c1-1i c1-c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="712c8465-d6a5-4192-b00d-3ebc7fec0f1a" title="avstrol" href="" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-b c1-2q c1-c c1-2r c1-2s c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.8823.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingEpsilon" data-ux="LogoHeading" id="logo-container-1" logotext="avstrol" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-p c2-q c2-h c2-j c2-l c2-m c2-n c2-o x-d-ux x-d-aid x-d-route">avstrol</span></h3></span></div></a></div></div></div><div data-ux="Grid" id="n-88178826-navBarId" class="x-el x-el-div c1-1 c1-2 c1-34 c1-1l c1-1m c1-35 c1-1o c1-1p c1-1q c1-1r c1-b c1-c c1-1t c1-1u c1-1v c1-1w c1-d c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1l c1-3c c1-1z c1-3d c1-3e c1-21 c1-22 c1-23 c1-24 c1-v c1-w c1-1s c1-25 c1-b c1-c c1-27 c1-28 c1-29 c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2b c1-2c c1-1i c1-c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="712c8465-d6a5-4192-b00d-3ebc7fec0f1a" title="avstrol" href="" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-b c1-2q c1-c c1-2r c1-2s c1-2t c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.8827.click,click"><div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingEpsilon" data-ux="LogoHeading" id="logo-container-2" logotext="avstrol" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-p c2-q c2-h c2-j c2-l c2-m c2-n c2-o x-d-ux x-d-aid x-d-route">avstrol</span></h3></span></div></a></div></div></div></div></nav></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1e c1-1f c1-1g c1-1h c1-1i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-3f c1-3g c1-3h c1-1o c1-1q c1-4 c1-2w c1-2v c1-3i c1-b c1-c c1-d c1-3j c1-3k c1-3l c1-3m c1-3n c1-e c1-f c1-g x-d-ux"></div></div></div><div data-ux="Block" id="header_parallax8829" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1y c1-34 c1-w c1-y c1-1s c1-1o c1-1q c1-b c1-c c1-d c1-3j c1-3k c1-36 c1-e c1-f c1-g x-d-ux" style="transform: none; opacity: 1;"><div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2v c1-2w c1-1g c1-1h c1-1i c1-b c1-c c1-3o c1-d c1-3p c1-36 c1-37 c1-3q c1-3r c1-3s c1-e c1-3t c1-f c1-3u c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-3v c1-3w c1-p c1-1o c1-1q c1-18 c1-19 c1-4 c1-25 c1-b c1-c c1-d c1-36 c1-3x c1-3y c1-3z c1-40 c1-37 c1-41 c1-42 c1-43 c1-44 c1-38 c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2i c1-2j c1-2u c1-2v c1-2w c1-1o c1-1q c1-1i c1-2c c1-2x c1-45 c1-2z c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d x-d-ux x-d-aid x-d-route">High-Quality, Beautiful Photography</h1><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-4e c1-1o c1-1q c1-1i c1-4f c1-4g c1-4h c1-4i c1-b c1-2x c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>See through a different lens!</span></p></div><div id="bs-5" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="" target="" data-tccl="ux2.header.cta_button.click,click" data-page="712c8465-d6a5-4192-b00d-3ebc7fec0f1a" class="x-el x-el-a c2-r c2-s c2-t c2-u c2-v c2-w c2-x c2-y c2-p c2-z c2-10 c2-11 c2-a c2-9 c2-g c2-q c2-12 c2-13 c2-14 c2-3 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-1f c2-1g x-d-ux x-d-aid x-d-tccl x-d-page">See Photos</a></span></div></div></div></div><div data-ux="Block" id="header_parallax8830" class="x-el x-el-div c1-1 c1-2 c1-4 c1-1y c1-v c1-w c1-y c1-1s c1-1o c1-1q c1-b c1-c c1-d c1-3j c1-3k c1-1x c1-e c1-f c1-g x-d-ux" style="transform: none; opacity: 1;"><div id="bs-6"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2v c1-2w c1-1g c1-1h c1-1i c1-b c1-c c1-3o c1-d c1-3p c1-36 c1-37 c1-3q c1-3r c1-3s c1-e c1-3t c1-f c1-3u c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-3v c1-3w c1-p c1-1o c1-1q c1-18 c1-19 c1-4 c1-25 c1-b c1-c c1-d c1-36 c1-3x c1-3y c1-3z c1-40 c1-37 c1-41 c1-42 c1-43 c1-44 c1-38 c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2i c1-2j c1-2u c1-2v c1-2w c1-1o c1-1q c1-1i c1-2c c1-2x c1-45 c1-2z c1-46 c1-47 c1-48 c1-49 c1-4a c1-4b c1-4c c1-4d x-d-ux x-d-aid x-d-route">High-Quality, Beautiful Photography</h1><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-4e c1-1o c1-1q c1-1i c1-4f c1-4g c1-4h c1-4i c1-b c1-2x c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>See through a different lens!</span></p></div><div id="bs-7" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="" target="" data-tccl="ux2.header.cta_button.click,click" data-page="712c8465-d6a5-4192-b00d-3ebc7fec0f1a" class="x-el x-el-a c2-r c2-s c2-t c2-u c2-v c2-w c2-x c2-y c2-p c2-z c2-10 c2-11 c2-a c2-9 c2-g c2-q c2-12 c2-13 c2-14 c2-3 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-1f c2-1g x-d-ux x-d-aid x-d-tccl x-d-page">See Photos</a></span></div></div></div></div></div></div></div></section> </div></div></div></div><div id="bfbfe6ff-f20d-4e7a-997c-b51e5d03571d" class="widget widget-about widget-about-about-7"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1e c1-1f c1-1g c1-1h c1-1i c1-b c1-c c1-3o c1-d c1-3p c1-e c1-3t c1-f c1-3u c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-2i c1-2j c1-59 c1-1e c1-2w c1-1o c1-5a c1-l c1-25 c1-2c c1-5b c1-5c c1-2z c1-5d c1-43 c1-3q c1-5e c1-5f c1-5g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-2c c1-5b c1-5d c1-5e c1-5f c1-5g x-d-ux">About</span><div data-ux="Block" class="x-el x-el-div c1-4 c1-5h c1-2c c1-5b c1-5d c1-5e c1-5f c1-5g x-d-ux"><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-5i c1-5j c1-3h c1-4x c1-1q c1-5k c1-2b c1-2c c1-5b c1-5d c1-5e c1-5f c1-5g x-d-ux"></div></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-1l c1-1m c1-35 c1-1o c1-1p c1-5l c1-1r c1-1s c1-b c1-c c1-1t c1-1u c1-5m c1-1w c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1y c1-1z c1-5n c1-1i c1-21 c1-22 c1-4r c1-24 c1-b c1-c c1-27 c1-28 c1-5o c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-y c1-w c1-25 c1-1s c1-4 c1-5p c1-5q c1-3w c1-b c1-c c1-5r c1-5s c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-2i c1-2j c1-5t c1-2v c1-2w c1-1o c1-1q c1-b c1-5u c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 x-d-ux x-d-aid x-d-route x-d-field-route">My Background</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-4e c1-1o c1-1q c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-b c1-6n c1-c c1-2z c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I've loved taking pictures since I took my first photography class in high school. And I'm inspired by the love I have for my home city. &nbsp;I have also photographed many different subjects, scenes, and moments all over the world. There's a picture around every corner.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1y c1-1z c1-5n c1-1i c1-21 c1-22 c1-4r c1-24 c1-b c1-c c1-6o c1-6p c1-27 c1-28 c1-5o c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-y c1-w c1-25 c1-1s c1-4 c1-5p c1-5q c1-3w c1-b c1-c c1-5r c1-5s c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-2i c1-2j c1-5t c1-2v c1-2w c1-1o c1-1q c1-b c1-5u c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 x-d-ux x-d-aid x-d-route x-d-field-route">Photography as Communication</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-4e c1-1o c1-1q c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-b c1-6n c1-c c1-2z c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I am surrounded both by natural beauty and interesting people. I use my camera to document the world and then print images with a focus on the magic I find in daily life. My pictures tell my stories.&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1y c1-1z c1-5n c1-1i c1-21 c1-22 c1-4r c1-24 c1-b c1-c c1-6o c1-6p c1-27 c1-28 c1-5o c1-2a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-v c1-y c1-w c1-25 c1-1s c1-4 c1-5p c1-5q c1-3w c1-b c1-c c1-5r c1-5s c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-2i c1-2j c1-5t c1-2v c1-2w c1-1o c1-1q c1-b c1-5u c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 x-d-ux x-d-aid x-d-route x-d-field-route">Sharing Stories</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-4e c1-1o c1-1q c1-5v c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-b c1-6n c1-c c1-2z c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Through my prints and photo books, I invite you to bring bits of my stories into your life and home. New prints are released regularly, so check back often. If you sign up for updates, you will get notified about new prints or books, sales, and shows.</span></p></div></div></div></div></div></section> </div></div></div><div id="2453a244-8401-42d4-bcec-ef823283967f" class="widget widget-appointments widget-appointments-appointments-2"><div id="bs-8"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div style="width: 1px; height: 1px; visibility: hidden;"></div></span></div></div><div id="6598ea81-3e6d-49eb-b6ea-6c1ec253fb74" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg8831" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-6q c1-6r c1-s c1-t c1-6s c1-10 c1-6t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-guac-image="loaded" style="background-image: linear-gradient(rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%), url(&quot;cr=w_1380,h_300,a_cc.webp&quot;); opacity: 1;"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-16 c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1e c1-1f c1-1g c1-1h c1-1i c1-b c1-c c1-3o c1-d c1-3p c1-e c1-3t c1-f c1-3u c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-6u c1-b c1-c c1-d c1-3j c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-2i c1-2j c1-5t c1-2v c1-2w c1-1o c1-6v c1-25 c1-2c c1-5b c1-4z c1-2z c1-5d c1-5e c1-5f c1-5g x-d-ux x-d-aid x-d-route">Keep Up to Date!</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="6598ea81-3e6d-49eb-b6ea-6c1ec253fb74-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-1h c2-1i c2-1j c2-1k c2-e c2-1l c2-f c2-1m c2-3 c2-4 c2-1n c2-1o c2-1p c2-1q c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1i c2-1r c2-1s c2-1t c2-g c2-1u c2-1v c2-1w c2-1x c2-3 c2-4 c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-5 c2-25 c2-26 c2-27 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-28 c2-e c2-29 c2-z c2-3 c2-15 c2-4 c2-k c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear about newly released prints and upcoming events!</p><form data-ux="Form" class="x-el x-el-form c2-1 c2-2 c2-f c2-1h c2-2a c2-2b c2-2c c2-z c2-17 c2-3 c2-4 c2-5 c2-2d c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-14 c2-q c2-3 c2-4 c2-5 c2-2e c2-2f c2-2g c2-2h c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-2i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-2j c2-2k c2-q c2-2l c2-2m c2-2n c2-2o c2-12 c2-2p c2-2q c2-2r c2-2s c2-2t c2-3 c2-15 c2-4 c2-k c2-2u c2-1a c2-2v c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-33 c2-34 c2-35 c2-36 c2-37 c2-3 c2-15 c2-4 c2-k c2-5 c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-q c2-3 c2-4 c2-5 c2-2f c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2i c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-r c2-s c2-t c2-u c2-v c2-w c2-x c2-y c2-p c2-z c2-10 c2-11 c2-a c2-9 c2-g c2-q c2-12 c2-3 c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-1f c2-1g x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></div></section></div> </div></div></div><div id="39ddab47-3e97-4d32-84ad-3a7545571691" class="widget widget-footer widget-footer-footer-3"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-7s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-7s c1-7t c1-7u c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1e c1-1f c1-1g c1-1h c1-1i c1-b c1-c c1-3o c1-d c1-3p c1-e c1-3t c1-f c1-3u c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-v c1-1l c1-1m c1-35 c1-1o c1-2w c1-1q c1-2v c1-w c1-25 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1l c1-7v c1-1z c1-5n c1-1i c1-21 c1-7w c1-23 c1-7x c1-b c1-c c1-d c1-7y c1-7z c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-4e c1-1o c1-1q c1-b c1-80 c1-50 c1-2z c1-55 c1-81 c1-56 c1-57 c1-58 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-82 c1-83 c1-b c1-50 c1-55 c1-56 c1-57 c1-58 x-d-ux">Copyright © 2020 avstrol - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1l c1-7v c1-1z c1-5n c1-1i c1-21 c1-7w c1-23 c1-7x c1-b c1-c c1-d c1-7y c1-7z c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2i c1-2j c1-4e c1-4x c1-1q c1-b c1-80 c1-50 c1-2z c1-55 c1-84 c1-3j c1-56 c1-57 c1-58 x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2f c1-2g c1-2h c1-2i c1-2j c1-2k c1-2l c1-4x c1-b c1-85 c1-50 c1-2r c1-86 c1-87 c1-55 c1-84 c1-3j c1-56 c1-57 c1-58 x-d-ux" data-tccl="ux2.FOOTER.footer3.Layout.Default.Link.Default.8833.click,click">Website Builder</a></span></p></div></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1e c1-1f c1-1g c1-1h c1-1i c1-25 c1-4x c1-b c1-c c1-3o c1-d c1-3p c1-e c1-3t c1-f c1-3u c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-88 c1-21 c1-7w c1-23 c1-7x c1-1o c1-2w c1-1q c1-2v c1-3i c1-b c1-c c1-89 c1-8a c1-d c1-e c1-f c1-g x-d-ux"></ul></div></section> </div></div></div></div></div></div>





















</body>
</html>
