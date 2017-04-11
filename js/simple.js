

/// Favorite Button 
  function favorite() {

    var parent = this.parentElement;   

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'favorite.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function () {
      if(xhr.readyState == 4 && xhr.status == 200) {
        var result = xhr.responseText;
        console.log('Result: ' + result);
        if(result == 'true') {
           parent.classList.add("favorite");
        }
      }
    };
    xhr.send("id=" + parent.id);
  }// End function block

  var buttons = document.getElementsByClassName("favorite-button");
  for(i=0; i < buttons.length; i++) {
    buttons.item(i).addEventListener("click", favorite);
  }



/// Unfavorite Button 
function unfavorite() {
        var parent = this.parentElement;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'unfavorite.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function () {
          if(xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            console.log('Result: ' + result);
            if(result == 'true') {
              parent.classList.remove("favorite");
            }
          }
        };
        xhr.send("id=" + parent.id);
      }

      var buttons = document.getElementsByClassName("unfavorite-button");
      for(i=0; i < buttons.length; i++) {
        buttons.item(i).addEventListener("click", unfavorite);
      }
