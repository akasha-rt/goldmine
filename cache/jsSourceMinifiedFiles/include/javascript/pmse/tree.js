var setSelectedNode=function(shape){var id="#"+$('a[uid ="'+shape.getID()+'"]').attr("desc");$(".treechild").attr("status","unmarked");$(".treechild").css("background","#fff");$(id).css("background","#CEE3F6");$(id).attr("status","marked");};