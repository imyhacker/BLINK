<div>
    <table class="table table-borderless table-hover">
        <thead>
            <tr>
                <th>Original</th>
                <th>Short</th>
                <th>Copy</th>
                <th>QR</th>
            </tr>
        </thead>
        <tbody class="text-left">
            @php $no = 1; @endphp
            @foreach($data as $res)
            <tr>
                <td>{{$res->destination_url}}</td>
                <td  data-id="short-link">{{$res->default_short_url}}</td>
                <td>
                    <button class="btn shadow-sm mt-2 mb-2 mx-2 my-2" data-id="button-copy"><i class="fas fa-copy"></i></button>
                </td>
                <td>
                <Button wire:click="tes({{$res->id}})" class="btn shadow-sm mt-2 mb-2 mx-2 my-2"><i class="fas fa-qrcode"></i></Button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
