function postStore() {
    var formData = new FormData(document.getElementById("post"));
    axios({
            method: 'post',
            url: 'postStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
           // var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data;
             
                 alert('Registrado Correctamente');
                 window.location.reload();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function postDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {
        var formData = new FormData(document.getElementById("post"));
        formData.append("id", id);
        axios({
                method: 'post',
                url: "postDestroy",
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
             //   var contentdiv = document.getElementById("mycontent");
             //   contentdiv.innerHTML = response.data;
                     //carga pdf- csv - excel
           //   datatable_load();

           alert('Eliminado Correctamente');
           window.location.reload();
       

            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }
}

function postEdit(id) {
    var formData = new FormData(document.getElementById("post"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: 'postEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
           
            post.id.value = response.data["id"];
            post.title.value = response.data["title"];
            post.category.value = response.data["category"];
            post.description.value = response.data["description"];
            post.url_invitation.value = response.data["url_invitation"];
            post.fotografia.src = '../imageusers/'+ response.data["photo"];

 // JavaScript para establecer el contenido del textarea
 document.getElementsByClassName('note-editable')[0].innerHTML = response.data["post"];

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}


function postUpdate() {
    var formData = new FormData(document.getElementById("post"));
    axios({
            method: 'post',
            url: 'postUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
        //    var contentdiv = document.getElementById("mycontent");
        //    contentdiv.innerHTML = response.data;
            
                 alert('Modificado Correctamente');
                 window.location.reload();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}



function New() {
    document.getElementById("create").disabled = false;
  //  document.getElementById("new").disabled = false;
    document.getElementById("update").disabled = true;
    // form.id.value = "";
}

function Up() {
    document.getElementById("create").disabled = true;
//    form.new.disabled = true;
    document.getElementById("update").disabled  = false;
}