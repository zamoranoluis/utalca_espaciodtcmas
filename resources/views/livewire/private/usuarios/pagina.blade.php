<div class="contenedor-pagina">
    <div class="contenedor-pagina__header">
        <h1>Usuarios</h1>
    </div>
    <div class="contenedor-pagina__contenido">
        <livewire:private.usuarios.lista/>
    </div>

    <style>
        .contenedor-pagina {
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;

            overflow: auto;

            overflow-x: scroll;
            width: 80%;
            min-width: 80%;
            max-width: 80%;

            height: 92vh;
            min-height: 92vh;
            max-height: 92vh;

            margin-left: auto;
            margin-right: auto;
            max-height: 70vh;
        }

        .contenedor-pagina__header {
            overflow-x: hidden;
            overflow-y: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            min-width: 100%;
            max-width: 100%;

            height: 12vh;
            min-height: 12vh;
            max-height: 12vh;
        }

        .contenedor-pagina__contenido {
            overflow: hidden;
            width: 100%;
            min-width: 100%;
            max-width: 100%;

            height: 80vh;
            min-height: 80vh;
            max-height: 80vh;
        }
    </style>
</div>
