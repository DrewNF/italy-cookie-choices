function allowCookie(){cookieChoices.removeCookieConsent();var a,b=document.getElementsByClassName("el"),c=new RegExp("<script.*?");for(a=0;a<b.length;a++){b[a].removeChild(b[a].childNodes[0]);var d=c.test(jsArr[a]);if(d){var e=/<script.*?src="(.*?)"/,f=e.test(jsArr[a]);f&&(f=e.exec(jsArr[a]),loadJS(f[1]));var g=/<script\b[^>]*>([\s\S]*?)<\/script>/gm,h=g.exec(jsArr[a]);h[1]&&appendJS(h[1])}else{var i=b[a].innerHTML;d=i.replace(/<cookie>/g,jsArr[a]),b[a].innerHTML=d}}}function loadJS(a){var b=document.createElement("script");b.type="application/javascript",b.src=a,document.body.appendChild(b)}function appendJS(a){var b=document.createElement("script");b.type="text/javascript";var c=a;try{b.appendChild(document.createTextNode(c)),document.body.appendChild(b)}catch(d){b.text=c,document.body.appendChild(b)}}!function(a){if(a.cookieChoices)return a.cookieChoices;var b=a.document,c=b.documentElement,d="textContent"in b.body,e=function(){function a(a,d,e,f){htmlM&&(c.className+=" icc");var k="color:"+btcB+";position:"+elPos+";width:100%;background-color:"+bgB+";margin:0; left:0; top:0;padding:4px;z-index:9999;text-align:left;",l=b.createElement("div"),m="max-width:980px;margin-right:auto;margin-left:auto;padding:15px;";l.id=t,l.style.cssText=k;var n=b.createElement("div");return n.style.cssText=m,n.appendChild(h(a)),n.appendChild(g()),e&&f&&n.appendChild(j(e,f)),n.appendChild(i(d)),l.appendChild(n),l}function e(a,c,d,e){var f="position:fixed;width:100%;height:100%;z-index:999;top:0;left:0;opacity:0.5;filter:alpha(opacity=50);background-color:#ccc;",g="z-index:9999;position:fixed;left:50%;top:50%;bottom:0%;",k="position:relative;left:-50%;margin-top:-25%;background-color:"+bgB+";padding:20px;box-shadow:4px 4px 25px #888;",l=b.createElement("div");l.id=t;var m=b.createElement("div");m.style.cssText=f;var n=b.createElement("div");n.style.cssText=k;var o=b.createElement("div");o.style.cssText=g;var p=i(c);return p.style.display="block",p.style.textAlign="right",p.style.marginTop="8px",n.appendChild(h(a)),d&&e&&n.appendChild(j(d,e)),n.appendChild(p),o.appendChild(n),l.appendChild(m),l.appendChild(o),l}function f(a,b){d?a.textContent=b:a.innerText=b}function g(){var a="clear:both;border-color:transparent;margin-top:5px;margin-bottom:5px",c=b.createElement("hr");return c.style.cssText=a,c}function h(a){var c=b.createElement("span");return f(c,a),c}function i(a){var c="color: "+btcB+";padding: 7px 12px;font-size: 18px;line-height: 18px;text-decoration: none;text-transform: uppercase;margin:0;margin-bottom:2px;letter-spacing: 0.125em;display: inline-block;font-weight: normal; text-align: center;  vertical-align: middle;  cursor: pointer;  border: 1px solid "+btcB+";background: rgba(255, 255, 255, 0.03);",d=b.createElement("a");return f(d,a),d.id=u,d.className=closeClass,d.href="#",d.style.cssText=c,d}function j(a,c){var d="color: "+btcB+";padding: 7px 12px;font-size: 18px;line-height: 18px;text-decoration: none;text-transform: uppercase;margin-right: 20px;margin-bottom:2px;letter-spacing: 0.125em;display: inline-block;font-weight: normal; text-align: center;  vertical-align: middle;  cursor: pointer;  border: 1px solid "+btcB+";background: rgba(255, 255, 255, 0.03);",e=b.createElement("a");return f(e,a),e.className=infoClass,e.href=c,tar&&(e.target="_blank"),e.style.cssText=d,e}function k(){return htmlM&&c.classList.remove("icc"),q(),o(),rel&&b.location.reload(),!1}function l(c,d,f,g,h){if(r()){o();var i=h?e(c,d,f,g):a(c,d,f,g),j=b.createDocumentFragment();j.appendChild(i),b.body.appendChild(j.cloneNode(!0)),b.getElementById(u).onclick=k,scroll&&(b.onscroll=k)}}function m(a,b,c,d){l(a,b,c,d,!1)}function n(a,b,c,d){l(a,b,c,d,!0)}function o(){var a=b.getElementById(t);null!==a&&a.parentNode.removeChild(a)}function p(){k()}function q(){var a=new Date;a.setFullYear(a.getFullYear()+1),b.cookie=s+"="+coVA+"; expires="+a.toGMTString()+";path=/"}function r(){return!b.cookie.match(new RegExp(s+"=([^;]+)"))}var s=coNA,t="cookieChoiceInfo",u="cookieChoiceDismiss",v={};return v.showCookieConsentBar=m,v.showCookieConsentDialog=n,v.removeCookieConsent=p,v}();return a.cookieChoices=e,e}(this);