/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider

  .when('#', {
    templateUrl : 'index',
    controller  : 'IndexController'
  })

  .when('/about', {
    templateUrl : 'about',
    controller  : 'AboutController'
  })
  
  .when('/whatwedo', {
    templateUrl : 'whatwedo',
    controller  : 'WhatWeDoController'
  })

  .otherwise({redirectTo: '/'});
});

app.controller('IndexController', function($scope) {
  $scope.message = 'Hello from HomeController';
});

app.controller('AboutController', function($scope) {
  $scope.message = "The Cooper's Stash is Ireland's premier whiskey shop and is based in the heart of Dublin city centre. First opened in June 2003, it has become a mecca for whiskey lovers both in Ireland and abroad. Over the past ten and a half years, we have built strong ties with all the producers of Irish whiskies and regularly offer exclusive whiskies, whiskey launches, tasting evenings and distillery trips.";
});

app.controller('WhatWeDoController', function($scope) {
  $scope.message = "We work diligently with various Irish whiskey distilleries to select the finest Irish whiskies for further ageing. Dealing directly with the cellars of some of the world's top wineries enables us to source our own high quality oak wine casks. Carefully marrying these whiskeys and casks results in some fabulous & unique releases, which we have named 'Celtic Cask'. The whiskey is only released once it has achieved the highest standards, and can be recognised as among the best Irish whiskey available. Celtic Cask's dedication to quality and phenomenal success was rewarded in 2015 when named Non-Scottish Independent Bottler of the Year at the Independent Bottler's Challenge. ";
});
