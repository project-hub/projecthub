"use strict";
console.log("linked");

// ------ mix it up check all -------
$(function(){
  $('#Container').mixItUp({
    load: {
      filter: 'all' 
    },
    controls: {
      toggleFilterButtons: true,
      toggleLogic: 'and'
    },
    callbacks: {
      onMixEnd: function(state){
        console.log(state.activeFilter)
      }
    }
  });
});
