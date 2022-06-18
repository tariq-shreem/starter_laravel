@if($errors->any())
    <div class="mt-3">
        <ul>
            @foreach ($errors->all() as $error )

                <li class="alert alert-danger w-25">
                    {{$error}}
                </li>

            @endforeach
        </ul>
    </div>
@endif
