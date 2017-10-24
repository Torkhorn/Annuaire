<div class="container-fluid grid-full-height d-flex flex-column">

    <div class="row d-block">
        <nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <a class="navbar-brand" href="#"><img style="width: 40px;"src="assets/logo-ifa.png" alt="logo ifa"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Recherche<span class="sr-only">(current)</span></a>
                </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Bonjour Mathieu<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Déconnexion<span class="sr-only">(current)</span></a>
                </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="row" style="flex:1;">

        <!-- barre de recherche -->
        <div class="col-3 d-flex flex-column bg-secondary justify-content-between pt-3 pb-3">
            <div>
                <div class="row d-flex justify-content-center">
                <h2 class="text-center">Critères de recherche</h2>
                </div>
                <form class="">
                    <div class="form-group">
                        <input type="nom" class="form-control" id="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="prenom" class="form-control" id="exampleInputPrenom1" placeholder="Prénom">
                    </div>
                    <!-- faire en sorte que les listes s'affiche en AngularJS -->
                    <div class="form-group">
                        <select class="form-control" id="selectFormation">
                        <option>BTS</option>
                        <option>DUT</option>
                        <option>MASTER</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="selectAnnee">
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                        </select>
                    </div>
                </form>
            </div>
            <button type="submit" class="btn btn-warning btn-block ">Rechercher <i class="fa fa-search fa-lg"></i></button>
        
        </div>
        <!-- liste des élèves -->
        <div class="col-9 pl-0 pr-0">
            <table class="table">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Elève</th>
                    <th>E-mail</th>
                    <th>Formation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        
        </div>

    </div>

</div>