<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 text-center">Accedi</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
            <form action="{{route('login')}}" method='POST'>
                @csrf
                <div class="mb-3">
                 <label for="email" class="form-label">Email:</label>
                 <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                 <label for="password" class="form-label">Password:</label>
                 <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="row">
                    <div class="col-6">
                      <button type="submit" class="btn btn-primary">Accedi</button>
                    </div>
                    <div class="col-6">
                      <p>Non sei registrato? <a href="{{route('register')}}" class="btn btn-outline-warning">Registrati!</a></p>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-layout>