window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){var a=arguments;a.callee=a.callee.caller;a=[].slice.call(a);typeof console.log==="object"?log.apply.call(console.log,console,a):console.log.apply(console,a)}};var b;try{console.log(),b=window.console}catch(f){b=window.console={}}
(function(a){function d(){}for(var e="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),c;c=e.pop();)a[c]=a[c]||d})(b);

