<form action="{{ route('home.search') }}" method="post">
                @csrf
                <div class="row p-2">
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bold fsize">LOCALITÉS</label><br>
                        <input class="form-control form-control-md" id="search" type="text" name="localite"
                            placeholder="Ajouter une autre localité ?">

                    </div>
                    <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-12 mb-3">
                        <label for="">TYPE DE BIENS</label><br>
                        <select class="form-select form-select-md" name="type">
                            <option value="terrain" selected>Terrains...</option>
                            <option value="1">Appartements</option>
                            <option value="2">Villa</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                        <label for="">SURFACE</label><br>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-md" placeholder="min" name="surface">
                            <span class="input-group-text">m2</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                        <label for="budget">BUDGET</label><br>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-md" placeholder="max" name="budget">
                            <span class="input-group-text">F CFA</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-12 mb-3">
                        <br>
                        <button type="submit" class="btn btn-danger btn-md">Rechercher</button>
                    </div>

                </div>
            </form>