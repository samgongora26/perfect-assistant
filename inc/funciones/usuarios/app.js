mostrarServicios();
//console.log("entre");
const nombre_text = document.querySelector("#nombres");
const telefono_text = document.querySelector("#telefono");
const email_text = document.querySelector("#correo");
const user = document.querySelector("#user");
const fotografia = document.querySelector("#fotografia");

async function mostrarServicios() {
  const datos = new FormData();
  datos.append("accion", "mostrar");

  try {
    const URL = "../../../inc/peticiones/usuarios/funciones.php";
    const peticion = await fetch(URL, {
      method: "POST",
      body: datos,
    });
    const resultado = await peticion.json();
    llenar_formulario(resultado);
    //console.log(resultado);
    
  } catch (error) {
    console.log(error);
  }
}

function llenar_formulario(usr) {
  const { nombres, telefono, correo, usuario, foto } = usr;
  nombre_text.innerHTML = nombres;
  telefono_text.innerHTML = telefono; //asignar los valores del id correspondiente
  email_text.innerHTML = correo;
  user.innerHTML = usuario;
  //agrega el atributo de direccion a la foto 
  fotografia.setAttribute("src", "../../images/icon/" + foto);
  //si el estado es activo entonces mostrará 
}

async function editar_usuario(){
  var id_necesario = 1; //Se asigna 1 porque es de un solo usuario, debe apuntar siempre al usuario 1
  const edit_nombres = document.querySelector("#nombre_editar").value; 
  const edit_telefono = document.querySelector("#telefono_editar").value;
  const edit_correo = document.querySelector("#correo_editar").value;
  const edit_usuario = document.querySelector("#usuario_editar").value;

  if(edit_nombres != "" & edit_telefono != "" &  edit_correo !=  "" & edit_usuario != ""){
    try {
      const datos = new FormData();
      datos.append("id", id_necesario);
      datos.append("nombres", edit_nombres);
      datos.append("telefono", edit_telefono);
      datos.append("correo", edit_correo);
      datos.append("usuario", edit_usuario);  
      datos.append("accion", "actualizar_usuario");
  
      const res = await fetch("../../../inc/peticiones/usuarios/funciones.php", {
        method: "POST",
        body: datos,
      });
      const data = await res.json();
      //console.log(data);
      //mesaje de exito
      const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
          <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">                 
            El usuario ha sido editdo con éxito.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        `;
      
      //Llamada a la funcion para llenar la tabla 
      mostrarServicios(); 
    } catch (error) {
      console.log(error);
    }
  }
  else{
    const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
          <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">                 
            ERROR. Algún campo está vacio, inténtalo de nuevo
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        `;
      
  }

  
}

async function editar_contrasenia(){

  const contrasenia_actual = document.querySelector("#contrasenia_actual").value; 
  const nueva_contasenia = document.querySelector("#nueva_contrasenia").value;
  const nueva_contasenia2 = document.querySelector("#nueva_contrasenia2").value;

  

  if(nueva_contasenia == nueva_contasenia2){
    try {
      const datos = new FormData();
      datos.append("contrasenia_actual", contrasenia_actual);
      datos.append("nueva_contasenia", nueva_contasenia); 
      datos.append("accion", "actualizar_contrasenia");

      const res = await fetch("../../../inc/peticiones/usuarios/funciones.php", {
        method: "POST",
        body: datos,
      });
      const data = await res.json();
      //console.log(data);
      //mesaje de exito
      if(data.mensaje = "correcto"){
      const mensajes = document.querySelector("#mensaje");
      mensajes.innerHTML += `  
          <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">                 
            El usuario ha sido editdo con éxito.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        `;
      }
      else{
        const mensajes = document.querySelector("#mensaje");
        mensajes.innerHTML += `  
          <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">                 
            ERROR. La contraseña anterior no coincide
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        `;
      }
    } catch (error) {
      console.log(error);
    }
  }
  else{
    const mensajes = document.querySelector("#mensaje");
    mensajes.innerHTML += `  
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">                 
          <strong> ERRROR </strong> Las nuevas contraseñas no coinciden
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      `;
  }
}