// mapToggle.js
function divVisibility(divId) {
    var divs = document.querySelectorAll('.map > .container-fluid');
    for (var i = 0; i < divs.length; i++) {
      divs[i].style.display = 'none';
    }
  
    var selectedDiv = document.getElementById(divId);
    if (selectedDiv) {
      selectedDiv.style.display = 'block';
    }
  }
  