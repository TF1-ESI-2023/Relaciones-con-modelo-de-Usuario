@include("common/header")
          
        @if(!Auth::check())
                <h1>Holi</h1>
        @else 
                <h1>Videojuegos</h1>

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
        @endif
   
@include("common/footer");