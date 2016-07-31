$( document ).ready(function() {
  $('#content').mouseup(function() {
    var text = getSelectedText();
    if (text != '') {
      displayTranslation(text);
    }
  });

  function displayTranslation(input) {
    $.get(
        '/magic.php?i='+encodeURIComponent(input),
        function (data, status) {
          var translation = $('#translation');
          translation.html('<small><i>synonyms</i></small>');
          $.each(
              data.syns,
              function (i, val) {
                translation.html( translation.html() + '<p>' + val + '</p>');
              }
          );
        }
    );
  }

  function getSelectedText() {
    if (window.getSelection) {
      return window.getSelection().toString();
    } else if (document.selection) {
      return document.selection.createRange().text;
    }
    return '';
  }
});