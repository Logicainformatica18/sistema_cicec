function blogStore() {
    var formData = new FormData(document.getElementById("blog"));
    axios({
            method: 'post',
            url: 'blogStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
             
                 alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function blogDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {
        var formData = new FormData(document.getElementById("blog"));
        formData.append("id", id);
        axios({
                method: 'post',
                url: "blogDestroy",
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
                var contentdiv = document.getElementById("mycontent");
                contentdiv.innerHTML = response.data;
                     //carga pdf- csv - excel
           //   datatable_load();
              alert('Eliminado Correctamente');
           //     window.location.reload();

            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }
}

function blogEdit(id) {
    var formData = new FormData(document.getElementById("blog"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: 'blogEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
           
            blog.id.value = response.data["id"];
            blog.name.value = response.data["name"];
            blog.email.value = response.data["email"];



        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}


function blogUpdate() {
    var formData = new FormData(document.getElementById("blog"));
    axios({
            method: 'post',
            url: 'blogUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
            
                 alert('Modificado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
