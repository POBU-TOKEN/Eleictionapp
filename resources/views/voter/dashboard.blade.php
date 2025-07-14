@extends('layouts.app')

@section('title', 'Painel do Eleitor')

@section('content')

<section class="py-5 ">
  <section class="pt-5 mt-5">
    <div class="container-fluid">
        <h2 class="mb-4">Painel do Eleitor</h2>

        <div class="row g-4">

            <!-- Cartão de Informações do Usuário -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/' . auth()->user()->imagem) }}" class="rounded-circle mb-3" width="100" height="100" alt="Foto do usuário">
                        <h5 class="card-title">{{ auth()->user()->name }}</h5>
                        <p class="card-text text-muted mb-0">{{ auth()->user()->email }}</p>
                        <span class="badge bg-success mt-2">Eleitor Ativo</span>
                    </div>
                </div>
            </div>

            <!-- Estatísticas -->
            <div class="col-md-8">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h6 class="text-muted">Enquetes disponíveis</h6>
                                <h3 class="fw-bold">{{ $availablePolls ?? 5 }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body">
                                <h6 class="text-muted">Votos registrados</h6>
                                <h3 class="fw-bold">{{ $votesCast ?? 2 }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4 shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        Próximas Enquetes
                    </div>
                    <div class="card-body">
                        @forelse ($upcomingPolls ?? [] as $poll)
                            <div class="mb-3">
                                <h6 class="mb-1">{{ $poll['title'] }}</h6>
                                <small class="text-muted">Início: {{ $poll['start_date'] }}</small>
                            </div>
                        @empty
                            <p class="text-muted">Nenhuma enquete futura cadastrada.</p>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>

        <!-- Ações rápidas -->
        <div class="row mt-5">
            <div class="col-md-4">
                <a href="{{ route('polls.index') }}" class="btn btn-outline-primary w-100">
                    <i class="bi bi-ui-checks-grid me-1"></i> Visualizar Enquetes
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('profile.edit') }}" class="btn btn-outline-secondary w-100">
                    <i class="bi bi-person-circle me-1"></i> Editar Perfil
                </a>
            </div>
            <div class="col-md-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger w-100">
                        <i class="bi bi-box-arrow-right me-1"></i> Sair
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>
</section>
@endsection