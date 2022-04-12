document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems,{ } );
});
   
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, { } );
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, { });
  });

function getslider() {
    var elems = document.querySelectorAll('.slider');
    return M.Slider.getInstance(elems, [0]);
  }

function sliderprev() {
    var elems = document.querySelectorAll('.slider');
    var instance = getSlider();
    instance.prev();
    instance.pause();
  }

function slidernext() {
    var elems = document.querySelectorAll('.slider');
    var instance = getSlider();
    instance.next();
    instance.pause();
  }