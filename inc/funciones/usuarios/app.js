mostrarServicios();
console.log("entre");
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
    console.log(resultado);
    
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

async function editar_usuario(id_necesario){
  var id_necesario;
  const edit_nombres = document.getElementById("edit_nombres"+id_necesario).value; 
  const edit_apellidos = document.querySelector("#edit_apellidos"+id_necesario).value;
  const edit_telefono = document.querySelector("#edit_telefono"+id_necesario).value;
  const edit_correo = document.querySelector("#edit_correo"+id_necesario).value;
  const edit_usuario = document.querySelector("#edit_usuario"+id_necesario).value;
  const edit_contrasenia = document.querySelector("#edit_contrasenia"+id_necesario).value;
  const edit_estado = document.querySelector("#edit_estado"+id_necesario).value;

  try {
    const datos = new FormData();
    datos.append("id", id_necesario);
    datos.append("nombres", edit_nombres);
    datos.append("apellidos", edit_apellidos);
    datos.append("telefono", edit_telefono);
    datos.append("correo", edit_correo);
    datos.append("usuario", edit_usuario);
    datos.append("contrasenia", edit_contrasenia);
    datos.append("estado", edit_estado);
    datos.append("accion", "actualizar");

    const res = await fetch("../../../inc/peticiones/usuarios/funciones.php", {
      method: "POST",
      body: datos,
    });
    const data = await res.json();
    //console.log(data);
    //mesaje de exito
    const mensajes = document.querySelector("#mensaje2");
    mensajes.innerHTML += `  
      <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
          <strong>El usuario ha sido editado exitosamente </strong>
      </div>
      `;
    //Se vacia el contenido de la tabla
    document.getElementById("contenido_tabla").innerHTML="";
    //Llamada a la funcion para llenar la tabla 
    mostrarServicios(); 
  } catch (error) {
    console.log(error);
  }
}