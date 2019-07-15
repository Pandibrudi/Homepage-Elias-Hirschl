function toggle_content(content){
  if (content==="vita") {
    $("#terminetext").hide();
    $("#büchertext").hide();
    $("#videostext").hide();
    $("#vitatext").fadeToggle();
  }else if (content==="gigs") {
    $("#vitatext").hide();
    $("#videostext").hide();
    $("#büchertext").hide();
    $("#terminetext").fadeToggle();
  }else if (content==="videos") {
    $("#vitatext").hide();
    $("#terminetext").hide();
    $("#büchertext").hide();
    $("#videostext").fadeToggle();
  }else if (content==="books") {
    $("#vitatext").hide();
    $("#terminetext").hide();
    $("#videostext").hide();
    $("#büchertext").hide();
    $("#büchertext").fadeToggle();
  }else if (content==="contact") {

  }else if (content==="home") {
    clear();
  }
}

function clear(){
  $("#vitatext").hide();
  $("#terminetext").hide();
  $("#videostext").hide();
  $("#büchertext").hide();
}
