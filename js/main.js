$( document ).ready(function() {
  $('#content').mouseup(function() {
    var text = getSelectedText();
    console.log(text);
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
      selection = window.getSelection();
      if (selection.type == 'Caret') {
        return getWordAtOffset(selection.focusNode.textContent, selection.focusOffset);
      } else {
        return selection.toString();
      }
    } else if (document.selection) {
      return document.selection.createRange().text;
    }
    return '';
  }

  function getWordAtOffset(text, offset) {
    start = offset;
    end = offset;

    while (text.substring(end, end + 1) != ' ' && end < text.length) {
      end++;
    }

    while (text.substring(start, start - 1) != ' ' && start > 0) {
      start--;
    }

    return text.substring(start, end);
  }
});