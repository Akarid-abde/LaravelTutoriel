     @if(session()->has('success') || session()->has('delete') || session()->has('update'))
            <div class="alert alert-success">
                     {{ session()->get('success')}}
                     {{ session()->get('delete')}}
                     {{ session()->get('update')}}
            </div>
            @endif