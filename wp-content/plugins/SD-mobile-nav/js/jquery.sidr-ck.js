!function(e){e.extend(e.easing,{def:"easeOutQuad",easeOutCubic:function(e,t,i,o,n){return o*((t=t/n-1)*t*t+1)+i}});var t=!1,i=!1,o={isUrl:function(e){var t=new RegExp("^(https?:\\/\\/)?((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|((\\d{1,3}\\.){3}\\d{1,3}))(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*(\\?[;&a-z\\d%_.~+=-]*)?(\\#[-a-z\\d_]*)?$","i");return t.test(e)?!0:!1},loadContent:function(e,t){e.html(t)},addPrefix:function(e){var t=e.attr("id"),i=e.attr("class");"string"==typeof t&&""!==t&&e.attr("id",t.replace(/([A-Za-z0-9_.\-]+)/g,"sidr-id-$1")),"string"==typeof i&&""!==i&&"sidr-inner"!==i&&e.attr("class",i.replace(/([A-Za-z0-9_.\-]+)/g,"sidr-class-$1")),e.removeAttr("style")},execute:function(o,r,s){"function"==typeof r?(s=r,r="sidr"):r||(r="sidr");var a=e("#"+r),d=e(a.data("body")),l=e("html"),c=a.outerWidth(!0),u=a.data("speed"),f=a.data("side"),p,y,v;if("open"===o||"toogle"===o&&!a.is(":visible")){if(a.is(":visible")||t)return;if(i!==!1)return void n.close(i,function(){n.open(r)});t=!0,"left"===f?(p={left:c+"px"},y={left:"0px"}):(p={right:c+"px"},y={right:"0px"}),v=l.scrollTop(),l.css("overflow-x","hidden").scrollTop(v),d.css({width:d.width(),position:"absolute"}).animate(p,u,"easeOutCubic"),a.css("display","block").animate(y,u,"easeOutCubic",function(){t=!1,i=r,"function"==typeof s&&s(r)})}else{if(!a.is(":visible")||t)return;t=!0,"left"===f?(p={left:0},y={left:"-"+c+"px"}):(p={right:0},y={right:"-"+c+"px"}),v=l.scrollTop(),l.removeAttr("style").scrollTop(v),d.animate(p,u,"easeOutCubic"),a.animate(y,u,"easeOutCubic",function(){a.removeAttr("style"),d.removeAttr("style"),e("html").removeAttr("style"),t=!1,i=!1,"function"==typeof s&&s(r)})}}},n={open:function(e,t){o.execute("open",e,t)},close:function(e,t){o.execute("close",e,t)},toogle:function(e,t){o.execute("toogle",e,t)}};e.sidr=function(t){return n[t]?n[t].apply(this,Array.prototype.slice.call(arguments,1)):"function"!=typeof t&&"string"!=typeof t&&t?void e.error("Method "+t+" does not exist on jQuery.sidr"):n.toogle.apply(this,arguments)},e.fn.sidr=function(t){var i=e.extend({name:"sidr",speed:200,side:"left",source:null,renaming:!0,body:"body"},t),r=i.name,s=e("#"+r);if(0===s.length&&(s=e("<div />").attr("id",r).appendTo(e("body"))),s.addClass("sidr").addClass(i.side).data({speed:i.speed,side:i.side,body:i.body}),"function"==typeof i.source){var a=i.source(r);o.loadContent(s,a)}else if("string"==typeof i.source&&o.isUrl(i.source))e.get(i.source,function(e){o.loadContent(s,e)});else if("string"==typeof i.source){var d="",l=i.source.split(",");if(e.each(l,function(t,i){d+='<div class="sidr-inner">'+e(i).html()+"</div>"}),i.renaming){var c=e("<div />").html(d);c.find("*").each(function(t,i){var n=e(i);o.addPrefix(n)}),d=c.html()}o.loadContent(s,d)}else null!==i.source&&e.error("Invalid Sidr Source");return this.each(function(){var t=e(this),i=t.data("sidr");i||(t.data("sidr",r),t.click(function(e){e.preventDefault(),n.toogle(r)}))})}}(jQuery);