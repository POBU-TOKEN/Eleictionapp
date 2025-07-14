@extends('layouts.app')

@section('title', 'Editar Perfil')

@section('content')

                <!-- Form -->
                <section class="w-100 px-4 pb-5">
                    <div class="py-4">
                        <div class="w-100">
                            <h2>Perfil</h2>
                            <div class="mb-4 d-flex flex-row align-items-center bg-light p-3">
                                <img class="ms-3 mr-3 rounded-circle" style="width: 80px; height: 80px;"
                                    src="{{ asset('storage/' . auth()->user()->imagem) }}" alt="Simage" />
                                <form>
                                    <div class="ms-3">
                                        <label class="form-label d-block">
                                            <span class="visually-hidden">Choose profile photo</span>
                                            <input type="file" class="form-control form-control-sm" />
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <form class="d-flex flex-column gap-3"  method="POST" action="{{ route('profile.update') }}" class="md:col-span-3 px-10 py-8 space-y-8" enctype="multipart/form-data">
                             @csrf
                    @method('PATCH')
                            <div class="w-100">
                                <label for="firstName" class="form-label">Nome <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-50" id="firstName"
                                    value="{{ $user->name }}" />
                            </div>

                            <div class="w-100">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control w-50" id="email"
                                    value="{{ $user->email }}" />
                            </div>

                            <div class="w-100">
                                <label for="bio" class="form-label">Bio</label>
                                <textarea class="form-control w-50 text-muted" id="bio" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cupiditate aliquam dolorum eum blanditiis commodi adipisci, quaerat, rerum culpa suscipit consequatur alias, quasi rem. Ex tenetur eius temporibus nemo vero.</textarea>
                                <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                                <a  class="site-btn" href="{{ route('voter.dashboard') }}"
                            class="inline-flex items-center px-5 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-100 text-sm font-medium rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600">
                            ← Voltar ao painel
                        </a>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- /Form --> 
                <div>
                        
                    </div>

    </section>
    </main>
    </div>
    </div>
    </section>
@endsection
