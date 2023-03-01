@include('partials.header')
<x-nav />
<x-messages />
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Weapons</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="/add_weapon" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Add New Weapon</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Damage</th>
                        <th scope="col">Accuracy</th>
                        <th scope="col">Range</th>
                        <th scope="col">Fire Rate</th>
                        <th scope="col">Mobility</th>
                        <th scope="col">Control</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($weapons as $weapon)
                        <tr class=" ">
                            <td class="py-3 px-6">{{ $weapon->name }}</td>
                            <td class="py-3 px-6">{{ $weapon->type }}</td>
                            <td class="py-3 px-6">{{ $weapon->damage }}</td>
                            <td class="py-3 px-6">{{ $weapon->accuracy }}</td>
                            <td class="py-3 px-6">{{ $weapon->range }}</td>
                            <td class="py-3 px-6">{{ $weapon->fire_rate }}</td>
                            <td class="py-3 px-6">{{ $weapon->mobility }}</td>
                            <td class="py-3 px-6">{{ $weapon->control }}</td>
                            <td>
                                <div class="d-flex flex-row  mb-3">
                                    <div><button type="button" class="btn">
                                            <a href="/weapon/{{ $weapon->id }}">
                                                <i class="material-icons text-warning">edit</i>
                                            </a>

                                        </button></div>
                                    <div>
                                        <form action="/weapon/{{ $weapon->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn">
                                                <i class="material-icons text-danger">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <ul class="pagination">
                    {{ $weapons->links() }}
                </ul>
            </div>
        </div>
    </div>
</div>


@include('partials.footer')
