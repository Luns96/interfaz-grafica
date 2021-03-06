@extends('app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-1">
                    <div class="card-header"><h1>New Account</h1></div>
                    <form v-on:submit.prevent="register">
                        <div class="card-body">
                            @csrf
                            <div class="form-group row">
                                <label for="ci" class="col-sm-2 col-form-label">Cedula</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="ci" v-model="ci" placeholder="ci">
                                    {{-- <small name="passwordHelpBlock" class="form-text text-muted">
                                        Enter your CI
                                    </small> --}}
                                </div>
                                <label for="nickname" class="col-sm-2 col-form-label">Nickname</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="nickname" v-model="nickname" placeholder="nickname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="name" v-model="name" placeholder="Name">
                                </div>
                                <label for="surname" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="surname" v-model="surname" placeholder="Surname">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" name="age" v-model="age" placeholder="age">
                                    </div>
                                    <label for="number" class="col-sm-2 col-form-label">Cell number</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="number" v-model="number" placeholder="Cell number">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="address" class="form-control" name="address" v-model="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" v-model="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" v-model="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="justify-content-end">
                                <input type="button" value="Send" class="btn btn-success" data-toggle="modal" data-target="#Modal">
                                <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">Confirm</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection