(function register(app){app.events.on('app:init',function init(){let Runner=function(actions,ops){this.actions=actions;this.ops=ops||{};this.queue=[];};Runner.create=function(actions,ops){return new Runner(actions,ops);};Runner.prototype.consume=function(){if(this.queue.length===0){return;}
let ops=this.ops;let nextAction=this.queue.shift();try{nextAction.run(ops,{nextAction:_.bind(function nextExecution(){this.consume();},this)});}catch(err){let failedActions=[nextAction.constructor.name];let nActions=failedActions.join(', ');const message=app.lang.get('LBL_ACTIONBUTTON_TASK_SEQUENCE_FAILED');const bTagS='<b>';const bTagE='</b> ';if(ops.stopOnError){failedActions=failedActions.concat(this.queue.map(function getActionType(action){return action.constructor.name;}));nActions=failedActions.join(', ');app.alert.show('actionbutton-action-stop',{level:'warning',messages:message+bTagS+nActions+bTagE,autoClose:true,autoCloseDelay:10000,});}else{app.alert.show('actionbutton-action-continue',{level:'warning',messages:message+bTagS+nActions+bTagE,autoClose:true,autoCloseDelay:10000,});this.consume();}}};Runner.prototype.execute=function(){_.each(this.actions,function pushAction(val,key){this.queue.push(val);},this);this.consume();};app.actions=app.actions||{};app.actions=_.extend(app.actions,{Runner:Runner});});})(SUGAR.App);