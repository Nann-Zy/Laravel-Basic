@include('templates.header', ['title' => 'Activity'])
   ini halamana tambahan 

<div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <h1>Nnado</h1>
                </div>
                <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Update activity</h3>
                <form method="POST" action="{{ route('update' , ['id' => $data->id]) }}">
                    @method('PUT')
                    @csrf

                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-car"></i></span>
                        <input
                         type="text"  
                        class="form-control"
                        placeholder="Activity Name" 
                        name="activity_name"
                        value= "{{$data->activity_name }}">
                    </div>
                    @error('activity_name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <button class="btn btn-primary w-100 login-btn" type="sumbit" >Update</button>
                </form>
                <div class="other-option">
                </div>
            </div>
        </div>

</div>

@include('templates/footer')

