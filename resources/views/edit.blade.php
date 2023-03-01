@include('partials.header')

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Edit Weapon {{$weapon->name}} </h1>
    </div>

    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form action="/weapon/{{$weapon->id}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                required="required" value={{ $weapon->name }}>
                                            @error('name')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type" class="form-label">Type</label>
                                            <input id="form_lastname" type="text" name="type" class="form-control"
                                                required="required" value={{ $weapon->type }}>
                                            @error('type')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="damage" class="form-label">Damage</label>
                                            <input id="form_email" type="number" name="damage" class="form-control"
                                                required="required" value={{ $weapon->damage }}>
                                            @error('damage')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="accuracy" class="form-label">Accuracy</label>
                                            <input id="form_email" type="number" name="accuracy" class="form-control"
                                                required="required" value={{ $weapon->accuracy }}>
                                            @error('accuracy')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="range" class="form-label">Range</label>
                                            <input id="form_email" type="number" name="range"
                                                class="form-control"required="required" value={{ $weapon->range }}>
                                            @error('range')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fire_rate" class="form-label">Fire Rate</label>
                                            <input id="form_email" type="number" name="fire_rate"
                                                class="form-control"required="required" value={{ $weapon->fire_rate }}>
                                            @error('fire_rate')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobility" class="form-label">Mobility</label>
                                            <input id="form_email" type="number" name="mobility" class="form-control" required="required" value={{ $weapon->mobility }}>
                                            @error('mobility')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="control" class="form-label">Control</label>
                                            <input id="form_email" type="number" name="control" class="form-control" required="required" value={{ $weapon->control }}>
                                            @error('control')
                                                <p class="error-message ">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="submit" class="btn btn-success btn-send mt-5 pt-2 btn-block rounded" value="Update">
                                </form>
                                <a href="{{ URL::previous() }}" class="btn btn-danger btn-send  mt-1 btn-block rounded"> Cancel </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- /.8 -->
        </div>
        <!-- /.row-->
    
 
    </div>
</div>



@include('partials.footer')
