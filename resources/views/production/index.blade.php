@extends('layouts.app')

@section('template_title')
    Production
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Production') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Number Line</th>
										<th>Number Of Units</th>
										<th>Specifications</th>
										<th>Orders Id</th>
										<th>Products Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productions as $production)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $production->Number line }}</td>
											<td>{{ $production->Number of units }}</td>
											<td>{{ $production->Specifications }}</td>
											<td>{{ $production->orders_id }}</td>
											<td>{{ $production->products_id }}</td>

                                            <td>
                                                <form action="{{ route('productions.destroy',$production->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productions.show',$production->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productions.edit',$production->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productions->links() !!}
            </div>
        </div>
    </div>
@endsection
