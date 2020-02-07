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
<html data-scrapbook-source="https://pliotostro.godaddysites.com/" data-scrapbook-create="20200207044845231" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>pliotostro</title><meta name="author" content="pliotostro"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="manifest" href="https://pliotostro.godaddysites.com/manifest.webmanifest"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://pliotostro.appspot.com/">
<meta property="og:site_name" content="pliotostro">
<meta property="og:title" content="A New Way to Use Your Phone">
<meta property="og:description" content="Expertly-designed software, easy-to-use interface.">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/yrnrO9R">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="pliotostro">
<meta name="twitter:description" content="A New Way to Use Your Phone">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/yrnrO9R">
<meta name="twitter:image:alt" content="pliotostro">
<meta name="theme-color" content="#7896ae"><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js"></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright 2016 The Muli Project Authors (contact@sansoxygen.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 400;
  src: url("https://img1.wsimg.com/gfonts/s/muli/v19/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk40e6fwniDtzNAAw.woff") format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 400;
  src: url("https://img1.wsimg.com/gfonts/s/muli/v19/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk50e6fwniDtzNAAw.woff") format('woff');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 400;
  src: url("https://img1.wsimg.com/gfonts/s/muli/v19/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk30e6fwniDtzM.woff") format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Quicksand Project Authors (https://github.com/andrew-paglinawan/QuicksandFamily), with Reserved Font Name Quicksand.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url("https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJFQNYuDyP7bh.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url("https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJVQNYuDyP7bh.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url("https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hK1QNYuDyPw.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url("https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJFQNYuDyP7bh.woff2") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url("https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hJVQNYuDyP7bh.woff2") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url("https://img1.wsimg.com/gfonts/s/quicksand/v19/6xKtdSZaM9iE8KbpRA_hK1QNYuDyPw.woff2") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="https://img1.wsimg.com/blobby/go/4dbae886-9c61-4033-a041-fba9e89b3bbc/gpub/4ce1a7c86682e5e8/styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/4dbae886-9c61-4033-a041-fba9e89b3bbc/gpub/7a30fc6046a909d/styles.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: Quicksand, sans-serif; }
.x .c2-4 { font-size: 16px; }
.x .c2-9 { overflow-wrap: break-word; }
.x .c2-a { overflow-wrap: break-word; }
.x .c2-b { line-height: 1.25; }
.x .c2-c { margin-left: 0px; }
.x .c2-d { margin-right: 0px; }
.x .c2-e { margin-top: 0px; }
.x .c2-f { margin-bottom: 0px; }
.x .c2-g { max-width: 100%; }
.x .c2-h { color: rgb(120, 150, 174); }
.x .c2-i { font-size: 28px; }
.x .c2-j { text-align: center; }
.x .c2-k { font-family: "Muli", sans-serif; }
.x .c2-l { font-weight: 400; }
.x .c2-q { letter-spacing: inherit; }
.x .c2-r { text-transform: inherit; }
.x .c2-s { display: inline-block; }
.x .c2-t { width: 100%; }
.x .c2-u { color: inherit; }
.x .c2-v { font-weight: inherit; }
.x .c2-w { line-height: inherit; }
.x .c2-x { line-height: 1.2; }
.x .c2-y { display: block; }
.x .c2-10 { line-height: 1.27; }
.x .c2-11 { margin-bottom: 8px; }
.x .c2-12 { white-space: pre-line; }
.x .c2-13 { color: rgb(22, 22, 22); }
.x .c2-15 { overflow-wrap: normal; }
.x .c2-16 { word-break: normal; }
.x .c2-17 { display: none; }
.x .c2-18 { visibility: hidden; }
.x .c2-19 { position: absolute; }
.x .c2-1a { left: 0px; }
.x .c2-1b { font-size: 40px; }
.x .c2-1g { font-size: 32px; }
.x .c2-1l { padding-top: 8px; }
.x .c2-1m { padding-bottom: 8px; }
.x .c2-1n { padding-left: 32px; }
.x .c2-1o { padding-right: 32px; }
.x .c2-1p { background-color: rgb(22, 22, 22); }
.x .c2-1q { border-style: none; }
.x .c2-1r { text-decoration: none; }
.x .c2-1s { cursor: pointer; }
.x .c2-1t { width: auto; }
.x .c2-1u { border-radius: 1000px; }
.x .c2-1v { margin-top: 8px; }
.x .c2-1w { color: rgb(219, 219, 219); }
.x .c2-1x { font-weight: 700; }
.x .c2-1y { text-shadow: none; }
.x .c2-1z { font-size: 14px; }
.x .c2-20:hover { background-color: rgb(8, 8, 8); }
.x .c2-21:focus { outline: currentcolor none medium; }
.x .c2-22:active { background-color: rgb(42, 42, 42); }
.x .c2-2c { display: flex; }
.x .c2-2d { box-sizing: border-box; }
.x .c2-2e { flex-direction: row; }
.x .c2-2f { flex-wrap: wrap; }
.x .c2-2g { margin-right: -12px; }
.x .c2-2h { margin-left: -12px; }
.x .c2-2m { flex-grow: 1; }
.x .c2-2n { flex-shrink: 1; }
.x .c2-2o { flex-basis: 0%; }
.x .c2-2p { padding-top: 0px; }
.x .c2-2q { padding-right: 12px; }
.x .c2-2r { padding-bottom: 0px; }
.x .c2-2s { padding-left: 12px; }
.x .c2-33 { line-height: 1.5; }
.x .c2-34 { margin-bottom: 12px; }
.x .c2-35 { color: rgb(255, 255, 255); }
.x .c2-36 { flex-direction: column; }
.x .c2-37 { justify-content: center; }
.x .c2-38 { align-items: center; }
.x .c2-3a { margin-bottom: 24px; }
.x .c2-3f { position: relative; }
.x .c2-3g { background-color: rgba(22, 22, 22, 0); }
.x .c2-3h { border-color: rgb(255, 255, 255); }
.x .c2-3i { border-top-width: 1px; }
.x .c2-3j { border-right-width: 1px; }
.x .c2-3k { border-bottom-width: 1px; }
.x .c2-3l { border-left-width: 1px; }
.x .c2-3m { border-radius: 4px; }
.x .c2-3n { padding-top: 23px; }
.x .c2-3o { padding-bottom: 7px; }
.x .c2-3p { padding-left: 8px; }
.x .c2-3q { padding-right: 8px; }
.x .c2-3r { border-style: solid; }
.x .c2-3s::placeholder { color: inherit; }
.x .c2-3t:focus + label { font-size: 12px; }
.x .c2-3u:focus + label { top: 8px; }
.x .c2-3v:focus + label { color: rgb(255, 255, 255); }
.x .c2-3w:not([value=""]) + label { font-size: 12px; }
.x .c2-3x:not([value=""]) + label { top: 8px; }
.x .c2-3y:not([value=""]) + label { color: rgb(255, 255, 255); }
.x .c2-3z::-webkit-input-placeholder { color: inherit; }
.x .c2-41 { top: 35%; }
.x .c2-42 { left: 11px; }
.x .c2-43 { transition: all 0.15s ease 0s; }
.x .c2-44 { pointer-events: none; }
.x .c2-45 { background-color: rgb(120, 150, 174); }
.x .c2-46 { color: rgb(0, 0, 0); }
.x .c2-47:hover { background-color: rgb(131, 163, 189); }
.x .c2-48:active { background-color: rgb(99, 124, 144); }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<link data-glamor="cxs-xs-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/4dbae886-9c61-4033-a041-fba9e89b3bbc/gpub/5d4fd54715384e36/styles.css"><style type="text/css" data-glamor="cxs-xs-sheet">@media (max-width: 767px) {
  .x .c2-14 { font-size: 32px; }
}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/4dbae886-9c61-4033-a041-fba9e89b3bbc/gpub/75b6a8678da1ccf3/styles.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 16px; }
}
@media (min-width: 768px) {
  .x .c2-m { font-size: 28px; }
}
@media (min-width: 768px) {
  .x .c2-1c { font-size: 50px; }
}
@media (min-width: 768px) {
  .x .c2-1h { font-size: 38px; }
}
@media (min-width: 768px) {
  .x .c2-23 { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-24 { font-size: 14px; }
}
@media (min-width: 768px) {
  .x .c2-2i { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2j { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2k { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2l { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2t { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-2u { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2v { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2w { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2x { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-2y { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2z { padding-left: 24px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="https://img1.wsimg.com/blobby/go/4dbae886-9c61-4033-a041-fba9e89b3bbc/gpub/2d519c2bbe23fc5c/styles.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-n { font-size: 28px; }
}
@media (min-width: 1024px) {
  .x .c2-z { display: none; }
}
@media (min-width: 1024px) {
  .x .c2-1d { font-size: 50px; }
}
@media (min-width: 1024px) {
  .x .c2-1i { font-size: 38px; }
}
@media (min-width: 1024px) {
  .x .c2-25 { padding-top: 8px; }
}
@media (min-width: 1024px) {
  .x .c2-26 { padding-bottom: 8px; }
}
@media (min-width: 1024px) {
  .x .c2-27 { padding-left: 48px; }
}
@media (min-width: 1024px) {
  .x .c2-28 { padding-right: 48px; }
}
@media (min-width: 1024px) {
  .x .c2-29 { font-size: 14px; }
}
@media (min-width: 1024px) {
  .x .c2-30 { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-31 { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-32 { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-39 { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-3b { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-3c { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-3d { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-3e { margin-bottom: 0px; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c1-1o { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-2l { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c1-4d { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c1-4n { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c1-50 { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-5r { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c1-a1 { font-size: 12px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 16px; }
}
@media (min-width: 1280px) {
  .x .c2-o { font-size: 32px; }
}
@media (min-width: 1280px) {
  .x .c2-1e { font-size: 62px; }
}
@media (min-width: 1280px) {
  .x .c2-1j { font-size: 44px; }
}
@media (min-width: 1280px) {
  .x .c2-2a { font-size: 14px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c1-1p { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-2m { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c1-4e { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c1-4o { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c1-51 { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-5s { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c1-a2 { font-size: 14px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 18px; }
}
@media (min-width: 1536px) {
  .x .c2-p { font-size: 36px; }
}
@media (min-width: 1536px) {
  .x .c2-1f { font-size: 70px; }
}
@media (min-width: 1536px) {
  .x .c2-1k { font-size: 48px; }
}
@media (min-width: 1536px) {
  .x .c2-2b { font-size: 16px; }
}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-muli" context="[object Object]"><div id="layout-4-dbae-886-9-c-61-4033-a-041-fba-9-e-89-b-3-bbc" class="layout layout-layout layout-layout-layout-14 locale-en-US lang-en"><div data-ux="Page" id="page-4178" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="0a1fc6c5-577c-474b-894a-21f0900e2821" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-m c1-b c1-c c1-d c1-n c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-o c1-4 c1-p c1-q c1-r c1-s c1-t c1-b c1-c c1-d c1-u c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-v c1-4 c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg4180" role="img" data-guac-image="loaded" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-12 c1-13 c1-14 c1-15 c1-16 c1-o c1-4 c1-17 c1-18 c1-19 c1-b c1-c c1-d c1-u c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id" style="background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/yrnrO9R/:/rs=w:2980,h:1260,cg:true,m/cr=w:2980,h:1260,a:cc&quot;); opacity: 1;"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/yrnrO9R/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg4180'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1a c1-o c1-b c1-c c1-d c1-1b c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1c c1-17 c1-4 c1-1d c1-b c1-c c1-d c1-u c1-1b c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1e c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-1q c1-1r c1-1s c1-b c1-c c1-d c1-1t c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1u c1-1v c1-1j c1-1w c1-c c1-1x c1-1y c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="pliotostro" href="" class="x-el x-el-a c1-1z c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-b c1-2a c1-c c1-2b c1-2c c1-2d c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.4183.click,click"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1" logotext="pliotostro" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c2-q c2-r c2-s c2-t c2-i c2-u c2-v c2-w c2-k c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-field-id x-d-field-route">pliotostro</span></h3></span></div></a></div></nav><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-m c1-b c1-c c1-d c1-2p c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2q c1-2r c1-2s c1-q c1-2t c1-s c1-2u c1-1r c1-2h c1-1q c1-b c1-c c1-2v c1-2w c1-2x c1-2y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-31 c1-1j c1-32 c1-33 c1-34 c1-35 c1-2h c1-r c1-36 c1-b c1-c c1-37 c1-38 c1-39 c1-3a c1-3b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1u c1-1v c1-1j c1-c c1-1x c1-1y c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" title="pliotostro" href="" class="x-el x-el-a c1-1z c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-b c1-2a c1-c c1-2b c1-2c c1-2d c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.4185.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-2" logotext="pliotostro" class="x-el x-el-h3 c2-1 c2-2 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-k c2-i c2-l c2-m c2-n c2-o c2-p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c2-q c2-r c2-s c2-t c2-i c2-u c2-v c2-w c2-k c2-m c2-n c2-o c2-p x-d-ux x-d-aid x-d-field-id x-d-field-route">pliotostro</span></h3></span></div></a></div></div></div></nav></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1r c1-1q c1-2z c1-2h c1-4 c1-3c c1-3d c1-b c1-c c1-d c1-3e c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3f c1-3g c1-11 c1-1r c1-1q c1-3h c1-3i c1-3j c1-1k c1-33 c1-1l c1-35 c1-b c1-c c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-d c1-3x c1-3y c1-3z c1-40 c1-41 c1-42 c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-t c1-r c1-43 c1-44 c1-1j c1-45 c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><h1 typography="HeadingBeta" fontsizemap="[object Object]" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-22 c1-23 c1-46 c1-t c1-r c1-q c1-47 c1-1j c1-1s c1-1v c1-48 c1-49 c1-2i c1-4a c1-4b c1-n c1-4c c1-4d c1-4e x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Element" haselementbelow="[object Object]" id="tagline-container-3" class="x-el x-el-div c2-1 c2-2 c2-9 c2-a c2-x c2-y c2-3 c2-4 c2-5 c2-z c2-6 c2-7 c2-8 x-d-ux"><h1 typography="HeadingBeta" fontsizemap="[object Object]" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c2-1 c2-2 c2-9 c2-a c2-10 c2-c c2-d c2-e c2-11 c2-12 c2-g c2-s c2-t c2-4 c2-k c2-13 c2-l c2-14 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">A New Way to Use Your Phone</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1b c2-k c2-1c c2-1d c2-1e c2-1f x-d-ux x-d-size x-d-scaler-id">A New Way to Use Your Phone</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-1g c2-k c2-1h c2-1i c2-1j c2-1k x-d-ux x-d-size x-d-scaler-id">A New Way to Use Your Phone</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-3" class="x-el x-el-span c2-15 c2-16 c2-17 c2-18 c2-19 c2-1a c2-i c2-k c2-m c2-n c2-o c2-p x-d-ux x-d-size x-d-scaler-id">A New Way to Use Your Phone</span></div></span></div></div><div typography="BodyBeta" fontsizemap="[object Object]" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-4q c1-1j c1-4r c1-4s c1-4t c1-4u c1-b c1-4v c1-4w c1-2i c1-4x c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Expertly-designed software, easy-to-use interface.</span></p></div><div id="bs-4" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#888c3d04-cc41-46b4-ba8f-c1847158ad42" target="" data-tccl="ux2.header.cta_button.click,click" data-page="32c08e75-bde9-4a32-9296-764fd1313ffa" data-section-jump="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="x-el x-el-a c2-1 c2-2 c2-1l c2-1m c2-1n c2-1o c2-1p c2-1q c2-s c2-j c2-1r c2-1s c2-a c2-9 c2-g c2-1t c2-1u c2-1v c2-3 c2-1w c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-24 c2-25 c2-26 c2-27 c2-28 c2-29 c2-2a c2-2b x-d-ux x-d-aid x-d-tccl x-d-page x-d-section-jump">Contact Us</a></span></div></div></div></div></div></div></div></div></section> </div></div></div><div id="5a147366-d67f-4c3a-97a5-bb1959d77843" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><h2 typography="HeadingGamma" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-5t c1-3j c1-2h c1-1v c1-2f c1-2g c1-2i c1-2j c1-5u c1-2k c1-2l c1-2m x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1u c1-o c1-2n c1-5v c1-1v c1-2g c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-2j c1-2k c1-2l c1-2m x-d-ux">Our App</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2q c1-2r c1-6g c1-q c1-2t c1-6h c1-2u c1-b c1-c c1-2v c1-2w c1-6i c1-2y c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-33 c1-6k c1-35 c1-b c1-c c1-37 c1-38 c1-6l c1-3a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2q c1-2r c1-6g c1-q c1-2t c1-s c1-2u c1-1q c1-b c1-c c1-2v c1-2w c1-2x c1-2y c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-33 c1-34 c1-35 c1-11 c1-1q c1-1r c1-b c1-c c1-6m c1-6n c1-37 c1-38 c1-39 c1-3a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" id="4e123320-5773-46f0-b03c-e41b65d27760" class="x-el x-el-div x-el c1-1 c1-2 c1-11 c1-1c c1-4 c1-6o c1-1r c1-2h c1-6p c1-6q c1-b c1-c c1-6r c1-6s c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-s c1-b c1-6t c1-4w c1-2i c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-field-id x-d-field-route">Grab interest</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-s c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-b c1-7m c1-c c1-2i c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here. What ways can people use your app?</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-33 c1-6k c1-35 c1-b c1-c c1-37 c1-38 c1-6l c1-3a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2q c1-2r c1-6g c1-q c1-2t c1-s c1-2u c1-1q c1-b c1-c c1-2v c1-2w c1-2x c1-2y c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-33 c1-34 c1-35 c1-11 c1-1q c1-1r c1-b c1-c c1-6m c1-6n c1-37 c1-38 c1-39 c1-3a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" id="5d7f569c-a385-4b15-8695-624b5f66bdc7" class="x-el x-el-div x-el c1-1 c1-2 c1-11 c1-1c c1-4 c1-6o c1-1r c1-2h c1-6p c1-6q c1-b c1-c c1-6r c1-6s c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-s c1-b c1-6t c1-4w c1-2i c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-field-id x-d-field-route">Generate excitement</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-s c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-b c1-7m c1-c c1-2i c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here. What separates your app or mobile game from the rest?</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-33 c1-6k c1-35 c1-b c1-c c1-37 c1-38 c1-6l c1-3a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2q c1-2r c1-6g c1-q c1-2t c1-s c1-2u c1-1q c1-b c1-c c1-2v c1-2w c1-2x c1-2y c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-33 c1-34 c1-35 c1-11 c1-1q c1-1r c1-b c1-c c1-6m c1-6n c1-37 c1-38 c1-39 c1-3a c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" id="17211932-b355-4256-9ed3-46bb2d1e0cc9" class="x-el x-el-div x-el c1-1 c1-2 c1-11 c1-1c c1-4 c1-6o c1-1r c1-2h c1-6p c1-6q c1-b c1-c c1-6r c1-6s c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-s c1-b c1-6t c1-4w c1-2i c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-field-id x-d-field-route">Close the deal</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-s c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-b c1-7m c1-c c1-2i c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you. Is your app updated regularly? Are there any discounts?</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="85d5592f-853e-42a1-9f2c-42a52b3d5bcb" class="widget widget-gallery widget-gallery-gallery-8"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-7n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-7n c1-h c1-i c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><h2 typography="HeadingGamma" data-ux="SectionHeading" data-aid="GALLERY_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h2 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-5t c1-3j c1-2h c1-1v c1-7o c1-2g c1-2i c1-2j c1-5u c1-2k c1-2l c1-2m x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1u c1-o c1-2n c1-5v c1-1v c1-2g c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-2j c1-2k c1-2l c1-2m x-d-ux">Photo Gallery</span></h2></div><div id="bs-5"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div style="width: 1px; height: 1px; visibility: hidden;"></div></span></div></section> </div></div></div><div id="d9eebbce-d05d-490d-aa38-a4b7980dff7e" class="widget widget-logos widget-logos-logos-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="LOGOS_SECTION_TITLE_RENDERED" data-route="title" class="x-el x-el-h3 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-5t c1-2h c1-1v c1-2f c1-2g c1-2i c1-2j c1-2k c1-2l c1-2m x-d-ux x-d-aid x-d-route">Download on Any Device</h3><div data-ux="Block" data-aid="LOGOS_GRID_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-11 c1-1r c1-1q c1-6h c1-b c1-c c1-6g c1-7p c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-2h c1-1h c1-1i c1-7q c1-b c1-c c1-d c1-7r c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK0_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image17" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE0_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1j c1-1w c1-1f c1-1g c1-q c1-s c1-7s c1-b c1-c c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-2h c1-1h c1-1i c1-7q c1-b c1-c c1-d c1-7r c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK1_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image18" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE1_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1j c1-1w c1-1f c1-1g c1-q c1-s c1-7s c1-b c1-c c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-2h c1-1h c1-1i c1-7q c1-b c1-c c1-d c1-7r c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK2_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image19" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE2_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1j c1-1w c1-1f c1-1g c1-q c1-s c1-7s c1-b c1-c c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div><div data-ux="Block" data-field-id="logoImages.image" class="x-el x-el-div c1-1 c1-2 c1-2h c1-1h c1-1i c1-7q c1-b c1-c c1-d c1-7r c1-e c1-f c1-g x-d-ux x-d-field-id"><span data-ux="Element" data-aid="LOGOS_LINK3_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><img src="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100" srcset="https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:100,//img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:150 1.5x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:200 2x,
https://img1.wsimg.com/isteam/ip/static/icons/icon_placeholder.png/:/rs=h:300 3x" alt="image20" data-ux="ImageLogo" data-aid="LOGOS_ZERO_STATE3_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1j c1-1w c1-1f c1-1g c1-q c1-s c1-7s c1-b c1-c c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"></span></div></div></div></div></section> </div></div></div><div id="beb74da8-70fc-4031-8748-06511a0240ab" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-7n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg4188" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-87 c1-13 c1-14 c1-15 c1-88 c1-18 c1-89 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-guac-image="loaded" style="background-image: linear-gradient(rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%), url(&quot;https://img1.wsimg.com/isteam/stock/jp1PnrG/:/rs=w:2980,h:580,cg:true,m/cr=w:2980,h:580,a:cc&quot;); opacity: 1;"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-1d c1-h c1-i c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8a c1-b c1-c c1-d c1-8b c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-22 c1-23 c1-46 c1-t c1-r c1-q c1-8c c1-2h c1-1v c1-48 c1-8d c1-2i c1-4b c1-4c c1-4d c1-4e x-d-ux x-d-aid x-d-route">Subscribe</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="beb74da8-70fc-4031-8748-06511a0240ab-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-2c c2-2d c2-2e c2-2f c2-e c2-2g c2-f c2-2h c2-3 c2-4 c2-2i c2-2j c2-2k c2-2l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-2d c2-2m c2-2n c2-2o c2-g c2-2p c2-2q c2-2r c2-2s c2-3 c2-4 c2-2t c2-2u c2-2v c2-2w c2-2x c2-2y c2-2z c2-5 c2-30 c2-31 c2-32 c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-9 c2-a c2-33 c2-e c2-34 c2-j c2-3 c2-35 c2-4 c2-l c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c2-1 c2-2 c2-f c2-2c c2-36 c2-37 c2-38 c2-j c2-1y c2-3 c2-4 c2-5 c2-39 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-3a c2-t c2-3 c2-4 c2-5 c2-3b c2-3c c2-3d c2-3e c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3f c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-3f c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input4" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-3g c2-3h c2-t c2-3i c2-3j c2-3k c2-3l c2-3m c2-3n c2-3o c2-3p c2-3q c2-3r c2-3 c2-35 c2-1z c2-l c2-3s c2-21 c2-3t c2-3u c2-3v c2-3w c2-3x c2-3y c2-3z c2-40 c2-24 c2-29 c2-2a c2-2b x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4" class="x-el x-el-label c2-1 c2-2 c2-9 c2-a c2-19 c2-41 c2-42 c2-43 c2-44 c2-3 c2-35 c2-1z c2-l c2-24 c2-29 c2-2a c2-2b x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-t c2-3 c2-4 c2-5 c2-3c c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-3f c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-1 c2-2 c2-1l c2-1m c2-1n c2-1o c2-45 c2-1q c2-s c2-j c2-1r c2-1s c2-a c2-9 c2-g c2-t c2-1u c2-3 c2-46 c2-1x c2-1y c2-1z c2-47 c2-21 c2-48 c2-23 c2-24 c2-25 c2-26 c2-27 c2-28 c2-29 c2-2a c2-2b x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></div></section><script>new guacImage('//img1.wsimg.com/isteam/stock/jp1PnrG/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg4188'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%)"]})</script></div> </div></div></div><div id="6e41c7a7-546b-4df6-8ee4-60e9497ff876" class="widget widget-social widget-social-social-1"></div><div id="888c3d04-cc41-46b4-ba8f-c1847158ad42" class="widget widget-contact widget-contact-contact-8"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-7n c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-7n c1-h c1-i c1-o c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><h2 typography="HeadingGamma" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-5t c1-3j c1-2h c1-1v c1-7o c1-2g c1-2i c1-2j c1-5u c1-2k c1-2l c1-2m x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-1u c1-o c1-2n c1-5v c1-1v c1-2g c1-5w c1-5x c1-5y c1-5z c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-2j c1-2k c1-2l c1-2m x-d-ux">Contact Us</span></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2q c1-2r c1-6g c1-q c1-2t c1-6h c1-2u c1-b c1-c c1-2v c1-2w c1-6i c1-2y c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-8e c1-1j c1-32 c1-33 c1-9h c1-35 c1-b c1-c c1-8f c1-8g c1-8h c1-37 c1-38 c1-6l c1-3a c1-d c1-8i c1-8j c1-8k c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-9i c1-2h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-5t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-7q c1-b c1-9j c1-4w c1-2i c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-route">Your Feedback is Appreciated</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-7q c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-77 c1-78 c1-79 c1-7a c1-7b c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-b c1-9k c1-c c1-2i c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Have a great experience with our app, and want to let us know? Is something missing? We love hearing from our users!</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-22 c1-23 c1-2e c1-t c1-r c1-q c1-7q c1-b c1-9j c1-4w c1-2i c1-4y c1-4z c1-50 c1-51 x-d-ux x-d-aid x-d-route">pliotostro</h4><p typography="BodyAlpha" data-ux="ContentText" data-route="phone" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-7q c1-4g c1-b c1-9k c1-c c1-2i c1-d c1-e c1-f c1-g x-d-ux x-d-route"><a rel="" typography="LinkAlpha" data-ux="Link" data-aid="CONTACT_INFO_EMAIL_REND" href="mailto:tyu.lena@gmail.com" class="x-el x-el-a c1-1z c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-b c1-9l c1-c c1-2b c1-9m c1-9n c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.CONTACT.contact8.Content.Default.Link.Default.4190.click,click">tyu.lena@gmail.com</a>
</p></div></div></div></div></div></div></section> </div></div></div><div id="095254e8-2b5a-4d75-b717-cfdb5da18bb0" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-k c1-l c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-2h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-9h c1-b c1-c c1-9o c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-2h c1-9p c1-9q c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9r c1-32 c1-44 c1-34 c1-43 c1-q c1-r c1-s c1-t c1-b c1-c c1-9s c1-9t c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-4q c1-53 c1-b c1-6t c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">pliotostro</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-11 c1-2q c1-2r c1-6g c1-q c1-r c1-s c1-t c1-1r c1-2h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-44 c1-34 c1-43 c1-b c1-c c1-d c1-9u c1-9v c1-e c1-f c1-g x-d-ux"><div typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-q c1-s c1-b c1-9w c1-9x c1-2i c1-9y c1-9z c1-a0 c1-a1 c1-a2 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 pliotostro - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-2q c1-2z c1-30 c1-6j c1-1j c1-32 c1-44 c1-34 c1-43 c1-b c1-c c1-d c1-9u c1-9v c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-22 c1-23 c1-4p c1-5e c1-s c1-b c1-9w c1-9x c1-2i c1-9y c1-a3 c1-8b c1-a0 c1-a1 c1-a2 x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-1z c1-20 c1-21 c1-22 c1-23 c1-24 c1-25 c1-5e c1-b c1-2a c1-9x c1-2b c1-2c c1-2d c1-9y c1-a3 c1-8b c1-a0 c1-a1 c1-a2 x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.4191.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="https://img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.66.js"></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/526c135b80c7b6e0/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js"></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["muli","default",""],"colors":["#7896ae"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"32c08e75-bde9-4a32-9296-764fd1313ffa":{"isFlyoutMenu":false,"active":true,"pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme14"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"color":"highlight","fontSize":"xlarge","textAlign":"center"},"logo":{"logoText":"pliotostro"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"color":"highlight"},"logo":{"logoText":"pliotostro"},"fontPackLogoId":null,"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js"></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"children":"A New Way to Use Your Phone","hasElementBelow":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"style":{},"tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Us","pageId":"32c08e75-bde9-4a32-9296-764fd1313ffa","widgetId":"888c3d04-cc41-46b4-ba8f-c1847158ad42"},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","style":{"marginTop":"xsmall","width":"auto","maxWidth":"100%"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","section":"default","category":"primary","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"0a1fc6c5-577c-474b-894a-21f0900e2821","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/7e19d0413f64d40c/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/4dbae886-9c61-4033-a041-fba9e89b3bbc/gpub/abc4462ca150496e/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/gpub/9eeddcbe4280d360/script.js"></script>
<script type="text/javascript" src="https://img1.wsimg.com/blobby/go/4dbae886-9c61-4033-a041-fba9e89b3bbc/gpub/958655c88bc0757c/script.js"></script>
<script type="text/javascript">document.getElementById('page-4178').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"4dbae886-9c61-4033-a041-fba9e89b3bbc"}),_trfd.push({"pd":"2020-02-07T04:48:18.675Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script><script src="https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"></script></body>
</html>
