!function(t){function e(){wppepvn_libs.addEvent("load",window,function(){a()})}function a(){if("undefined"!=typeof window.wppepvn_l_i_g_ps_s&&window.wppepvn_l_i_g_ps_s){var e=window.wppepvn_l_i_g_ps_s.k,a=wppepvn_libs.readCookie(e);if("y"!==a){wppepvn_libs.createCookie(e,"y");var i=function(){return screen.width===window.outerWidth};console.log([i()]),i()&&!function(e){!function(t){e.fn.attr=function(){if(0===arguments.length){if(0===this.length)return null;var a={};return e.each(this[0].attributes,function(){this.specified&&(a[this.name]=this.value)}),a}return t.apply(this,arguments)}}(e.fn.attr),function(t){t.fn.getStyleObject=function(){var t,e=this.get(0),a={};if(window.getComputedStyle){var i=function(t,e){return e.toUpperCase()};t=window.getComputedStyle(e,null);for(var n=0;n<t.length;n++){var s=t[n],p=s.replace(/\-([a-z])/g,i),c=t.getPropertyValue(s);a[p]=c}return a}if(e.currentStyle){t=e.currentStyle;for(var s in t)a[s]=t[s];return a}return this.css()}}(t);var a={atfc_id:[],atfc_class:[],atfc_tagName:[],atfc_selectors:[]};e("body *:visible").each(function(){if(e(this).is(":visible")&&e(this).offset().top<screen.height&&e(this).offset().left>=0&&e(this).offset().left<window.outerWidth){var t=!1,i={id:[],"class":[],tagName:[]},n=e(this).attr();n&&(n.id&&(n.id=n.id.replace(/[\s \t]+/g," "),n.id=n.id.trim(),n.id&&n.id.length>0&&(n.id=n.id.split(" "),n.id&&n.id.length>0&&(a.atfc_id=a.atfc_id.concat(n.id),i.id=i.id.concat(n.id)))),n["class"]&&(n["class"]=n["class"].replace(/[\s \t]+/g," "),n["class"]=n["class"].trim(),n["class"]&&n["class"].length>0&&(n["class"]=n["class"].split(" "),n["class"]&&n["class"].length>0&&(a.atfc_class=a.atfc_class.concat(n["class"]),i["class"]=i["class"].concat(n["class"]))))),t=e(this).prop("tagName"),t&&(t=t.toString(),t=t.toLowerCase(),i.tagName.push(t),a.atfc_tagName.push(t)),i.id=wppepvn_libs.array_unique(i.id),i["class"]=wppepvn_libs.array_unique(i["class"]),i.tagName=wppepvn_libs.array_unique(i.tagName),a.atfc_selectors.push(i)}}),a.atfc_id&&a.atfc_id.length>0&&(a.atfc_id=wppepvn_libs.array_unique(a.atfc_id)),a.atfc_class&&a.atfc_class.length>0&&(a.atfc_class=wppepvn_libs.array_unique(a.atfc_class)),a.atfc_tagName&&a.atfc_tagName.length>0&&(a.atfc_tagName=wppepvn_libs.array_unique(a.atfc_tagName)),console.log([a]);var i={learnImproveGooglePageSpeed:{targetElements:a,k:window.wppepvn_l_i_g_ps_s.k}};wppepvn_libs.ajaxRequest({url:wppepvn_admin_ajax_url+"?action=wppepvn_ajax_action&wpxtrrqid="+wppepvn_libs.getTime(),cache_status:!1,type:"POST",data:i,on_before_send:function(){},on_success:function(){}})}(t)}}}if("undefined"!=typeof window.wppepvn_optimize_speed_frontend_init_status&&window.wppepvn_optimize_speed_frontend_init_status)return!1;window.wppepvn_optimize_speed_frontend_init_status=!0;var i=0;i=setInterval(function(){"undefined"!=typeof t&&t&&"undefined"!=typeof wppepvn_libs&&wppepvn_libs&&(i&&clearInterval(i),i=0,setTimeout(function(){e()},500))},500)}(jQuery,jQuery);