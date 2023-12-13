<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
    .bg-orange-gradient{
        border-width: 1px;
        --tw-border-opacity: 1;
        border-color: rgb(0 0 0 / var(--tw-border-opacity));
        background-image: linear-gradient(to right,var(--tw-gradient-stops));
        --tw-gradient-from: #ab7c2a;
        --tw-gradient-to: rgb(171 124 42 / 0);
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        --tw-gradient-to: rgb(253 242 141 / 0);
        --tw-gradient-stops: var(--tw-gradient-from), #fdf28d, var(--tw-gradient-to);
        --tw-gradient-to: #ab7c2a;
    }

    .leading-none {
        line-height: 1;
    }
    .font-bold {
        font-weight: 700;
    }
    .text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }
    .justify-end {
        justify-content: flex-end;
    }
    .flex {
        display: flex;
    }
    .text-black {
        --tw-text-opacity: 1;
        color: rgb(0 0 0 / var(--tw-text-opacity));
    }
    .py-0 {
        padding-top: 0;
        padding-bottom: 0;
    }
    .justify-between {
        justify-content: space-between;
    }
    .place-items-center {
        place-items: center;
    }
    .mx-4 {
        margin-left: 1rem;
        margin-right: 1rem;
    }
    .gap-8 {
        gap: 2rem;
    }
    .my-2 {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .w-24 {
        width: 6rem;
    }
    img, video {
        max-width: 100%;
        height: auto;
    }
    .text-title {
        font-size: 60px;
    }
    .align-middle {
        vertical-align: middle;
    }
    .w-full {
        width: 100%;
    }
    .h-fit {
        height: -webkit-fit-content;
        height: -moz-fit-content;
        height: fit-content;
    }
    .text-nav {
        font-size: 17px;
        font-weight: 700;
    }
    .px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }
    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }
    a {
        color: inherit;
        text-decoration: inherit;
    }
    .bg-body{
        background: #fff2cc !important;
    }
    .bg-dark-header{
        background: #282c34 !important;
    }
    .text-white{
        color: #bfbfbf;
    }
    .h-4 {
        height: 1rem;
    }

</style>
<body class="bg-body">
    <header>
        <div class="topbar bg-orange-gradient px-3 py-3">
            <p class="font-bold text-base leading-none"><i class="fa-solid fa-lock"></i> Web oficial Banco Exchange Auricoin</p>
        </div>

        <div class="d-flex justify-content-between align-items-center mx-4 mt-2">
            <div>
                <p class="mb-0"><strong>Señor: {{ auth()->user()->names." ".auth()->user()->last_name }}</strong></p>

            </div>
            <div>
                <span class="m-2"><a href="{{ route('user.change-password') }}"><strong>Actualizar Contraseña</strong></a></span><strong>|</strong>
                <span><a href="{{ route('user.edit') }}"><strong>Actualización de Datos</strong></a></span>
            </div>
        </div>

        <div class="flex justify-between place-items-center mx-4">
            <div class="flex place-items-center my-2 gap-8">
                <img src="https://bancoexchangeauricoin.org/images/logo-auricoin.png" class="w-24" alt="Logo Auricoin">
                <h2 class="text-title">Departamento de ingenieria</h2>
            </div>
        </div>

        <div class="navbar w-full h-fit bg-orange-gradient flex justify-between align-middle px-2 py-3 text-nav mt-3">
            <div class="flex divide-x-2 divide-black">
                <a href="{{ route('gerente.index') }}" class="px-2">Gerente</a>
                <a href="{{ route('proyect.index') }}" class="px-2">Proyectos</a>
                <a href="{{ route('proyect.done') }}" class="px-2">Proyectos terminados</a>
                <a href="{{ route('proyect.progress') }}" class="px-2">proyectos en desarrollo</a>
                <a href="{{ route('maintenance.index') }}" class="px-2">Mantenimientos</a>
                <a href="{{ route('staff.index') }}" class="px-2">Personal</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <h2>Editar Proyecto</h2>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form method="POST" action="{{ route('proyect.update', $proyect->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="staff_id" class="form-label">Seleccione un Empleado</label>
                <select class="form-select" id="staff_id" name="staff_id" required>
                    @foreach($staffMembers as $staff)
                        <option value="{{ $staff->id }}" {{ ($proyect->staff_id == $staff->id) ? 'selected' : '' }}>
                            {{ $staff->full_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="area_raiz" class="form-label">Área Raíz</label>
                <input type="text" class="form-control" id="area_raiz" name="area_raiz" value="{{ old('area_raiz', $proyect->area_raiz) }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $proyect->descripcion) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="areas_vinculadas" class="form-label">Áreas Vinculadas</label>
                <input type="text" class="form-control" id="areas_vinculadas" name="areas_vinculadas" value="{{ old('areas_vinculadas', $proyect->areas_vinculadas) }}" required>
            </div>

            <div class="mb-3">
                <label for="alcance" class="form-label">Alcance</label>
                <select class="form-select" id="alcance" name="alcance" required>
                    <option value="0-6meses" {{ old('alcance', $proyect->alcance) == '0-6meses' ? 'selected' : '' }}>Baja 0-6 meses</option>
                    <option value="6-12meses" {{ old('alcance', $proyect->alcance) == '6-12meses' ? 'selected' : '' }}>Media 6-12 meses</option>
                    <option value="12mesesplus" {{ old('alcance', $proyect->alcance) == '12mesesplus' ? 'selected' : '' }}>Alta 12 meses o más</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notas" class="form-label">Notas</label>
                <textarea class="form-control" id="notas" name="notas" rows="3">{{ old('notas', $proyect->notas) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select" id="estado" name="estado" required>
                    <option value="abierto" {{ old('estado', $proyect->estado) == 'abierto' ? 'selected' : '' }}>Abierto</option>
                    <option value="ejecucion" {{ old('estado', $proyect->estado) == 'ejecucion' ? 'selected' : '' }}>Ejecución</option>
                    <option value="cerrado" {{ old('estado', $proyect->estado) == 'cerrado' ? 'selected' : '' }}>Cerrado</option>
                    <option value="mantenimiento" {{ old('estado', $proyect->estado) == 'mantenimiento' ? 'selected' : '' }}>Mantenimiento</option>
                </select>
            </div>

            <button type="submit" class="bg-orange-gradient px-6 py-1 font-black">Guardar Cambios</button>
            <button class="bg-orange-gradient px-6 py-1 font-black"><a href="{{ route('proyect.index') }}">Cancelar</a></button>
        </form>
    </div>

    <div>
        <div class="bg-orange-gradient h-4"></div>
        <p class="text-center">© 2023 Banco Exchange Auricoin</p>
        <div class="bg-orange-gradient h-4"></div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
