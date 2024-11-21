@include('templates.header', ['title' => 'Activity'])

<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1>Nnado</h1>
            </div>
            <a href="{{ route('add') }}"><i class="fa-duotone fa-plus"></i></a>
        </div>

        <div class="bottom">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h3 class="panel-title">Daftar Activity</h3>
            <ul class="activity-list">
                @foreach ($data as $d)
                            <li class="activity-item d-flex justify-content-between align-items-center">
                                <span class="activity-name">{{ $d->activity_name }}</span>
                                <div class="d-flex"></div>
                                <a href="/to-do-list-update/{{ $d->id }}" class="btn btn-warning text-light">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <form method="POST"
                                 action="{{route('delete', [$d->id]) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                </form>
                    </div>
                    </li>
                @endforeach
        </ul>
    </div>
</div>
</div>
@include('templates/footer')