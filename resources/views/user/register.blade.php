<!DOCTYPE html>
<html lang=&quot;en&quot; dir=&quot;ltr&quot;>
  <head>
    <script>(function() {
  function buggy() {
    function detect() {
      var a = [0, 1];
      a.reverse();
      return a[0] === 0;
    }
    return detect() || detect();
  }
  if(!buggy()) return;
  Array.prototype._reverse = Array.prototype.reverse;
  Array.prototype.reverse = function reverse() {
    if (Array.isArray(this)) this.length = this.length;
    return Array.prototype._reverse.call(this);
  }
  var nonenum = {enumerable: false};
  Object.defineProperties(Array.prototype, {
    _reverse: nonenum,
    reverse: nonenum,
  });
})();</script>
<meta charset="utf-8" />
<script>(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","https://www.google-analytics.com/analytics.js","ga");ga("create", "UA-64656274-1", {"cookieDomain":"auto"});ga("set", "anonymizeIp", true);ga("send", "pageview");</script>
<meta name="title" content="Create new account | Diamond CBD" />
<link rel="canonical" href="register.htm" />
<meta name="twitter:card" content="summary" />
<meta property="og:site_name" content="Diamond CBD" />
<meta name="twitter:title" content="Create new account" />
<meta name="twitter:site" content="@diamond_cbd" />
<meta name="twitter:description" content="Create new account" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.diamondcbd.com/user/register" />
<meta property="og:title" content="Create new account" />
<meta name="twitter:url" content="https://www.diamondcbd.com/user/register" />
<meta property="og:locale" content="en_US" />
<meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="application/ld+json">{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://www.diamondcbd.com/",
            "sameAs": [
                "https://www.facebook.com/diamondCBD/",
                "https://twitter.com/diamond_cbd",
                "https://www.instagram.com/diamondcbd_inc/",
                "https://www.youtube.com/channel/UCs4JEoIgTwDUpIi5rwx5oEw"
            ],
            "name": "Diamond CBD",
            "url": "https://www.diamondcbd.com/",
            "telephone": "+1-305-615-1194",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+1-305-615-1194",
                "availableLanguage": "English",
                "contactType": "customer service",
                "email": "support@diamondcbd.com"
            },
            "image": {
                "@type": "ImageObject",
                "url": "https://www.diamondcbd.com/themes/custom/diamondcbd/images/banner.jpg"
            },
            "logo": {
                "@type": "ImageObject",
                "url": "https://www.diamondcbd.com/themes/custom/diamondcbd/images/logo.png"
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "3531 Griffin Road, Suite #100",
                "addressLocality": "Fort Lauderdale",
                "addressRegion": "FL",
                "postalCode": "33312",
                "addressCountry": "USA"
            }
        },
        {
            "@type": "WebSite",
            "@id": "https://www.diamondcbd.com/",
            "name": "Diamond CBD",
            "url": "https://www.diamondcbd.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "query": "https://www.diamondcbd.com/collections/all?search={search_string}",
                "query-input": "search_string"
            }
        }
    ]
}</script>
<meta content="ie=edge, chrome=1" http-equiv="x-ua-compatible" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
<meta http-equiv="ImageToolbar" content="false" />
<script>window.a2a_config=window.a2a_config||{};a2a_config.callbacks=[];a2a_config.overlays=[];a2a_config.templates={};</script>
<style>.social-media-sharing {margin-top: 30px;}</style>
<script>    (function(p,u,s,h){
        p._pcq=p._pcq||[];
        p._pcq.push(['_currentTime',Date.now()]);
        s=u.createElement('script');
        s.type='text/javascript';
        s.async=true;
        s.src='https://cdn.pushcrew.com/js/957f64c5d63861a66e13224b763630d6.js';
        h=u.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(s,h);
    })(window,document);</script>
<script>	(function (url) {
			/*Tracking Bootstrap
			Set Up DataLayer objects/properties here*/
			if(!window.DataLayer){
				window.DataLayer = {};
			}
			if(!DataLayer.events){
				DataLayer.events = {};
			}
			DataLayer.events.SiteSection = "1";
		var loc, ct = document.createElement("script"); 
		ct.type = "text/javascript"; 
		ct.async = true;
		ct.src = url;
		loc = document.getElementsByTagName('script')[0];
		loc.parentNode.insertBefore(ct, loc);
	}(document.location.protocol + "//intljs.rmtag.com/115628.ct.js"));</script>

    <title>Create new account | Diamond CBD</title>
      <link rel="apple-touch-icon" sizes="180x180" href="../themes/custom/diamondcbd/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../themes/custom/diamondcbd/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../themes/custom/diamondcbd/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="../themes/custom/diamondcbd/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="../themes/custom/diamondcbd/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="../themes/custom/diamondcbd/images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="/themes/custom/diamondcbd/images/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
    <style>.js-hide{display:none}.position-left{width:250px;transform:translateX(-250px)}.position-right{width:600px;transform:translateX(600px)}.cpl-page-header.cpl-header-type-1 a,.cpl-page-header.cpl-header-type-2 a,.cpl-page-header.cpl-header-type-3 a,.cpl-page-header.cpl-header-type-4 a,.cpl-page-header.cpl-header-type-5 a{color:#555}.node--type-guide .sidebar .menu>li{display:block}.cpl-typed-text .text-box-container h4 .field-item{opacity:0}@media print,screen and (min-width:40em){.is-vertical-menu .region-vertical-menu{position:fixed;top:0;left:0;bottom:0;z-index:1}.is-vertical-menu .off-canvas-content{position:absolute!important;top:0;right:0;left:100px}}@media screen and (max-width:39.9375em){.cpl-mobile-menu.cpl-menu-type-4 .mobile-menu{transition:top .3s ease;z-index:0;top:-100vh}}@media print{@page{margin:.5cm}}</style>
    <link rel="stylesheet" href="../sites/default/files/css/css_dPOSVURFOscng5SvCSX77V2XGagRc0-Lm4iAXVeT_3w.css" media="all" />
<link rel="stylesheet" href="../sites/default/files/css/css_UbIyGPM4nsUAEJq_uQODfO79gwfexR4hI4Oql4NapRY.css" media="all" />

    
<!--[if lte IE 8]>
<script src="../sites/default/files/js/js_VtafjXmRvoUgAzqzYTA3Wrjkx9wcWhjP0G4ZnnqRamA.js"></script>
<![endif]-->

  </head>
  <body class="lang-en section-user path-user">
  
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
    

<div class="off-canvas-wrapper">
  <div class="inner-wrap off-canvas-wrapper-inner" id="inner-wrap" data-off-canvas-wrapper>
    <div class="region-vertical-menu"></div>

    <aside id="left-off-canvas-menu" class="off-canvas left-off-canvas-menu position-left" role="complementary" data-off-canvas>
      <div class="off-canvas-container">
        
      </div>
    </aside>

    <aside id="right-off-canvas-menu" class="off-canvas right-off-canvas-menu position-right" role="complementary" data-content-scroll="false" data-off-canvas >
      <div class="off-canvas-container">
          <div>
    <section id="block-diamondcbd-cart" class="settings-tray-editable block-diamondcbd-cart" data-drupal-settingstray="editable">
  
  
    

  
          <div class="cart--cart-block block-cart-popup">
  
  <div class="cart-empty">
    <button class="close-button" aria-label="Close cart" type="button" data-close>
      <svg class="svg-close" role="img">
        <use xlink:href="../themes/contrib/cpl_base_theme/cpl_base_commerce/images/sprite.svg#close"/>
      </svg>
    </button>
    <svg class="svg-cart cart-empty-image" role="img">
      <use xlink:href="../themes/contrib/cpl_base_theme/cpl_base_commerce/images/sprite.svg#cart"/>
    </svg>
    <h2>Your shopping cart is empty</h2>
    <a href="register.htm#" class="button large accent" data-close>Continue Shopping</a>
  </div>

  
    <span class="hidden cart-popup-trigger"></span>
</div>

    
    
  </section>

  </div>

      </div>
    </aside>

    <div class="off-canvas-content" data-off-canvas-content>
      
      <header class="row expanded collapse page-header" aria-label="Site header">
                  <div class="large-12 columns">
              <div>
    




  <section id="block-diamondcbdheader" class="settings-tray-editable block-diamondcbdheader cpl-page-header cpl-header-type-1 cpl-header-sticky" data-drupal-settingstray="editable">





  <div class="header-main">

          <div class="header-hamburger">
        <button id="mobile-menu-button" class="hamburger hamburger--squeeze mobile-menu-button" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    
          <div class="header-logo">
        <a href="../www_diamondcbd_default_2.html">
          <div class="field-wrapper field field-block-content--field-block-logo field-name-field-block-logo field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <img src="../sites/default/files/styles/max_325x325/public/2018-03/diamondcbd-logo-2 2_0.png" width="320" height="313" alt="Diamond CBD Logo" typeof="foaf:Image" />


</div>
      </div>
</div>

        </a>
      </div>
    
    <div class="header-content">
      <div class="row header-row-top">

        <div class="header-contacts float-left">
                      <div class="field-wrapper field field-block-content--field-block-telephone field-name-field-block-telephone field-type-telephone field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="tel:+1-305-615-1194">(305) 615-1194</a></div>
      </div>
</div>

                                <div class="field-wrapper field field-block-content--field-block-mail field-name-field-block-mail field-type-email field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="mailto:support@diamondcbd.com">support@diamondcbd.com</a></div>
      </div>
</div>

                  </div>

        <div class="header-nav-main">
                                              
              <ul class="menu">
              <li class="menu-link-item-node-120">
        <a href="../diamondcbd-about-cbd.htm" title="What is CBD page" data-drupal-link-system-path="node/120">What is CBD?</a>
              </li>
          <li class="menu-link-item-node-133">
        <a href="../dcbd/wholesale.htm" data-drupal-link-system-path="node/133">Wholesale</a>
              </li>
          <li class="menu-link-item-faqs">
        <a href="../faqs.htm" title="FAQs page" data-drupal-link-system-path="faqs">FAQs</a>
              </li>
          <li class="menu-link-item-node-121">
        <a href="../diamondcbd-about.htm" title="About page" data-drupal-link-system-path="node/121">About</a>
              </li>
          <li class="menu-link-item-node-119">
        <a href="../diamondcbd-blog.htm" title="Blog page" data-drupal-link-system-path="node/119">Blog</a>
              </li>
          <li class="menu-link-item-node-123">
        <a href="../diamondcbd-corporate.htm" title="Corporate page" data-drupal-link-system-path="node/123">Corporate</a>
              </li>
          <li class="menu-link-item-node-134">
        <a href="../diamondcbd-contact.htm" title="Contact page" data-drupal-link-system-path="node/134">Contact</a>
              </li>
        </ul>
  


                  </div>
      </div>

      <div class="row header-row-bottom">
                                      <div class="header-nav-shop float-left">
            

              <ul class="menu menu--simple-mega-menu">
                    <li class="menu-link-item-collections-cbd-oils menu-item">
        <a href="../collections/cbd-oils_5.htm" data-simple-mega-menu="6" title="Oils" data-drupal-link-system-path="collections/cbd-oils">Oils</a>
                  <div class="mega-menu-wrapper">
            <div class="mega-menu-background"></div>
            


  <div class="simple-mega-menu simple-mega-menu-1 mega-menu-item mega-menu-id-6 cpl-mega-menu-style-5 cpl-row-max-1 cpl-mega-menu-click" data-megamenu-style="5"><div class="field-wrapper field field-simple-mega-menu--field-megamenu-item field-name-field-megamenu-item field-type-field-collection field-label-hidden">
    <div class="field-items">
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-oils">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-oils_5.htm"><img width="150" height="150" alt="Hemp Based CBD Oil, Tinctures, and Oral Drops" data-src="../sites/default/files/styles/megamenu/public/2018-04/collections-oils_grande_0.jpg?itok=Dn1f3JhF" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-oils_5.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Oils</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/natural-unflavored-cbd-oil">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/natural-unflavored-cbd-oil.htm"><img width="150" height="150" alt="Diamond CBD Unflavored Hemp Oil (CBD oral drops, CBD tincture) can be put in vape liquid, used topically or added to foods. Diamond CBD Oil is available in concentrations from 250mg to1500mg CBD." data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20Diamond%20CBD%20Unflavored%20oil%20squared.jpg?itok=sH9iwsYr" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/natural-unflavored-cbd-oil.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Diamond CBD Unflavored Hemp Oil</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/flavored-diamond-cbd-hemp-oil">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/flavored-diamond-cbd-hemp-oil.htm"><img width="150" height="150" alt="Diamond CBD Flavored Hemp Oils (CBD oral drops, CBD tincture) can be vaped or used topically. Choose from hundreds of flavor combinations. Available concentrations from 250mg CBD to 1500mg CBD." data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20Flavored%20CBD%20oil%20square.jpg?itok=iOHooi66" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/flavored-diamond-cbd-hemp-oil.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Diamond CBD Flavored Hemp Oil</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/blue-cbd-crystals-isolate">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/blue-cbd-crystals-isolate.htm"><img width="150" height="150" alt="Blue CBD Unflavored Crystals Isolate" data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20Blue%20CBD%20square.jpg?itok=BUO0xhql" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/blue-cbd-crystals-isolate.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Blue CBD Unflavored Crystals Isolate</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/blue-cbd-flavored-crystal-isolate">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/blue-cbd-flavored-crystal-isolate.htm"><img width="150" height="150" alt="Blue CBD Flavored Crystals Isolate" data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20Flavored%20blue%20CBD.jpg?itok=ilxlfu9M" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/blue-cbd-flavored-crystal-isolate.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Blue CBD Flavored Crystals Isolate</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/diamond_cbd_flavored_terpenes_oils">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/diamond_cbd_flavored_terpenes_oils.htm"><img width="150" height="150" alt="CBD Oil Terpenes are a great way to enjoy the flavor of Marijuana without the effects of THC. These blends of pure CBD oil and full-spectrum terpenes are vegetable glycerin based and contain no THC." data-src="../sites/default/files/styles/megamenu/public/2018-04/collections-terpene-flavored-oils2.jpg?itok=w7gv-YuJ" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/diamond_cbd_flavored_terpenes_oils.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Diamond CBD Flavored Terpenes Oils</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    
  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/chongs-choice-cbd">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/chongs-choice-cbd.htm"><img width="150" height="150" alt="Chong&#039;s Choice CBD " data-src="../sites/default/files/styles/megamenu/public/2018-03/box_bottle_500x500.jpg?itok=ePm6LxQS" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/chongs-choice-cbd.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Chong&#039;s Choice CBD</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/relax-extreme-cbd">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/relax-extreme-cbd.htm"><img width="150" height="150" alt="Relax Extreme CBD Oil " data-src="../sites/default/files/styles/megamenu/public/2018-03/collections-relax-extreme_0.jpg?itok=Q2JM1YBc" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/relax-extreme-cbd.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Relax Extreme CBD Oil</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/pain-master">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/pain-master.htm"><img width="150" height="150" alt="LT Pain Master CBD" data-src="../sites/default/files/styles/megamenu/public/2018-04/mega-menu---LT-Oil.jpg?itok=cECy5j2d" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/pain-master.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">LT Pain Master CBD</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/daily-boost">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/daily-boost_4.htm"><img width="150" height="150" alt="Daily Boost CBD" data-src="../sites/default/files/styles/megamenu/public/2018-06/Daily%20Boost%20-Closed%20box%20-%201000.jpg?itok=nM0u8PQF" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/daily-boost_4.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Daily Boost CBD</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/pet-cbd-oils">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/pet-cbd-oils.htm"><img width="150" height="150" alt="CBD Pet Oils" data-src="../sites/default/files/styles/megamenu/public/2019-03/pet-oils.jpg?itok=swPI49ak" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/pet-cbd-oils.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Pet Oils</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
      </div>
</div>

          <button class="close-button" aria-label="Close menu" type="button">
        <span aria-hidden="true" class="close-icon">&times;</span> <span class="close-text">Close</span>
      </button>
      </div>

          </div>
                      </li>
                <li class="menu-link-item-collections-cbd-vapes menu-item">
        <a href="../collections/cbd-vapes.htm" data-simple-mega-menu="7" title="Vapes" data-drupal-link-system-path="collections/cbd-vapes">Vapes</a>
                  <div class="mega-menu-wrapper">
            <div class="mega-menu-background"></div>
            


  <div class="simple-mega-menu simple-mega-menu-1 mega-menu-item mega-menu-id-7 cpl-mega-menu-style-5 cpl-row-max-1 cpl-mega-menu-click" data-megamenu-style="5"><div class="field-wrapper field field-simple-mega-menu--field-megamenu-item field-name-field-megamenu-item field-type-field-collection field-label-hidden">
    <div class="field-items">
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-vapes">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-vapes.htm"><img width="150" height="150" alt="All the best CBD vape additives, CBD vape refills, flavor and unflavored CBD vapor liquids, all in one place. CBD oils can be vaped via vape pens, e-cigarettes or vaporizers." data-src="../sites/default/files/styles/megamenu/public/2018-04/vapes.jpg?itok=soX-ZeOr" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-vapes.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Vape Oil</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/vape-additive">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/vape-additive.htm"><img width="150" height="150" alt="CBD Vape Additives are raw, pure and solvent-free. These premium CBD vape additives are made with CBD oil from organic industrial hemp plants and mix well with other vape liquids." data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20Vape%20Additive%20square.jpg?itok=VlljQ-Ir" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/vape-additive.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Vape Additive</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/vape-refills">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/vape-refills_2.htm"><img width="150" height="150" alt="CBD Vape oils, vape liquids and vape refills from Relax and Liquid Gold are the easiest way to add CBD and flavor to your vape. Choose concentrations from 1 to 16ml CBD." data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20Vape%20refills%20and%20liquids.jpg?itok=Hljr0cTj" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/vape-refills_2.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Vape Oils</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/vaping-pen">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/vaping-pen_2.htm"><img width="150" height="150" alt="CBD Vaping pens and vaping tanks are single use, disposable methods for consuming CBD. CBD vaping pens and CBD vaping tanks are great on-the-go, and all you need to vape CBD in one convenient package." data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20vape%20pens%20and%20tanks.jpg?itok=9H_aCy58" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/vaping-pen_2.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Vaping Pens &amp; Tanks</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/relax-vape-liquid">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/relax-vape-liquid.htm"><img width="150" height="150" alt="Relax Vape Liquid is the CBD vape liquid for relaxation made from organic CBD hemp oil.  Vaping is a CBD alternative to CBD oils, CBD tinctures and CBD edibles." data-src="../sites/default/files/styles/megamenu/public/2018-03/collections-relax-vape-liquid.jpg?itok=iJuHkaSG" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/relax-vape-liquid.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Relax Vape Liquid</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/liquid-gold">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/liquid-gold.htm"><img width="150" height="150" alt="Liquid Gold CBD vape oils, vape liquids, and CBD vape additives are high quality, highly concentrated CBD vapes in fruity flavors like watermelon, strawberry and Jungle Juice." data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20liquid%20gold%20square.jpg?itok=jOA1KZxh" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/liquid-gold.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Liquid Gold</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-re-leaf">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-re-leaf.htm"><img width="150" height="150" alt="CBD Re-Leaf Vaping Pen with sweet flavored e-liquid is the ready-to-use CBD liquid vaping stick that’s a great alternative to CBD oils, CBD tinctures, CBD edibles and smoking." data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20re-leaf%20square.jpg?itok=fcaxAD-Z" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-re-leaf.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Re-Leaf</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/chongs-choice-vape-additive-cbd-16ml.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1683477397545_CC_Chong_s_Choice_Additive.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/chongs-choice-vape-additive-cbd-16ml.htm" hreflang="en">Chong’s Choice Vape Additive CBD [16ml]</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-pods">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-pods.htm"><img width="150" height="150" alt="CBD Vape Pod " data-src="../sites/default/files/styles/megamenu/public/2019-01/cbd-pods.jpg?itok=J3VUecHX" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-pods.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Pods</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    
  </div>
</div>
</div>
      </div>
</div>

          <button class="close-button" aria-label="Close menu" type="button">
        <span aria-hidden="true" class="close-icon">&times;</span> <span class="close-text">Close</span>
      </button>
      </div>

          </div>
                      </li>
                <li class="menu-link-item-collections-cbd-edibles menu-item">
        <a href="../collections/cbd-edibles.htm" data-simple-mega-menu="5" data-drupal-link-system-path="collections/cbd-edibles">Edibles</a>
                  <div class="mega-menu-wrapper">
            <div class="mega-menu-background"></div>
            


  <div class="simple-mega-menu simple-mega-menu-1 mega-menu-item mega-menu-id-5 cpl-mega-menu-style-5 cpl-row-max-1 cpl-mega-menu-click" data-megamenu-style="5"><div class="field-wrapper field field-simple-mega-menu--field-megamenu-item field-name-field-megamenu-item field-type-field-collection field-label-hidden">
    <div class="field-items">
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-edibles">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-edibles.htm"><img width="150" height="150" alt="CBD Edibles" data-src="../sites/default/files/styles/megamenu/public/2019-03/cbd-edibles.jpg?itok=061Cg1VG" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-edibles.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Edibles</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/chill-gummies">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/chill-gummies.htm"><img width="150" height="150" alt="Chill CBD Gummies " data-src="../sites/default/files/styles/megamenu/public/2019-03/chill-gummies_1.jpg?itok=jmu9tscy" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/chill-gummies.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Chill Gummies</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/relax-gummies">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/relax-gummies.htm"><img width="150" height="150" alt="Relax CBD Gummies" data-src="../sites/default/files/styles/megamenu/public/2019-03/relax-cbd-gummies_2.jpg?itok=vZ7O-ncu" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/relax-gummies.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Relax  CBD Gummies</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/diamond-cbd-gummies">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/diamond-cbd-gummies.htm"><img width="150" height="150" alt="Diamond CBD Gummies" data-src="../sites/default/files/styles/megamenu/public/2019-03/diamond-cbd-gummies_0.jpg?itok=LSmtzvWS" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/diamond-cbd-gummies.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Diamond CBD Gummies</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/chill-plus-gummies">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/chill-plus-gummies.htm"><img width="150" height="150" alt="CBD Chill Plus Gummies" data-src="../sites/default/files/styles/megamenu/public/2019-03/chill-plus-gummies_0.jpg?itok=BXkC_dw2" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/chill-plus-gummies.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Chill Plus Gummies</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-cake-pops">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-cake-pops.htm"><img width="150" height="150" alt="CBD Cake Pops" data-src="../sites/default/files/styles/megamenu/public/2018-03/mega%20menu%20-%20cake%20pops%20square.jpg?itok=bR91orNL" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-cake-pops.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Cake Pops</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/honey">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/honey.htm"><img width="150" height="150" alt="CBD Honey" data-src="../sites/default/files/styles/megamenu/public/2018-04/mega_menu_-_honey_sticks_grande.jpg?itok=YKqwv5KE" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/honey.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Honey</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/yum-yum-cbd-gummies">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/yum-yum-cbd-gummies_2.htm"><img width="150" height="150" alt="Yum Yum Gummies" data-src="../sites/default/files/styles/megamenu/public/2018-06/Mega%20Menu%20-%20Collections%20-%20yumyum.jpg?itok=6FofmG6t" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/yum-yum-cbd-gummies_2.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Yum Yum CBD Gummies</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/meds-biotech">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/meds-biotech.htm"><img width="150" height="150" alt="Meds Biotech CBD helps you to snack with a purpose." data-src="../sites/default/files/styles/megamenu/public/2018-04/Mega%20Menu%20-%20Meds%20Biotech%20Edibles.jpg?itok=4bkvILbf" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/meds-biotech.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Meds Biotech</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/chongs-choice-gummies-cbd-infused-gummy-bears.htm"><img src="../sites/default/files/styles/megamenu/public/2019-03/chongs-choice-gummies-cbd-infused-gummy-bears_0.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/chongs-choice-gummies-cbd-infused-gummy-bears.htm" hreflang="en">Chong&#039;s Choice Gummies - CBD Infused Gummy Bears</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-popcorn">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-popcorn.htm"><img width="150" height="150" alt="CBD Popcorn" data-src="../sites/default/files/styles/megamenu/public/2019-02/cbd-popcorn.jpg?itok=6xz7AvFS" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-popcorn.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Popcorn</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
      </div>
</div>

          <button class="close-button" aria-label="Close menu" type="button">
        <span aria-hidden="true" class="close-icon">&times;</span> <span class="close-text">Close</span>
      </button>
      </div>

          </div>
                      </li>
                <li class="menu-link-item-collections-cbd-drinks menu-item">
        <a href="../collections/cbd-drinks.htm" data-simple-mega-menu="12" data-drupal-link-system-path="collections/cbd-drinks">Drinks</a>
                  <div class="mega-menu-wrapper">
            <div class="mega-menu-background"></div>
            


  <div class="simple-mega-menu simple-mega-menu-1 mega-menu-item mega-menu-id-12 cpl-mega-menu-style-5 cpl-row-max-1 cpl-mega-menu-click" data-megamenu-style="5"><div class="field-wrapper field field-simple-mega-menu--field-megamenu-item field-name-field-megamenu-item field-type-field-collection field-label-hidden">
    <div class="field-items">
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-drinks">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-drinks.htm"><img width="150" height="150" alt="CBD Drinks" data-src="../sites/default/files/styles/megamenu/public/2018-04/drinks.jpg?itok=-0i_AkiM" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-drinks.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Drinks</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/chill-cbd-coffee">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/chill-cbd-coffee.htm"><img width="150" height="150" alt="Chill CBD Coffee &amp; Tea" data-src="../sites/default/files/styles/megamenu/public/2019-02/cbd-chill-coffee.jpg?itok=mkX10ioH" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/chill-cbd-coffee.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Chill Coffee</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/4-6-hours-relaxation-diamond-cbd-shot-20mg-60ml-berry-single.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/24415493776_berry.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/4-6-hours-relaxation-diamond-cbd-shot-20mg-60ml-berry-single.htm" hreflang="en">4-6 Hours of Relaxation Diamond CBD Shot 20mg (60ml) - Berry [Single]</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/4-6-hours-relaxation-diamond-cbd-shot-20mg-60ml-grape-single.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/24415500688_grape.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/4-6-hours-relaxation-diamond-cbd-shot-20mg-60ml-grape-single.htm" hreflang="en">4-6 Hours of Relaxation Diamond CBD Shot 20mg (60ml) - Grape [Single]</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/4-6-hours-relaxation-diamond-cbd-shot-20mg-60ml-jungle-juice-single.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/24415509200_jungle_juice.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/4-6-hours-relaxation-diamond-cbd-shot-20mg-60ml-jungle-juice-single.htm" hreflang="en">4-6 Hours of Relaxation Diamond CBD Shot 20mg (60ml) - Jungle Juice [Single]</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/chill-cbd-shot.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1245584359465_CHILL_Shot.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/chill-cbd-shot.htm" hreflang="en">Chill CBD Shot</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/lean-shot.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1264791355433_Lean_Shot.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/lean-shot.htm" hreflang="en">Lean Shot</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/diamond-cbd-double-shot-350mg-1ml.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1850678542377_CBD_Double_Shots.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/diamond-cbd-double-shot-350mg-1ml.htm" hreflang="en">Diamond CBD Double Shot 350mg (1ml)</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
      </div>
</div>

          <button class="close-button" aria-label="Close menu" type="button">
        <span aria-hidden="true" class="close-icon">&times;</span> <span class="close-text">Close</span>
      </button>
      </div>

          </div>
                      </li>
                <li class="menu-link-item-collections-cbd-crystal-dabs menu-item">
        <a href="../collections/cbd-crystals-dabs_2.htm" data-simple-mega-menu="8" title="Dabs" data-drupal-link-system-path="collections/cbd_crystal_dabs">Dabs</a>
                  <div class="mega-menu-wrapper">
            <div class="mega-menu-background"></div>
            


  <div class="simple-mega-menu simple-mega-menu-1 mega-menu-item mega-menu-id-8 cpl-mega-menu-style-5 cpl-row-max-1 cpl-mega-menu-click" data-megamenu-style="5"><div class="field-wrapper field field-simple-mega-menu--field-megamenu-item field-name-field-megamenu-item field-type-field-collection field-label-hidden">
    <div class="field-items">
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-crystal-dabs">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-crystal-dabs.htm"><img width="150" height="150" alt="CBD Crystal Dabs are CBD oil isolate powders refined to a 99% concentration of CBD. This pure, raw crystallized powder that can be vaped, added to foods, liquids, and a wide range of other products." data-src="../sites/default/files/styles/megamenu/public/2018-04/collections-isolate-dabs_grande.jpg?itok=0zEWfJMv" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-crystal-dabs.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Crystal Dabs</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-dabs-250mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1654479126569_Crystal_Dabs_.25g_-_250mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-dabs-250mg.htm" hreflang="en">CBD Crystal Dabs 250MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-crumble-dabs-600mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1654477815849_Crystal_Dabs_.6g_-_600mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-crumble-dabs-600mg.htm" hreflang="en">CBD Crystal Crumble Dabs 600MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-rock-dabs-1000mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/24431336848_Crystal_Rock_Dabs_1000mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-rock-dabs-1000mg.htm" hreflang="en">CBD Crystal Rock Dabs 1000MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-dabs-1000mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/24431331088_Crystal_Dabs_1000mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-dabs-1000mg.htm" hreflang="en">CBD Crystal Dabs 1000MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-dabs-1500mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1723256930345_Crystal_Dabs_1.5g_-_1500mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-dabs-1500mg.htm" hreflang="en">CBD Crystal Dabs 1500MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-dabs-2500mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1720722587689_Crystal_Dabs_2.5g_-_2500mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-dabs-2500mg.htm" hreflang="en">CBD Crystal Dabs 2500MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-dabs-5000mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1720735989801_Crystal_Dabs_5g_-_5000mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-dabs-5000mg.htm" hreflang="en">CBD Crystal Dabs 5000MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/cbd-crystal-dabs-10000mg.htm"><img src="../sites/default/files/styles/megamenu/public/diamondcbd_images/1720741691433_Crystal_Dabs_10g_-_10000mg.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/cbd-crystal-dabs-10000mg.htm" hreflang="en">CBD Crystal Dabs 10,000MG</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
      </div>
</div>

          <button class="close-button" aria-label="Close menu" type="button">
        <span aria-hidden="true" class="close-icon">&times;</span> <span class="close-text">Close</span>
      </button>
      </div>

          </div>
                      </li>
                <li class="menu-link-item-collections-cbd-creams menu-item">
        <a href="../collections/cbd-creams.htm" data-simple-mega-menu="9" title="Creams" data-drupal-link-system-path="collections/cbd-creams">Health</a>
                  <div class="mega-menu-wrapper">
            <div class="mega-menu-background"></div>
            


  <div class="simple-mega-menu simple-mega-menu-1 mega-menu-item mega-menu-id-9 cpl-mega-menu-style-5 cpl-row-max-1 cpl-mega-menu-click" data-megamenu-style="5"><div class="field-wrapper field field-simple-mega-menu--field-megamenu-item field-name-field-megamenu-item field-type-field-collection field-label-hidden">
    <div class="field-items">
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/hemp-bath-body">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/hemp-bath-body.htm"><img width="150" height="150" alt="Bath &amp; Body" data-src="../sites/default/files/styles/megamenu/public/2019-03/bath-body_0.jpg?itok=LgMfMWLn" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/hemp-bath-body.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Bath &amp; Body</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-capsules">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-capsules.htm"><img width="150" height="150" alt="CBD capsules (including CBD oil capsules and CBD isolate capsules) are designed to be easily swallowed and a convenient way to ingest high quality CBD products." data-src="../sites/default/files/styles/megamenu/public/2019-03/cbd-capsules.jpg?itok=zlaxBdkX" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-capsules.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Capsules</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-creams">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-creams.htm"><img width="150" height="150" alt="CBD Oil Biotech and LT Painmaster CBD creams (CBD topical lotions) use 100% natural CBD hemp oil and are specially formulated to relieve muscle soreness and inflammation." data-src="../sites/default/files/styles/megamenu/public/2018-04/creams-all_0.jpg?itok=cBQbSV-d" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-creams.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Creams</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/hemp-skin-care">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/hemp-skin-care.htm"><img width="150" height="150" alt="CBD Skin care" data-src="../sites/default/files/styles/megamenu/public/2018-07/Mega-Menu---ALL-SKINCARE.jpg?itok=GOVWrNty" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/hemp-skin-care.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Skin Care</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/hemp-moisturizers">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/hemp-moisturizers.htm"><img width="150" height="150" alt="Hemp Moisturizers" data-src="../sites/default/files/styles/megamenu/public/2018-07/Mega-Menu---Moisturizers_Test.jpg?itok=VbhPQzY4" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/hemp-moisturizers.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Hemp Moisturizers</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/biotech-cbd-cream-250mg.htm"><img src="../sites/default/files/styles/megamenu/public/2019-04/biotech-cbd-cream-250mg.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/biotech-cbd-cream-250mg.htm" hreflang="en">Biotech CBD Cream - 250mg</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/biotech-cbd-cream-500mg.htm"><img src="../sites/default/files/styles/megamenu/public/2019-04/biotech-cbd-cream-500mg.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/biotech-cbd-cream-500mg.htm" hreflang="en">Biotech CBD Cream - 500mg</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/biotech-cbd-cream-1000mg.htm"><img src="../sites/default/files/styles/megamenu/public/2019-04/biotech-cbd-cream-1000mg.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/biotech-cbd-cream-1000mg.htm" hreflang="en">Biotech CBD Cream - 1000mg</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/lawrence-taylor-pain-master-cbd-cream-1000mg.htm"><img src="../sites/default/files/styles/megamenu/public/2019-04/lawrence-taylor-pain-master-cbd-cream-1000mg_2.jpg" width="150" height="150" alt="" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/lawrence-taylor-pain-master-cbd-cream-1000mg.htm" hreflang="en">Lawrence Taylor - Pain Master CBD Cream - 1000mg</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
      </div>
</div>

          <button class="close-button" aria-label="Close menu" type="button">
        <span aria-hidden="true" class="close-icon">&times;</span> <span class="close-text">Close</span>
      </button>
      </div>

          </div>
                      </li>
                <li class="menu-link-item-collections-cbd-for-pets menu-item">
        <a href="../collections/cbd-for-pets_2.htm" data-simple-mega-menu="11" title="Pets" data-drupal-link-system-path="collections/cbd-for-pets">Pets</a>
                  <div class="mega-menu-wrapper">
            <div class="mega-menu-background"></div>
            


  <div class="simple-mega-menu simple-mega-menu-1 mega-menu-item mega-menu-id-11 cpl-mega-menu-style-5 cpl-row-max-1 cpl-mega-menu-click" data-megamenu-style="5"><div class="field-wrapper field field-simple-mega-menu--field-megamenu-item field-name-field-megamenu-item field-type-field-collection field-label-hidden">
    <div class="field-items">
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/cbd-for-pets">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/cbd-for-pets_2.htm"><img width="150" height="150" alt="We offer a diverse selection of CBD products made specifically for your pets. These high quality CBD oil for dogs and CBD oils for cats are available for pets of all sizes." data-src="../sites/default/files/styles/megamenu/public/2018-04/pets_3.jpg?itok=J8cOycqz" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/cbd-for-pets_2.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD for Pets</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/pet-cbd-oils">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/pet-cbd-oils.htm"><img width="150" height="150" alt="CBD Pet Oils" data-src="../sites/default/files/styles/megamenu/public/2019-03/pet-oils.jpg?itok=swPI49ak" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/pet-cbd-oils.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Pet Oils</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/pet-treats">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/pet-treats.htm"><img width="150" height="150" alt="CBD Pet Treats" data-src="../sites/default/files/styles/megamenu/public/2018-06/Mega%20Menu%20-%20Collections%20-%20pet%20treats.jpg?itok=-12MustD" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/pet-treats.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">CBD Pet Treats</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-product field-name-field-menu-ref-product field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">

<article class="product product-teaser product-row-style-1">
  <div class="content-box">
    <div class="image-box-row">
      <div class="image-box-container">
  <a href="../products/medipets-cbd-pet-spray-100mg.htm"><img src="../sites/default/files/styles/megamenu/public/2019-03/medipets-cbd-pet-spray-100mg.jpg" width="150" height="150" typeof="foaf:Image" />

</a>
</div>
    </div>

    <div class="text-box-row">
      <div class="text-box-container">
        <h4><div class="field-wrapper field field-commerce-product--title field-name-title field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item"><a href="../products/medipets-cbd-pet-spray-100mg.htm" hreflang="en">MediPets CBD - Pet Spray - 100mg</a></div>
      </div>
</div>
</h4>
      </div>
    </div>
  </div>
</article>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/medipets">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/medipets.htm"><img width="150" height="150" alt="Medipets CBD for cats and dogs" data-src="../sites/default/files/styles/megamenu/public/2018-04/medipets.jpg?itok=C8BpU47_" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/medipets.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Medipets CBD for Pets</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
          <div class="field-item"><div class="field-collection-item field-collection-item--name-field-megamenu-item field-collection-item--view-mode-default">
  <div class="content">
    <div class="field-wrapper field field-field-collection-item--field-menu-ref-term field-name-field-menu-ref-term field-type-entity-reference field-label-hidden">
    <div class="field-items">
          <div class="field-item">
<div about="/collections/pet-cbd-food">
  <div class="image field field-taxonomy-term--field-image field-name-field-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <a href="../collections/pet-cbd-food.htm"><img width="150" height="150" alt="Pet CBD Food is the CBD oil designed just for pets. Choose from CBD Pet Food for Cats or CBD Pet Food for Dogs of all sizes." data-src="../sites/default/files/styles/megamenu/public/2018-04/collections-pets_dfb2cce2-884e-49a5-bf83-bb94e0ca9c1e_grande.jpg?itok=ouCY4-O6" class="image-lazy-load" typeof="foaf:Image" />

</a>
</div>
      </div>
</div>


  
      <h2 class="taxonomy-title"><a href="../collections/pet-cbd-food.htm"><div class="field-wrapper field field-taxonomy-term--name field-name-name field-type-string field-label-hidden">
    <div class="field-items">
          <div class="field-item">Pet CBD Food</div>
      </div>
</div>
</a></h2>
    

  
</div>
</div>
      </div>
</div>

  </div>
</div>
</div>
      </div>
</div>

          <button class="close-button" aria-label="Close menu" type="button">
        <span aria-hidden="true" class="close-icon">&times;</span> <span class="close-text">Close</span>
      </button>
      </div>

          </div>
                      </li>
                <li class="menu-link-item-collections-all menu-item">
        <a href="../collections/all.htm" title="Show All" data-drupal-link-system-path="collections/all">All</a>
                      </li>
        </ul>
  


          </div>
                <div class="header-nav-commerce float-right">
                                              
              <ul class="menu">
              <li class="menu-link-item-">
        <a href="../www_diamondcbd_default_2.html" title="Search" data-drupal-link-system-path="&lt;front&gt;">Search</a>
              </li>
          <li class="menu-link-item-user-login">
        <a href="login.htm" title="User login page" data-drupal-link-system-path="user/login">Login</a>
              </li>
          <li class="menu-link-item-cart">
        <a href="../cart.htm" title="Shopping cart" data-drupal-link-system-path="cart">My Cart</a>
              </li>
        </ul>
  


                  </div>
      </div>
    </div>
  </div>

      <div class="header-promo">
      <div class="field-wrapper field field-block-content--field-block-promo field-name-field-block-promo field-type-text-long field-label-hidden">
    <div class="field-items">
          <div class="field-item"><p><a href="../collections/bundles.htm">Click Here</a> to see CBD bundles with up to 45% OFF.</p>
</div>
      </div>
</div>

    </div>
  

  </section>
<section id="block-diamondcbd-searchpopupblock" class="settings-tray-editable block-diamondcbd-searchpopupblock" data-drupal-settingstray="editable">
  
  
    

  
          <section class="search-popup-block animate-slide-top">
    
    
        

    
                    <div class="search-container">
                <button class="close-button" aria-label="Close menu" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="search-inner">
                    <form class="search-form" action="../collections/all.htm" method="get" id="search-form">
                        <div class="form-container">
                            <button type="button" class="button-clear" hidden><span aria-hidden="true">&times;</span></button>
                            <input id="search-autocomplete" type="search" name="search" placeholder="What you are searching for?">
                            <button type="submit" class="button-search"><i class="fas fa-search"></i></button>
                        </div>
                    </form>

                    <div class="search-view-all upper">
                        <a href="../collections/all.htm">View All <span class="search-items-quantity">930</span> Items</a>
                    </div>
                </div>
            </div>

        
        
    </section>

    
    
  </section>



  <section id="block-diamondcbd-mobile-menu" class="settings-tray-editable block-diamondcbd-mobile-menu cpl-mobile-menu cpl-menu-type-1" data-drupal-settingstray="editable">





  <div class="mobile-menu-container">
    <div class="mobile-menu">
      <div class="menu-header">
        <h3 class="menu-title">Welcome!</h3>
      </div>

      <div class="menu-combined-wrap">
        <ul class="drilldown vertical menu menu-combined" data-drilldown></ul>
      </div>

              
              <ul class="menu">
              <li class="menu-link-item-cart">
        <a href="../cart.htm" title="Cart" data-drupal-link-system-path="cart">Cart</a>
              </li>
          <li class="menu-link-item-user-login">
        <a href="login.htm" title="Login" data-drupal-link-system-path="user/login">Login</a>
              </li>
          <li class="menu-link-item-user-register">
        <a href="register.htm" title="Register" data-drupal-link-system-path="user/register" class="is-active">Register</a>
              </li>
        </ul>
  


              
              <ul class="menu">
              <li class="menu-link-item-collections-all">
        <a href="../collections/all.htm" title="Shop All" data-drupal-link-system-path="collections/all">Shop All</a>
              </li>
          <li class="menu-link-item-">
        <a href="../www_diamondcbd_default_2.html" data-drupal-link-system-path="&lt;front&gt;">Brands</a>
                                <ul>
              <li class="menu-link-item-collections-biotech-cream">
        <a href="../collections/biotech_cream.htm" data-drupal-link-system-path="collections/biotech_cream">Biotech Creams</a>
              </li>
          <li class="menu-link-item-collections-blue-cbd-flavored-crystals-isolate">
        <a href="../collections/blue_cbd_flavored_crystals_isolate.htm" data-drupal-link-system-path="collections/blue_cbd_flavored_crystals_isolate">Blue CBD Flavored Crystals</a>
              </li>
          <li class="menu-link-item-collections-blue-cbd-unflavored-crystals-isolate">
        <a href="../collections/blue_cbd_unflavored_crystals_isolate.htm" data-drupal-link-system-path="collections/blue_cbd_unflavored_crystals_isolate">Blue CBD Unflavored Crystals Isolate</a>
              </li>
          <li class="menu-link-item-collections-cbd-cake-pops">
        <a href="../collections/cbd_cake_pops.htm" data-drupal-link-system-path="collections/cbd_cake_pops">CBD Cake Pops</a>
              </li>
          <li class="menu-link-item-collections-cbd-creams">
        <a href="../collections/cbd-creams.htm" title="CBD Cream" data-drupal-link-system-path="collections/cbd-creams">CBD Cream</a>
              </li>
          <li class="menu-link-item-collections-cbd-crystal-dabs">
        <a href="../collections/cbd-crystals-dabs_2.htm" title="CBD Crystal Dabs" data-drupal-link-system-path="collections/cbd_crystal_dabs">CBD Crystal Dabs</a>
              </li>
          <li class="menu-link-item-collections-cbd-double-shots">
        <a href="../collections/cbd_double_shots.htm" title="CBD Double Shots" data-drupal-link-system-path="collections/cbd_double_shots">CBD Double Shots</a>
              </li>
          <li class="menu-link-item-collections-cbd-extreme-drops">
        <a href="../collections/cbd_extreme_drops.htm" title="CBD Extreme Drops" data-drupal-link-system-path="collections/cbd_extreme_drops">CBD Extreme Drops</a>
              </li>
          <li class="menu-link-item-collections-cbd-fatty">
        <a href="../collections/cbd_fatty.htm" title="CBD Fatty" data-drupal-link-system-path="collections/cbd_fatty">CBD Fatty</a>
              </li>
          <li class="menu-link-item-collections-cbd-for-pets">
        <a href="../collections/cbd_for_pets.htm" title="CBD for Pets" data-drupal-link-system-path="collections/cbd_for_pets">CBD for Pets</a>
              </li>
          <li class="menu-link-item-collections-cbd-re-leaf">
        <a href="../collections/cbd_re_leaf.htm" title="CBD Re-Leaf" data-drupal-link-system-path="collections/cbd_re_leaf">CBD Re-Leaf</a>
              </li>
          <li class="menu-link-item-collections-cbd-shots">
        <a href="../collections/cbd_shots.htm" title="CBD Shots" data-drupal-link-system-path="collections/cbd_shots">CBD Shots</a>
              </li>
          <li class="menu-link-item-collections-chill-gummies">
        <a href="../collections/chill_gummies.htm" title="Chill Gummies" data-drupal-link-system-path="collections/chill_gummies">Chill Gummies</a>
              </li>
          <li class="menu-link-item-collections-chill-plus-gummies">
        <a href="../collections/chill_plus_gummies.htm" title="Chill Plus Gummies" data-drupal-link-system-path="collections/chill_plus_gummies">Chill Plus Gummies</a>
              </li>
          <li class="menu-link-item-collections-chong-s-choice-cbd">
        <a href="../collections/chong_s_choice_cbd.htm" title="Chong&#039;s Choice CBD" data-drupal-link-system-path="collections/chong_s_choice_cbd">Chong&#039;s Choice CBD</a>
              </li>
          <li class="menu-link-item-collections-diamond-cbd-gummies">
        <a href="../collections/diamond_cbd_gummies.htm" title="Diamond CBD Gummies" data-drupal-link-system-path="collections/diamond_cbd_gummies">Diamond CBD Gummies</a>
              </li>
          <li class="menu-link-item-collections-diamond-cbd-honey">
        <a href="../collections/diamond_cbd_honey.htm" title="CBD Honey Sticks	" data-drupal-link-system-path="collections/diamond_cbd_honey">Diamond CBD Honey</a>
              </li>
          <li class="menu-link-item-collections-diamond-cbd-flavored-hemp-oil">
        <a href="../collections/diamond_cbd_flavored_hemp_oil.htm" title="Diamond CBD Flavored Hemp Oil" data-drupal-link-system-path="collections/diamond_cbd_flavored_hemp_oil">Diamond CBD Flavored Hemp Oil</a>
              </li>
          <li class="menu-link-item-collections-diamond-cbd-flavored-terpenes-oils">
        <a href="../collections/diamond_cbd_flavored_terpenes_oils.htm" title="Diamond CBD Flavored Terpenes Oils" data-drupal-link-system-path="collections/diamond_cbd_flavored_terpenes_oils">Diamond CBD Flavored Terpenes Oils</a>
              </li>
          <li class="menu-link-item-collections-diamond-cbd-unflavored-hemp-oil">
        <a href="../collections/diamond_cbd_unflavored_hemp_oil.htm" title="Diamond CBD Unflavored Hemp Oil" data-drupal-link-system-path="collections/diamond_cbd_unflavored_hemp_oil">Diamond CBD Unflavored Hemp Oil</a>
              </li>
          <li class="menu-link-item-collections-diamond-cbd-vape-additive">
        <a href="../collections/diamond_cbd_vape_additive.htm" title="Diamond CBD Vape Additive" data-drupal-link-system-path="collections/diamond_cbd_vape_additive">Diamond CBD Vape Additive</a>
              </li>
          <li class="menu-link-item-collections-lean-shots">
        <a href="../collections/lean_shots.htm" title="Lean Shots" data-drupal-link-system-path="collections/lean_shots">Lean Shots</a>
              </li>
          <li class="menu-link-item-collections-liquid-gold">
        <a href="../collections/liquid_gold.htm" title="Liquid Gold" data-drupal-link-system-path="collections/liquid_gold">Liquid Gold</a>
              </li>
          <li class="menu-link-item-collections-medipets">
        <a href="../collections/medipets.htm" title="Medipets" data-drupal-link-system-path="collections/medipets">MediPets CBD</a>
              </li>
          <li class="menu-link-item-collections-meds-biotech">
        <a href="../collections/meds_biotech.htm" title="Meds Biotech" data-drupal-link-system-path="collections/meds_biotech">Meds Biotech</a>
              </li>
          <li class="menu-link-item-collections-pain-master">
        <a href="../collections/pain_master.htm" title="Pain Master" data-drupal-link-system-path="collections/pain_master">LT Pain Master</a>
              </li>
          <li class="menu-link-item-collections-relax-gummies">
        <a href="../collections/relax_gummies.htm" title="Relax Gummies" data-drupal-link-system-path="collections/relax_gummies">Relax Gummies</a>
              </li>
          <li class="menu-link-item-collections-relax-extreme-cbd">
        <a href="../collections/relax_extreme_cbd.htm" title="Relax Extreme CBD" data-drupal-link-system-path="collections/relax_extreme_cbd">Relax Extreme CBD</a>
              </li>
          <li class="menu-link-item-collections-relax-vape-liquid">
        <a href="../collections/relax_vape_liquid.htm" title="Relax Vape Liquid" data-drupal-link-system-path="collections/relax_vape_liquid">Relax Vape Liquid</a>
              </li>
          <li class="menu-link-item-collections-yum-yum-gummies">
        <a href="https://www.diamondcbd.com/collections/yum_yum_gummies" data-drupal-link-system-path="collections/yum_yum_gummies">Yum Yum Gummies</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-link-item-">
        <a href="../www_diamondcbd_default_2.html" title="Oils" data-drupal-link-system-path="&lt;front&gt;">Oils</a>
                                <ul>
              <li class="menu-link-item-collections-cbd-oils">
        <a href="../collections/cbd-oils_5.htm" title="All Oils" data-drupal-link-system-path="collections/cbd-oils">All Oils</a>
              </li>
          <li>
        <a href="https://www.diamondcbd.com/cbd-oils/cbd-oil-vg">Regular CBD Oils</a>
              </li>
          <li class="menu-link-item-collections-isolates">
        <a href="../collections/isolates.htm" title="Isolates" data-drupal-link-system-path="collections/isolates">CBD Crystals Isolate Oils</a>
              </li>
          <li class="menu-link-item-collections-cbd-oils-cbd-oil-honey">
        <a href="../collections/cbd-oils/cbd-oil-honey.htm" data-drupal-link-system-path="collections/cbd-oils/cbd-oil-honey">CBD Oil with Honey</a>
              </li>
          <li class="menu-link-item-collections-cbd-oils-cbd-mct-oil">
        <a href="../collections/cbd-oils/cbd-mct-oil.htm" data-drupal-link-system-path="collections/cbd-oils/cbd-mct-oil">CBD Oil with MCT</a>
              </li>
          <li>
        <a href="https://www.diamondcbd.com/cbd-oils/cbd-hemp-seed-oil">CBD with Hemp Seed Oil</a>
              </li>
          <li class="menu-link-item-collections-oral-drops">
        <a href="../collections/oral_drops.htm" title="Oral Drops" data-drupal-link-system-path="collections/oral_drops">Oral Drops</a>
              </li>
          <li class="menu-link-item-collections-cbd-terpenes">
        <a href="../collections/cbd_terpenes.htm" title="CBD Terpenes" data-drupal-link-system-path="collections/cbd_terpenes">CBD Terpenes</a>
              </li>
          <li class="menu-link-item-collections-daily-boost">
        <a href="../collections/daily-boost_4.htm" data-drupal-link-system-path="collections/daily-boost">Daily Boost CBD Oil</a>
              </li>
          <li class="menu-link-item-collections-2500mg-strength-287">
        <a href="../collections/2500mg/strength/287.htm" data-drupal-link-system-path="collections/2500mg/strength/287">High Strength Oils</a>
              </li>
          <li class="menu-link-item-collections-full-spectrum">
        <a href="https://www.diamondcbd.com/collections/full-spectrum" title="Full Spectrum" data-drupal-link-system-path="collections/full-spectrum">Full Spectrum</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-link-item-collections-cbd-edibles">
        <a href="../collections/cbd-edibles.htm" data-drupal-link-system-path="collections/cbd-edibles">Edibles</a>
                                <ul>
              <li class="menu-link-item-collections-cbd-edibles">
        <a href="../collections/cbd-edibles.htm" data-drupal-link-system-path="collections/cbd-edibles">All Edibles</a>
              </li>
          <li class="menu-link-item-collections-gummies">
        <a href="../collections/gummies.htm" title="Gummies" data-drupal-link-system-path="collections/gummies">CBD Gummies</a>
              </li>
          <li class="menu-link-item-collections-honey">
        <a href="../collections/honey.htm" title="Honey" data-drupal-link-system-path="collections/honey">CBD Honey</a>
              </li>
          <li class="menu-link-item-collections-chocolates">
        <a href="../collections/cbd-chocolates_2.htm" title="Chocolate" data-drupal-link-system-path="collections/chocolates">CBD Chocolate</a>
              </li>
          <li class="menu-link-item-collections-cbd-cake-pops">
        <a href="../collections/cbd-cake-pops.htm" data-drupal-link-system-path="collections/cbd-cake-pops">CBD Cake Pops</a>
              </li>
          <li class="menu-link-item-collections-cbd-popcorn">
        <a href="../collections/cbd-popcorn.htm" data-drupal-link-system-path="collections/cbd-popcorn">CBD Popcorn</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-link-item-">
        <a href="../www_diamondcbd_default_2.html" title="Vapes" data-drupal-link-system-path="&lt;front&gt;">Vapes</a>
                                <ul>
              <li class="menu-link-item-collections-cbd-vapes">
        <a href="../collections/cbd-vapes.htm" title="All Vapes" data-drupal-link-system-path="collections/cbd-vapes">All Vapes</a>
              </li>
          <li class="menu-link-item-collections-cbd-pods">
        <a href="../collections/cbd-pods.htm" data-drupal-link-system-path="collections/cbd-pods">CBD Vape Pods</a>
              </li>
          <li class="menu-link-item-collections-vape-additive">
        <a href="../collections/vape_additive.htm" title="Vape Additive" data-drupal-link-system-path="collections/vape_additive">Vape Additive</a>
              </li>
          <li class="menu-link-item-collections-vape-refills-liquids">
        <a href="../collections/vape_refills_liquids.htm" title="Vape Refills/Liquids" data-drupal-link-system-path="collections/vape_refills_liquids">Vape Refills/Liquids</a>
              </li>
          <li class="menu-link-item-collections-vaping-pens-tanks">
        <a href="../collections/vaping_pens_tanks.htm" title="Vaping Pens &amp; Tanks" data-drupal-link-system-path="collections/vaping_pens_tanks">Vaping Pens &amp; Tanks</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-link-item-collections-cbd-drinks">
        <a href="../collections/cbd-drinks.htm" data-drupal-link-system-path="collections/cbd-drinks">Drinks</a>
                                <ul>
              <li>
        <a href="../collections/cbd-drinks.htm">All Drinks</a>
              </li>
          <li class="menu-link-item-collections-chill-cbd-coffee">
        <a href="../collections/chill-cbd-coffee.htm" data-drupal-link-system-path="collections/chill-cbd-coffee">CBD Chill Coffee &amp; Tea</a>
              </li>
          <li class="menu-link-item-collections-cbd-shots">
        <a href="../collections/cbd-shots.htm" data-drupal-link-system-path="collections/cbd-shots">CBD Shots</a>
              </li>
          <li>
        <a href="https://www.diamondcbd.com/collection/double-shots">CBD Double Shots</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-link-item-">
        <a href="../www_diamondcbd_default_2.html" data-drupal-link-system-path="&lt;front&gt;">Health</a>
                                <ul>
              <li class="menu-link-item-collections-hemp-bath-body">
        <a href="../collections/hemp-bath-body.htm" data-drupal-link-system-path="collections/hemp-bath-body">CBD Bath &amp; Body</a>
              </li>
          <li class="menu-link-item-collections-cbd-creams">
        <a href="../collections/cbd-creams.htm" title="Creams" data-drupal-link-system-path="collections/cbd-creams">CBD Creams</a>
              </li>
          <li class="menu-link-item-collections-cbd-bath-bomb">
        <a href="../collections/cbd_bath_bomb.htm" data-drupal-link-system-path="collections/cbd_bath_bomb">CBD Bath Bombs</a>
              </li>
          <li class="menu-link-item-collections-cbd-capsules">
        <a href="../collections/cbd-capsules.htm" data-drupal-link-system-path="collections/cbd-capsules">CBD Capsules</a>
              </li>
          <li class="menu-link-item-collections-hemp-skin-care">
        <a href="../collections/hemp-skin-care.htm" data-drupal-link-system-path="collections/hemp-skin-care">CBD Skin Care</a>
              </li>
          <li class="menu-link-item-collections-hemp-moisturizers">
        <a href="../collections/hemp-moisturizers.htm" data-drupal-link-system-path="collections/hemp-moisturizers">CBD Moisturizers</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-link-item-collections-pets">
        <a href="https://www.diamondcbd.com/collections/pets" title="Pets" data-drupal-link-system-path="collections/pets">Pets</a>
                                <ul>
              <li class="menu-link-item-collections-cbd-for-pets">
        <a href="../collections/cbd-for-pets_2.htm" data-drupal-link-system-path="collections/cbd-for-pets">All Pets</a>
              </li>
          <li class="menu-link-item-collections-pet-oils">
        <a href="../collections/pet-cbd-oils.htm" data-drupal-link-system-path="collections/pet_oils">CBD Pet Oils</a>
              </li>
          <li class="menu-link-item-collections-pet-treats">
        <a href="../collections/pet-treats.htm" data-drupal-link-system-path="collections/pet-treats">CBD Pet Treats</a>
              </li>
          <li class="menu-link-item-product-862">
        <a href="../products/medipets-cbd-pet-spray-100mg.htm" data-drupal-link-system-path="product/862">CBD Pet Spray</a>
              </li>
          <li class="menu-link-item-collections-medipets">
        <a href="../collections/medipets.htm" data-drupal-link-system-path="collections/medipets">Medipets CBD</a>
              </li>
        </ul>
  
              </li>
          <li class="menu-link-item-collections-cbd-crystal-dabs">
        <a href="../collections/cbd-crystals-dabs_2.htm" data-drupal-link-system-path="collections/cbd_crystal_dabs">Dabs</a>
              </li>
          <li class="menu-link-item-collections-blowout">
        <a href="../collections/blowout.htm" data-drupal-link-system-path="collections/blowout">Blowout Sale</a>
              </li>
          <li class="menu-link-item-collections-bundles">
        <a href="../collections/bundles.htm" data-drupal-link-system-path="collections/bundles">Bundle Packages</a>
              </li>
        </ul>
  


              
              <ul class="menu">
              <li class="menu-link-item-node-120">
        <a href="../diamondcbd-about-cbd.htm" title="What is CBD?" data-drupal-link-system-path="node/120">What is CBD?</a>
              </li>
          <li class="menu-link-item-faqs">
        <a href="../faqs.htm" title="Frequently asked questions" data-drupal-link-system-path="faqs">FAQ</a>
              </li>
          <li class="menu-link-item-node-121">
        <a href="../diamondcbd-about.htm" title="About" data-drupal-link-system-path="node/121">About</a>
              </li>
          <li class="menu-link-item-node-119">
        <a href="../diamondcbd-blog.htm" title="Blog" data-drupal-link-system-path="node/119">Blog</a>
              </li>
          <li class="menu-link-item-video">
        <a href="../video.htm" data-drupal-link-system-path="video">Video</a>
              </li>
          <li class="menu-link-item-node-123">
        <a href="../diamondcbd-corporate.htm" title="Corporate" data-drupal-link-system-path="node/123">Corporate</a>
              </li>
          <li class="menu-link-item-node-134">
        <a href="../diamondcbd-contact.htm" title="Contact" data-drupal-link-system-path="node/134">Contact</a>
              </li>
          <li class="menu-link-item-node-133">
        <a href="../dcbd/wholesale.htm" title="Wholesale page" data-drupal-link-system-path="node/133">Wholesale</a>
              </li>
          <li class="menu-link-item-node-135">
        <a href="../affiliate-program.htm" title="Affiliate" data-drupal-link-system-path="node/135">Affiliate</a>
              </li>
          <li>
        <a href="../wholesalecatalog_diamondcbd_default.html" title="Wholesale Catalog">Wholesale Catalog</a>
              </li>
          <li class="menu-link-item-node-391">
        <a href="../cbd-lab-reports.htm" data-drupal-link-system-path="node/391">CBD Lab Reports</a>
              </li>
          <li class="menu-link-item-node-512">
        <a href="../what-is-cbd.htm" data-drupal-link-system-path="node/512">What is CBD Guide</a>
              </li>
        </ul>
  


              
              <ul class="menu">
              <li>
        <a href="tel:(305) 615-1194" title="Call to (305) 615-1194">(305) 615-1194</a>
              </li>
          <li>
        <a href="mailto:support@diamondcbd.com" title="Email to: support@diamondcbd.com">support@diamondcbd.com</a>
              </li>
        </ul>
  


          </div>

    <div class="mobile-view">
      <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
      </button>

      <div class="row">
        <div class="views-element-container"><div class="mobile-menu-slideshow js-view-dom-id-02829ebbd7e67d38eed44be7342b212bcb32d5b8e81c1cabbb3b31d7b11cbc13">
  
  
  

  
  
  

      <div class="views-row">

<article  role="article" about="/node/497" class="node--mobile-menu-teaser-1" id="node-497">
  <div class="view-mode-mobile_menu_teaser_1">

          <a href="../products/box-month.htm">
    
      <div class="img-box-row"><div class="field-wrapper field field-node--field-parc-image field-name-field-parc-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <img src="../sites/default/files/styles/mobile_menu_teaser_1/public/2019-04/9d192dc4.jpg" width="400" height="500" alt="" typeof="foaf:Image" />


</div>
      </div>
</div>
</h4>
      </div>

      <div class="text-box-row">
        <h4></h4></div>
          </a>
    
  </div>
</article>
</div>
    <div class="views-row">

<article  role="article" about="/node/679" class="node--mobile-menu-teaser-1" id="node-679">
  <div class="view-mode-mobile_menu_teaser_1">

          <a href="../collections/honey.htm">
    
      <div class="img-box-row"><div class="field-wrapper field field-node--field-parc-image field-name-field-parc-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <img src="../sites/default/files/styles/mobile_menu_teaser_1/public/2019-03/7635ff81.jpg" width="400" height="500" alt="" typeof="foaf:Image" />


</div>
      </div>
</div>
</h4>
      </div>

      <div class="text-box-row">
        <h4></h4></div>
          </a>
    
  </div>
</article>
</div>
    <div class="views-row">

<article  role="article" about="/node/697" class="node--mobile-menu-teaser-1" id="node-697">
  <div class="view-mode-mobile_menu_teaser_1">

          <a href="../products/oils-box-month.htm">
    
      <div class="img-box-row"><div class="field-wrapper field field-node--field-parc-image field-name-field-parc-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <img src="../sites/default/files/styles/mobile_menu_teaser_1/public/2019-04/5f348131.jpg" width="400" height="500" alt="" typeof="foaf:Image" />


</div>
      </div>
</div>
</h4>
      </div>

      <div class="text-box-row">
        <h4></h4></div>
          </a>
    
  </div>
</article>
</div>
    <div class="views-row">

<article  role="article" about="/node/698" class="node--mobile-menu-teaser-1" id="node-698">
  <div class="view-mode-mobile_menu_teaser_1">

          <a href="../collections/cbd-pods.htm">
    
      <div class="img-box-row"><div class="field-wrapper field field-node--field-parc-image field-name-field-parc-image field-type-image field-label-hidden">
    <div class="field-items">
          <div class="field-item">
  <img src="../sites/default/files/styles/mobile_menu_teaser_1/public/2019-04/aa226512.jpg" width="400" height="500" alt="" typeof="foaf:Image" />


</div>
      </div>
</div>
</h4>
      </div>

      <div class="text-box-row">
        <h4></h4></div>
          </a>
    
  </div>
</article>
</div>

  
  

  
  

  
  
</div>
</div>

      </div>
    </div>
  </div>


  </section>

  </div>

          </div>
              </header>

      <div class="row">
        
        
              </div>

      
      
      
              <div class=" page-container clearfix">
                    <div class="region-highlighted">
					@if($status = Session::get('status'))
                            @if(is_array($status))
                                @foreach($status as $k => $v)
                                    @foreach($v as $e)
										<div class="zurb-foundation-callout callout alert" data-closable="fade-out">
										<h2 class="visually-hidden">Error message</h2>
														{{ $e }}
										<button class="close-button" aria-label="Dismiss alert" type="button" data-close=""><span aria-hidden="true">×</span></button>
										</div>
                                    @endforeach
                                @endforeach
                            @else
                                {{ $status }}
                            @endif
					@endif
					</div>   
					<div class="row collapse expanded user-page">
                  <section class="columns small-12 large-6 user-page-first">
            <div class="user-page-container form-centered">
                  <div>
    <section id="block-webgainstrackingcode" class="settings-tray-editable block-webgainstrackingcode" data-drupal-settingstray="editable">
  
  
    

  
          <div class="body field field-block-content--body field-name-body field-type-text-with-summary field-label-hidden">
    <div class="field-items">
          <div class="field-item"><!-- <Webgains Tracking Code NG> --><!--
<script>
  (function(w,e,b,g,a,i,n,s){w['ITCVROBJ']=a;w[a]=w[a]||function(){
     (w[a].q=w[a].q||[]).push(arguments)},w[a].l=1*new Date();i=e.createElement(b),
     n=e.getElementsByTagName(b)[0];i.async=1;i.src=g;n.parentNode.insertBefore(i,n)
  })(window,document,'script','https://analytics.webgains.io/cvr.min.js','ITCVRQ');
    ITCVRQ('set', 'trk.programId', wgProgramID);
    ITCVRQ('set', 'cvr', {
      value: wgOrderValue,
      currency: wgCurrency,
      language: wgLang,
      eventId: wgEventID,
      orderReference: wgOrderReference,
      comment: '',
      multiple: '',
      checksum: '',
      items: wgItems,
      customerId: '',
      voucherId: wgVoucherCode
  });
  ITCVRQ('conversion');
</script>
--><!-- </Webgains Tracking Code NG> --></div>
      </div>
</div>

    
    
  </section>
<section id="block-diamondcbd-page-title" class="block-diamondcbd-page-title">
  
  
    

  
          
  <h1 class="page-title">Create new account</h1>


    
    
  </section>
<section id="block-diamondcbd-local-tasks" class="settings-tray-editable block-diamondcbd-local-tasks" data-drupal-settingstray="editable">
  
  
    

  
          <h2 class="visually-hidden">Primary tabs</h2><div class="button-group"><a href="login.htm" class="button secondary">Log in</a><a href="register/wholesale_unapproved.htm" class="button secondary">Create new wholesale account</a><a href="register.htm" class="button active">Create new account<span class="visually-hidden">(active tab)</span></a><a href="password.htm" class="button secondary">Reset your password</a></div>
    
    
  </section>
<section id="block-viralloopsblock-diamondcbd" class="settings-tray-editable block-viralloopsblock-diamondcbd" data-drupal-settingstray="editable">
  
  
    

  
          <div class="dcom-viral-loops" style="height:0; width:0;" data-vl-widget="{&quot;campaign_id&quot;:&quot;xwTazLI5qCrmgRF4c-lFXE4kt54&quot;,&quot;timeout_delay&quot;:2}" data-vl-client-identify-user="false" data-vl-logout="true"></div>

    
    
  </section>
<section id="block-diamondcbd-content" class="block-diamondcbd-content">
  
  
    
<br/><br/><br/><br/><br/><br/><br/><hr>
  
          <form class="user-register-form user-form" data-user-info-from-browser data-drupal-selector="user-register-form" enctype="multipart/form-data" action="register.htm" method="post" id="user-register-form" accept-charset="UTF-8">
		   {{ csrf_field() }}
  <div data-drupal-selector="edit-account" id="edit-account" class="js-form-wrapper form-wrapper"><div class="js-form-item form-item js-form-type-email form-item-mail js-form-item-mail">
      <label for="edit-mail" class="form-required">E-mail</label>
	  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
       @endif
        <input data-drupal-selector="edit-mail" aria-describedby="edit-mail--description" type="email" id="edit-mail" name="email" value="" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

            <div id="edit-mail--description" class="description">
      A valid email address. All emails from the system will be sent to this address. The email address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by email.
    </div>
  </div>
<div id="edit-pass" class="js-form-item form-item js-form-type-password-confirm form-item-pass js-form-item-pass form-no-label">
        <div class="js-form-item form-item js-form-type-password form-item-pass-pass1 js-form-item-pass-pass1">
      <label for="edit-pass-pass1" class="form-required">Password</label>
	  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
       @endif
        <input class="password-field js-password-field form-text required" data-drupal-selector="edit-pass-pass1" type="password" id="edit-pass-pass1" name="password" size="25" maxlength="128" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-password form-item-pass-pass2 js-form-item-pass-pass2">
      <label for="edit-pass-pass2" class="form-required">Confirm password</label>
	  @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
       @endif
        <input class="password-confirm js-password-confirm form-text required" data-drupal-selector="edit-pass-pass2" type="password" id="edit-pass-pass2" name="password_confirmation" size="25" maxlength="128" required="required" aria-required="true" />

        </div>

            <div id="edit-pass--description" class="description">
      Provide a password for the new account in both fields.
    </div>
  </div>
</div>
<div class="field--type-string field--name-field-first-name field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-first-name-wrapper" id="edit-field-first-name-wrapper">      <div class="js-form-item form-item js-form-type-textfield form-item-field-first-name-0-value js-form-item-field-first-name-0-value">
      <label for="edit-field-first-name-0-value" class="form-required">First Name</label>                          @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
        <input class="js-text-full text-full form-text required" data-drupal-selector="edit-field-first-name-0-value" type="text" id="edit-field-first-name-0-value" name="first_name" value="" size="60" maxlength="80" placeholder="" required="required" aria-required="true" />

        </div>

  </div>
<div class="field--type-string field--name-field-last-name field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-last-name-wrapper" id="edit-field-last-name-wrapper">      <div class="js-form-item form-item js-form-type-textfield form-item-field-last-name-0-value js-form-item-field-last-name-0-value">
      <label for="edit-field-last-name-0-value" class="form-required">Last Name</label>                          @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
       @endif
        <input class="js-text-full text-full form-text required" data-drupal-selector="edit-field-last-name-0-value" type="text" id="edit-field-last-name-0-value" name="last_name" value="" size="60" maxlength="125" placeholder="" required="required" aria-required="true" />

        </div>

  </div>
<div class="field--type-string field--name-field-company-name field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-company-name-wrapper" id="edit-field-company-name-wrapper">      
  </div>
<div class="field--type-string field--name-field-ein-tax-number field--widget-string-textfield js-form-wrapper form-wrapper" data-drupal-selector="edit-field-ein-tax-number-wrapper" id="edit-field-ein-tax-number-wrapper">      
  </div>
<div class="field--type-file field--name-field-ein-file field--widget-file-generic js-form-wrapper form-wrapper" data-drupal-selector="edit-field-ein-file-wrapper" id="edit-field-ein-file-wrapper"></div>
<div class="field--type-telephone field--name-field-phone field--widget-telephone-default js-form-wrapper form-wrapper" data-drupal-selector="edit-field-phone-wrapper" id="edit-field-phone-wrapper">      
  </div>
<div class="field--type-address field--name-field-address field--widget-address-default js-form-wrapper form-wrapper" data-drupal-selector="edit-field-address-wrapper" id="edit-field-address-wrapper">      
  </div>
<div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions"><input class="success button radius button--primary js-form-submit form-submit" data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Create new account" />
</div>

</form>

    
    
  </section>

  </div>


          <div class="region-highlighted"></div>  <div class="user-page-links">
    <a href="login.htm">Return to Login</a>
  </div>
      </div>
    </section>

          <aside class="columns large-6 show-for-large user-page-second">
          <div class="views-element-container"><div class="user-page-slideshow js-view-dom-id-420008e0fd20860834ee9105d7ede3a0b005b1f934c39cc888567beb0e5fbe64">
  
  
  

  
  
  

      <div class="views-row">

<article  role="article" about="/node/666" class="node--user-page-slideshow-1 background-image" id="node-666" style="background-image: url(/sites/default/files/styles/max_1300x1300/public/2019-02/Banner-New-Account-2.jpg?itok=UQNb3hcu);">

  <div class="view-mode-user_page_slideshow_1">

    <div class="text-box-row">
      <h4></h4><div class="field-wrapper field field-node--field-parc-body field-name-field-parc-body field-type-text-long field-label-hidden">
    <div class="field-items">
          <div class="field-item"><p>First-Class Customer Service</p>
</div>
      </div>
</div>
</div>

  </div>

</article>
</div>
    <div class="views-row">

<article  role="article" about="/node/667" class="node--user-page-slideshow-1 background-image" id="node-667" style="background-image: url(/sites/default/files/styles/max_1300x1300/public/2019-02/Banner-New-Account-3.jpg?itok=1IElGvnD);">

  <div class="view-mode-user_page_slideshow_1">

    <div class="text-box-row">
      <h4></h4><div class="field-wrapper field field-node--field-parc-body field-name-field-parc-body field-type-text-long field-label-hidden">
    <div class="field-items">
          <div class="field-item"><p>First-Class National Product</p>
</div>
      </div>
</div>
</div>

  </div>

</article>
</div>
    <div class="views-row">

<article  role="article" about="/node/230" class="node--user-page-slideshow-1 background-image" id="node-230" style="background-image: url(/sites/default/files/styles/max_1300x1300/public/2019-02/Banner-New-Account-1.jpg?itok=r2EEB0Nk);">

  <div class="view-mode-user_page_slideshow_1">

    <div class="text-box-row">
      <h4></h4><div class="field-wrapper field field-node--field-parc-body field-name-field-parc-body field-type-text-long field-label-hidden">
    <div class="field-items">
          <div class="field-item"><p>First-Class Delivery Service.</p>
</div>
      </div>
</div>
</div>

  </div>

</article>
</div>

  
  

  
  

  
  
</div>
</div>

      </aside>
    
  </div>
      </div>

      
    </div>
  </div>
</div>

  </div>

  
  
  <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"user\/register","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en"},"pluralDelimiter":"\u0003","ajaxPageState":{"libraries":"addtoany\/addtoany,ajax_loader\/ajax_loader.throbber,better_exposed_filters\/auto_submit,better_exposed_filters\/general,big_pipe\/big_pipe,cbd_base\/global,comment\/drupal.comment-by-viewer,commerce_cart\/cart_block,commerce_klaviyo\/drupal.commerce_klaviyo.analytics,commerce_vl\/viral_loops_scripts,core\/drupal.form,core\/html5shiv,cpl_base\/age_confirmation,cpl_base\/global,cpl_base\/slideshow,cpl_base_commerce\/global,cpl_base_commerce\/image_zoom,dcom_privy\/dcom_privy,dcom_zendesk\/dcom_zendesk,diamondcbd\/global,flag\/flag.link_ajax,google_analytics\/google_analytics,layout_discovery\/onecol,photoswipe\/photoswipe,photoswipe\/photoswipe.init,simple_megamenu\/base,system\/base,user\/drupal.user,video_embed_field\/responsive-video,views\/views.ajax,views\/views.module,zurb_foundation\/global","theme":"diamondcbd","theme_token":"tTmt6tXh4Dt6sYW-9gKpwjfs166TDRKP1q6JXXKJjUg"},"ajaxTrustedUrl":{"form_action_p_pvdeGsVG5zNF_XLGPTvYSKCf43t8qZYSwcfZl2uzM":true},"bigPipePlaceholderIds":[],"ajaxLoader":{"markup":"\u003Cdiv class=\u0022ajax-throbber sk-circle\u0022\u003E\n              \u003Cdiv class=\u0022sk-circle1 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle2 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle3 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle4 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle5 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle6 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle7 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle8 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle9 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle10 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle11 sk-child\u0022\u003E\u003C\/div\u003E\n              \u003Cdiv class=\u0022sk-circle12 sk-child\u0022\u003E\u003C\/div\u003E\n            \u003C\/div\u003E","hideAjaxMessage":true,"alwaysFullscreen":true,"throbberPosition":".dialog-off-canvas-main-canvas"},"commerce_klaviyo":{"public_key":"Hpm5Wb"},"google_analytics":{"trackOutbound":true,"trackMailto":true,"trackDownload":true,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"},"password":{"confirmTitle":"Passwords match:","confirmSuccess":"yes","confirmFailure":"no","showStrengthIndicator":false},"user":{"uid":0,"permissionsHash":"5ca58039d4f4a6bd3e4ba0451a53189145d03914cbc558bd83288d94cb6e814b"}}</script>
<script src="../sites/default/files/js/js_jMPb-FUbwOCstGW4VqWwL1rB3t6jpAnkGprpUdQXeuw.js"></script>
<script src="../static.addtoany.com/menu/page.js" async></script>
<script src="../sites/default/files/js/js_BvAgisOKkKRGSeZxiooP67vD9FMraEPG6cesYyVKZOI.js"></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"5fcbae9ee2","applicationID":"122518095","transactionName":"bwdVMEdTWkRTVUMNClZNdBFGRltaHUNEARcWEFIDXEFAUkA=","queueTime":0,"applicationTime":697,"atts":"Q0BWRg9JSUo=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
