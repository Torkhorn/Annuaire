<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">IFA</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarText">
	<ul class="navbar-nav mr-auto">
	<li class="nav-item active">
		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#git stat">Features</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">Pricing</a>
	</li>
	</ul>
	<span class="navbar-text">
	Navbar text with an inline element
	</span>
</div>
</nav>

<div class="container-fluid">

    <div class="row">
        
        <div class="col-4 bg-secondary d-flex flex-column">
            <div class="row justify-content-center">
                <h1>Critères de recherche</h1>
            </div>
            <form class="">
                <div class="form-group">
                    <input type="nom" class="form-control" id="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                    <input type="prenom" class="form-control" id="exampleInputPrenom1" placeholder="Prénom">
                </div>
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
            <button type="submit" class="btn btn-warning btn-block ">Rechercher</button>
        
        </div>
        <div class="col-8">
            <table class="table">
                <thead class="table-inverse">
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
