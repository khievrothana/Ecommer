<!DOCTYPE html>
<html ng-app="app">
<head>
<title>Customer Management</title> 
<!--STYLE CSS--> 
<link rel="stylesheet" href="{{asset('assets/style.css')}}">
@yield('css')
</head>
<body>
<div ng-view>

</div>    
<!--SCRIPT JS-->
<script src="http://code.angularjs.org/1.2.3/angular.js"></script>
<script src="http://code.angularjs.org/1.2.3/angular-route.js"></script>
<script src="{{asset('assets/app.js')}}"></script>
@yield('js')
</body>

</html>