//URL DE LAS FUNCIONES
const url = "../../../inc/peticiones/horarios/funciones.php";
const form_horario = document.querySelector("#form_agregar_horario");
//SE CARGA AL ENTRAR
document.addEventListener("DOMContentLoaded", () => {
    mostrar_horarios();
    form_horario.addEventListener("submit",guardar_horario);
});

//FUNCION NECESARIA PARA ENVIAR Y RECIBIR DATOS DE LA BD
async function enviar(url, datos){
    try {
        const res = await fetch(url, { method: "POST", body: datos });
        const data = await res.json();
        return data;
    } catch (error) {
        console.log(error);
    }
}

async function mostrar_horarios() {
    const datos = new FormData();
    datos.append("accion", "ver_horarios");
    //const res = await enviar(url, datos);
    /*console.log(res);
    const contenedor = document.querySelector("#tabla_horarios");
    res.forEach((horario) => {
    const {id, nombre, lugar, horario, descripcion, imagen } = horario;
    contenedor.innerHTML += `
        <tr>
            <td>Primer turno</td>
            <td>6:00 AM</td>
            <td>2:00 PM</td>
            <td>
                <div class="table-data-feature">
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </button>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="zmdi zmdi-delete"></i>
                    </button>
                </div>
            </td>
        </tr>   
                `;
    });
    let otro_mensaje = `
        <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
        </div>`; 
    */
}

async function guardar_horario(e) {
    e.preventDefault();
    const nombre = document.querySelector("#nombre_horario").value;
    const inicio = document.getElementById("hora_inicio").value;
    const fin = document.getElementById("hora_fin").value;

    console.log(nombre, inicio, fin);
    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("inicio", inicio);
    datos.append("fin", fin);
    datos.append("accion", "guardar_horario");
    const res = await enviar(url, datos);
    console.log(res);
}