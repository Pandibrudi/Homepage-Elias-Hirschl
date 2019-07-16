function toggle_content(content){

  let width = document.body.clientWidth;
    if (width < 800) {
      $("#mobile-toggle").fadeToggle();
    };

  if (content==="vita") {
    $("#terminetext").hide();
    $("#buechertext").hide();
    $("#videostext").hide();
    $("#contacttext").hide();
    $("#vitatext").fadeToggle();
  }else if (content==="gigs") {
    $("#vitatext").hide();
    $("#videostext").hide();
    $("#buechertext").hide();
    $("#contacttext").hide();
    $("#terminetext").fadeToggle();
  }else if (content==="videos") {
    $("#vitatext").hide();
    $("#terminetext").hide();
    $("#buechertext").hide();
    $("#contacttext").hide();
    $("#videostext").fadeToggle();
  }else if (content==="books") {
    $("#vitatext").hide();
    $("#terminetext").hide();
    $("#videostext").hide();
    $("#contacttext").hide();
    $("#buechertext").fadeToggle();
  }else if (content==="contact") {
    $("#vitatext").hide();
    $("#terminetext").hide();
    $("#videostext").hide();
    $("#buechertext").hide();
    $("#contacttext").fadeToggle();
  }else if (content==="home") {
    clear();
  }
}

function clear(){
  $("#contacttext").hide();
  $("#vitatext").hide();
  $("#terminetext").hide();
  $("#videostext").hide();
  $("#buechertext").hide();
}

function menu_x(){
  $("#mobile-toggle").fadeToggle();
  clear()
}
