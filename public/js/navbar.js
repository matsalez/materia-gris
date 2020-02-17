window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120 && screen.width > 768 ) {
    document.getElementById("navbar").style.padding = "0px 10px";
    document.getElementById("navbar").style.background = "#f1f1f1";
    document.getElementById("navbar").style.transition = "1s";
    document.getElementById("logo").style.width = "80%";

  } else {
    document.getElementById("navbar").style.padding = "10px 10px";
    document.getElementById("navbar").style.background = "#f1f1f1";
    document.getElementById("logo").style.width = "100%";
  }
}
