//Share

function fbshareCurrentPage() {
  window.open("https://www.facebook.com/sharer/sharer.php?u=" + escape(window.location.href) + "&t=" + document.title, '',
    'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
  return false;
}

function appfbshareCurrentPage() {
  window.location.href = "fb://www.facebook.com/sharer/sharer.php?u=" + escape(window.location.href) + "&t=" + document.title, '';
  return false;
}


function twshareCurrentPage() {
  window.open("https://twitter.com/intent/tweet?text=" + document.title + "&url=" + escape(window.location.href), '',
    'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
  return false;
}

function wpshareCurrentPage() {
  window.location.href = "whatsapp://send?text=" + escape(window.location.href) + "&t=" + document.title;
  return false;
}

//<![CDATA[
function getlink() {
  var aux = document.createElement("input");
  aux.setAttribute("value", window.location.href);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}
//]]>

(function ($) {
  $(function () {

    $('.sidenav').sidenav();
    $(document).ready(function () {
      $('.pushpin').pushpin({
        top: "300"
      });
    });


    $('.modal').modal();

    $('.carousel').carousel({
      dist: 0,
      padding: 30,
      fullWidth: true,
    });



  }); // end of document ready
})(jQuery); // end of jQuery name space
