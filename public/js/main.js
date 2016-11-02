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

// -------- hover on welcome page ------
// $('.phProjects').hover(
//   function() { $(this).fadeTo({"ease", '1'}); },
//   function() { $(this).fadeTo({"ease", '0.6'}); 
// });
