@include("common/header")
 
<br><br>
<h2>Videojuego</h2>
<div class="container">
<div class="row">

    <table>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Género
            </th>
            <th>
                Año
            </th>
        </tr>
        @foreach($videojuegos as $juego)

            <tr>
                <td>
                    {{ $juego -> nombre }}
                </td>
                <td>
                    {{ $juego -> genero }}
                </td>
                <td>
                    {{ $juego -> anio }}
                </td>
            </tr>

        @endforeach
    </table>
</div>

   
@include("common/footer");