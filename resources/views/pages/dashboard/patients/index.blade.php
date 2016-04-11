@extends('layouts.base.index')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <h3 class="blue-grey-text">Pacienţi</h3>
        </div>
        <div class="col-md-6">
            <div class="btn btn-success pull-right add-cashier"><span class="glyphicon glyphicon-plus"></span>&nbsp;Adaugă pacient nou</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center blue-grey-text">Nume <span class="badge pointer" data-toggle="tooltip" title="Numele casierului" data-placement="top">?</span></th>
                        <th class="text-center blue-grey-text">Email <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        <th class="text-center blue-grey-text">Număr de telefon <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        <th class="text-center blue-grey-text">Creează programare <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">john_doe</td>
                        <td class="vert-align text-center">0730167964</td>
                        <td class="vert-align text-center"><button class="btn btn-success"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Creează programare</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">john_doe</td>
                        <td class="vert-align text-center">0730167964</td>
                        <td class="vert-align text-center"><button class="btn btn-success"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Creează programare</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">john_doe</td>
                        <td class="vert-align text-center">0730167964</td>
                        <td class="vert-align text-center"><button class="btn btn-success"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Creează programare</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection