<table id="zero_config" class="table table-sm text-center">

    <thead class="table-light" >
    <tr>
        <th > Désignation </th>
        <th> Date acquisition </th>
        <th> Code produit </th>
        <th> Date installation </th>
        <th >...</th>
    </tr>
    </thead>
    <tbody>
    @foreach($materiels3 as $materiel)
        <tr>
            <td> {{ $materiel->designation }}</td>
            <td > {{ $materiel->dateAcquisitionMat }}</td>
            <td> {{ $materiel->codeProduit }}</td>
            <td> {{ $materiel->dateInstallation }}</td>
            <td >
                <div class="btn-group dropup" role="group" >
                    <button  class="btn btn-outline-info  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                        <li> <a class="dropdown-item" href="/Materiels/{{ $materiel->id }}/edit">Modifier </a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <input type="hidden" name='idMat' value="{{ $materiel->id }}" />
    @endforeach
    </tbody>
</table>
<div >
    {{$materiels3->links()}}
</div>







