!function(){for(var t,n=function(){},e=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"],o=e.length,r=window.console=window.console||{};o--;)t=e[o],r[t]||(r[t]=n)}(),function(t,n,e){"undefined"!=typeof module&&module.exports?module.exports=e():t[n]=e()}(this,"verge",function(){function t(){return{width:d(),height:a()}}function n(t,n){var e={};return n=+n||0,e.width=(e.right=t.right+n)-(e.left=t.left-n),e.height=(e.bottom=t.bottom+n)-(e.top=t.top-n),e}function e(t,e){return t=t&&!t.nodeType?t[0]:t,t&&1===t.nodeType?n(t.getBoundingClientRect(),e):!1}function o(n){n=null==n?t():1===n.nodeType?e(n):n;var o=n.height,r=n.width;return o="function"==typeof o?o.call(n):o,r="function"==typeof r?r.call(n):r,r/o}var r={},i="undefined"!=typeof window&&window,u="undefined"!=typeof document&&document,c=u&&u.documentElement,f=i.matchMedia||i.msMatchMedia,l=f?function(t){return!!f.call(i,t).matches}:function(){return!1},d=r.viewportW=function(){var t=c.clientWidth,n=i.innerWidth;return n>t?n:t},a=r.viewportH=function(){var t=c.clientHeight,n=i.innerHeight;return n>t?n:t};return r.mq=l,r.matchMedia=f?function(){return f.apply(i,arguments)}:function(){return{}},r.viewport=t,r.scrollX=function(){return i.pageXOffset||c.scrollLeft},r.scrollY=function(){return i.pageYOffset||c.scrollTop},r.rectangle=e,r.aspect=o,r.inX=function(t,n){var o=e(t,n);return!!o&&o.right>=0&&o.left<=d()},r.inY=function(t,n){var o=e(t,n);return!!o&&o.bottom>=0&&o.top<=a()},r.inViewport=function(t,n){var o=e(t,n);return!!o&&o.bottom>=0&&o.right>=0&&o.top<=a()&&o.left<=d()},r});