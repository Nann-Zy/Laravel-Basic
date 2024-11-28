@include('templates.header', ['title' => 'Update List Students'])

<div class="container">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1>Nnado</h1>
            </div>
            <a href="{{ route('list-siswa.index')}}"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Update Student</h3>
            <form
             method="POST" 
            action="{{ route('list-siswa.update', $data->id) }}" 
            enctype="multipart/form-data">

                @method('PUT')
                @csrf   


                <div class="col-lg-6 col-12">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-person"></i></span>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Name"
                            name="name"
                            value="{{ $data-> name }}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-6 col-12">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                        <select 
                        value =" {{$data->classes}}"
                        class="form-control" 
                        name="classes">
                            <option value="">Select Class</option>
                            <option value="X" @if($data->classes == 'X' ) selected @endif>X</option>
                            <option value="XI" @if($data->classes == 'XI' ) selected @endif>XI</option>
                            <option value="XII" @if($data->classes == 'XII' ) selected @endif>XII</option>

                        </select>
                    </div>
                    @error('classes')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-lg-6 col-12">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-building"></i></span>

                        <select  value="" class="form-control" name="major">
                            <option value="">Select Major</option>
                            <option value="PPLG" @if($data->major == 'PPLG' ) selected @endif>PPLG</option>
                            <option value="TJKT" @if($data->major == 'TJKT' ) selected @endif>TJKT</option>
                            <option value="TBSM" @if($data->major == 'TBSM' ) selected @endif>TBSM</option>
                            <option value="TKRO" @if($data->major == 'TKRO' ) selected @endif>TKRO</option>
                            <option value="MPLB" @if($data->major == 'MPLB' ) selected @endif>MPLB</option>
                            <option value="DKV" @if($data->major == 'DKV' ) selected @endif>DKV</option>
                            <option value="HOTEL" @if($data->major == 'HOTEL' ) selected @endif>HOTEL</option>
                            <option value="TMP" @if($data->major == 'TMP' ) selected @endif>TMP</option>

                        </select>
                    </div>
                    @error('major')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="col-lg-6 col-12">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-calendar"></i></span>
                        <input
                            type="date"
                            class="form-control"
                            name="birth_date"
                            value="{{ old('birth_date') }}">
                    </div>
                    @error('birth_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="col-lg-6 col-12">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-image"></i></span>
                        <input
                            type="file"
                            class="form-control"
                            name="photo_profile">
                    </div>
                    <img src="{{$data->photo_profile}}" class="img-thumbnail">
                    @error('photo_profile')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <button class="btn btn-primary w-100 login-btn" type="submit">Tambah</button>
                </form>
        </div>
    </div>
</div>

@include('templates.footer')