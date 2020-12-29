function menuResponsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "nav") {
      x.className += " responsive";
    } else {
      x.className = "nav";
    }
}

const btnVerTodo = document.getElementById('btn-todo');
btnVerTodo.addEventListener('click', function() {
  document.getElementById('nombreLibro').value = "";
  document.getElementById('autorLibro').value = "";
})