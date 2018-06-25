@extends('auth.layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br/><br/><br/>
                @section ('register_panel_title', 'SB-Admin')
                @section ('register_panel_body')

                    {{ Form::open(['route' => 'register']) }}

                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"
                                   placeholder="Nome"
                                   value="{{ old('name') }}" required autofocus/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control"
                                   placeholder="E-mail"
                                   required/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control"
                                   placeholder="Senha"
                                   required=""/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Confirmar Senha"
                                   required/>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!$errors->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                {!! $errors->first() !!}
                            </div>
                        @endif

                        @if(config('auth.captcha.registration'))
                            @captcha()
                        @endif

                        <div class="row">
                            <div class="col-xs-6">
                                <button type="submit"
                                        class="btn btn-lg btn-success btn-block">Cadastrar
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <a href="{{ route('login') }}"
                                   class="btn btn-lg btn-primary btn-block">Entrar
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    {{ Form::close() }}

                @endsection
                @include('widgets.panel', array('as'=>'register', 'header'=>true))
            </div>
        </div>
    </div>
@stop
