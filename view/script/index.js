const searchDropdown = document.querySelector('#search-dropdown');

$('#search').on('keyup', function() {
  var value = $(this).val();
  
  if(value.length > 2){
    $.ajax({
        url: 'search.php',
        type: 'POST',
        data: {search: value},
        success: function(data) {
          try {
            var productos = JSON.parse(data);
            
            var content = ``;
            for (var i = 0; i < productos.length; i++) {
              content+= `
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <img style="width:53px; height: 45px;" src="${productos[i].IMG_URL}" alt="poster">
                  <span class="ml-4">${productos[i].NOMBRE}</span>
                </a>
              </li>
              `;
            }

            searchDropdown.innerHTML = content;

          } catch (e) {
            console.log('Error al analizar los datos JSON');
            // console.log(data);
          }
        },
        error: function(xhr, status, error) {
          console.log('Error en la solicitud AJAX: ' + status + ' - ' + error);
        }
    });

    
  }     
});


