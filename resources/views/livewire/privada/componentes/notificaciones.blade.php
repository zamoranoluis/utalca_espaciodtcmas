<div class="dashboard-layout__grid__barra-superior__notificaciones">
    <img wire:click="abrirNotificaciones()" class="icono_barra"
         src="{{asset("/css/images/icons/notificaciones.png")}}"/>

    @if($notificaciones)
        <div class="form-popup--overlay">
            <div class="form-popup__grid">
                <div class="form-popup__grid__relleno">

                </div>
                <div class="form-popup__grid__titulo">
                    <h2>
                        Notificaciones
                    </h2>
                </div>

                <div class="form-popup__grid__cerrar">
                    <button wire:click="cerrarNotificaciones()">
                        X
                    </button>
                </div>

                <form class="form-popup__grid__contenido">
                    <div class="form-popup__grid__contenido__entradas">
                        <div class="popup__grid__contenido__entradas__flex">

                        </div>
                    </div>


                    <div class="form-popup__grid__contenido__boton">
                        <!--
                        <button>
                            Acción
                        </button>

                        -->
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
