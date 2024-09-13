<div class="task">
    <div class="title">
        <input type="checkbox"
            @if($data && $data['done'])
                checked
            @endif
        />
        <div class="task_title"> {{$data['title'] ?? ''}} </div>
    </div>

    <div class="priority">
        <div class="sphere"></div>
        <div> {{$data['category'] ?? ''}} </div>
    </div>

    <div class="actions">
        <a href="{{$data['edit_url'] ?? ''}}">
        <img src="/assests/imagens/icon-edit.png" alt="">
        </a>

        <a href="{{$data['delete_url'] ?? ''}}">
            <img src="/assests/imagens/icon-delete.png" alt="">
        </a>

    </div>

</div>
