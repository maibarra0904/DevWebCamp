(function(){
    const ponentesInput = document.querySelector('#ponentes');

    if(ponentesInput) {
        let ponentes = [];
        let ponentesFiltrados = [];

        const listadoPonentes = document.querySelector('#listado-ponentes');
        const ponenteHidden = document.querySelector('[name="ponente_id"]');

        obtenerPonentes();

        ponentesInput.addEventListener('input', buscarPonentes);
        
        if(ponenteHidden.value) {
            (async() => {
                const ponente = await obtenerPonente(ponenteHidden.value);

                //Insertar en el HTML
                const ponenteDom = document.createElement('LI');
                const {nombre, apellido} = ponente;

                ponenteDom.classList.add('listado-ponentes__ponente', 'listado-ponentes__ponente--seleccionado');
                ponenteDom.textContent = `${nombre} ${apellido}`

                listadoPonentes.appendChild(ponenteDom);
            })()
        }

        async function obtenerPonentes() {
            const url = '/api/ponentes';
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();

            formatearPonentes(resultado);

        }

        async function obtenerPonente(id) {
            const url = `/api/ponente?id=${id}`;
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();

            return resultado;

        }

        function formatearPonentes( arrayPonentes = []) {

            ponentes = arrayPonentes.map( ponente => {
                return {
                    nombre: `${ponente.nombre.trim()} ${ponente.apellido.trim()}`,
                    id: ponente.id
                }
            })
        }

        function buscarPonentes(e) {
            const busqueda = e.target.value;

            if(busqueda.length>1) {
                const expresion = new RegExp(busqueda, "i");
                ponentesFiltrados = ponentes.filter(ponente => {
                    if(ponente.nombre.toLowerCase().search(expresion) != -1) {
                        return ponente;
                    }
                })

                //console.log(ponentesFiltrados);
            } else {
                ponentesFiltrados = [];
            }

            mostrarPonentes();
        }

        function mostrarPonentes() {

                while(listadoPonentes.firstChild) {
                    listadoPonentes.removeChild(listadoPonentes.firstChild);
                }
                
                if(ponentesFiltrados.length >0) {
                    ponentesFiltrados.forEach(ponente => {
                        const ponenteHTML = document.createElement('LI');
                        ponenteHTML.classList.add('listado-ponentes__ponente')
                        ponenteHTML.textContent = ponente.nombre
                        ponenteHTML.dataset.ponenteId = ponente.id 
                        ponenteHTML.onclick = seleccionarPonente
    
                        //Añadir ponente al dom
                        listadoPonentes.appendChild(ponenteHTML);
                    })
                } else {
                    const noResultados = document.createElement('P')
                    noResultados.classList.add('listado-ponentes__no-resultado')
                    noResultados.textContent = 'No hay resultados para tu búsqueda'

                    listadoPonentes.appendChild(noResultados);
                }

                
        }

        function seleccionarPonente(e) {
            const ponente = e.target;

            //Remover la clase previa
            const ponentePrevio = document.querySelector('.listado-ponentes__ponente--seleccionado');

            if(ponentePrevio) {
                ponentePrevio.classList.remove('listado-ponentes__ponente--seleccionado');
            }

            ponente.classList.add('listado-ponentes__ponente--seleccionado');

            ponenteHidden.value = ponente.dataset.ponenteId;
        }
    }
})()