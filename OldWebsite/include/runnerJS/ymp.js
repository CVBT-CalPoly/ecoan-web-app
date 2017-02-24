
Runner.include_runnerJS_ymp_init=function(idx){if(!window.YUI){return;}
window.YUI_config={base:'http://yui.yahooapis.com/'}
Runner.YmpLoader.loadScript();}
Runner.YmpLoader=Runner.extend(Runner.emptyFn,{stack:null,stackContext:null,isLoaded:false,constructor:function(){this.stack=[];this.stackContext=[];},loadScript:function(){var self=this,js;js=document.createElement('script');js.setAttribute('type','text/javascript');var loaded_=function(){YAHOO.MediaPlayer.onAPIReady.subscribe(function(){self.loaded();})}
if(Runner.isIE){js.onreadystatechange=function(){if(js.readyState=='complete'||js.readyState=='loaded'){loaded_();}};}else{js.onload=loaded_;}
js.setAttribute('src',"http://webplayer.yahooapis.com/player.js");document.getElementsByTagName('HEAD')[0].appendChild(js);},onLoad:function(f,context){if(this.isLoaded){this.stack.push(f);this.stackContext.push(context);this.fireLoad();}},fireLoad:function(){for(var i=0;i<this.stack.length;i++){this.stack[i].apply(this.stackContext[i]?this.stackContext[i]:this);}
this.stack=[];this.stackContext=[];},loaded:function(){Runner.YmpLoader.isLoaded=true;YAHOO.mediaplayer.Parser.prototype.checkForLocalHost=function(url){return false;};}});Runner.YmpLoader=new Runner.YmpLoader();