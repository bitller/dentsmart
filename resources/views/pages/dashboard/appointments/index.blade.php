@extends('layouts.base.index', ['title' => 'Programările dumneavoastră'])
@section('content')

    <div class="row">
        <div class="col-md-6">
            <h3 class="blue-grey-text">Vineri 15.04.2016</h3>
        </div>
        <div class="col-md-6">
        <div class="btn btn-primary pull-right add-cashier"><span class="glyphicon glyphicon-plus"></span>&nbsp;Creeaza programare</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center blue-grey-text">Ora <span class="badge pointer" data-toggle="tooltip" title="Numele casierului" data-placement="top">?</span></th>
                        <th class="text-center blue-grey-text">Pacient <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        <th class="text-center blue-grey-text">Interventie <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                        <th class="text-center blue-grey-text">Anuleaza programarea <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center">Drenaj</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza aceasta programare</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center">Drenaj</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza aceasta programare</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center">Drenaj</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza aceasta programare</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <h3 class="blue-grey-text">Luni 18.04.2016</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center blue-grey-text">Ora <span class="badge pointer" data-toggle="tooltip" title="Numele casierului" data-placement="top">?</span></th>
                        <th class="text-center blue-grey-text">Pacient <span class="badge pointer" data-toggle="tooltip" title="Numele folosit de casier pentru conectarea la aplicație" data-placement="top">?</span> </th>
                        <th class="text-center blue-grey-text">Interventie <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                        <th class="text-center blue-grey-text">Anuleaza programarea <span class="badge pointer" data-toggle="tooltip" title="Ștergeți casierul slectat">?</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center">Drenaj</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza aceasta programare</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center">Drenaj</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza aceasta programare</button></td>
                    </tr>
                    <tr>
                        <td class="vert-align text-center">John</td>
                        <td class="vert-align text-center">Doe</td>
                        <td class="vert-align text-center">Drenaj</td>
                        <td class="vert-align text-center"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Anuleaza aceasta programare</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection