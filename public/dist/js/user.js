function userStore() {
    var formData = new FormData(document.getElementById("user"));
    axios({
            method: 'post',
            url: 'userStore',
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
function userDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {

        axios({
                method: 'delete',
                url: "userDestroy/"+ id,
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

function userEdit(id) {
    var formData = new FormData(document.getElementById("user"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: 'userEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
           
            user.id.value = response.data["id"];
            user.name.value = response.data["name"];
            user.email.value = response.data["email"];



        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}


function userUpdate() {
    var formData = new FormData(document.getElementById("user"));
    formData.append("id", user.id);
    formData.append("name", user.name);
    formData.append("email", user.email);
    formData.append("password", user.password);
    axios({
            method: 'put',
            url: 'userUpdate/'+user.id,
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