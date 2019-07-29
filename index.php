<!DOCTYPE html>
<html lang="en" ng-app="myModule">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body ng-controller="myController">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://eliasngumbipro.com">eliasngumbipro</a>
" rel="nofollow">https://eliasngumbipro.com">EliasNgumbi</a>
</a>		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Pagination With MySQLi Using AngularJS</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th ng-click="sort('firstname')">Firstname
							<span class="glyphicon sort-icon" ng-show="sortKey=='firstname'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
						</th>
						<th ng-click="sort('lastname')">Lastname
							<span class="glyphicon sort-icon" ng-show="sortKey=='lastname'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
						</th>
						<th ng-click="sort('gender')">Gender
							<span class="glyphicon sort-icon" ng-show="sortKey=='gender'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
						</th>
						<th ng-click="sort('address')">Address
							<span class="glyphicon sort-icon" ng-show="sortKey=='address'" ng-class="{'glyphicon-chevron-up':reverse,'glyphicon-chevron-down':!reverse}"></span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr dir-paginate="member in members|orderBy:'lastname'|orderBy:sortKey:reverse|itemsPerPage:5">
						<td>{{member.firstname}}</td>
						<td>{{member.lastname}}</td>
						<td>{{member.gender}}</td>
						<td>{{member.address}}</td>
					</tr>
				</tbody>
			</table>
			<dir-pagination-controls
				direction-links="true"
				boundary-links="true" >
			</dir-pagination-controls>	
		</div>
	</div>
<script src="js/angular.js"></script>
<script src="js/dirPagination.js"></script>
<script src="js/script.js"></script>
</body>
</html>
