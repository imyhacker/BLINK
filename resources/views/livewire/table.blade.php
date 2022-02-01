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
                <td id="copy_{{$res->default_short_url}}">{{$res->default_short_url}}</td>
                <td>
                    <button style="size: 500px; border-radius:5px; background-color: skyblue; border: none; margin-top: 2px" class="shadow-sm mt-2 mb-2 mx-2 my-2"><i class="fas fa-copy" onclick="getDocumentById(copy_{{$res->default_short_url}}.document.execCommand('copy'))" value="copy"></i></button>
                </td>
                <td>
                <Button href="#" style="size: 500px; border-radius:5px; background-color: skyblue; border: none; margin-top: 2px" class="shadow-sm mt-2 mb-2 mx-2 my-2"><i class="fas fa-qrcode"></i></Button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
