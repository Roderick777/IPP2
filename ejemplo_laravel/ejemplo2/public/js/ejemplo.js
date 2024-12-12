async function peticion() {
    const respuesta = await fetch('https://run.mocky.io/v3/95821e25-7541-479f-ac21-7e8d9d7bdc24')
    const json = await respuesta.json()

    const nuevaFila = `
        <tr>
            <td>${json.id}</td>
            <td>${json.name}</td>
            <td>${json.edad}</td>
            <td>&nbsp;</td>
        </tr>
    `
    let content = document.querySelector('#tbody-users')
    document.querySelector('#tbody-users').innerHTML = content.innerHTML + nuevaFila
}



async function createUser (event) {
    event.preventDefault(); // Evita el envío por defecto del formulario  
    document.querySelector('#submit-loader').style.display = 'block';

    await new Promise((resolve) => setTimeout(resolve, 2000))
    
    // Obtener los datos del formulario
    const formData = new FormData(this);

    // Crear un objeto para enviar en la solicitud
    const data = {
        name: formData.get('name'),
        email: formData.get('email'),
        password: formData.get('password')
    };

    try {
        // Realizar la solicitud fetch
        const response = await fetch('/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': formData.get('_token'), // CSRF Token
            },
            body: JSON.stringify(data), // Enviar los datos en formato JSON
        });

        // Manejar la respuesta del servidor
        if (response.ok) {
            const result = await response.json();
            alert( `Usuario ${result.name} creado exitosamente`)
            window.location.reload()
        } else {
            alert(`Error: ${response.status}`)
        }
        document.querySelector('#submit-loader').style.display = 'none';
    } catch (error) {
        console.error('Error:', error);
    }

}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('#submit-loader').style.display = 'none';
    const form = document.getElementById('user-create-form');
    form.addEventListener('submit', createUser);  
});