@extends('layouts.base.index', ['title' => 'Prima pagină'])
@section('content')

    <div class="row">
        <div class="col-md-6">
            <h3 class="blue-grey-text">Pacienţi programaţi astăzi</h3>
        </div>
        {{--<div class="col-md-6">--}}
        {{--<div class="btn btn-success pull-right add-cashier"><span class="glyphicon glyphicon-plus"></span>&nbsp;Adauga film</div>--}}
        {{--</div>--}}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center blue-grey-text">Prenume <span class="badge pointer" data-toggle="tooltip" title="Numele casierului" data-placement="top">?</span></th>
                        <th class="text-center blue-grey-text">Nume <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        <th class="text-center blue-grey-text">Anuleaza programarea <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza programarea</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza programarea</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza programarea</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection