<div>
    <table class="table" id="table_id">
        <thead>
            <tr>
                <th>Original</th>
                <th>Short</th>
                <th>Copy</th>
                <th>Generate QR</th>
            </tr>
        </thead>
        <tbody class="text-left">
            @php $no = 1; @endphp
            @foreach($data as $res)
            <tr>
                <td>{{$res->destination_url}}</td>
                <td id="DATA">{{$res->default_short_url}}</td>
                <td>
                    <Button href="#" class="btn btn-sm btn-secondary"><i>Copy</i></Button>
                </td>
                <td>
                <a href="" class="btn btn-sm btn-secondary"><i>Generate!</i></a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
(function()
{
  let buttons = document.getElementsByTagName('Button');
  for(let i = 0; i < buttons.length; i++)
  {
    let button = buttons[i];
    button.addEventListener('click', e =>
    {
      let button = e.target;
      let text = document.getElementById('DATA');
      text.setAttribute('type', 'text');
      text.value = email;
      document.body.appendChild(text);
      text.select();
      document.execCommand('copy');
      document.body.removeChild(text);
    });
  }
})();
</script>
</div>
