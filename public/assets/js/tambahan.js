function showPWD() {
      var x = document.getElementById("yourPassword");
      if (x.type === "password") { x.type = "text"; } 
      else { x.type = "password"; }
}
    