
// activa los modales segun la accion que se active en el front

const showModal = (value) =>{
    let result = (value === 1) && createThirdParties();
    document.getElementById('sectionModal').innerHTML = result;
}

const createThirdParties = () => {
    return `<section class="boxForms">
        <form class="forms" method="POST" action='../funciones/crearTercero.php'>
            <h2>Crear nuevo tercero
                <section class="formThirds">
                    <input class="inputs" type="text" name="nit" placeholder="Nit">
                    <input class="inputs" type="text" name="razonSocial" placeholder="Nombre">
                </section>

                <section class="formThirds">
                    <select name="tipo">
                        <option value="">Seleccione el tipo</option>
                        <option value="cliente">cliente</option>
                        <option value="proveedor">proveedor</option>
                    </select>
                    <input type="submit" value="Crear" name='crearTercero'>
                </section>
        </form>
        <button class="btnClose" onclick="closeModal()">x</button>
    </section>`;
}

const closeModal = () => {
    document.getElementById('sectionModal').innerHTML = '';
}